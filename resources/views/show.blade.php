@extends('layouts.app')
@section('title')
<?php
$titleTag = htmlspecialchars($posts->title);
?>
{{$posts->title}}
@endsection
@section('css')
<style type="text/css">
header {
    background-image: url('public/front-end/img/home-bg.jpg');
    width: 100%;
    height: 100%;
}
nav {
    background-color: #000;
}
</style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <!-- Post Content -->
                <article>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <p>{{$posts->body}}</p>

                                <h2 class="section-heading">{{$posts->title}}</h2></a>
                                <hr>
                                <a href="#">
                                    <img class="img-responsive" 
                                        src="{{url('public/images/'.$posts->image)}}" 
                                        class="img-responsive"
                                        alt="blog"
                                        title="blog" />
                                </a>
                                <span class="caption text-muted">
                                    <a href="http://spaceipsum.com/"></a>
                                    {{App\User::find($posts->user_id)->name}}
                                    <a href="https://www.flickr.com/photos/nasacommons/"></a>.</p>
                            </div>
                        </div>
                    </div>
                </article>

                <hr>
                <!-- Start Comment-->
                <div class="col-lg-7 col-lg-offset-5 col-md-7 col-md-offset-5">
                    <ul class="list-unstyled">
                        @foreach($posts->comments as $comment) 
                        <li>
                          <div>{{$comment->comment}}</div>
                          <span class="pull-right">{{App\User::find($comment->user_id)->name}}</span>
                          <span>{{date('M j, Y H:ia',strtotime($comment->created_at))}}</span>
                          <hr>-                         
                         @if(Auth::user() == $comment->user)
                          <div class="pull-right">
                            <a class="" href="{{url('comment.destroy')}}/{{$comment->id}}">
                              {{trans('arabic.delete')}}
                            </a>
                          </div>
                          @endif
                        </li>
                        
                        @endforeach
                    </ul>
                    <hr>
                    <form class="form-horizontal"  
                  action="{{url('comment.store')}}/{{$posts->id}}" 
                  method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                  <div class="form-group">
                    <div class="col-sm-10"> 
                      <textarea class="form-control" name="comment" id="comment" rows="5">
                      </textarea>
                    </div>
                  </div>
                  @if (Auth::guest())
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ route('login') }}" class="btn btn-success">Add Comment</a>
                    </div>
                  </div>
                  @else
                  <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Add Comment</button>
                    </div>
                  </div>
                  @endif
                  <input type="hidden" value="{{Session::token()}}" name="_token">
                </form>
                </div>
                <!--End Comment-->
            </div>
        </div>
    </div>


   @endsection