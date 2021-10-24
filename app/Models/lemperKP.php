<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lemperKP extends Model
{
    protected $table = 'lemperkp';
    protected $fillable = ['nim_mhs','nama_mhs','yes_pembimbing','yes_koor','yes_kaprodi'];
}
