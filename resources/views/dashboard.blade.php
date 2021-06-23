@extends('layouts.appFront')
@section('content')
    <x-app-layout>
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
              </div>
              <div class="text-right">
                <p class="text-2xl">1,257</p>
                <p>Visitors</p>
              </div>
            </div>
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
              </div>
              <div class="text-right">
                <p class="text-2xl">557</p>
                <p>Orders</p>
              </div>
            </div>
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
              </div>
              <div class="text-right">
                <p class="text-2xl">$11,257</p>
                <p>Sales</p>
              </div>
            </div>
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
              <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <div class="text-right">
                <p class="text-2xl">$75,257</p>
                <p>Balances</p>
              </div>
            </div>
        </div>
          <!-- ./Statistics Cards -->
          <div class="mt-8 mx-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 p-6 gap-3">
                <!-- Titre -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                        <a href="{{ route('titre.index') }}" class="block ">
                          <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Title</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section Title</p>
                          </div>
                        </a>
                    </div>
                    <!-- Titre end -->
                    <!-- link -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                        <a href="{{ route('link.index') }}" class="block ">
                            <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                                <p class="text-white text-3xl">Link</p>
                                <p class="text-white opacity-50 font-light py-3">Gérer la section link</p>
                            </div>
                            <div class="buttons flex justify-center">
                              @can('update', $link)
                                  <a href="{{route('link.edit',$link->id) }}" class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 hover:bg-indigo-700 text-white">Edit</a>
                              @endcan
                          </div>
                        </a>
                    </div>
                    <!-- link end -->
                    <!-- features -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                      <a href="{{ route('feature.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                          <p class="text-white text-3xl">features</p>
                          <p class="text-white opacity-50 font-light py-3">Gérer vos features premium</p>
                        </div>
                      </a>
                    </div>
                    <!-- features end -->
                    <!-- Titre -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                      <a href="{{ route('titre.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                          <p class="text-white text-3xl">Title</p>
                          <p class="text-white opacity-50 font-light py-3">Gérer la section Title</p>
                        </div>
                      </a>
                    </div>
                    <!-- Titre end -->
                    <!-- adresse -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                        <a href="{{ route('adresse.index') }}" class="block ">
                            <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                                <p class="text-white text-3xl">Adresse</p>
                                <p class="text-white opacity-50 font-light py-3">Gérer vos coordonné</p>
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $adresse)
                                    <a href="{{route('adresse.edit',$adresse->id) }}" class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 hover:bg-indigo-700 text-white">Edit</a>
                                @endcan
                            </div>
                        </a>
                    </div>
                    <!-- adresse end -->
                    <!-- features -->
                <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                  <a href="{{ route('feature.index') }}" class="block ">
                      <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                          <p class="text-white text-3xl">features</p>
                          <p class="text-white opacity-50 font-light py-3">Gérer vos features premium</p>
                      </div>
                      <div class="buttons flex justify-center">
                          @can('update', $features)
                              <a href="{{route('feature.edit',$feature->id) }}" class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 hover:bg-indigo-700 text-white">Edit</a>
                          @endcan
                      </div>
                  </a>
                </div>
                <!-- features end -->
                    <!-- slider -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                      <a href="{{ route('slider.index') }}" class="block ">
                          <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                              <p class="text-white text-3xl p-2">Slider</p>
                              <img class="h-60 px-4 py-10" src="{{asset("img/" . $sliders[0]->img)}}" alt="">
                              <p class="text-white opacity-50 font-light py-3">Gérer votre section slider</p>
                          </div>
                          <div class="buttons flex justify-center">
                            @can('create', App\models\Slider::class)
                              <div class=" flex justify-center my-2">
                                  <a class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 hover:bg-indigo-700 text-white" href="/slider/create">+ Create</a>
                              </div>
                            @endcan
                          </div>
                      </a>
                    </div>
                    <!-- slider end -->
                    
                    <!-- image -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                      <a href="{{ route('image.index') }}" class="block ">
                        <div class="py-16 rounded overflow-hidden shadow-lg  flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl p-2">Image</p>
                            <img class="h-30 px-4 py-10" src="{{asset("img/" . $images[0]->img)}}" alt="">
                            <p class="text-white opacity-50 font-light py-3">Gérer la section images</p>
                        </div>
                      </a>
                    </div>
                    <!-- image end -->
                    <!-- video -->
                    <div class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                      <a href="{{ route('video.index') }}" class="block ">
                          <div class="rounded overflow-hidden shadow-lg  flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                              <p class="text-white text-3xl p-2">Video</p>
                              <img class="h-90 px-4 py-10" src="{{asset("img/" . $video->img) }}" alt="">
                              <p class="text-white opacity-50 font-light py-3">Gérer la section Videos</p>
                          </div>
                          <div class="buttons flex justify-center">
                            @can('update', $video)
                                <a href="{{route('video.edit',$video->id) }}" class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 hover:bg-indigo-700 text-white">Edit</a>
                            @endcan
                          </div>
                      </a>
                  </div>
                    <!-- video end -->
                </div>
              
  
                <!-- footer -->
                <div class="mt-8 mx-4">
                  <div class="p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                    <a href="{{ route('footer.index') }}" class="block ">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <p class="text-white text-3xl">Footer</p>
                            <p class="text-white opacity-50 font-light py-3">Gérer la section footer</p>
                          </div>
                          <div class="buttons flex justify-center">
                              @can('update', $footer)
                                  <a href="{{route('footer.edit',$footer->id) }}" class="font-bold py-2 px-4 m-6 rounded shadow bg-indigo-500 hover:bg-indigo-700 text-white">Edit</a>
                              @endcan
                          </div>
                        </div>
                    </a>
                  </div>
                </div>
                <!-- .footer end -->
              </div>
            </div>
          </div>    
    </x-app-layout>
@endsection