<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaire extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['periodeSalaire', 'baseSalaire', 'tauxSalaire', 'heureSup', 'gainSalaire', 'retenueSalaire', 'chargeSalaire', 'salaireBrute', 'netImposable', 'avantageNature', 'netPayer'];

    protected $primaryKey = 'idSalaire';

    public function accessoires(){
        return $this->belongsToMany(Accessoire::class);
    }

    public function primes(){
        return $this->belongsToMany(Prime::class);
    }

    public function retenues(){
        return $this->belongsToMany(Retenue::class);
    }

    public function employes() 
    { 
        return $this->belongsTo(Employe::class); 
    }
    public function reglementsalaires() 
    { 
        return $this->hasMany(Reglementsalaire::class); 
    }
}
