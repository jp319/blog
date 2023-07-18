<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif

    </main>

</x-layout>






{{--@extends('components.layout')--}}

{{--@section('content')--}}

{{--    @foreach ($posts as $post)--}}
{{--        <article class="{{ $loop->even ? 'foobar' : '' }}">--}}
{{--            <h1>--}}
{{--                <a href="/post/{{$post->slug}}">--}}
{{--                    {{$post->title}}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <p>--}}
{{--                By <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a--}}
{{--                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>--}}
{{--            </p>--}}
{{--            <p>--}}
{{--                {!! $post->excerpt !!}--}}
{{--            </p>--}}
{{--        </article>--}}
{{--    @endforeach--}}

{{--@endsection--}}
