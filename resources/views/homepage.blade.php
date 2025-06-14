@extends('layout.master')

@section('title', 'Homepage')
@php
$cards= config('comics');
@endphp

@section('content')

<div class="container py-5">
    <div class="row g-4">
        @foreach ($cards as $item)
            <div class="col-md-4 col-lg-2">
                <div class="card h-100">
                    <img src="{{ $item['thumb'] }}" class="card-img-top" alt="{{ $item['title'] }}" />
                    <div class="card-body">
                        <p class="card-text text-center">{{ $item['title'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection