<?php

namespace App\Http\Controllers;

use App\Models\testing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index(){
        return view('main',[
            'search'=>testing::latest()->filter(request(['tag','search']))->paginate(2)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $form=$request->validate([
            'title'=>'required',
            'company'=>['required',Rule::unique('testings','company')],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required',Rule::unique('testings','email')],
            'tag'=>'required',
            'description'=>'required'
        ]);
        if ($request->hasFile("logo")) {
            $form["logo"]=$request->file("logo")->store("logos","public");
        }
        testing::create($form);
        return redirect("/")->with('message','Listing created successfully');
    }

    public function edit(testing $id){
        return view('edit',[
            'row'=>$id
        ]);
    }

    public function update(Request $request,testing $id){
        $update=$request->validate([
            'title'=>'required',
            'location'=>'required',
            'website'=>'required',
            'tag'=>'required',
            'description'=>'required'
        ]);
        if ($request->hasFile("logo")) {
            $update["logo"]=$request->file("logo")->store("logos","public");
        }
        $id->update($update);
        return redirect("/")->with('message','Listing update successfully');
    }

    public function delete(testing $id){
        $id->delete();
        return redirect('/')->with('message','Listing delete successfully');
    }
}