@extends('layouts.default')

@section('content')

    <div class="row">
    {{-- set flag for no result --}}
    <?php $noresult = 1; ?>

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

                    @foreach ($result as $indice)
                        @if ($indice)
                            {{-- There are results, reset the flag --}}
                            <?php $noresult = 0; ?>
                        @endif
                        @foreach ($indice as $product)
                            <div class="result">

                                @if (isset($product['link']['@attributes']['href']) and is_string($product['link']['@attributes']['href']))
                                    <a href="{{ $product['link']['@attributes']['href'] }}" class="list-group-item">
                                @else
                                    <a href="{{ $product['link_to_page'] }}" class="list-group-item">
                                @endif

                                    @if (isset($product['image']) and is_string($product['image']))
                                        <img class"product-img" src="{{ $product['image'] }}" alt="{{ $product['name'] }}" width="150" height="150" style="float: left;">
                                        
                                    @else
                                        <img class"product-img" src="{{ asset('img/image-placeholder.jpg') }}" alt="Dummy Image" width="150" height="150" style="float: left;">
                                    @endif

                                    <p class="product-detail">
                                        {{ $product['name'] }}<br><br>
                                        ฿{{ $product['price'] }}
                                    </p>

                                </a>

                            </div>
                        @endforeach
                    @endforeach

                    @if ($noresult > 0)
                        No Result
                    @endif

            </div>
            <div class="col-sm-1 col-xs-0"></div>
        @endunless

    </div>

@stop
