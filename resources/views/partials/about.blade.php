@extends('template.main')

@section('content')
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0"
            src="{{ asset("img/about.jpg") }}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        @foreach($about as $element)
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">{{$element -> titre}}</span>
                                <span class="section-heading-lower">{{$element -> sousTitre}}</span>
                            </h2>
                            <p>{{$element -> para}}</p>
                            <p class="mb-0">{{$element -> para2}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
