<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCidades extends Model
{
    protected $table = 'cidades';
    protected $fillable = ['id','nome','estado'];

    public function relEstados(){
        return $this->hasOne('App\Models\ModelEstados','id','estado');
    }

    public function relPessoas(){
        return $this->hasMany('App\Models\ModelPessoas','cidade');
    }
}