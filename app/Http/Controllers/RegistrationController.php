<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function registrationForm()
    {
        return view('registration_create');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'firstname' => 'required|max:50',
                'lastname' => 'required|max:50',
                'phone_number' => ['required', 'regex:#^(0998|0999|0920)-?\d{3}-?\d{3}$#'],
                'telephone_number' => 'required|numeric',
                'birth_date' => 'required|date_format:Y-m-d',
                'address' => 'max:100',
                'email' => 'required|email',
                'website' => 'url',
                'username' => 'required|min:6|max:20',
                'password' => 'required|min:6|max:20',
                'confirm_password' => 'required|min:6|max:20|same:password',
            ], [
                'firstname.required' => 'The first name field is required.',
                'lastname.required' => 'The last name field is required.',
                'phone_number.regex' => 'The mobile phone number must be in the format: 0998-XXX-XXX, 0999-XXX-XXX, or 0920-XXX-XXX.',
                'telephone_number.numeric' => 'The telephone number must be a valid numeric value.',
                'birth_date.date_format' => 'The birth date must be in the format: YYYY-MM-DD.',
                'email.required' => 'The email field is required.',
                'email.email' => 'Please provide a valid email address.',
                'website.url' => 'Please provide a valid URL for the website.',
                'username.required' => 'The username field is required.',
                'username.min' => 'The username must be at least :min characters.',
                'username.max' => 'The username may not be greater than :max characters.',
                'password.required' => 'The password field is required.',
                'password.min' => 'The password must be at least :min characters.',
                'password.max' => 'The password may not be greater than :max characters.',
                'confirm_password.required' => 'The confirm password field is required.',
                'confirm_password.same' => 'The confirm password does not match the password.',
            ]);

            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $username = $request->input('username');
            $sex = $request->input('sex');
            $phone_number = $request->input('phone_number');
            $telephone_number = $request->input('telephone_number');
            $birth_date = $request->input('birth_date');
            $address = $request->input('address');
            $email = $request->input('email');
            $website = $request->input('website');
            $password = $request->input('password');

            DB::insert('insert into information (firstname, lastname, username, sex, mobile_phone, tel_no, birth_date, address, email, website, password) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
                $firstname,
                $lastname,
                $username,
                $sex,
                $phone_number,
                $telephone_number,
                $birth_date,
                $address,
                $email,
                $website,
                $password,
            ]);
        }

        return redirect('/registration_create')->with('success', 'Record inserted successfully.');

    }

    public function personsInfo()
    {
        $persons = DB::select('select * from information');
        return view('persons_info', ['persons' => $persons]);
    }

}
