@extends('layouts.nav')

@section('content')
<div class="w-full flex flex-col items-center justify-center my-4">
    <div class="m-4 lg:mx-8 w-3/5 px-8">
        <h1 class="text-4xl">Create Post</h1>
        <hr class="">
    </div>
      {!! Form::open(['action' => ['App\Http\Controllers\PostController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'lg:w-3/5 px-8 pt-6 pb-8 mb-4']) !!}
        <div class="mb-4">
          
          {{Form::label('title', 'Title', ['class'=> 'block text-gray-700 text-sm font-bold mb-2'])}}
          {{Form::text('title', '', ['class' => 'appearance-none rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'  => 'Title'])}}
        
        </div>
        <div class="mb-6">
          {{Form::label('body', 'Body', ['class'=> 'block text-gray-700 text-sm font-bold mb-2'])}}
          {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'appearance-none h-64 rounded w-full py-2 px-2 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline', 'placeholder' => 'Body Text'])}}
        </div>

        <div class="mb-6">
          {{Form::file('cover_image')}}
        </div>

        <div class="flex items-center justify-start">

          {{Form::hidden('_method','POST')}}
          {{Form::submit('Save Changes', ['class'=>'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'])}}

        </div>
      {!! Form::close() !!}


      
    </div>
    
   


  </div>
@endsection