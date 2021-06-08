<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function employes(){
        return $this->belongsToMany(Employe::class);
    }

    public function menus(){
        return $this->belongsToMany(Menu::class);
    }
}
