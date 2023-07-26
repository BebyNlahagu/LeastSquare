<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{

    public $table = "penjualans";
    protected $fillable = ['periode','gs','vitra','incoe','rca'];
}
