<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        // Пока просто возвращаем success.
        // Потом можно сохранить в БД, отправить в Telegram или на email.
        return back()->with('success', 'Заявка отправлена. Скоро свяжусь с вами.');
    }
}