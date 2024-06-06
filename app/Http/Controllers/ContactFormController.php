<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact\ContactAdminMail;
use App\Mail\Contact\ContactUserMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    function sendMail(ContactRequest $request) {
        $validated = $request->validated();

        // これ以降の行は入力エラーがなかった場合のみ実行されます
        Mail::to('admin@example.com')->send(new ContactAdminMail($validated));
        Mail::to($validated['email'])->send(new ContactUserMail($validated));

        return to_route('contact.thanks');
    }

    public function thanks()
    {
        return view('contact.thanks');
    }
}
