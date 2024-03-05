<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller
{
    public function showVerification(Request $request){
        $id = $request->user()->getKey();
        $hash = sha1($request->user()->getEmailForVerification());

        return view('auth.verify-email', compact('id', 'hash'));
    }

    public function verification(EmailVerificationRequest $request, $id, $hash) {
        $request->fulfill();
     
        return redirect('/inicio');
    }

    public function sendEmail(Request $request){
        $request->user()->sendEmailVerificationEmail();
        
        return back()->with('message', 'Link de verificación enviado!');
    }
}
