@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    <!-- Check if posts exist -->
    @if($posts->count() > 0)
        <ul>
            @foreach($posts as $post)
                <li><strong>{{ $post->title }}</strong> - {{ $post->content }}</li>
            @endforeach
        </ul>
    @else
        <p>No posts available.</p>
    @endif
@endsection
