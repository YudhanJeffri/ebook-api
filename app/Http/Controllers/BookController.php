<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\BookResource;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
    	$books = DB::table('book')->get();
    	return [
            'status' => '200 OK',
            'message' => 'data terload',
            'data' => $books,
        ];
        // $books = Book::paginate(20);
        // return BookResource::collection($books);
    }
    public function store(Request $request)
    // title, description. author. publisher. date_of_issue
    {
        $bookStore = new Book;
        $bookStore->title = $request->title;
        $bookStore->description = $request->description;
        $bookStore->author = $request->author;
        $bookStore->publisher = $request->publisher;
        $bookStore->date_of_issue = $request->date_of_issue;
        $bookStore->save();
        return [
            'status' => '200 OK',
            'message' => 'Data berhasil ditambah',
            'data' => $bookStore,
        ];  
    }
    
    public function bookId($id){
        $book = Book::find($id);
        if($book == null){
            return [
                'status' => '200 OK',
                'message' => "Tidak ada data dengan id $id",    
            ];   
        } else {
        return [
            'status' => '200 OK',
            'message' => 'Data terload',
            'data' => $book,
        ];   
        }
    }
    public function update(Request $request, $id, Book $book){
        $book = Book::find($id);
        if($book == null){
            return [
                'status' => '200 OK',
                'message' => "Tidak ada data dengan id $id",    
            ];   
        } else {
            $book->update($request->all());
            return response([
                'data' => new BookResource($book), 
                'message' => 'Update successfully',
                'status' => '200 OK'],
                 200);
        }
        // $books = Book::findOrFail($id);
        // $books->title = $request->title;
        // $books->description = $request->description;
        // $books->author = $request->author;
        // $books->publisher = $request->publisher;
        // $books->date_of_issue = $request->date_of_issue;
        // if($books->save()){
        //     return new BookResource($books);
        // }
        
    }

    public function delete($id){
        $book = Book::find($id);
        if($book == null){
            return [
                'status' => '200 OK',
                'message' => "Tidak ada data dengan id $id",    
            ];   
        } else {
            $book->delete();
            return response([
                'data' => new BookResource($book), 
                'message' => 'Delete successfully',
                'status' => '200 OK'],
                 200);
        }
    }
}
