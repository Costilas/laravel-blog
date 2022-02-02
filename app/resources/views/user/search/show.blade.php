@extends('user.layouts.layout')


@section('content')
    Posts:
    <ul>
        @if(count($result['post']))
            @foreach($result['post'] as $post)
                <li><a href="{{route('posts.single', ['slug' => $post->slug])}}">{{$post->title}}</a></li>
            @endforeach
        @else
            No results found!
        @endif
    </ul>
    <br>
    Categories:
    <ul>
        @if(count($result['category']))
            @foreach($result['category'] as $category)
                <li><a href="{{route('categories.single', ['slug' => $category->slug])}}">{{$category->title}}</a></li>
            @endforeach

        @else
            No results found!
        @endif
    </ul>
    <br>
    Tags:
    <ul>
        @if(count($result['tag']))
            @foreach($result['tag'] as $tag)
                <li><a href="{{route('tags.single', ['slug' => $tag->slug])}}">{{$tag->title}}</a></li>
            @endforeach

        @else
            No results found!
        @endif
    </ul>

@endsection
