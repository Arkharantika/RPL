<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lempropKP extends Model
{
    protected $table = 'lempropkp';
    protected $fillable = ['nim_mhs','nama_mhs','yes_pembimbing','yes_koor','yes_kaprodi'];
}
