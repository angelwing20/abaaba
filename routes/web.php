<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\laravels;
use App\Models\testing;

// Route::get('/', function () {
//     return view('first');
// });

Route::get('/index', function () {
    return view('index');
});

Route::post('/index', function (Request $request) {
    return dd("Username=".$request->name,"Age=".$request->age);
});

Route::get("/calculate",function(Request $request){
    return response("$request->num1"."+".$request->num2."=".$request->num1+$request->num2."<br>".$request->num1."-".$request->num2."=".$request->num1-$request->num2."<br>".$request->num1."x".$request->num2."=".$request->num1*$request->num2."<br>".$request->num1."/".$request->num2."=".$request->num1/$request->num2);
});

Route::get("/look/{id}",function($id){
    return response("Posts ".$id);
})->where('id',"[a-z]+");


Route::get('/our', function () {  
    return view('listings',[
        'heading'=>'Lastes list',
        'listings'=>[
            [
                'id'=>1,
                'title'=>'Listing One',
                'description'=>'this is a good thing'
            ],
            [
                'id'=>2,
                'title'=>'Listing two',
                'description'=>'this is not a good thing'
            ]
        ]
    ]);
});

Route::get('/listings/{id}',function($id){
    $listings=[['id'=>1,
    'title'=>'Listing One',
    'description'=>'this is a good thing'],['id'=>2,
    'title'=>'Listing two',
    'description'=>'this is not a good thing']];
    
    foreach($listings as $listing){
        if($listing["id"]==$id){
            return $listing;
        }
    }
});


Route::get('/listing', function () {  
    return view('listing',[
        'listing'=>Listing::all()
    ]); 
});

Route::get('/listing/{id}',function($id){
    $listing=Listing::find($id);
    if($listing){
        return view('list',[
            'listing'=>Listing::find($id)
        ]);
    }else{
        abort("404");
    }          
});

Route::get('/form', function () {  
    return view('form',[
        "data"=>laravels::all()
    ]); 
});


Route::get("/fruit",function(){
    // dd($request->name,$request->age);
    return view("fruit",[
        "fruits"=>testing::all()
    ]);
    //SELECT * FROM fruits
});

Route::get("/search/{id}",function($id){
    
    return view("search",[
        "search"=>testing::find($id)
    ]);
    //SELECT * FROM fruits WHERE id=$id
});

Route::get('/',[ListingController::class,'index']);

Route::get('/main/create',[ListingController::class,'create']);

Route::post('/main',[ListingController::class,'store']);


Route::controller(ListingController::class)->group(function(){
    Route::get('/main/{id}/edit','edit')->name('edit');
    Route::put('/main/{id}','update')->name('update');
    Route::delete('/main/{id}','delete')->name('delete');
});

Route::get('/layout',[UserController::class,'layout']);

Route::get('/register',[UserController::class,'create'])->name('register');

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/store',[UserController::class,'store'])->name('store');

Route::post('/logout',[UserController::class,'logout'])->name('logout');