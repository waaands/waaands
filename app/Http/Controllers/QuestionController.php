<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama'       => 'required|min:5|max:10',
            'email'      => ['required', 'email'],
            'pertanyaan' => 'required|max:300|min:10',
        ], [
            'nama.required'       => 'Nama tidak boleh kosong',
            'nama.min'            => 'Nama minimal 5 karakter',
            'nama.max'            => 'Nama maksimal 10 karakter',
            'email.required'      => 'Email tidak boleh kosong',
            'email.email'         => 'Email tidak valid',
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
            'pertanyaan.min'      => 'Pertanyaan minimal 10 karakter',
            'pertanyaan.max'      => 'Pertanyaan maksimal 300 karakter',
        ]);

        $nama       = $request->nama;
        $email      = $request->email;
        $pertanyaan = $request->pertanyaan;

        return view('home-question-respon', compact(
            'nama',
            'email',
            'pertanyaan'
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
