<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEstados extends Model
{
    protected $table = 'estados';
    protected $fillable = ['id','nome','sigla'];

    public function relCidades(){
        return $this->hasMany('App\Models\ModelCidades','estado');
    }

    public function relPessoas(){
        return $this->hasMany('App\Models\ModelPessoas','estado');
    }
}