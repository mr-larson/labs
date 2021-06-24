@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg">Section slider</h2>
            <div class="container">
                @can('create', App\models\Slider::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="site-btn hover:bg-purple-500 text-white px-2 rounded-lg m-2 w-auto text-center" href="/slider/create">+ Create</a>
                    </div>
                @endcan
                <div class="col col-sm-4 my-4">
                @foreach ($sliders as $slider)
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
                                @can('delete', $slider)
                                    <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
    </x-app-layout>
@endsection