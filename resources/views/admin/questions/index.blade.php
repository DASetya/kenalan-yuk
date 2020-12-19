@extends('admin.layout')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pertanyaan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="{{ route('admin.questions.index') }}">Pertanyaan</a>
                    </div>
                    <div class="breadcrumb-item">List Pertanyaan</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="container d-flex justify-items-stretch">
                        <div class="col">
                            <h2 class="section-title mt-0">Pertanyaan</h2>
                            <p class="section-lead">
                                Halaman untuk mengatur data-data pertanyaan.
                            </p>
                        </div>
                        <div class="col">
                            <a href="{{ route('admin.questions.create') }}" class="btn btn-info float-right">Tambah <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Pertanyaan</h4>
                            </div>
                            <div class="card-body">
                                @if(session()->has('status'))
                                    <div class="alert alert-{{ session()->get('status') }}" role="alert">
                                        <span class="font-weight-bold">{{ session()->get('message') }}</span>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Informasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($questions as $question)
                                                <tr>
                                                    <td class="text-center">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="font-weight-bold">Pertanyaan:</span> {{ $question->question }} <br>
                                                        <span class="font-weight-bold">Deskripsi:</span> {{ $question->description }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.questions.edit', $question->id) }}" class="btn btn-warning">Edit</a>
                                                        <a href="#" class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
