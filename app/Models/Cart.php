<?php


namespace App;

use illuminate\Database\Eloquent\Model;

class Cart extends Model{
    protected $table='cart';

    public $primarykey='id';

    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}