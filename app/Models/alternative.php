<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alternative extends Model
{
    use HasFactory;
    protected $table = 'alternative'; 
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_supplier',
        'C1',
        'C2',
        'C3',
        'C4',
        'C5',
        'kriteria_id'
    ];

    public function kriteria(){
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }   

}
