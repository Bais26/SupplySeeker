<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('your_test_mail@gmail.com')->send(new TestMail([
            'title' => 'Verifikasi SupplySeeker',
            'body' => 'Silahkan Verifikasi untuk bisa terdaftar di platform kami',
        ]));
    }
}