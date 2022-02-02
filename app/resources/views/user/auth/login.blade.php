@extends('user.layouts.layout')


@section('content')
    <div class="login-box col-md-6 m-auto">
        <div class="login-logo">
            <a href="{{route('home')}}"><b>Laravel </b>Blog</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Для входа в учетную запись, введите следующие данные:</p>

                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 m-auto">
                            <button type="submit" class="btn btn-primary btn-block">Войти</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mb-0">
                    <a href="{{route('register.create')}}" class="text-center">Зарегистрировать новую учетную запись</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection
