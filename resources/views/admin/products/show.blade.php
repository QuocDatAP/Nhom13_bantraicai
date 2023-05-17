@extends('admin.layouts.app')
@section('title', 'Show Product')
@section('content')
    <div class="card">
        <h1>Show Product</h1>

        <div>

            <div class="row">
                <div class=" ">
                    <p>Image</p>
                    <div class="col-5">
                        <img src="{{ $product->images ? asset('upload/' . $product->images->first()->url) : 'upload/default.png' }}"
                            id="show-image" alt="">
                    </div>
                </div>

                <div class="4">
                    <p>Name : {{ $product->name }}</p>

                </div>

                <div class="">
                    <p>Price: {{ $product->price }}</p>

                </div>

                <div class="">
                    <p>Sale: {{ $product->sale }}</p>

                </div>

                <div class="form-group">
                    <p>Description</p>
                    <div class="row w-100 h-100">
                        {!! $product->description !!}
                    </div>
                </div>
                <div>
                    <p>Size</p>
                    @if ($product->details->count() > 0)
                        @foreach ($product->details as $detail)
                            <p>Size: {{ $detail->size }} - quantity: {{ $detail->quantity }}</p>
                        @endforeach
                    @else
                        <p> Sản phẩm này chưa nhập size</p>
                    @endif
                </div>

            </div>
            <div>
                <p>Category</p>
                @foreach ($product->categories as $item)
                    <p>{{ $item->name }}</p>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
