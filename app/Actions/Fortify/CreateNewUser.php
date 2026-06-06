<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     *
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'username'=>['required', 'string', 'max:255','min:3'],
            //'avatar'=>'nullable|image|mime:png,jpg,jpeg|max:2048',
          //  'country_code'=>'nullable|char|max:2',
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'username'=>$input['username'],
            'email' => $input['email'],
          //  'avatar'=>$input['avatar'],
           // 'country_code'=>$input['country_code'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
