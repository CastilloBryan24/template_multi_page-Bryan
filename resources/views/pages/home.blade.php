@extends('template.main')

@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset("img/intro.jpg") }}"
                alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                @foreach($homeData as $element)
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{ $element -> titre1 }}</span>
                        <span class="section-heading-lower">{{ $element -> sousTitre1 }}</span>
                    </h2>
                    <p class="mb-3">{{ $element -> para1 }}</p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#">{{ $element -> boutton }}</a>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{ $element -> titre2 }}</span>
                        <span class="section-heading-lower">{{ $element -> sousTitre2 }}</span>
                    </h2>
                    <p class="mb-0">{{ $element -> para2 }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
