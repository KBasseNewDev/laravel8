<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nomGrade', 'codeGrade', 'salaireBaseGrade'];
    protected $primaryKey = 'idGrade';

    public function employes(){
        return $this->belongsToMany(Employe::class);
    }

    public function accessoires(){
        return $this->belongsToMany(Accessoire::class);
    }

    public function primes(){
        return $this->belongsToMany(Prime::class);
    }

    public function retenues(){
        return $this->belongsToMany(Retenue::class);
    }
}
