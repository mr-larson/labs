@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section video</h2>
            <div class="container">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                        <div class="">
                            <h3 class="text-white text-4xl pb-4">Video</h3>
                        </div>
                        <div class="">
                            <img class="w-full" src="{{asset("img/" . $video->img) }}" alt="img">
                        </div>
                        <p class="p-4 text-gray-400">{{ $video->a }}</p>
                        <div class="buttons flex justify-center">
                            @can('update', $video)
                                <a href="{{route('video.edit',$video->id) }}" class="hover:text-purple-300 bg-gradient-to-r from-green-400 to-purple-500 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
@endsection