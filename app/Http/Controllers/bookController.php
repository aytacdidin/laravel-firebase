<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookStoreRequest;
use App\Models\book;

use Illuminate\Http\Request;

class bookController extends Controller
{
    public function index(){

        $books=book::NotDeleted()->get();

        return view('books.index',compact('books'));
    }
    public function create(){

        return view('books.create');
    }

    public function store(bookStoreRequest $request){

        $book = new book();
        $book->name =$request->name;
        $book->price =$request->price;
        $book->save();

        return redirect()->route('books.index');
    }

    public function edit($id){
        $book = book::NotDeleted()->findOrFail($id);
        return view('books.edit',compact('book'));
    }

    public function update(Request $request,$id){

        $book = book::NotDeleted()->findorFail($id);

        $book->name =$request->name;
        $book->price =$request->price;
        $book->save();

        return redirect()->route('books.index');
    }

    public function delete($id){
        $book = book::NotDeleted()->findOrFail($id)->update(['is_deleted'=> '1']);

        return redirect()->route('books.index');
    }
}
