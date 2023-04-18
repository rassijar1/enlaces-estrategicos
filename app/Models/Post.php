<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
 	protected $table = "posts";
    protected $fillable = ['titulo','resumen','introduccion','cuerpo','conclusion','id_post_fk'];

   

    /*protected $fillable=[ 
    	'id_tipomascota_fk',
    	'id_cliente_fk',
    	'nombre'


    ];*/

    public function user(){

    	return $this->belongsTo('App\Models\User', 'id');


    }
}
