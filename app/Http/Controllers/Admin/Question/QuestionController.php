<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Question::orderBy('question', 'asc')->get();
        return view('admin.questions.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');
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
            'question' => ['required'],
            'description' => ['required'],
        ]);

        $question = Question::create($request->all());

        if (!$question) {
            // Gagal simpan
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menyimpan, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.questions.index')->with([
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
     * @param  Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.questions.edit', ['datum' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        // Validasi input user
        $request->validate([
            'question' => ['required'],
            'description' => ['required'],
        ]);

        $update = $question->update($request->all());

        if (!$update) {
            // Gagal simpan
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menyimpan, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.questions.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        if (!$question->delete()) {
            // Gagal menghapus
            return redirect()->back()->withInput()->withErrors([
                'message' => 'Gagal menghapus, silahkan hubungi developer'
            ]);
        }

        return redirect()->route('admin.questions.index')->with([
            'status' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
