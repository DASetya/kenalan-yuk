@extends('admin.layout')

@section('scripts')
    <script>
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Pilih Gambar", // Default: Choose File
            label_selected: "Ganti Gambar", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
@stop

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Psikolog</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active">
                        <a href="{{ route('admin.psychologists.index') }}">Psikolog</a>
                    </div>
                    <div class="breadcrumb-item">Tambah Psikolog</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Form Tambah Psikolog</h2>
                <p class="section-lead">Anda dapat mengisi form di bawah ini untuk menambahkan Psikolog baru</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Psikolog</h4>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <span class="font-weight-bold">{{ $errors->first() }}</span>
                                    </div>
                                @endif
                                <form action="{{ route('admin.psychologists.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Tempat</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="name" type="text" class="form-control" required
                                                value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi Detail</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea name="description" class="summernote-simple"
                                                required>{{ old('description') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Embed Gmap</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input name="gmap" type="text" class="form-control" required
                                                value="{{ old('gmap') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="image" id="image-upload" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button class="btn btn-primary" type="submit">Simpan</button>
                                            <a href="{{ route('admin.psychologists.index') }}"
                                                class="ml-3 btn btn-secondary">Batal</a>
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
