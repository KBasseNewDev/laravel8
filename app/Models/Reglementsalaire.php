<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reglementsalaire extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idReglementsalaire';

    public function salaires() 
    { 
        return $this->belongsTo(Salaire::class); 
    }
}
