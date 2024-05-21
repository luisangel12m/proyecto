<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Personal;


class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'correo_electronico' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::guard('personal')->attempt($credentials)) {
            // Authentication was successful...
            $user = Auth::guard('personal')->user();
    
            switch ($user->id_rol) {
                case 1:
                    return view('Encargado_LIEE.responsableLIEE');
                    break;
                case 2:
                    return redirect()->route('rol2');
                    break;
                case 3:
                    return redirect()->route('rol3');
                    break;
                case 4:
                    return redirect()->route('rol4');
                    break;
                default:
                    // Redirect to an error page or a default view if the user has an unknown role
                    return redirect()->route('login-error');
                    break;
            }
        } else {
            // Authentication was unsuccessful...
            return back()->withErrors([
                'correo_electronico' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }
    }
}
