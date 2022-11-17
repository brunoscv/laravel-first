<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Exception;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return Response
     */
    public function showLinkRequestForm()
    {
        return view('public.auth.new_passwords');
    }

    public function sendResetLinkEmail(Request $request, UserService $userService)
    {

        try {

            $user = $userService->validateLoginByCpfOrEmail(request("email"));
            $userService->sendTokenRecoveryPasswordCode($user, false);

            return redirect()->route('front.showLoginForm')->with([
                'message' => 'Enviamos um link de redefinição de senha para seu email, não esqueça de verificar sua caixa de spam.',
                'messageType' => 's',
            ]);

        } catch (Exception $e) {

            return redirect()->route('front.showLinkRequestForm')->with(
                ['message' => $e->getMessage(),
                    'messageType' => 'e']);

        }


    }

}
