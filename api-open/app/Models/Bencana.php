<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bencana extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bencana';
    protected $guarded = ['id'];

    /**
     * Relasi ke model Wilayah.
     */
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id');
    }

}
