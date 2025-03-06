<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
        <!-- Логотип -->
        <a class="navbar-brand fw-bold text-uppercase" href="{{ route('home') }}">ОсОО "Нефтегазгеофизика"</a>

        <!-- Кнопка для мобильного меню -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Меню -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Главная</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="/products">Продукты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">О нас</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="user-name" href="">{{ auth()->user()->name }}</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
