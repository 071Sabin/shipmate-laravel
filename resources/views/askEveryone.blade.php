@extends('master')

@section('content')
<section class="h-screen flex flex-col justify-center items-center bg-white-100">
    <div class="container mx-auto px-4">

      <!-- Title -->
      <h1 class="text-4xl mb-8 text-center font-bold text-gray-800">Welcome to Ship-Mate</h1>

      <!-- Button group -->
      <div class="flex justify-center">
        <div class="btn-group" role="group" aria-label="Buyer/Seller buttons">
          <button type="button" class="btn btn-primary mr-4 py-4 px-6 text-lg font-bold"><a href="{{ route('site.buyer.buyer_login') }}">I'm a Buyer</a></button>
          <button type="button" class="btn btn-secondary py-4 px-6 text-lg font-bold"><a href="{{ route('site.seller.seller_login') }}">I'm a Seller</a></button>
        </div>
      </div>

    </div>
  </section>
@endsection