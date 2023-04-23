@extends('master')

@section('content')

  <!-- Hero section -->
  <section class="bg-gradient-to-r from-blue-500 to-blue-500 text-white py-40 px-4 md:px-12 lg:px-24">
    <div class="max-w-4xl mx-auto">
      <h1 class="text-4xl font-bold mb-6 md:text-5xl lg:text-6xl">Shop the World with Our Dropshipping Service</h1>
      <p class="text-xl mb-8 md:text-2xl lg:text-3xl">Discover a world of products and start your own business with our easy-to-use dropshipping platform.</p>
      <a href="{{ route('site.user.askEveryone') }}" class="bg-white text-indigo-500 py-3 px-6 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Get Started Now</a>
    </div>
  </section>

    <!-- Product section -->
    <section class="bg-white py-20 px-4 md:px-12 lg:px-24">
        <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-bold mb-8 md:text-5xl lg:text-6xl text-gray-800">Discover Amazing Products</h2>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
          <!-- Product card 1 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
            <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x800');"></div>
            <h3 class="text-2xl font-medium mt-4 mb-2">Product 1</h3>
            <p class="text-gray-700 mb-4">Description of Product 1.</p>
            <a href="#" class="bg-indigo-500 text-white py-2 px-4 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Shop Now</a>
          </div>
          
          <!-- Product card 2 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
            <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x800');"></div>
            <h3 class="text-2xl font-medium mt-4 mb-2">Product 2</h3>
            <p class="text-gray-700 mb-4">Description of Product 2.</p>
            <a href="#" class="bg-indigo-500 text-white py-2 px-4 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Shop Now</a>
          </div>

          <!-- Product card 3 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
              <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x800');"></div>
              <h3 class="text-2xl font-medium mt-4 mb-2">Product 3</h3>
              <p class="text-gray-700 mb-4">Description of Product 3.</p>
              <a href="#" class="bg-indigo-500 text-white py-2 px-4 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Shop Now</a>
          </div>
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
              <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x800');"></div>
              <h3 class="text-2xl font-medium mt-4 mb-2">Product 4</h3>
              <p class="text-gray-700 mb-4">Description of Product 4.</p>
              <a href="#" class="bg-indigo-500 text-white py-2 px-4 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Shop Now</a>
          </div>

          <!-- Product card 5 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
              <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x800');"></div>
              <h3 class="text-2xl font-medium mt-4 mb-2">Product 5</h3>
              <p class="text-gray-700 mb-4">Description of Product 5.</p>
              <a href="#" class="bg-indigo-500 text-white py-2 px-4 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Shop Now</a>
          </div>

          <!-- Product card 6 -->
          <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
              <div class="h-64 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/random/800x800');"></div>
              <h3 class="text-2xl font-medium mt-4 mb-2">Product 6</h3>
              <p class="text-gray-700 mb-4">Description of Product 6.</p>
              <a href="#" class="bg-indigo-500 text-white py-2 px-4 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Shop Now</a>
          </div>
        </div>
    </div>

</section>
  <!-- Call to action section -->
  <section class="bg-indigo-500 text-white py-20 px-4 md:px-12 lg:px-24">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-4xl font-bold mb-6 md:text-5xl lg:text-6xl">Start Your Own Business Today</h2>
      <p class="text-xl mb-8 md:text-2xl lg:text-3xl">Our dropshipping platform makes it easy to get started with your own online store.</p>
      <a href="{{ route('site.user.askEveryone') }}" class="bg-white text-indigo-500 py-3 px-6 rounded-full font-medium text-lg shadow-lg hover:shadow-xl transition duration-300">Get Started Now</a>
    </div>
  </section>
@endsection