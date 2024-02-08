<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{

    public function __construct() {
        // $this->middleware('checkUserType');
    }
    
    public function index(){
        $data['categories'] = Category::get();
        return view('admins.categories.index', $data);
    }

    public function create(){
        return view('admins.categories.create');
    }

    public function save(Request $request){
        $cat = new Category();
        $cat->name = $request->name;
        /* upload file here 
            Your code!

        */
        if($cat->save()){
            return response()->json([
                'status' => 200,
                'data' => $cat,
                'sms' => 'Data saved successfull.'
            ]);
            // return redirect()->route('category.index')->with('success', 'Category added successfully.');
        }else{
            return response()->json([
                'status' => 500,
                'data' => null,
                'sms' => 'Data not saved!'
            ]);
            // return redirect()->route('category.create')->with('error', 'Category not saved!');

        }
    }

    public function edit($id){
        $data['category'] = Category::find($id);
        // $data['category'] = Category::where('cat_id', $id)->first();
        return view('admins.categories.edit', $data);
    }

    public function update(Request $request){
        $cat = Category::find($request->id);
        $cat->name = $request->name;
        $cat->active = $request->active;
        if($cat->save()){
            return redirect()->route('category.index')->with('success', 'Category updated successfully.');
        }else{
            return redirect()->route('category.create')->with('error', 'Category not updated!');
        }
    }
   

}
