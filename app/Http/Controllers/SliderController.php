<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(4);
        return view("backoffice.slider.all", compact("sliders"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize("slider-create", slider::class);
        return view('backoffice.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Slider::class);
        $request->validate([
            'img'=>'required',
        ]);

        $slider = new slider();

        $slider->img = $request->img;

        if ($request->file("img") !== null) {
            $slider->img = $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }

        $slider->created_at = now();
        
        $slider->save();

        return redirect()->route('slider.index', compact('slider'))->with("message", "L'slider a bien été crée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $this->authorize("slider-edit", $slider);
        return view("backoffice.slider.edit", compact("slider"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->authorize("update", $slider);
        $request->validate([
            "img"=>'required',
        ]);

        $slider->a = $request->a;
        if($request->file('img')!= null){
            Storage::disk('public')->delete("img/" . $slider->img);

            $filename = $request->file('img')->getClientOriginalName();
            $slider->img = $filename;

            $request->file('img')->storePubliclyAs('img/', $filename , 'public');
        }
        
        $slider->updated_at = now();
        $slider->save();

        return redirect()->route("slider.index")->with("successMessage", "Votre slider à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $this->authorize('delete', $slider);
        Storage::disk("public")->delete("img/" .$slider->img);
        $slider->delete();

        return redirect()->back();
    }
}
