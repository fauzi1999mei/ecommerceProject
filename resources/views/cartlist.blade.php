@extends('master')
@section('content')

<div class="custom-product">

        <div class="col-sm-10">
      <div class="tranding-wrapper">
          <h4>Result for products</h4>
          <a href="ordernow" class="btn btn-success">Order Now !!!</a><br><br>
          @foreach ($products as $item)
          <div class=" row saerched-item cart-list-devider">
<div class="col-sm-3">
    <a href="detail/{{ $item->id }}">
        <img class="trending-image" src="{{ $item->gallery }}">
    </a>
</div>
<div class="col-sm-4">
    <a href="detail/{{ $item->id }}">
        {{-- <img class="trending-image" src="{{ $item->gallery }}"> --}}
        <div class="">
            <h2>{{ $item->name }}</h2>
            <h5>{{ $item->description }}</h5>
        </div>
    </a>
</div>
<div class="col-sm-3">

        {{-- <img class="trending-image" src="{{ $item->gallery }}"> --}}
        <div class="">
            {{-- <h2>{{ $item->name }}</h2> --}}
            {{-- <h5>{{ $item->description }}</h5> --}}
            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning"> Remove from cart</a>
        </div>
    </a>
</div>

          </div>

          @endforeach
      </div>
      <a href="ordernow" class="btn btn-success">Order Now !!!</a><br><br>

</div>
</div>

@endsection
