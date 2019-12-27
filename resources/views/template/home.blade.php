@extends('layouts.master')

@section('content')

        <!-- @if (session()->has('alert'))
          <div class="alert {{ session()->get('alert-type')}}">
            {session()->get('alert')}}
          </div>
        @endif -->
        
<div class="container">
  
    <div class="row justify-content-left">
        <div class="col-md-40">
            <div class="card">
              <div class="card-header">Create your own post! 
                <div class="float-center">
                  <a href="{{ route('blog:create')}}" class="btn btn-primary">Create New</a>
                  <img src="https://i.gifer.com/YQ.gif" height="60px" width="60px">
                </div>
              </div>
            </div>
        </div>
      </div>

</div>


<br>

      @foreach ($blogs as $blog)  
        <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title">{{ $blog->title}}</h2>
              <p class="card-text">{{ $blog->body }}</p>
              <!-- <a href="{{ route('public:show', $blog) }}" class="btn btn-primary">Read More &rarr;</a> -->
            </div>
            <div class="card-footer text-muted">
              Posted on {{$blog->created_at->diffForHumans()}} by
              <a href="#">{{ $blog->author}}</a>
            </div>
          </div>          
      @endforeach
       {{ $blogs->links()}} 
@endsection

