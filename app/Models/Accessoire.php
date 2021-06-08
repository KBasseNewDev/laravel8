<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessoire extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function grades(){
        return $this->belongsToMany(Grade::class);
    }

    public function salaires(){
        return $this->belongsToMany(Salaire::class);
    }
}
