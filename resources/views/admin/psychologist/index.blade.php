@extends('admin.layout')

@section('scripts')
    <script src="{{ asset('stisla/js/page/modules-datatables.js') }}"></script>
@stop

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Psikolog</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="{{ route('admin.psychologists.index') }}">Psikolog</a>
                    </div>
                    <div class="breadcrumb-item">List Psikolog</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="container d-flex justify-items-stretch">
                        <div class="col">
                            <h2 class="section-title mt-0">Psikolog</h2>
                            <p class="section-lead">
                                Halaman untuk mengatur data-data Psikolog.
                            </p>
                        </div>
                        <div class="col">
                            <a href="{{ route('admin.psychologists.create') }}" class="btn btn-info float-right">Tambah <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Psikolog</h4>
                            </div>
                            <div class="card-body">
                                @if(session()->has('status'))
                                    <div class="alert alert-{{ session()->get('status') }}" role="alert">
                                        <span class="font-weight-bold">{{ session()->get('message') }}</span>
                                    </div>
                                @endif
                                <div class="container table-responsive">
                                    <table class="table table-striped" id="table-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th class="text-center">Foto</th>
                                                <th>Informasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $key => $datum)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $key+1 }}
                                                    </td>
                                                    <td class="text-center">
                                                        <img src="{{ $datum->ImagePath }}" class="img-thumbnail img-square">
                                                    </td>
                                                    <td>
                                                        <span class="font-weight-bold">Psikolog:</span> {{ $datum->name }} <br>
                                                        <span class="font-weight-bold">Deskripsi:</span> {{ strip_tags($datum->description) }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.psychologists.edit', $datum->id) }}" class="btn btn-warning mr-2">Edit <i class="fas fa-edit"></i></a>
                                                        <form class="d-inline" action="{{ route('admin.psychologists.destroy', $datum->id) }}" method="post">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button class="btn btn-danger" type="submit">Hapus <i class="fas fa-times"></i></button>
                                                        </form>
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
