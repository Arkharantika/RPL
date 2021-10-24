<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemporarySemKP extends Model
{
    protected $table = 'temporary_semkp';
    protected $fillable = ['nim_mhs','nama_mhs','nim_penseminar'];
}