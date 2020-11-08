<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganController extends Controller
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

        return view('lowongan/index', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = [
            'it' => 'IT',
            'marketing' => 'Marketing'
        ];

        $keahlian = [
            'FE' => 'Frontend Engineer',
            'BE' => 'Backend Engineer',
            'QA' => 'QA Engineer',
        ];

        $data = [
            'kategori' => $kategori,
            'keahlian' => $keahlian
        ];

        return view('lowongan/create', compact('data'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
