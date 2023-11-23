<?php

// namespace App\Http\Controllers;

// use App\Models\product;
// use Illuminate\Http\Request;

// class productController extends Controller
// {
//     public function index(){
        
//         $data = makanan::all();
//         $categories = Category::all();
//         $tags = Tag::all();
//         return view("admin.makanan", ["makanans" => $data, "categories" => $categories, "tags" => $tags]);
//     }

//     public function add(Request $request) {
//         $name = $request->name;
//         $price = $request->price;
//         $description = $request->description;
//         $category = $request->category;
//         $tag = $request->tag;

//         Makanan::create(["name"=> $name, "price"=>$price, "description"=>$description, "category_id"=>$category, "tag_id"=> $tag, "image" => ""]);

//         return redirect('/makanan');
//     }

//     public function edit ($id) {
//         $categories = Category::all();
//         $tags = Tag::all();
//         $data = Makanan::where("id", $id)->get();
//         $data = $data[0];

//         return view("pages.forms-edit_makanan", ["data" => $data, "categories" => $categories, "tags" => $tags, "type_menu" => 'forms']);
//     }

//     public function update(Request $request, $id) {
//         $name = $request->name;
//         $price = $request->price;
//         $description = $request->description;
//         $category = $request->category;
//         $tag = $request->tag;

//         Makanan::where("id", $id)->update(["name"=> $name, "price"=>$price, "description"=>$description, "category"=>$category, "tag"=> $tag]);

//         return redirect("/makanan");
//     }

//     public function delete($id){
//         Makanan::destroy($id);
//         return redirect("/makanan");

//     }


// }

