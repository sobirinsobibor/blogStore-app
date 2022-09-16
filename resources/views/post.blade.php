{{-- @dd($post) --}}

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <p> 
                By : 
                <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a> 
                in 
                <a href="/blog?category={{ $post->category->slug }}"> {{ $post->category->name }} </a> 
            </p>
            @if($post->image)
                <div style="max-height: 350px; overflow: hidden" >
                    <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="{{ $post->category }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category }}" class="img-fluid">
            @endif
            {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category }}" class="img-fluid"> --}}
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/blog">Back</a> 
        </div>
    </div>
</div>
    {{-- <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>By : <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }} </a> </h5>
        {!! $post->body !!}
    </article>
    <a href="/blog">Back</a> --}}
@endsection