@extends('template.default')

@section('head')
    <script src="{{ asset('js/splide.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
@endsection

@section('content')
    <div class="w-full flex flex-col items-center">
        <div class="w-2/3 bg-white m-10">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div>
                                <img class="w-full" src="{{ asset('images/slide1.jpg') }}" alt="">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div>
                                <img class="w-full" src="{{ asset('images/slide2.jpg') }}" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <div class="p-10 font-bold text-2xl">
                MI Bani Hasyim
            </div>
            <div class="p-10">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea adipisci quod necessitatibus officia
                    voluptatum aut enim, est provident incidunt minima eligendi quidem placeat, nemo quae cum sunt!
                    Accusantium, suscipit qui.
                </p>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        new Splide('.splide').mount();
    </script>
@endsection
