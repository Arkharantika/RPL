<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class notifikasi_kp extends Model
{
    protected $table = 'notifikasi_kp';
    protected $fillable = ['nim_mhs','status_ask_surat_tugas'];
}