@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h1>Добро пожаловать на наш сайт!</h1>
            <p>Мы рады представить вам нашу компанию, которая специализируется на геофизических исследованиях и нефтегазовых технологиях. Наша цель — предоставить высококачественные услуги в области нефтегазовой отрасли с использованием современных технологий и методов.</p>

            @yield('home-content')
        </div>
    </div>
@endsection
