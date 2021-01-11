@extends('admin.layout')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Pertanyaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="{{ route('admin.questions.index') }}">Pertanyaan</a>
                    </div>
                    <div class="breadcrumb-item">Edit Pertanyaan</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Form Edit Pertanyaan</h2>
                <p class="section-lead">Anda dapat mengisi form di bawah ini untuk mengedit pertanyaan</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Pertanyaan</h4>
                            </div>
                            <div class="card-body">
                                @if($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <span class="font-weight-bold">{{$errors->first()}}</span>
                                    </div>
                                @endif
                                <form action="{{ route('admin.questions.update', $datum->id) }}" method="post">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pertanyaan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="question" type="text" class="form-control" required value="{{ $datum->question }}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Detail</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea name="description" class="summernote-simple" required>{{ $datum->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <a href="{{ route('admin.questions.index') }}" class="ml-3 btn btn-secondary">Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
