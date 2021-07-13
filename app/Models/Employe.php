<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nomEmploye', 'prenomEmploye', 'dateNaissance', 'telephoneEmploye', 'matriculeEmploye', 'professionEmploye', 'villeEmploye', 'dateEmbauche', 'situationMatrimonialeEmploye', 'emailEmploye'];
    protected $primaryKey = 'id';

    public function banques(){
        return $this->belongsToMany(Banque::class);
    }

    public function groupes(){
        return $this->belongsToMany(Groupe::class);
    }

    public function grades(){
        return $this->belongsToMany(Grade::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class);
    }

    public function salaires() 
    { 
        return $this->hasOne(Salaire::class); 
    }
}
