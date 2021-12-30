@extends('layout')
@section('content')

<x-header :currentCategory="$currentCategory ?? null" :categories="$categories ?? ''"></x-header>
<br>
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
        <x-post-grid :posts="$posts"></x-post-grid>
        {{$posts->links()}}
    @else
        <p class="text-center">No posts yet, ceck later </p>
    @endif
    
</main>
@endsection