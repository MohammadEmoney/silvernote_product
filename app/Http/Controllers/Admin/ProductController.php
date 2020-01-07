<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Uploads;
use App\Http\Traits\Delete;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use Uploads, Delete;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->bg_crop, $request->crop);
        $this->validate(request(), [
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'category_id' => 'required|integer',
            'image' => 'required|image|max:3096', // Max size 3Mb
            // 'gallery' => 'image|max:3096',
            'add_to_home' => 'sometimes',
            'position' => 'required_with:add_to_home,on'
        ]);

        $user_id = auth()->user()->id;
        $image = '';
        $gallery = '';
        $file = '';
        $position = 1;
        $add_to_home = $request->has('add_to_home') ? true : false;

        if($request->position){
            $position = $request->position;
        }

        if($request->has('image')){
            $image = $this->uploadImage($request->image, Product::class, $request->crop);
        }

        if($request->has('bg_img')){
            $bgImage = $this->uploadImage($request->bg_img, Product::class, $request->bg_crop);
        }
        // dd($bgImage);

        if($request->has('gallery')){
            $gallery = $this->uploadGallery($request->gallery, Product::class);
        }

        if($request->has('zip_files')){
            $file = $this->uploadeFilesAndZip($request->zip_files, Product::class);
        }

        $data = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
            'user_id' => $user_id,
            'image' => $image,
            'bg_img' => $bgImage,
            'file' => $file,
            'gallery' => json_encode($gallery),
            'add_to_home' => $add_to_home,
            'position' => $position,
        ];

        Product::create($data);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate(request(), [
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'discount' => 'nullable|integer',
            'category_id' => 'required|integer',
            'image' => 'required|image|max:3096', // Max size 3Mb
            // 'gallery' => 'image|max:3096',
            // 'add_to_home' => 'nullable|boolean',
            'position' => 'required_if:add_to_home,true|integer'
        ]);

        $user_id = auth()->user()->id;
        $image = '';
        $gallery = '';
        $add_to_home = $request->has('add_to_home') ? true : false;

        if($request->has('image')){
            $image = $this->uploadImage($request->image, Product::class, $request->bg_crop);
        }else {
            $image = $product->image;
        }

        if($request->has('bg_img')){
            $bg_img = $this->uploadImage($request->bg_img, Product::class, $request->bg_crop);
        }else {
            $bg_img = $product->bg_img;
        }

        if($request->has('zip_file')){
            $file = $this->uploadImage($request->file, Product::class);
        }else {
            $file = $product->file;
        }

        if($request->has('gallery')){
            $gallery = $this->uploadGallery($request->gallery, Product::class);
        }else {
            $gallery = $product->gallery;
        }

        $data = [
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
            'user_id' => $user_id,
            'image' => $image,
            'bg_img' => $bg_img,
            'file' => $file,
            'gallery' => json_encode($gallery),
            'add_to_home' => $add_to_home,
            'position' => $request->position,
        ];

        $product->update($data);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $img = $this->deleteFile($product->image);
        $bgImg = $this->deleteFile($product->bg_img);
        $file = $this->deleteFile($product->file);
        $glry = $this->deleteFiles($product->gallery);

        if($img && $file && $glry && $bgImg){
            $product->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

    public function addToHome()
    {
        $products = Product::homeProducts();
        return view('admin.products.home', compact('products'));
    }

    public function updateAddToHome(Request $request, Product $product)
    {
        $status = ($request->checkbox == "true") ? true : false;
        $product->update(['add_to_home' => $status]);
        return response()->json( $product );
    }

    public function updatePosition(Request $request, Product $product)
    {
        $product->update(['position' => (int)$request->position]);
        return response()->json( $product );
    }

    public function deleteImage(Request $request, Product $product)
    {
        $images = [];
        foreach(json_decode($product->gallery) as $image){
            if ($image == $request->src) {
                if(file_exists(public_path() . $image)){
                    unlink(ltrim($image, "/"));
                }
                continue;
            }
            else{
                $images[] = $image;
            }
        }

        $product->update(['gallery' => json_encode($images)]);
        return response()->json(['success' => true]);
    }
}
