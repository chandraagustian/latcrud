<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ImagesloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
 

     */



    public function page()
    {
        return view ('imagesloaded/pages');
    }
public function load()
    {
        return view ('imagesloaded/imagesload');
    }
public function index()
    {
   
       
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $product = new Product(array(
      'name' => $request->get('name'),
      'sku'  => $request->get('sku')
    ));

    $product->save();

    $imageName = $product->id . '.' . 
        $request->file('image')->getClientOriginalExtension();

    $request->file('image')->move(
        base_path() . '/public/images/catalog/', $imageName
    );

    return \Redirect::route('admin.products.edit', 
        array($product->id))->with('message', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
