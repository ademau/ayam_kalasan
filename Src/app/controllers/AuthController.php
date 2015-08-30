<?php

class AuthController extends BaseController {

    public function showLogin()
    {
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('')->with('success', 'You are already logged in');
        }

        // Show the login page
        return View::make('Login');
    }

    public function postLogin()
    {

// validate the info, create rules for the inputs
        $rules = array(
            'username'    => 'required', 
            'password' => 'required|min:3' 
        );
      //  $User = User::find(1);
      //  $User->password= Hash::make('solusi2014');
      //  $User->username= 'admin';
      //  $User->save();
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password')
            );


            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                 return Redirect::to('Admin');

            } else {        

                // validation not successful, send back to form 
                return Redirect::to('login');

            }

        }

    }
    public function getLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('login'); // redirect the user to the login screen
    }
    public function postUserPasswordChange(){
        $validator = Validator::make(Input::all(), array(
                                                    'password'  =>'required',
                                                    'new_password'=> 'required|min:6'));
        if($validator->passes()){

            $user = User::findOrFail(Auth::user()->id);
            if (Hash::check(Input::get('password'),$user->getAuthPassword()))
            {
                $user->password = Hash::make(Input::get('new_password'));
                $user->save();        
                return Redirect::to('Admin/change-password');        
            }
            else
            {
                return Redirect::to('Admin/change-password')->with('message', 'Password Tidak Cocok<br>')->withErrors($validator)->withInput();
            }
        }else {
            return Redirect::to('Admin/change-password')->with('message', 'Terjadi Kesalahan<br>')->withErrors($validator)->withInput();
        }
    }
}