@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
  <div class="py-15 border-b border-gray-200">
    <h1 class="text-6xl">
      Blog Posts
    </h1>
  </div>

  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 text-left">
    <div>
      <img class="" src="https://cdn.pixabay.com/photo/2017/02/25/17/19/keyboard-2098301_960_720.jpg" alt="Laptop Image">
    </div>
    <div>
      <h2 class="text-gray-700 font-bold text-2xl pb-4">Learn how to write Laravel coded</h2>

      <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">Pato Gordo</span>, 1 day ago
      </span>

      <p class="text-gray-700 pt-8 pb-10 leading-6 font-light text-left">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi fugiat, illum doloribus minus eligendi autem ipsam, veritatis error nostrum optio reprehenderit. Ea perferendis optio inventore exercitationem, deleniti totam dignissimos numquam nihil hic quae necessitatibus, distinctio veniam. Harum optio tempore fugiat cupiditate quo officiis nihil possimus quod nulla accusantium, minima magnam cum reiciendis dicta, ratione aliquam adipisci quibusdam ex dolore distinctio!
      </p>

      <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg text-extrabold py-3 px-6 rounded-3xl">Keep Reading</a>
    </div>
  </div>
</div>
@endsection