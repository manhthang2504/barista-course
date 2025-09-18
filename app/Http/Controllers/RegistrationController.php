<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'phone' => ['required','string','max:30'],
            'major' => ['required','string','max:255'],
            'course' => ['required','string','max:255'],
            'time_preference' => ['required','string','max:50'],
            'email' => ['required','email','max:255'],
            'city' => ['required','string','max:255'],
        ]);

        Registration::create($data);

        return back()->with('success', 'Đăng ký của bạn đã được gửi. Chúng tôi sẽ liên hệ sớm nhất!');
    }
}
