<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BidRequest extends Request
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
            'pro_no'=>'required',
            'bid_content' => 'required|min:5|max:5000',            
            'active' => 'required',
            'state' => 'required'
        ];
    }
}
