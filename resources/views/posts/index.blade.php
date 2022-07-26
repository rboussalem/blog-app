@extends('layouts.app')

@section('content')

@if (Auth::check())
<div class="container">
    <a href="/blog/create" class="btn btn-primary" style="padding: 10px 19px; border-radius: 25px;">Create Post</a>
</div>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-12 p-3">
            <div class="card bg-white border-0">
                <div class="row">
                    <div class="col-5">
                        <img 
                        class="card-img-top"
                        src="{{asset('images/'.$post->image_path)}}"
                        alt="Card image cap" 
                        style="
                            height: 300px;
                            object-fit: cover;">
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <span hidden>
                                <strong class="d-inline-block mb-2 text-primary">World</strong>
                            </span>
                            <h3 class="card-title font-weight-bold">{{$post->title}}</h3>
                            <div class="mb-4 text-muted">
                                By <strong>{{$post->user->name}}</strong> , Created on {{date('jS M Y', strtotime($post->updated_at))}}
                            </div>
                            <p class="card-text mb-4">
                                {{$post->description}}
                            </p>

                            
                            
                            <span class="float-left">
                                <a href="/blog/{{$post->slug}}" class="btn btn-primary" style="padding: 10px 19px; border-radius: 25px;">Keep Reading</a>
                            </span>
                            <span class="float-right">
                                <a href="#" class="text-muted">Edit</a>&nbsp;
                                <a href="#" class="text-danger">Delete</a>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection