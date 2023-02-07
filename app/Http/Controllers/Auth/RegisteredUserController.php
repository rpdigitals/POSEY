<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller {
    /**
    * Display the registration view.
    *
    * @return \Illuminate\View\View
    */

    public function create() {
        return view( 'auth.register' );
    }

    /**
    * Handle an incoming registration request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
    *
    * @throws \Illuminate\Validation\ValidationException
    */

    public function store( Request $request ) {
        $request->validate( [
            'name' => [ 'required', 'string', 'max:255' ],
            //'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            //'password' => [ 'required', Rules\Password::defaults() ],
        ]);
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        if(!User::where(['email'=>$request->email])->first()){
            $user = User::create( [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make( $request->password ),
            ] );
            $user->attachRole( $request->role );
            event( new Registered( $user ) );
    
            Auth::login( $user );
    
            return redirect(RouteServiceProvider::HOME );
        }else{
            $user = User::where(['email'=>$request->email])->first();
            if (Hash::check($request->password, $user->password)) {
                Auth::login( $user );
                return redirect()->intended( RouteServiceProvider::HOMEUSER );
            }else{
                return redirect()->back()->with('flash_message_error', 'Le mot de passe est invalide. Veuillez réessayer à nouveau');
            }
           
        }

        
    }
}
