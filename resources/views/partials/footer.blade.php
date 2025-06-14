
@php
    $links = config('footer.dc_footer');
    $links_shop = config('footer.shop_footer');
    $links_privacy = config('footer.dc_comics');
    $links_sites = config('footer.sites');
@endphp


<footer class="bg-dark text-white">
    <div class="container position-relative py-5">
        <img class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 1;" src="{{ asset('images/dc-logo-bg.png') }}" alt="DC Logo Background" />
        <div class="row position-relative" style="z-index: 2;">
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">DC COMICS</h5>
                <ul class="list-unstyled mb-4">
                    @foreach ($links as $link)
                        <li class="mb-2"><a href="{{ $link['url'] }}" class="text-secondary text-decoration-none">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
                <h5 class="fw-bold mb-3">SHOP</h5>
                <ul class="list-unstyled">
                    @foreach ($links_shop as $link)
                        <li class="mb-2"><a href="{{ $link['url'] }}" class="text-secondary text-decoration-none">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">DC</h5>
                <ul class="list-unstyled">
                    @foreach ($links_privacy as $link)
                        <li class="mb-2"><a href="{{ $link['url'] }}" class="text-secondary text-decoration-none">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="fw-bold mb-3">SITES</h5>
                <ul class="list-unstyled">
                    @foreach ($links_sites as $link)
                        <li class="mb-2"><a href="{{ $link['url'] }}" class="text-secondary text-decoration-none">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-secondary-dark py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="#" class="btn btn-outline-primary text-white">SIGN-UP NOW!</a>
                </div>
                <div class="col-md-6 text-end">                    <span class="text-primary me-3">FOLLOW US</span>
                    <a href="#" class="ms-3"><img src="{{ asset('images/footer-facebook.png') }}" alt="Facebook" /></a>
                    <a href="#" class="ms-3"><img src="{{ asset('images/footer-twitter.png') }}" alt="Twitter" /></a>
                    <a href="#" class="ms-3"><img src="{{ asset('images/footer-youtube.png') }}" alt="YouTube" /></a>
                    <a href="#" class="ms-3"><img src="{{ asset('images/footer-pinterest.png') }}" alt="Pinterest" /></a>
                    <a href="#" class="ms-3"><img src="{{ asset('images/footer-periscope.png') }}" alt="Periscope" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>