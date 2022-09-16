{{-- dump & die berguna unutk melihat isi variabel, array dll hampi spt var_dump dan exit--}}
{{-- @dd($posts) --}}

@extends('layouts/main')

@section('container')
    <h1 class="text-center">
        {{ $title }}
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                @if(request('category'))
                <input type="hidden" name="category" value = "{{  request('category') }}">
                @endif
                @if(request('user'))
                <input type="hidden" name="user" value = "{{  request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-warning" type="submit">Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if($posts->count())
        <div class="card mb-3">
            @if($posts[0]->image)
                <div style="max-height: 350px; overflow: hidden" >
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" class="card-img-top mt-3" alt="{{ $posts[0]->category }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category }}">
            @endif
            {{-- <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category }}"> --}}
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                </h3>
                <p>
                    <small>
                        By : 
                        <a href="/blog?user={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> 
                        in
                        <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name  }}</a>
                        {{ $posts[0]->created_at->diffForhumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug}}" class="btn btn-primary">Read More..</a>
            </div>
        </div>
   

        <div class="container">
            <div class="row">
                @foreach($posts->skip(1) as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                                <a href="/blog?category={{ $post->category->slug }}" style="color: white">{{ $post->category->name }}</a> 
                            </div>
                            @if($post->image)
                                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="{{ $post->category }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category }}">
                            @endif
                            {{-- <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category }}"> --}}
                            <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                                <small>
                                    By : 
                                    <a href="/blog?user={{ $post->user->username }}">{{ $post->user->name }}</a> 
                                    {{ $post->created_at->diffForhumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
    <p class="text-center fs-4">
        No Post Found.
    </p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

    {{-- loopingnya blade --}}
    {{-- @foreach ($posts-skip(1) as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>
                By : 
                <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> 
                in
                <a href="/categories" class="text-decoration-none">{{ $post->category->name  }}</a>
            </p>
            <p>{{ $post->excerpt}}</p>   
            <a href="/posts/{{ $post->slug}}">Read More..</a>
        </article>
    @endforeach --}}
    
@endsection