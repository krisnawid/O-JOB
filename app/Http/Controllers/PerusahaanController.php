<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaan = [
            ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
            ['judul' => 'Backend Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
            ['judul' => 'QA Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur'],
            ['judul' => 'DevOps Engineer', 'perusahaan' => 'PT. Indofood', 'alamat' => 'Pasuruan, Jawa Timur']
        ];

        return view('perusahaan/index', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perusahaan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lamaran($id)
    {
        $pelamar = [
            ['nama' => 'John Doe'],
            ['nama' => 'Jane Doe'],
            ['nama' => 'Jan Da'],
        ];

        return view('perusahaan/lamaran/index', compact('pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('perusahaan/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
