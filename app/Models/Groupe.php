<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nomGroupe', 'montantBruteGroupe'];
    protected $primaryKey = 'idGroupe';

    public function employes(){
        return $this->belongsToMany(Employe::class);
    }

    public function menus(){
        return $this->belongsToMany(Menu::class);
    }
}
