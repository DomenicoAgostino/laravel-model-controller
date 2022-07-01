@extends('layouts.main')

@section('title', 'Film')

@section('content')

  <div style="text-center d-flex justify-content-center align-items-center flex-column">
    <h1 class="display-5 fw-bold">CATALOGO FILM</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi id, beatae qui unde tenetur ad corrupti necessitatibus eaque sed nihil repellendus quidem soluta temporibus optio quae iste, quia aut officiis?
      Reiciendis doloremque quis magni repudiandae ex dicta non rem quos, facilis esse earum harum officiis ullam architecto illo cupiditate excepturi sit. Odit cum deleniti impedit vel, dolorum iusto ut nisi.
      Fugit distinctio voluptatibus saepe minus in dolorem, officiis minima aut officia? Voluptatem cum dolor iusto nisi mollitia magni distinctio facilis, quibusdam voluptates nemo laborum adipisci, facere debitis quisquam aliquam. Ducimus.
      Eveniet adipisci fuga maiores eius, ex praesentium! Vero, mollitia tempora quis, natus fuga ab rerum expedita quaerat dicta velit eum sed? Modi, dolorum fugiat eveniet fugit temporibus velit quis ducimus?
      Iusto voluptatibus excepturi earum dolore quod assumenda iure expedita alias autem provident laborum eos ipsum, architecto mollitia, odit quaerat! Atque quam quia ab consectetur pariatur harum ullam, quos minus rerum.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a type="button" href="{{route('movie')}}" class="btn btn-primary btn-lg px-4 gap-3">Vai ai film</a>
        <a type="button" href="{{route('about')}}" class="btn btn-outline-secondary btn-lg px-4">Scopri di più</a>
      </div>
    </div>
  </div>


@endsection