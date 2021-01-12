<?php

namespace App\Http\Controllers\Admin\Psychologist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Psychologist;
use Illuminate\Support\Facades\Storage;

class PsychologistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Psychologist::orderBy('name', 'asc')->paginate(10);
        return view('admin.psychologist.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.psychologist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = [];
        // Validasi input user
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'gmap' => ['required'],
            'image' => ['image', 'max:2048'] // Max 2MB
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $image['image'] = $request->image->store('psychologist');
        }

        $question = Psychologist::create($request->except('image') + $image);

        if (!$question) {
            // Gagal simpan
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menyimpan, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.psychologists.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
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
     * @param  Psychologist $psychologist
     * @return \Illuminate\Http\Response
     */
    public function edit(Psychologist $psychologist)
    {
        return view('admin.psychologist.edit', ['datum' => $psychologist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Psychologist $psychologist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psychologist $psychologist)
    {
        $image = [];
        // Validasi input user
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'gmap' => ['required'],
            'image' => ['image', 'max:2048'] // Max 2MB
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $image['image'] = $request->image->store('psychologist');
            // Hapus gambar yg lama
            if (Storage::exists($psychologist->image)) {
                Storage::delete($psychologist->image);
            }
        }

        $update = $psychologist->update($request->except('image') + $image);

        if (!$update) {
            // Gagal simpan
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menyimpan, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.psychologists.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Psychologist $psychologist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psychologist $psychologist)
    {
        // Hapus gambar yg lama
        if (Storage::exists($psychologist->image)) {
            Storage::delete($psychologist->image);
        }
        
        if (!$psychologist->delete()) {
            // Gagal menghapus
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menghapus, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.psychologists.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
