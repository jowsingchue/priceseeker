@extends('layouts.default')

@section('content')
    
    <div class="row">

        @unless ($result)
            No Result
        @else
            <div class="col-sm-1 col-xs-0"></div>
            <div class="col-sm-10 col-xs-12">
                <div class="list-group">
                    <a class="list-group-item active" id="result">
                        <h3>Result</h3>
                    </a>
                </div>

                    @foreach ($result as $id => $product)
                        
                    <div class="result">

                        <a href="http://128.199.212.108/jf-shop/products/show/{{ $product['@attributes']['id'] }}" class="list-group-item">

                            <img class"product-img" src="{{ asset('img/image-placeholder.jpg') }}" alt="Dummy Image" width="150" height="150" style="float: left;">

                            <p class="product-detail">
                                {{ $product['name'] }}<br><br>
                                ฿{{ $product['price'] }}
                            </p>

                        </a>
                        
                    </div>

                    @endforeach
                
            </div>
            <div class="col-sm-1 col-xs-0"></div>
        @endunless

    </div>

@stop