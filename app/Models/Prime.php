<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nomPrime', 'montantPrime'];
    protected $primaryKey = 'idPrime';

    public function grades(){
        return $this->belongsToMany(Grade::class);
    }

    public function salaires(){
        return $this->belongsToMany(Salaire::class);
    }
}
