<?php

namespace App\Http\Controllers;

use App\Http\Requests\PizzaStoreRequest;
use App\Http\Requests\PizzaUpdateRequest;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller{
    public function index(){
        $pizzas = Pizza::paginate(5);
        return view('pizza.index' , compact('pizzas'));
    }

    public function create(){
        return view('pizza.create');
    }

    public function store(PizzaStoreRequest $request){
        $path = $request->image->store('public/pizza');
        Pizza::create([

            'name'=>$request->name,
            'description'=>$request->description,
            'small_pizza_price'=>$request->small_pizza_price,
            'medium_pizza_price'=>$request->medium_pizza_price,
            'large_pizza_price'=>$request->large_pizza_price,
            'category'=>$request->category,
            'image'=>$path,



        ]);
        return redirect()->route('pizza.index')->with('message' , 'Pizza Added Successfully!!');
    }

    public function edit($id){
        $pizza = Pizza::find($id);
        return view('pizza.edit' , compact('pizza'));
    }

    public function update(PizzaUpdateRequest $request , $id){
        $pizza = Pizza::find($id);
        if($request->has('image')){
            $path = $request->image->store('public/pizza');
        }else{
            $path = $pizza->image;
        }
        $pizza = new Pizza;
        $pizza->name = $request->name;
        $pizza->description = $request->description;
        $pizza->small_pizza_price= $request->small_pizza_price;
        $pizza->medium_pizza_price= $request->medium_pizza_price;
        $pizza->large_pizza_price= $request->large_pizza_price;
        $pizza->category= $request->category;
        $pizza->image= $path;
        $pizza->save();
        return redirect()->route('pizza.index')->with('message' , 'Pizza Updated Successfully!!');

    }

    public function destroy($id){
        Pizza::find($id)->delete();
        return redirect()->route('pizza.index')->with('message' , 'Pizza Deleted Successfully!!');

        
    }
}
