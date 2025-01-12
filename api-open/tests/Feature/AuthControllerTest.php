<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Buat pengguna untuk login test
        $this->user = User::factory()->create([
            'name' => 'Existing User',
            'email' => 'existinguser@example.com',
            'password' => bcrypt('password123'), // Pastikan password bcrypt
        ]);
    }

    public function test_registers_a_user_successfully()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
        ]);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'code',
                     'message',
                     'data' => [
                         'id',
                         'name',
                         'email',
                     ],
                 ]);

        // Verifikasi pengguna benar-benar disimpan di database
        $this->assertDatabaseHas('users', [
            'email' => 'johndoe@example.com',
        ]);
    }

    public function test_fails_to_register_user_with_invalid_data()
    {
        $response = $this->postJson('/api/register', [
            'name' => '',
            'email' => 'invalid-email',
            'password' => 'short',
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['name', 'email', 'password']);
    }

    public function test_fails_to_register_user_with_existing_email()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'New User',
            'email' => $this->user->email, // Email yang sudah ada
            'password' => 'password123',
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['email']);
    }

    public function test_logs_in_a_user_successfully()
    {
        $response = $this->postJson('/api/login', [
            'email' => $this->user->email,
            'password' => 'password123',
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'code',
                     'message',
                     'data' => [
                         'user' => [
                             'id',
                             'name',
                             'email',
                         ],
                         'token',
                     ],
                 ]);

        // Pastikan token ada di dalam respons
        $this->assertArrayHasKey('token', $response->json('data'));
    }

    public function test_fails_to_log_in_with_invalid_credentials()
    {
        $response = $this->postJson('/api/login', [
            'email' => 'invaliduser@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['email']);
    }

    public function test_logs_out_a_user_successfully()
    {
        // Dapatkan token setelah login
        $token = $this->postJson('/api/login', [
            'email' => $this->user->email,
            'password' => 'password123',
        ])->json('data.token');

        // Logout dengan token
        $response = $this->withHeaders([
            'Authorization' => "Bearer $token",
        ])->postJson('/api/logout');

        $response->assertStatus(200)
                 ->assertJson([
                     'code' => 200,
                     'message' => 'Logout successful',
                 ]);
    }

    public function test_fails_to_log_out_without_a_token()
    {
        // Logout tanpa token
        $response = $this->postJson('/api/logout');

        $response->assertStatus(401)
                 ->assertJson([
                     'message' => 'Unauthenticated.',
                 ]);
    }
}
