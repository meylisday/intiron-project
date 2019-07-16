<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendMail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'body' => 'required',
            'document' => 'max:10240|mimes:jpeg,bmp,png,gif,zip,rar,pdf,psd,ai,cdr,rtf,doc,docx,xls,xlsx,ppt'
        ]);

            $document = $request->file('document');
            Mail::send('email', request()->all(), function ($message) {
                $message->subject(Str::words(request()->get('body'), 80));
                $message->from(request()->get('email'), 'intiron.by');
                $message->to(env('MAIL_TO'));
                $message->replyTo(request()->get('email'));
                $message->setBody(request()->get('body'), 'text/html');
                if(request()->file('document')) {
                    $message->attach(request()->file('document')->getRealPath(),
                        [
                            'as' => request()->file('document')->getClientOriginalName(),
                            'mime' => request()->file('document')->getClientMimeType(),
                        ]);
                }
            });
        return back()->with('success', 'Спасибо, что связались с нами!');
    }
}
