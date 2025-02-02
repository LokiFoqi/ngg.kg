@extends('layouts.layout')

@section('content')
    <div class="main-content">
        <div class="container">
            <h1>Добро пожаловать на наш сайт!</h1>
            <p>Мы рады представить вам нашу компанию, которая специализируется на геофизических исследованиях и нефтегазовых технологиях. Наша цель — предоставить высококачественные услуги в области нефтегазовой отрасли с использованием современных технологий и методов.</p>

            <div class="row mb-4">
                <!-- Карточка 1 -->
                <div class="col-12">
                    <div class="card flex-row">
                        <!-- Изображение слева -->
                        <img src="{{ asset('images/services.jpg') }}" class="card-img-left" alt="Our services">
                        <div class="card-body">
                            <h5 class="card-title">Наши услуги</h5>
                            <p class="card-text">Познакомьтесь с нашими услугами в сфере геофизики и нефтегазовых исследований. Мы предлагаем передовые решения и опытных специалистов.</p>
                            <a href="/services" class="btn btn-link">Перейти на страницу</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <!-- Карточка 4 -->
                <div class="col-12">
                    <div class="card flex-row">
                        <!-- Изображение слева -->
                        <img src="{{ asset('images/projects.jpg') }}" class="card-img-left" alt="Our projects">
                        <div class="card-body">
                            <h5 class="card-title">Наши проекты</h5>
                            <p class="card-text">Изучите наши успешные проекты, которые помогли клиентам добиться значительных результатов в нефтегазовой и геофизической отрасли.</p>
                            <a href="/projects" class="btn btn-link">Перейти на страницу</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <!-- Карточка 5 -->
                <div class="col-12">
                    <div class="card flex-row">
                        <!-- Изображение слева -->
                        <img src="{{ asset('images/team.jpg') }}" class="card-img-left" alt="Our team">
                        <div class="card-body">
                            <h5 class="card-title">Наша команда</h5>
                            <p class="card-text">Наши специалисты обладают богатым опытом и высокими профессиональными навыками, что позволяет нам достигать отличных результатов.</p>
                            <a href="/team" class="btn btn-link">Перейти на страницу</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
