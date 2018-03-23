<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Нүүр хуудсын хэсэг
        $products = \App\Product::orderby('created_at', 'desc')->get();
        return view('products.index',[
                'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Шинээр үүсгэх
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Бүртгэх

        $model = new \App\Product;
        $model->name = $request->input('name');
        $model->too = $request->input('too');
        $model->price = $request->input('price');
        $model->description = $request->input('description');

        $model->save();

        return redirect('product');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Харах
        $model = \App\Product::findOrFail($id);
        return view('products.show', [
            'model' => $model,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Засах
        $model = \App\Product::findOrFail($id);
        return view('products.edit', [
            'model' => $model,
        ]);
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
        $model = \App\Product::findOrFail($id);
        $model->name = $request->input('name');
        $model->too = $request->input('too');
        $model->price = $request->input('price');
        $model->description = $request->input('description');

        $model->save();

        return redirect()->to('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Устгах
        \App\Product::findOrFail($id)->delete();

        return redirect()->to('product');
    }
}
