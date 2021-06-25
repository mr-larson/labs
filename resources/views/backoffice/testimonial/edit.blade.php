@extends('layouts.appFront')

@section('content')
    
    <!--Section links-->
    <x-app-layout>
        <!--Section testimonial-->
        <section class="services">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300">Section testimonial</h2>
            @if ($errors->any())
                <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                    @foreach ($errors->all() as $message)
                        <li class="text-white">{{ $message }}</li>
                    @endforeach
            
                </ul>
            @endif
            <!--Edit Card-->
            <form method="POST" class="grid grid-cols-1 overlay2 bg-purple-800 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('testimonial.update', $testimonial->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="my-4  col-span-2">
                        <label class="text-white text-base">image</label>
                        <div class="my-4  col-span-2">
                            <label class="text-white text-base">Titre</label>
                            <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $testimonial->h2 }}" name="h2">
                        </div>
                        <div class="picture_overview" >
                            <img src="{{ asset("img/avatar/" . $testimonial->img) }}" alt="" id="preview_link">
                        </div>
                        <input value="{{ $testimonial->img }}" name="img" class="border border-gray-300 p-3 w-full rounded-sm text-white" type="file" id="pictureSelector">
                        <div class="my-4 col-span-2">
                            <label class="text-white text-base">poste</label>
                            <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $testimonial->p }}" name="p">
                        </div>
                        <div class="my-4 col-span-2">
                            <label class="text-white text-base">Commantaire</label>
                            <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $testimonial->p }}" name="p">
                        </div>
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-green-400 to-purple-500 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>
            </form>
        </section>
    </x-app-layout>
@endsection