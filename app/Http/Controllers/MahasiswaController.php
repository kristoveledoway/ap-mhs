<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;
use App\Prodi;
use App\Fakultas;
use DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $data['mahasiswa'] = DB::table('mahasiswa')
                            ->join('fakultas', 'fakultas.id_fakultas', '=', 'mahasiswa.fakultas_id')
                            ->get();
      $data['prodi'] = Prodi::all();
      return view('mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['mahasiswa'] = Mahasiswa::all();
      $data['prodi'] = Prodi::all();
      $data['fakultas'] = Fakultas::all();
      return view('mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'nama'          => 'required',
          'npm'           => 'required',
          'fakultas_id'   => 'required',
          'prodi_id'      => 'required',
          'alamat'        => 'required',
          'telp'          => 'required',
        ]);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama        = $request->nama;
        $mahasiswa->npm         = $request->npm;
        $mahasiswa->fakultas_id = $request->fakultas_id;
        $mahasiswa->prodi_id    = $request->prodi_id;
        $mahasiswa->alamat      = $request->alamat;
        $mahasiswa->telp        = $request->telp;
        $mahasiswa->save();

        return redirect('/')->with('message', 'Data mahasiswa telah tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['detail_mahasiswa'] = DB::table('mahasiswa')
                              ->join('fakultas', 'fakultas.id_fakultas', '=', 'mahasiswa.fakultas_id')
                              ->join('prodi', 'prodi.id_prodi', '=', 'mahasiswa.prodi_id')
                              ->where('id', '=', $id)
                              ->get();

        return view('mahasiswa.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['mahasiswa'] = DB::table('mahasiswa')
                            ->join('fakultas', 'fakultas.id_fakultas', '=', 'mahasiswa.fakultas_id')
                            ->join('prodi', 'prodi.id_prodi', '=', 'mahasiswa.prodi_id')
                            ->where('id', '=', $id)
                            ->get();
      $data['fakultas'] = DB::table('fakultas')
                            ->join('mahasiswa', 'mahasiswa.fakultas_id', '=', 'fakultas.id_fakultas')
                            ->get();
      $data['prodi'] = Prodi::all();

      return view('mahasiswa.edit', $data);
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
      $this->validate($request, [
        'nama'          => 'required',
        'npm'           => 'required',
        'fakultas_id'   => 'required',
        'prodi_id'      => 'required',
        'alamat'        => 'required',
        'telp'          => 'required',
      ]);

      $mahasiswa = Mahasiswa::find($id);
      $mahasiswa->nama        = $request->nama;
      $mahasiswa->npm         = $request->npm;
      $mahasiswa->fakultas_id = $request->fakultas_id;
      $mahasiswa->prodi_id    = $request->prodi_id;
      $mahasiswa->alamat      = $request->alamat;
      $mahasiswa->telp        = $request->telp;
      $mahasiswa->save();

      return redirect('/')->with('message', 'Data mahasiswa sudah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/')->with('message', 'Data sudah terhapus!');
    }
}
