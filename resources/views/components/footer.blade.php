<footer class="py-4">
    <div class="container">
        <div class="row">
            <!-- Левая часть (меню) -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-secondary text-decoration-none">О компании</a></li>
                            <li><a href="#" class="text-secondary text-decoration-none">Услуги</a></li>
                            <li><a href="#" class="text-secondary text-decoration-none">Контакты</a></li>
                        </ul>
                    </div>

                    <div class="col-md-6 text-center text-md-start">
                        <ul class="list-unstyled">
                            @guest
                                <li><a href="{{ route('login') }}" class="text-secondary text-decoration-none">Вход</a></li>
                                <li><a href="{{ route('register') }}" class="text-secondary text-decoration-none">Регистрация</a></li>
                            @endguest

                            @auth
                                <li><a href="{{ route('home') }}" class="text-secondary text-decoration-none me-3">Личный кабинет</a></li>

                                <li>
                                    <a href="/logout" class="text-secondary text-decoration-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Правая часть (название компании) -->
            <div class="col-md-6 text-center text-md-end">
                <p class="text-secondary">© 2025 ОсОО "Нефтегазгеофизика"</p>
            </div>
        </div>
    </div>
</footer>
