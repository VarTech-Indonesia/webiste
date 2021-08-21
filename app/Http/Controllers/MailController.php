<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function forgetPassword()
    {
        $data = [
            'title' => 'Forget Password | VarTech Indonesia'
        ];
        return view('admin.mail.forget_password', $data);
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $rules = [
            'email'             => 'required|email|exists:users',
        ];
        $messages = [
            'email.required'    => 'Email wajib diisi',
            'email.email'       => 'Email tidak valid',
            'email.exists'      => 'Email tidak terdaftar'
        ];
        $validator  = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $token      = Str::random(64);

        DB::table('password_resets')->insert([
            'email'         => $request->email,
            'token'         => $token,
            'created_at'    => Carbon::now()
        ]);

        Mail::send('admin.mail.form_email_forget_password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
    }
    public function showResetPasswordForm($token)
    {
        $data = [
            'title' => 'Reset Password | VarTech Indonesia'
        ];
        return view('admin.mail.reset_password', ['token' => $token], $data);
    }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email'                 => 'required|email|exists:users',
            'password'              => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/admin/login')->with('success', 'Your password has been changed!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
