@php
    $links = config('navlink');
@endphp

<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/dc-logo.png') }}" height="80" alt="DC Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($links as $link)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>