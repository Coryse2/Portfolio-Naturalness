<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utils\UserSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{

    // = signup in GET
    public function signup()
    {
        return view('user.signup');
    }

 // = signup in POST
    public function signupPostAction(Request $request)
    {
        // init the errors array
        $errorList = [];

        // get the form data
        $username = trim($request->input('username', ''));
        $email = trim($request->input('email', ''));
        $password = trim($request->input('password', ''));
        $passwordConfirm = trim($request->input('password_confirm', ''));

        // Test var 
        if (empty($username)) {

            $errorList[] = 'Nom vide';
        }

        if (empty($email)) {

            $errorList[] = 'Email vide';

        // http://php.net/manual/fr/function.filter-var.php
        } else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

            $errorList[] = 'Email incorrect';
        }

        if (empty($password)) {

            $errorList[] = 'Mot de passe vide';
        }

        if (strlen($password) < 8) {

            $errorList[] = 'Le mot de passe doit faire au moins 8 caractères';
        }

        if (empty($passwordConfirm)) {

            $errorList[] = 'Confirmation de mot de passe vide';
        }

        if ($password != $passwordConfirm) {

            $errorList[] = 'Les 2 mots de passe sont différents';
        }

        // if errorList is empty
        if (empty($errorList)) {

            // validate data, verify if an account already exists

            /*
                I ask Eloquent to find in database
                user where "email" = $email.
                Eloquent, return a Collection.
                So I ask to Collection to return the FIRST result.
                If there is a result, i'll have an object User.
                else i'll have a NULL.
            */
            $user = User::where('email', '=', $email)->first();

            if ($user) {

                $errorList[] = 'Un compte avec cet email existe déjà';

            } else {

                // Encode via bcrypt (default) : http://php.net/manual/fr/function.password-hash.php
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // New instance of User class
                $newUser = new User();
                $newUser->username = $username;
                $newUser->email = $email;
                $newUser->password = $hashedPassword;
                // update or insert 
                $newUser->save();

                // Redirect login
                return redirect()->route('signin');
            }
        }

        return view('user/signup', [
            'errorList' => $errorList,
            'values' => [
                'username' => $username,
                'email' => $email
                // never ever show the password
            ]
        ]);
    }

    /**
     * Logout
     */
    public function disconnect()
    {
        UserSession::disconnect();

        return redirect()->route('home');
    }

    /**
     * View the account
     */
    public function accountAction()
    {
        if (!UserSession::isConnected()) {

            return redirect()->route('home');
        } 
        return view('user/account', [
            'user' => UserSession::getUser()
        ]);
    }

    // Connect to user account
    public function signinAction()
    {
        return view('user/signin');
    }

    public function signinPostAction(Request $request)
    {
        $errorList = [];

        $email = trim($request->input('email', ''));
        $password = trim($request->input('password', ''));

        if (empty($email)) {
            $errorList[] = 'Email vide';

        } else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $errorList[] = 'Email incorrect';
        }

        if (empty($password)) {
            $errorList[] = 'Mot de passe vide';
        }

        if (strlen($password) < 8) {
            $errorList[] = 'Le mot de passe doit faire au moins 8 caractères';
        }

        if (empty($errorList)) {
            // Test si le compte existe
            $user = User::where('email', $email)->first();

            // If I have a user
            if ($user) {
                // https://www.php.net/manual/fr/function.password-verify.php
                /*
                     php password_verify takes 2 arguments
                    1st: password to vérify (written by the user)
                    2nd: hashed password saved in database

                    1st password will be hashed and compared with the 2nd 

                    If they match, it's the good password
                    If they're different, password is not correct
                */
                if (password_verify($password, $user->password)) {

                    // I connect my user with method "connect" of my object  UserSession
                    UserSession::connect($user);

                    return redirect()->route('home');

                } else {
                    $errorList[] = 'L\'identifiant et/ou mot de passe incorrect';
                }
            } else {

                $errorList[] = 'L\'identifiant et/ou mot de passe incorrect';
            }
        }

        return view('user/signin', [
            'errorList' => $errorList,
            'values' => [
                'email' => $email
            ]
        ]);
    }

}
