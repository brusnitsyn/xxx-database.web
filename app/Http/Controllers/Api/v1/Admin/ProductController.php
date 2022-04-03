<?php

namespace App\Http\Controllers\Api\v1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Products\ProductStoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\ImageUpload;
use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;

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
        // $refactoringColors = array();
        // foreach ($products as $product) {
        //     foreach ($product->colors as $color) {
        //         array_push($refactoringColors, $color->color);
        //     }
        // }
        // $products->colors = array();
        // array_push($products->colors, $refactoringColors);
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        $request->validated();

        $createdProduct = Product::create([
            'name' => $request->name,
            'manufacturer' => $request->manufacturer,
            'material' => $request->material,
            'weight' => $request->weight,
            'article' => $request->article,
            'cost' => $request->cost,
            'description' => $request->description,
            'image_url' => $request->image_url,
            'category_id' => $request->category['id'],
        ]);

        if ($request->colors) {
            foreach ($request->colors as $color) {
                // $productColors = new ProductColor;
                // $productColors->product_id = $createdProduct->id;
                // $productColors->color_id = $color['id'];
                // $productColors->save();
            }
        }

        return new ProductResource($createdProduct);
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
