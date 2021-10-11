<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers2_tabel extends Model
{
    protected $table = 'customers2_tabel';
    public $timestamps = false;

    protected $fillable = ['nama', 'alamat', 'telp', 'username', 'password'];
    use HasFactory;
}
