@extends('layouts.master')

{{-- main content begins here --}}
@section('content')
<main role="main" class="container">
  <h1 class="mt-5 text-danger">Home</h1>
  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur ratione quaerat vero a, ullam reiciendis 
  earum distinctio nihil exercitationem quidem neque odit aliquid quasi 
  esse, repudiandae, adipisci non placeat.

  <div class="row mt-5">
    @foreach ($blogs as $blog)
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h2>Heading</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia, animi.</p>
          </div>
        </div>
      </div>
    @endforeach

  </div>
</main>
@endsection

          