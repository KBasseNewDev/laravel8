<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idMenu';

    public function groupes(){
        return $this->belongsToMany(Groupe::class);
    }
}
