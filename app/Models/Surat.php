<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nomor_surat', 'tanggal_surat', 'perihal', 'tujuan' ];
}
