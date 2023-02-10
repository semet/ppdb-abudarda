<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserCreated;
use App\Http\Controllers\Controller;
use App\Models\EmailVerification;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'no_telepon' => 'required|unique:users,no_telepon',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        if ($user) {
            UserCreated::dispatch($user);
            session()->flash('registerSuccess', 'Registrasi telah berhasil. Kami telah mengirim email verifikasi ke email anda.');
            return redirect()->route('register.success');
        }
    }

    public function handleSuccess()
    {
        // if (session()->get('registerSuccess')) {
        //     return view('register.success');
        // } else {
        //     abort(404);
        // }
        return view('register.success');
    }

    public function verifyEmail($id)
    {
        $verification = EmailVerification::findOrFail($id);

        $verification->user()->update([
            'email_verified_at' => now()
        ]);

        $verification->delete();

        return redirect()->route('ppdb.index');
    }
}
