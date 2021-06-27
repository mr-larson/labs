@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section image</h2>
            <div class="container">
                @foreach ($images as $image)
                <div class="col col-sm-4 my-4 h-70">
                    <div class="rounded overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                        <div class="">
                            <h3 class="text-white">image</h3>
                        </div>
                            <div class="py-6">
                                <img class="h-44" src="{{asset("img/" . $image->img) }}" alt="img">
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $image)
                                    <a href="{{route('image.edit',$image->id) }}" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection