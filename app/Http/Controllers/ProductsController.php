<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function welcome(){
        $products = Product::latest()->get();
        return view('welcome',compact('products'));
    }

        public function index(){
        $products = Product::all();
                  return view('accounts/admins/products/index', compact('products'));
    }

    public function create() {
          return view('accounts/admins/products/create');
    }

    public function store(Request $request)
{
    // validate the form data
    $validatedData = $request->validate([
        'thumbnail' => 'required',
        'name' => 'required|string',
        'verse' => 'required|string',
        'price' => 'required|numeric',
    ]);

    // create a new product using the validated data
    $product = new Product();
    $product->thumbnail = $validatedData['thumbnail'];
    $product->name = $validatedData['name'];
    $product->verse = $validatedData['verse'];
    $product->price = $validatedData['price'];
    $product->save();

    // redirect back to the form with a success message
    return redirect()->back()->with('success', 'Product created successfully.');
}

      public function destroy(Product $product)
      {
        $product->delete();
        return back()->with('success', 'Product has been deleted');
      }
}
