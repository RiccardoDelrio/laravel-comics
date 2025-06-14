@php
    $links = config('navlink');
@endphp

<header>
            <div class="navbar">
                <div class="left">
                    <div class="logo">
                        <img src="./img/dc-logo.png" alt="" />
                    </div>
                </div>
                <div class="right">
                    <ul>
                        @foreach ($links as $link)
                            <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </header>