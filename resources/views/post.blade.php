@extends('layouts.nav')

@section('content')
    <div class="lg:w-4/5 md:px-16 md:py-8 p-4">

        <div class="h-96 mb-16 flex items-start justify-end" style="background: url('/storage/cover_images/{{$post->cover_image}}');
        background-position:center; background-size:cover; background-repeat:no-repeat">
        </div>
        <h1 class="text-3xl mb-2">{{$post->title}}</h1>
        <hr>
        <p class="mt-12 mb-32">{{$post->body}}</p>
    </div>
@endsection