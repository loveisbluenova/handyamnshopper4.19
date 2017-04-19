<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ItemRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'title' => 'required|min:5|max:255',
            
            'description' => 'required',
            //'uploadfile' => 'required',
            'skill' => 'required',
            'locationtype'=>'required',
            'projectaddress' => 'required',
            'duration'=>'required',
            'budget' => 'required|max:10',
            'state' => 'required'
        ];
    }
}
