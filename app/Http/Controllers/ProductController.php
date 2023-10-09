<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products =Product::all();
        return view ('products.index', ['products'=> $products]);

    }
    public function create(){
        return view('products.create');

    }
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'qty' => 'required',
        'price' => 'required',
        'description' => 'required',
    ]);

    $user = Product::create([
        'name' => $request->input('name'),
        'qty' => $request->input('qty'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),

    ]);

    return redirect()->route('product.index')->withSuccess('done');
}
public function edit(Product $product){
return view ('products.edit' ,['product' => $product]);
}
public function update(Product $product ,Request $request){
    $request->validate([
        'name' => 'required',
        'qty' => 'required',
        'price' => 'required',
        'description' => 'required',
    ]);

    $user = $product->update([
        'name' => $request->input('name'),
        'qty' => $request->input('qty'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),

    ]);
$product -> update();
    return redirect(route('product.index'))->with ('success','product updaated successfully');
}
public function destroy(Product $product){
    $product -> delete();
    return redirect(route('product.index'))->with ('success','product deleted successfully');
}
}
