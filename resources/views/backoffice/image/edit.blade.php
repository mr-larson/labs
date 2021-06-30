@extends('layouts.appFront')

@section('content')
    
    <!--Section links-->
    <x-app-layout>
        <!--Section image-->
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section image</h2>
            @if ($errors->any())
                <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                    @foreach ($errors->all() as $message)
                        <li class="text-white">{{ $message }}</li>
                    @endforeach
            
                </ul>
            @endif
            <!--Edit Card-->
            <form method="POST" class="grid grid-cols-1 overlay2 bg-purple-800 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('image.update', $image->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="my-4  col-span-2 m-auto">
                        <label class="text-white m-2">Image de la couverture</label>
                        <div class="picture_overview" >
                            <img class="h-64 m-auto" src="{{ asset("img/" . $image->img) }}" alt="" id="preview_link">
                        </div>
                        <input value="{{ $image->img }}" name="img" class="border border-gray-300 p-3 w-full rounded-sm text-white m-4" type="file" id="pictureSelector">
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
            </form>
        </section>
    </x-app-layout>
@endsection