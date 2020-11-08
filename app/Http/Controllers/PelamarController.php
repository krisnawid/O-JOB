<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['keahlian'] = [
            'PHP',
            'HTML',
            'CSS'
        ];

        $data['portofolio'] = [
            ['judul' => 'Judul', 'web' => 'haloiniurlwebsaya.com', 'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis explicabo quia quibusdam incidunt deserunt fuga molestiae, dolorem quis tempore neque, temporibus dolorum dolore, tempora beatae at atque sapiente illum delectus!'],
            ['judul' => 'Judul', 'web' => 'haloiniurlwebsaya.com', 'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis explicabo quia quibusdam incidunt deserunt fuga molestiae, dolorem quis tempore neque, temporibus dolorum dolore, tempora beatae at atque sapiente illum delectus!'],
            ['judul' => 'Judul', 'web' => 'haloiniurlwebsaya.com', 'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis explicabo quia quibusdam incidunt deserunt fuga molestiae, dolorem quis tempore neque, temporibus dolorum dolore, tempora beatae at atque sapiente illum delectus!'],
        ];

        return view('pelamar/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelamar/create');
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
        $lamaran = [
            ['judul' => 'Frontend Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Diterima'],
            ['judul' => 'Backend Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Ditolak'],
            ['judul' => 'QA Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Pending'],
            ['judul' => 'DevOps Engineer', 'perusahaan' => 'PT. Indofood', 'status' => 'Pending']
        ];
        return view('pelamar/lamaran/index', compact('lamaran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pelamar/edit');
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
