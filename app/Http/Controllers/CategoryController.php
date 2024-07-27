<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories= Category::latest()->paginate(5);
        return view('categoryf.index',
        [
         
         'categories' => $categories]);

   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoryf.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 $request->validate([
'name=>required|alpha',
'gender=>required',
'email=>required|alpha',
'message=>required|alpha',

        ]);
        // Category::create($request->all());
        Category::create([
'name'=>$request->name,
'gender'=>$request->gender,
'email'=>$request->email,
'message'=>$request->message,

        ]);

        return redirect('categoryf')->withSuccess('data inserted sucessfully ');
        // return back()->withSuccess('data inserted sucessfully') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fetch_single_data = Category::find($id);

        return view('categoryf.show',compact('fetch_single_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $fetch_data)
    {
        // return $fetch_id;
        $fetch_data=Category::find($fetch_data);
        return view('categoryf.edit',compact('fetch_data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $category)
    {
        $request->validate([
            'name=>required|alpha',
            'gender=>required',
            'email=>required|alpha',
            'message=>required|alpha',
            
                    ]);
        $category=Category::Where('id',$category)->update([
'name'=>$request->name,
'gender'=>$request->gender,
'email'=>$request->email,
'message'=>$request->message,
        ]);


        return redirect('categoryf')->withSuccess('data updated sucessfully ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $del_id)
    {
        // return $del_id;
        Category::destroy($del_id);
        // Category::destroy(13,14);
        return back()->withSuccess('data deleted successfully');
    }
}
