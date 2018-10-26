<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome','valor','quantidade','descricao','categoria_id');
    public function categoria(){
        return $this->belongsTo('estoque\Categoria');
    }
    //
}
