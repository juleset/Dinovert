<?php

namespace App\Http\Controllers;

use App\Mail\EmailDemo;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $email = 'dinovertcda@gmail.com';

         $mailData = [
             'title' => 'Demo Email',
         ];

         Mail::to($email)->send(new EmailDemo($mailData));

         return response()->json(['message' => 'L\'email a bien été envoyé'], Response::HTTP_OK );
    }
}
