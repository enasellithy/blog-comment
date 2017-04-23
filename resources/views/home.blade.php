@extends('layouts.app')
@section('title')
Nice
@endsection
@section('content')
<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="post/{{$post->id}}/show">
                        <h2 class="post-title">
                            {{$post->titel}}
                        </h2>
                        <img src="{{url('public/images/'.$post->image)}}"
                         class="img-responsive img-circle"
                         width="100"
                         height="100" 
                         title="blog"
                         alt="blog" />
                        <h3 class="post-subtitle">
                            {{$post->title}}
                        </h3>
                    </a>

                    <p>
                        {{substr($post->body, 0, 25)}}
                        {{strlen($post->body) > 200 ? "...":""}}
                    </p>
                    <p class="post-meta">Posted by 
                        <a href="#">{{App\User::find($post->user_id)->name}}</a> 
                        {{date('M j, Y ',strtotime($post->created_at))}}
                    </p>
                </div>
                <hr>
                @endforeach

                <!-- Pager -->
                <div class="pager text-center">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div>

    <hr>
   @endsection