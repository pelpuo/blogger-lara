
@extends('layouts.nav')

@section('content')
    <div class="lg:w-4/5 md:px-16 md:py-8 p-4">
 <div class="flex justify-between items-center mt-8">
    <h1 class="m-4 text-3xl">
        Welcome, {{$user->name}}
    </h1>
     {{-- Posts --}}
     {{-- <div class=""> --}}
        <a href="posts/create" class="sm:p-3 p:3 sm:m-2  bg-teal-500 text-white">Create Post</a>
     {{-- </div> --}}
 </div>

     <hr>

     <div class="grid lg:grid-cols-12 my-8">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                    <div class="md:col-span-4 col-span-12 m-8 shadow-sm shadow-gray-200 rounded-sm bg-white">
                        <a href="/posts/{{ $post->id }}" class="bg-red-900">
                            <div class="h-48 flex items-start justify-end" style="background: url('/storage/cover_images/{{$post->cover_image}}');
                                background-position:center; background-size:cover; background-repeat:no-repeat">
                                
                            <span>
                                <a class="my-4 mx-2 bg-blue-300 py-2 px-4 text-white" href="/posts/{{ $post->id }}/edit">Edit</a>
                            </span>
                            
                            {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'inline'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'my-4 mx-2 p-2 bg-red-500 text-white'])}}
                        {!!Form::close()!!}    
                            </div>
                            <div class="flex flex-col justify-between content-between">
                                <h3 class="text-2xl text-gray-700 p-2">
                                    <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                </h3>
                            @if (strlen($post->body) < 32)
                                <p class="text-gray-500 p-2">{{ $post->body }}</p>
                            @else
                                <p class="text-gray-500 p-2">{{ substr($post->body,0, 80) }}...</p>
                            @endif
                            <p class="text-right my-4 text-sm text-teal-400 px-4 py-2">{{$post->created_at}}</p>
                            </div>
                        </a>
                    </div>

            @endforeach
        @else
            <h3>No posts to display</h3>
        @endif

    </div>
{{-- End of posts --}}
@endsection