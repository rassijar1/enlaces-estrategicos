<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'titulo'=>['required','min:3','max:20'],
             'resumen'=>['required', Rule::unique('posts')->ignore($this->post)],
             'introduccion'=>['required', Rule::unique('posts')->ignore($this->post)],
             'cuerpo'=>['required', Rule::unique('posts')->ignore($this->post)],
             'conclusion'=>['required', Rule::unique('posts')->ignore($this->post)],
             'id_post_fk'=>['required','min:1','max:20']
             // 'resumen'=>['required','unique:posts,resumen'],
            //  'introduccion'=>['required','unique:posts,introduccion'],
            //  'cuerpo'=>['required','unique:posts,cuerpo'],
            //  'conclusion'=>['required','unique:posts,conclusion']


        ];
    }
}
