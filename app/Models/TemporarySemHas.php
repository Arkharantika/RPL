<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemporarySemHas extends Model
{
    protected $table = 'temporary_semhas';
    protected $fillable = ['nim_mhs','nama_mhs','nim_penseminar'];
}