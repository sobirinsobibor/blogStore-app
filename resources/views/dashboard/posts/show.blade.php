@extends('dashboard\layouts/main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
            </td>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline"> 
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0 " onclick="return confirm('Are You Sure')">
                    Delete
                </button>
            </form>
            @if($post->image)
                <div style="max-height: 350px; overflow: hidden" >
                    <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top mt-3" alt="{{ $post->category }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category }}" class="img-fluid">
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

            {{-- <a href="/blog">Back</a>  --}}
        </div>
    </div>
</div>
@endsection