@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <div class="row gx-5">
        <div class="col-8 bg-warning">
            @foreach ($all_posts as $post)
                <img src="{{ $post->image }}" alt="123">
            @endforeach
        </div>
        <div class="col-4 bg-secondary">
            Profile

            suggestion
        </div>
    </div>
@endsection
