@extends('layouts.appFront')

@section('content')
    @include('layouts.navigation')  

    <!--Section Service-->
    <section id="" class="services my-3">
        <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section service</h2>
        @if ($errors->any())
            <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                @foreach ($errors->all() as $message)
                    <li class="text-white">{{ $message }}</li>
                @endforeach
        
            </ul>
        @endif
        <!--Edit Card-->
        <form method="POST" class="grid grid-cols-1 overlay2 bg-purple-800 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('service.store') }}" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="my-4 col-span-2">
                <label class="text-white text-base">Titre</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="title">
            </div>
            <div class="my-4 col-span-2">
                <label class="text-white text-base">Description</label>
                <input type="text" class="px-3 py-1 w-full rounded-md" name="description">
            </div>
            <div class="my-4 col-span-2 ">
                <label class="form-label text-white">Icone</label>
                <br>
                <input type="radio" class="btn-check" name="icone" value="flaticon-023-flask" id="option1" autocomplete="off" checked>
                <label class="btn btn-secondary text-white" for="option1"><i class="flaticon-023-flask"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-011-compass" id="option1" autocomplete="off" checked>
                <label class="btn btn-secondary text-white" for="option1"><i class="flaticon-011-compass"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-037-idea" id="option2" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option2"><i class="flaticon-037-idea"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-039-vector" id="option3" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option3"><i class="flaticon-039-vector"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-036-brainstorming" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-036-brainstorming"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-026-search" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-026-search"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-018-laptop-1" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-018-laptop-1"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-043-sketch" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-043-sketch"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-012-cube" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-012-cube"></i></label>
      
                <br>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-001-picture" id="option1" autocomplete="off" checked>
                <label class="btn btn-secondary text-white" for="option1"><i class="flaticon-001-picture"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-002-caliper" id="option1" autocomplete="off" checked>
                <label class="btn btn-secondary text-white" for="option1"><i class="flaticon-002-caliper"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-003-energy-drink" id="option2" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option2"><i class="flaticon-003-energy-drink"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-004-build" id="option3" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option3"><i class="flaticon-004-build"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-005-thinking-1" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-005-thinking-1"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-006-prism" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-006-prism"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-007-paint" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-007-paint"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-008-team" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-008-team"></i></label>
      
                <input type="radio" class="btn-check" name="icone" value="flaticon-009-idea" id="option4" autocomplete="off">
                <label class="btn btn-secondary text-white" for="option4"><i class="flaticon-009-idea"></i></label>
      
            </div>    
            <button type="submit" class="site-btn hover:bg-purple-500 text-white font-bold py-2 px-4  mx-auto my-8 rounded">Submit</button>   
        </form>
    </section>

@endsection
