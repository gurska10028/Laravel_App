<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerStrony
{
    // Strona główna
    public function home() {
        return view('home');
    }

    // Strona "O mnie"
    public function about() {
        return view('about');
    }

    // Strona galerii
    public function gallery() {
        return view('gallery');
    }

    // Widok formularza kontaktowego
    public function contact() {
        return view('contact');
    }

    public function formresult() {
        return view('formresult');
    }

    public function handleForm(Request $request) {
        // Walidacja danych z formularza
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
    
        // Zapisanie danych w sesji
        session(['formData' => $validatedData]);
    
        // Przekierowanie na stronę z wynikami
        return redirect()->route('formresult');
    }

    public function clearFormData() {
        // Usuwanie danych z sesji
        session()->forget('formData');
        return redirect()->route('formresult');
    }
    
    
    

    /*
    public function submitForm(Request $request) {
        // Walidacja danych z formularza
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Przekierowanie na stronę z danymi formularza i zapisanie danych w sesji
        return redirect()->route('formData')->with('formData', $validatedData);
    }

    // Funkcja wyświetlająca dane z formularza
    public function showFormData() {
        // Pobranie danych z sesji
        $formData = session('formData', []);

        // Przekazanie danych do widoku
        return view('form', ['formData' => $formData]);
    }
        */
}
