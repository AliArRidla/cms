@extends('layouts.app');
@section('content')
@foreach ($coba as $item)
    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
    <div class="card-header">{{$item -> judul}}</div>
        <div class="card-body">
            {{-- <h5 class="card-title" ></h5> --}}
        <a href="coba/{{$item -> id}}" class="card_title">{{$item -> judul}}</a>
        <p class="card-text">{{$item -> isi}}</p>
        </div>
    </div>
@endforeach   
@endsection