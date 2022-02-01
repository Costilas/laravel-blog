@extends('user.layouts.layout')

@section('title', 'Laravel Blog:: Category')

@section('content')
    <div class="page-wrapper">
        <div class="blog-custom-build">
            @foreach($posts as $post)
                <div class="blog-box wow fadeIn">
                    <div class="post-media">
                        <a href="{{route('posts.single', ['slug' => $post->slug])}}">
                            {{--<img src="{{asset("uploads/$post->thumbnail")}}" alt=""
                                 class="img-fluid">--}}
                            <img src="{{asset($post->getImage())}}" alt=""
                                 class="img-fluid">
                            <div class="hovereffect">
                                <span></span>
                            </div>
                            <!-- end hover -->
                        </a>
                    </div>
                    <!-- end media -->
                    <div class="blog-meta big-meta text-center">
                        <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">{{$post->title}}</a></h4>
                        <p>{!! $post->description !!}</p>
                        <small><a href="{{route('categories.single', ['slug' => $category->slug])}}" title="">{{$category->title}}</a></small>
                        <small>{{$post->getPostDate()}}</small>
                        <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
                    </div><!-- end meta -->
                </div>
                <hr class="invis">
            @endforeach
        </div>
    </div>

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                {{$posts->links()}}
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
@endsection
