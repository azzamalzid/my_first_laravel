<?php

namespace App\Http\Controllers;

use Illuminate\Htt;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\product;

class Productcontroller extends Controller
{
  
    public function index()
    {
        // $data = product::Paginate(1);
        // $data = product::latest()->Paginate(1);
        // $data = product::latest()->simplePaginate(1);

        return view('product.index', [
                    'prod' => product::all()
                ]);
    }

    
    public function create()
    {
        
        return view('product.create', [
            'last_product_id'=> product::latest()->first()
        ]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'prod_name'=> 'required',
            'prod_price' => ['required', 'integer'],
            'prod_details' => 'required'
        ]);

         $prod = new product();
        $prod->name = strip_tags($request->input('prod_name'));
        $prod->price = strip_tags($request->input('prod_price'));
        $prod->details = strip_tags($request->input('prod_details'));
        $prod->save();
        return redirect()->route('product.index');
        
        // $product = product::create($request->all());
        //  return redirect()->route('product.index')
        //  ->with('success','product added successflly') ;
    }

 
    public function show($product)
    {
        // $prod = product::find($product);
        // if($prod === false){
        //     \abort(404);
        // }
        // return view('product.show', [
        //     'prod' => $prod
        // ]);


        //// like previous check if data exist and send data to show page
        return view('product.show', [
            'prod' => product::findOrFail($product)
        ]);


        //// another way if it's like this
        // public function show(product $product)
        // return view('product.show', compact('product'));
    }

  
    public function edit($product)
    {
        return view('product.edit', [
            'prod' => product::findOrFail($product)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        $request->validate([
            'prod-name '=> 'required',
            'prod-price' => ['required', 'integer'],
            'prod-details' => 'required'
        ]);

         // $prod = product::findOrFail($product);
        // $prod->name = strip_tags($request->input('prod-name'));
        // $prod->price = strip_tags($request->input('prod-price'));
        // $prod->details = strip_tags($request->input('prod-details'));
        // $prod->save();
        // return redirect()->route('product.show', $product);

        $product = Product::create($request->all());
         return redirect()->route('product.show')
         ->with('success','product added successflly') ;
    }


    public function destroy($product)
    {
        $prod = product::findOrFail($product);
        $prod->delete();
        return redirect()->route('product.index');
    }





    ////// another function ////////

    // public function softDelete(  $id)
    // {
    //     $product = Product::find($id)->delete();
    //     return redirect()->route('product.index')
    //     ->with('success','product deleted successflly') ;
    // }

    // public function  deleteForEver(  $id)
    // {
    //     $product = Product::onlyTrashed()->where('id' , $id)->forceDelete();
    //     return redirect()->route('product.trash')
    //     ->with('success','product deleted successflly') ;
    // }

    // public function backFromSoftDelete(  $id)
    // {
    //     $product = Product::onlyTrashed()->where('id' , $id)->first()->restore() ;
    //   //  dd($product);
    //     return redirect()->route('product.index')
    //     ->with('success','product back successfully') ;
    // }
}
