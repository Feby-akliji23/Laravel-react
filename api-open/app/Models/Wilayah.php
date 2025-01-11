<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wilayah extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'wilayah';
    protected $guarded = ['id'];

    public function bencana()
    {
        return $this->hasMany(Bencana::class, 'wilayah_id');
    }

}
