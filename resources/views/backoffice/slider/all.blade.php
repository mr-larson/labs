@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <div class="container">
                @can('create', App\models\Slider::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 text-white" href="/slider/create">+ Create</a>
                    </div>
                @endcan
                @foreach ($sliders as $slider)
                <div class="col-sm-4">
                    <div class="rounded overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                        <div class="">
                            <h3 class="text-white">slider</h3>
                        </div>
                            <div class="py-6">
                                <img class="" src="{{asset("img/" . $slider->img) }}" alt="img">
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $slider)
                                    <a href="{{route('slider.edit',$slider->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection