<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $data = $request->all();

            $request->validate([
                "title" => "required|string|max:80|unique:products",
                "type" =>[
                    "required",
                     Rule::in(["book","novel"])
                    // non capisco perchè non faccia
                ],
                "series" => "required|string|max:80",
                "sale_date" => "required|date",
                "description" => "required|string",
                "price" => "required|integer|min:1|max:100000",
                "image" => "nullable|url"
            ]
            );

            $newProduct = Product::create($data);

            // $newProduct = new Product();

            // $newProduct->title = $data["title"];
            // $newProduct->type = $data["type"];
            // $newProduct->series = $data["series"];
            // $newProduct->sale_date = $data["sale_date"];;
            // $newProduct->description = $data["description"];
            // $newProduct->price = $data["price"];

            // if(!empty($data['image'])){
            //     $newProduct->image = $data["image"];
            // }

            // $newProduct->save();


            return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::find($id);

        return view("products.show" , compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view("products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        $request->validate([
            "title" => "required|string|max:80|unique:products,title,{$product->id}",
            "type" =>[
                "required",
                 Rule::in(["book","novel"])
                // non capisco perchè non faccia
            ],
            "series" => "required|string|max:80",
            "sale_date" => "required|date",
            "description" => "required|string",
            "price" => "required|integer|min:1|max:100000",
            "image" => "nullable|url"
        ]
        );

            $product->save();

        return redirect()->route("products.show", $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route("products.index");


    }
}
