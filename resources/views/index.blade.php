@extends('layouts.app')
@section('content')
<div class="bd-example mb-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100"
                src="https://cdn.kenzie.academy/wp-content/uploads/prod/2020/11/02155935/AdobeStock_241083104-1400x934.jpg" 
                data-src="holder.js/900x300?auto=yes&bg=777&fg=555&text=First slide"
                alt="First slide"
                style="
                    height: 500px;
                    object-fit: cover;"
            >
          <div class="carousel-caption d-none d-md-block">
            <h3>Welcom To BloGo</h3>
            <p>Blog And benefit With Blogo</p>
          </div>
        </div>
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      
    </div>
</div>


<div class="container">
    <a href="#!" class="btn btn-primary" style="padding: 10px 19px; border-radius: 25px;">Create Post</a>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 p-3">
            <div class="card bg-white border-0">
                <div class="row">
                    <div class="col-5">
                        <img 
                        class="card-img-top"
                        src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2019/08/Logo_Design_Process_jpg_4EOOtXuw.jpg?auto=format&q=60&w=1280&h=1280&fit=crop&crop=faces"
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
                            <h3 class="card-title font-weight-bold">Card title</h3>
                            <div class="mb-4 text-muted">
                                By <strong>Alvaro Soler</strong> , Created on May 23 2017
                            </div>
                            <p class="card-text mb-4">
                                This is a wider card with supporting text below as a natural lead-in to additional content.
                            </p>

                            
                            
                            <span class="float-left">
                                <a href="#!" class="btn btn-primary" style="padding: 10px 19px; border-radius: 25px;">Keep Reading</a>
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
    </div>
</div>

<div class="container">
    
    <form>
        <div class="form-group">
            <h3>
                <input 
                type="email" 
                class="w-100 p-1 border border-dark border-top-0 border-right-0 border-left-0 "
                aria-describedby="emailHelp"
                placeholder="Title..."
                style="checked::border-style: none;">
            </h3>
        </div>

        <div class="form-group">
            <p>
                <textarea 
                class="w-100 p-1 border border-dark border-top-0 border-right-0 border-left-0" 
                rows="7"
                placeholder="Content...">
                </textarea>
            </p>
        </div>

        <div class="form-group mb-5">
            <input 
                type="file" 
                class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary" style="padding: 10px 19px; border-radius: 25px;">Submit Post</button>

    </form>

</div>



@endsection