<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternative extends Model
{
    use HasFactory;
    protected $table = 'alternative';
    protected $fillable = ['nama_supplier']; 
}
