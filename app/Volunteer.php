<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = ['name', 'phone', 'email'];
    
    public function institution()
    {
        return $this->belongsTo('App\Institution');
    }
    
    public function causes()
    {
        return $this->belongsToMany('App\Cause');
    }
    
    // Eloquent Accessor
    // Cria uma nova propriedade dinamica
    // Convenção: get + CampoEmCamelCase + Attribute
    // Será convertido em $this->campo_em_camel_case
    public function getCausesListAttribute()
    {
        return $this->causes->lists('id')->toArray();
    }
}
