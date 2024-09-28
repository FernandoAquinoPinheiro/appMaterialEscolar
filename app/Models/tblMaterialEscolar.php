<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblMaterialEscolar extends Model
{
    use HasFactory;
    protected $primaryKey = 'idMaterial';
    protected $fillable = [
        'nomeMaterial',
        'categoriaMaterial',
        'dataCompraMaterial',
        'precoMaterial'
    ];
    

}
