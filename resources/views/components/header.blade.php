@props([
    'title' => '',
    'subtitle' => '',
    'bgImage' => 'img/default.jpg'
])

<header>
    <x-navbar></x-navbar>
    <div
        class="vh-100"
        style="
            background-image: url('{{ asset($bgImage) }}');
            background-size: cover;
            background-position: center;
        "
    >

        <div
            class="h-100 d-flex align-items-center justify-content-center"
            style="background-color: rgba(0,0,0,0.4)"
        >

            <div class="text-center text-light">

                <h1 class="display-3 fw-bold"data-aos="zoom-out-down">{{ $title }}</h1>

                <p class="lead "data-aos="zoom-out-up">{{ $subtitle }}</p>

            </div>

        </div>

    </div>

</header>