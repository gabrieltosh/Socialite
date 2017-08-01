<?php

namespace SoftBytes\Http\Controllers;

use Illuminate\Http\Request;
use SoftBytes\User;
class GuessController extends Controller
{
    public function verify($code)
	{
	    $user = User::where('confirmation_code', $code)->first();

	    if (! $user)
	        return redirect('/');

	    $user->confirmed = true;
	    $user->confirmation_code = null;
	    $user->save();

	    return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
	}
}
