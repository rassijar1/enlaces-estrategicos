<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [

        	'id'=>$this->id,
        	'titulo'=>$this->titulo,
        	'resumen'=>$this->resumen,
        	'introduccion'=>$this->introduccion,
        	'cuerpo'=>$this->cuerpo,
        	'conclusion'=>$this->conclusion,
            'id_post_fk'=>$this->id_post_fk



        ];
    }
}
