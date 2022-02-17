<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::latest()->paginate(5);
        return view('content.index',compact('content'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_content' => 'required',
            'order_content' => 'required',
            'icon_content' => 'required',
            'description_content' => 'required',
            'url_content' => 'required',
        ]);
  
        Content::create($request->all());
   
        return redirect()->route('content.index')
                        ->with('success','content created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
        $product = Content::find($id);   
        return view('content.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = Content::find($id);
        return view('content.edit',compact('product'));
    }  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_content' => 'required',
            'order_content' => 'required',
            'icon_content' => 'required|icon_content|mimes:jpeg,png,jpg|max:2048',
            'description_content' => 'required',
            'url_content' => 'required',
        ]);
        $file_name = time().'.'.$request->icon_content->extension();  
   
        $request->icon_content->move(public_path('images'), $file_name);

        Content::find($id)->update($request->all());
        return redirect()->route('content.index')
                        ->with('success','content created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();
  
        return redirect()->route('content.index')
                        ->with('success','Product deleted successfully');
    }
}
