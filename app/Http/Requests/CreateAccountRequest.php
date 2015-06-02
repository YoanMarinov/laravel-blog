<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateAccountRequest extends Request
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
            'email' => 'email|required|unique:users',
            'password' => 'required|min:6',
            'cpassword' => 'required|same:password'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
            'cpassword' => 'Confirm Password'
        ];
    }

}
