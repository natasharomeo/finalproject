<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTrainingRequest extends FormRequest
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
            'Name' => 'required',
            'Location' => 'required',
            'Distance' => 'required',
            'Ride Leader' => 'required',
            'Date' => 'required'|'date_format:d/m/Y|after:tomorrow'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter post title.',
            'name.unique' => 'The post has already been taken.',
            'location.required' => 'Please enter training location.'
            'distance.required' => 'Please enter training distance.'
            'rideleader.required' => 'Please enter ride leader.'
            'date.required' => 'Please enter date.'
        ];
    }
}
