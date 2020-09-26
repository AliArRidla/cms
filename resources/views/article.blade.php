@extends('layouts.app')
@section('content')
    
<!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>
@foreach ($article as $item)
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
       <img src="images/{{$item -> image}}" class="card-img" alt="...">
     </div> 
    <div class="col-md-8">
      <div class="card-body">
        {{-- <h5 class="card-title" href="/article/{{$item -> id}}">{{$item -> title}}</h5> --}}
        <a href="article/{{$item -> id}}" class="card-title">{{$item -> title}}</a>
        <p class="card-text">{{$item -> publication}}</p>
        <p class="card-text"><small class="text-muted">{{$item -> created_at}}</small></p>
      </div>
    </div>      
  </div>
</div>
@endforeach
  </div>
  <!-- /.container -->
@endsection
