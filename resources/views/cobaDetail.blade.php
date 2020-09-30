@extends('layouts.app');
@section('content')
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">{{$coba -> judul}}</div>
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
        <p class="card-text">{{$coba -> isi}}</p>
        </div>
    </div>  
@endsection