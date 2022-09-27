<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Adds;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AddsController extends Controller
{
    public function showAdds()
    {
        return view('adds');
    }

    public function store(Request $request)
    {
            $this->validate(request(),[
                'name' => 'required',
                'price' => 'required',
                'desc' => 'required',
                'picture' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);

            $image = $this->file('picture');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            
            $annonce = new Adds();
            //$annonce = Adds::create(request(['name', 'price', 'desc','picture']));
            $annonce->name = $request->input('name');
            $annonce->price = $request->input('price');
            $annonce->desc= $request->input('desc');
            $annonce->picture = $new_name;
            //$annonce->user_id = auth()->user()->id;
            $annonce->save();

            return redirect()->to('/adds/');
        

        
    }

    public function show()
    {
        $adds = Adds::all();
        return redirect()->to("/adds/");
    }
}
