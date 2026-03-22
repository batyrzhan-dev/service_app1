<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DentalLandingController extends Controller
{
    public function index()
    {
        return view('dental');
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        return back()->with('success', 'Заявка отправлена. Скоро мы с вами свяжемся.');
    }
}