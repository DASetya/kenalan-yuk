<?php

namespace App\Http\Controllers\Admin\MyStoryCategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MyStoryCategory;

class MyStoryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MyStoryCategory::orderBy('name', 'asc')->get();
        return view('admin.my-story-category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.my-story-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input user
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $question = MyStoryCategory::create($request->all());

        if (!$question) {
            // Gagal simpan
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menyimpan, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.my-story-categories.index')->with([
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
     * @param  MyStoryCategory $MyStoryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MyStoryCategory $MyStoryCategory)
    {
        return view('admin.my-story-category.edit', ['datum' => $MyStoryCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  MyStoryCategory $MyStoryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyStoryCategory $MyStoryCategory)
    {
        // Validasi input user
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        $update = $MyStoryCategory->update($request->all());

        if (!$update) {
            // Gagal simpan
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menyimpan, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.my-story-categories.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MyStoryCategory $MyStoryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyStoryCategory $MyStoryCategory)
    {
        if (!$MyStoryCategory->delete()) {
            // Gagal menghapus
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menghapus, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.my-story-categories.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
