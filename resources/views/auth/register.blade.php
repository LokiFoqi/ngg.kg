@extends('layouts.layout')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Регистрация</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input id="name" type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif"
                           value="{{ old('name') }}" required autofocus>
                    @if($errors->has('name'))
                    @endif
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif"
                           value="{{ old('email') }}" required>
                    @if($errors->has('email'))
                    @endif
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input id="password" type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" required>
                    @if($errors->has('password'))
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Подтвердите пароль</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif" required>
                    @if($errors->has('password_confirmation'))
                        <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>

                <div class="d-grid gap-2 mb-3">
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <a class="text-decoration-none" href="{{ route('login') }}">Уже зарегистрированы?</a>
                </div>

            </form>
        </div>
    </div>
@endsection
