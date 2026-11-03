<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|min:5|max:3000',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'message.required' => 'Pesan tidak boleh kosong.',
            'message.min' => 'Pesan minimal terdiri dari 5 karakter.',
        ]);

        Contact::create($validated);

        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Terima kasih, pesan Anda telah berhasil dikirim! Vanesa akan segera merespons melalui email.');
    }
}
