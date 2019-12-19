<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(){
        //ELOUQUENT STYLE
        $res = Book::get();
        return view("show",['data'=>$res]);
    }

    public function add(Request $request){
        $data = new Book();
        $data->title = $request->title;
        $data->pengarang = $request->pengarang;
        $data->penerbit = $request->penerbit;
        $data->tahun = $request->tahun;
        
        $data->save();

        return redirect('/');
    }

    public function form_update($bookid){
        // $data = Book::where('id',$bookid)->get();
        $data = Book::find($bookid);
        return view("update",['data'=>$data]);
    }

    public function update($bookid, Request $request){
        $update = Book::find($bookid);
        $update->title = $request->title;
        $update->pengarang = $request->pengarang;
        $update->penerbit = $request->penerbit;
        $update->tahun = $request->tahun;
        
        $update->update();
        return redirect('/');
    }

    public function delete($bookid){
        $delete = Book::find($bookid);
        $delete->delete();

        return redirect('/');
    }
}
