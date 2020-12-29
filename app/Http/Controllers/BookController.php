<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use DB;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
        $new_search = $r->search;
      
        $data['records'] = DB::table('books')->where('isbn','like','%'.$new_search.'%')->orderby('id','desc')->get();
        return view('home',$data);

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
           return view('insert');
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
                      'title'=>'required',
                      'discription'=>'required',
                      'author'=>'required',
                      'price'=>'required',
                      'isbn'=>'required',
                      'image'=>'required|mimes:jpg,png',
               ]);
               $filename = time(). "." .$request->image->extension();
               $request->image->move(public_path('images'),$filename);
               book::create([
                'title' => $request->title,
                'discription' => $request->discription,
                'author' => $request->author,
                'price' => $request->price,
                 'isbn' => $request->isbn,
                 'image' => $filename, 
               ]);
                return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        return view('view',['record'=>$book]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
     
        $data['record'] = $book;
         return view('edit' ,$data);
                   
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {

        $request->validate([
            'title'=>'required',
            'discription'=>'required',
            'author'=>'required',
            'price'=>'required',
            'isbn'=>'required',
           
     ]);

     book::find($book->id)->update([
      'title' => $request->title,
      'discription' => $request->discription,
      'author' => $request->author,
      'price' => $request->price,
       'isbn' => $request->isbn,
     
     ]);
      return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
  
         $book->delete();
          return redirect()->route('book.index');
            
    }
}
