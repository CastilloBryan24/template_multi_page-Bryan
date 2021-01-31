@extends('template.main')

@section('content')
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        @foreach($horaire as $element)
                            <span class="section-heading-upper">{{ $element -> titre }}</span>
                            <span class="section-heading-lower">{{ $element -> sousTitre }}</span>
                        @endforeach
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        @foreach($horaire2 as $element)
                            <li class="list-unstyled-item list-hours-item d-flex">
                                {{ $element -> jour }}
                                <span class="ml-auto">{{ $element -> statut }}</span>
                            </li>
                            @if($loop->iteration < 1 )
                                <li class="list-unstyled-item list-hours-item d-flex">
                                    <span class="ml-auto"></span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    @foreach($coordonnees as $element)
                        <p class="address mb-5">
                            <em>
                                <strong>{{ $element -> adresse }}</strong>
                                <br>
                                {{ $element -> commune }}
                            </em>
                        </p>
                        <p class="mb-0">
                            <small>
                                <em>{{ $element -> moment }}</em>
                            </small>
                            <br>
                            {{ $element -> numero }}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset("img/about.jpg")}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        @foreach($about as $element)
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">{{ $element -> titre }}</span>
                                <span class="section-heading-lower">{{ $element -> sousTitre }}</span>
                            </h2>
                            <p>{{ $element -> para }}</p>
                            <p class="mb-0">{{ $element -> para2 }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
