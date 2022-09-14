<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminLoginReguest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'field'=>['required', 'string'],
            'password'=>['required'],
        ];
       
    }

    /**
     * @throws ValidationException
     */

    public function authenticate(){
        $admin = Admin::where('email', $this->field)->orWhere('phone', $this->field)->first();

        if (!$admin || !Hash::check($this->password, $admin->password)){
            throw ValidationException::withMessages([
                'field'=>'This data does not match any user'
            ]);
        }
        Auth::guard('admin')->login($admin);
    }
}
