<?php

namespace Tests\Feature;

use App\Models\Bencana;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BencanaControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        // Buat pengguna untuk autentikasi
        $this->user = User::factory()->create();

        // Buat data wilayah untuk test
        $this->wilayah = Wilayah::factory()->create();
    }

    public function test_fetches_list_of_bencana()
    {
        // Buat beberapa data bencana
        Bencana::factory()->count(5)->create([
            'wilayah_id' => $this->wilayah->id,
        ]);

        $response = $this->actingAs($this->user)->getJson('/api/bencana');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'code',
                     'message',
                     'data' => [
                         'data' => [
                             '*' => [
                                 'id',
                                 'wilayah_id',
                                 'kejadian',
                                 'detail',
                                 'tanggal',
                             ],
                         ],
                     ],
                 ]);
    }

    public function test_creates_a_new_bencana()
    {
        $data = [
            'wilayah_id' => $this->wilayah->id,
            'kib'        => 12345678,
            'kejadian'   => 'Tanah Longsor',
            'detail'     => 'Detail bencana tanah longsor.',
            'tanggal'    => '2023-12-01',
        ];

        $response = $this->actingAs($this->user)->postJson('/api/bencana', $data);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'code',
                     'message',
                     'data' => [
                         'id',
                         'wilayah_id',
                         'kejadian',
                         'detail',
                         'tanggal',
                     ],
                 ]);

        $this->assertDatabaseHas('bencana', [
            'kejadian' => 'Tanah Longsor',
        ]);
    }

    public function test_updates_a_bencana()
    {
        $bencana = Bencana::factory()->create([
            'wilayah_id' => $this->wilayah->id,
        ]);

        $data = [
            'kejadian' => 'Updated Kejadian',
            'tanggal'  => now()->format('Y-m-d'), // Tambahkan tanggal
        ];

        $response = $this->actingAs($this->user)->putJson("/api/bencana/{$bencana->id}", $data);

        $response->assertStatus(200)
                ->assertJson([
                    'code' => 200,
                    'message' => 'Bencana updated successfully',
                ]);

        $this->assertDatabaseHas('bencana', [
            'id'       => $bencana->id,
            'kejadian' => 'Updated Kejadian',
        ]);
    }


    public function test_deletes_a_bencana()
    {
        $bencana = Bencana::factory()->create([
            'wilayah_id' => $this->wilayah->id,
        ]);

        $response = $this->actingAs($this->user)->deleteJson("/api/bencana/{$bencana->id}");

        $response->assertStatus(200)
            ->assertJson([
                'code' => 200,
                'message' => 'Bencana deleted successfully',
            ]);

        $this->assertSoftDeleted('bencana', [
            'id' => $bencana->id,
        ]);
    }

}
