@extends('layouts.nav')

@section('content')
        <div class="grid md:grid-cols-2 grid-cols-1 lg:w-4/5 md:px-16 md:py-8 p-4 items-center"> 
            {{-- style="background-image: url(https://images.unsplash.com/photo-1531297484001-80022131f5a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1120&q=80);
            background-position:center; background-repeat:no-repeat; background-size:cover" 
            class="w-full h-96 flex justify-center items-center px-8"> --}}
            <div class="col-span-2 md:col-span-1 order-2">
                <img src="/images/wallpaperImg.png" alt="wallpaperimg" class="" height="120rem">
            </div>
            <div class="text-gray-700 col-span-2 md:col-span-1 order-1">
                <h1 class="lg:text-7xl text-3xl">Dev Blogger</h1>
                <h4 class="lg:text-3xl text-xl mt-4">The ultimate blogging experience</h4>
            </div>
                
            </div>
            <div class="lg:p-16 p-4 lg:w-4/5">
                <h1 class="text-4xl mb-2">New Posts</h1>
                <hr/>
        
                {{-- Posts --}}
                    <div class="grid lg:grid-cols-12 my-16">
                        @if (count($posts) > 0)
                            @foreach ($posts as $post)
                                <div class="md:col-span-4 col-span-12 m-8 shadow-sm shadow-gray-200 rounded-sm bg-white">
                                    <a href="/posts/{{ $post->id }}" class="bg-red-900">
                                        <div class="h-48" style="background: url('/storage/cover_images/{{$post->cover_image}}');
                                            background-position:center; background-size:cover; background-repeat:no-repeat"></div>
                                        <div class="flex flex-col justify-between content-between">
                                            <h3 class="text-2xl text-gray-700 p-2">{{$post->title}}</h3>
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
                            <h3 class="col-span-12" >No posts to display</h3>
                        @endif
        
                    </div>
                {{-- End of posts --}}

                {{$posts->links()}}
            </div>

@endsection