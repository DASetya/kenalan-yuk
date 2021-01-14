<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.header')
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        {{-- <div class="login-brand">
                            <img src="../assets/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div> --}}

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Masuk</h4>
                            </div>

                            @if($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <span class="font-weight-bold">{{$errors->first()}}</span>
                                </div>
                            @endif

                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.login') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control" name="username" required autofocus value="{{ old('username') }}">
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            {{-- <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Lupa Password ?
                                                </a>
                                            </div> --}}
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="remember-me" {{ old('remember') ? 'checked':'' }}>
                                            <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Masuk
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('admin.partials.scripts')
</body>

</html>
