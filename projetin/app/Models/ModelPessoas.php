<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPessoas extends Model
{
    protected $table = 'pessoas';
    protected $fillable = ['id','nome','nascimento','produto','cidade'];

    public function relCidades(){
        return $this->hasOne('App\Models\ModelCidades','id','cidade');
    }

    public function relProdutos(){
        return $this->hasOne('App\Models\ModelProdutos','id','produto');
    }
}