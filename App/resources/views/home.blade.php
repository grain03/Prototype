@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Bienvenu {{ Auth::user()->first_name }}</h1>
    </div>
@endsection
