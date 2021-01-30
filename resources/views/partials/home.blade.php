@extends('template.main')

@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset("img/intro.jpg") }}"
                alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                @foreach($home as $element)
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{ $element -> titre }}</span>
                        <span class="section-heading-lower">{{ $element -> sousTitre }}</span>
                    </h2>
                    <p class="mb-3">{{ $element -> paragraphe }}</p>
                    <div class="intro-button mx-auto">
                        <a class="btn btn-primary btn-xl" href="#">{{ $element -> boutton }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    @foreach($home2 as $element)
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{$element -> titre}}</span>
                            <span class="section-heading-lower">{{$element -> sousTitre}}</span>
                        </h2>
                        <p class="mb-0">{{$element -> paragraphe}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
