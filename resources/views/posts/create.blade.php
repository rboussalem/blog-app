@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Ajouter Un Utilisateur</h3>
    <hr>
    
    <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @csrf
        
        @include('posts.partials.form')

        <hr>
        <button type="submit" class="btn btn-primary" style="padding: 10px 19px; border-radius: 25px;">Submit Post</button>

    </form>

</div>
@endsection