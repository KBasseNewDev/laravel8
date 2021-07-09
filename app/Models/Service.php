<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nomService'];
    protected $primaryKey = 'idService';

    public function employes(){
        return $this->belongsToMany(Employe::class);
    }
}
