@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category_name }}</div>

                <div class="card-body">
                    @forelse ($products as $product)
                    <div class="card" style="width: 10rem;">
                            <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{ $product->name }}</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                    </div>
                    @empty
                        
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
