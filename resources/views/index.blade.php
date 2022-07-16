@extends('layouts.app')

@section('content')
  <div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
      <div class="m-auto pt-4 pv-16 sm:m-auto w-4/5 block text-center">
        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
          Do you want to become a developer?
        </h1>

        <a href="/blog" class="text-center bg-gray-50 rounded text-gray-700 py-2 px-4 font-bold text-xl uppercase">
          Read More
        </a>
      </div>
    </div>
  </div>

  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
      <img class="rounded-lg" width="700" src="https://cdn.pixabay.com/photo/2017/02/25/17/19/keyboard-2098301_960_720.jpg" alt="Laptop Image">
    </div>

    <div class="m-auto sm:m-auto text-left w-4/5 block">
      <h2 class="text-3xl font-extrabold text-gray-600 pb-2">
        Struggling to be a better web developer?
      </h2>

      <p class="py-3 text-gray-500 text-s">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam incidunt quaerat fugit officia error cupiditate, maxime quod porro earum, ullam fuga.
      </p>

      <p class="font-extrabold text-gray-600 text-s pb-9">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt, ratione totam sapiente cupiditate nam nobis
      </p>

      <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
    </div>
  </div>

  <div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
      I'am an expert in...
    </h2>

    <span class="font-extrabold block text-4xl py-1">
      UX Design
    </span>

    <span class="font-extrabold block text-4xl py-1">
      Frontend Development
    </span>

    <span class="font-extrabold block text-4xl py-1">
      Beckend Development
    </span>

    <span class="font-extrabold block text-4xl py-1">
      JavaScript/Typescript
    </span>
  </div>

  <div class="text-center py-15">
    <span class="uppercase text-sm text-gray-200">
      Blog
    </span>

    <h2 class="text-4xl font-bold py-10">
      Recent Posts
    </h2>

    <p class="m-auto w-4/5 text-gray-500">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur fuga atque molestias labore tenetur a asperiores aut rem, natus quo veniam voluptate minima at commodi eos, necessitatibus officia! Ab, fugiat.
    </p>
  </div>

  <div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10 rounded-tl-lg rounded-bl-lg">
      <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
        <span class="uppercase text-sm">
          PHP
        </span>

        <h3 class="class-xl font-bold py-10">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique assumenda repellendus voluptates in provident voluptatum officia molestiae recusandae, odit, omnis, quae magnam rem ut! Eos quaerat expedita molestias error porro?
        </h3>

        <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
          Find Out More
        </a>
      </div>
    </div>
    <div>
      <img class="rounded-tr-lg rounded-br-lg" width="700" src="https://cdn.pixabay.com/photo/2017/02/25/17/19/keyboard-2098301_960_720.jpg" alt="Laptop Image">
    </div>
  </div>
@endsection
