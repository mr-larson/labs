@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <div class="container">
                @foreach ($images as $image)
                <div class="col-sm-4">
                    <div class="rounded overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                        <div class="">
                            <h3 class="text-white">image</h3>
                        </div>
                            <div class="py-6">
                                <img class="" src="{{asset("img/" . $image->img) }}" alt="img">
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $image)
                                    <a href="{{route('image.edit',$image->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection