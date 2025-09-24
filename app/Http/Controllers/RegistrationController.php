<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::latest()->paginate(15);
        return view('registrations.index', compact('registrations'));
    }

    public function create()
    {
        return view('registrations.create');
    }

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

        return redirect()->route('registrations.result')
            ->with('success', 'Đăng ký của bạn đã được gửi. Chúng tôi sẽ liên hệ sớm nhất!');
    }

    public function result()
    {
        // Dedicated result page (thank you / confirmation)
        return view('registrations.result');
    }
}
