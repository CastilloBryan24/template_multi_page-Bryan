@extends('template.main')

@section('content')
<section class="page-section">
    <div class="container">
        <div class="product-item">
            @foreach($produit as $element)
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ml-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">{{$element -> titre}}</span>
                            <span class="section-heading-lower">{{$element -> sousTitre}}</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                    src="{{ asset("img/products-01.jpg") }}" alt="">
                <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">{{$element -> para}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="product-item">
            @foreach($produit2 as $element)
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex mr-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">{{$element -> titre}}</span>
                            <span class="section-heading-lower">{{$element -> sousTitre}}</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                    src="{{ asset("img/products-02.jpg") }}" alt="">
                <div class="product-item-description d-flex ml-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">{{$element -> para}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <div class="product-item">
            @foreach($produit3 as $item)
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ml-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">{{$item -> titre}}</span>
                            <span class="section-heading-lower">{{$item -> sousTitre}}</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                    src="{{ asset("img/products-03.jpg") }}" alt="">
                <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">{{$item -> para}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
