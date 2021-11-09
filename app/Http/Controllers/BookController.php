<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\BookResource;
use App\Models\Authors;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailBook($id)
    {
        $data = Book::with('authors')->where('id', $id)->first();

        return view('layouts.detailBook', compact('data'));
    }
    public function index()
    {
        $notFound = "";
        $data = Book::latest();
        $filter = $data->filter(request(['search']))->paginate(8)->withQueryString();

        if (count($data->get()) == 0) {
            $notFound = "Buku tidak ditemukan";
        }

        return view('buku.index', [
            'halaman' => 'book',
            'book' => $filter,
            'notfound' => $notFound
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // title, description. author. publisher. date_of_issue
    {
        $request->validate([
            "author_id" => ['required', 'numeric'],
        ]);

        $author = Authors::where('id', $request->author_id);
        if (count($author->get()) == 0) {
            $request->session()->flash('statusAuthor', 'Pengarang tidak di temukan!');
            return redirect('/addBook');
        } else {
            try {
                Book::create([
                    "title" => $request->title,
                    "description" => $request->description,
                    "book_image" => $request->file('image')->store('book-image'),
                    "publisher" => $request->publisher,
                    "author_id" => $request->author_id,
                    "count_book" => $request->count_book,
                    "date_of_issue" => $request->date_of_issue,
                ]);
                $request->session()->flash('successTambah', 'Buku berhasil di tambah!');
                return redirect('/');
            } catch (Exception $ex) {
                $request->session()->flash('gagalTambah',  $ex->getMessage());
                return redirect('/');
            }
        }
    }

    public function indexForm()
    {
        $author = Authors::latest();
        if (count($author->get()) == 0) {

            return view('layouts.crud.addBook', [
                'halaman' => 'book',
                'author' => "",
            ]);
        } else {
            $author = Authors::get();
            return view('layouts.crud.addBook',  [
                'halaman' => 'book',
                'author' => $author
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Book::with('authors')->find($id);
        if ($data == null) {
            return response([
                'status' => 404,
                'message' => "Tidak ada data dengan id $id",
            ], 404);
        } else {
            return response([
                'status' => 200,
                'message' => 'Data terload',
                'data' => $data,
            ], 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function editForm($id)
    {
        $data = Book::where('id', $id)->first();

        $author = Authors::latest();
        if (count($author->get()) == 0) {
            return view('layouts.crud.editBook',  [
                'halaman' => 'book',
                'author' => "",
                'data' => $data
            ]);
        } else {
            $author = Authors::get();
            return view('layouts.crud.editBook',  [
                'halaman' => 'book',
                'author' => $author,
                'data' => $data
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        $data = Book::find($id);
        $validatedData = $request->validate([
            'author_id' => ['required', 'numeric'],
        ]);

        $author = Authors::where('id', $request->author_id);
        if (count($author->get()) == 0) {
            $request->session()->flash('statusAuthor', 'Pengarang tidak di temukan!');
            return redirect('/editBook/' . $id);
        } else {
            try {
                if ($request->hasFile('image')) {
                    $request->validate([
                        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ]);
                    if ($data->book_image) {
                        Storage::delete($data->book_image);
                    }
                    $path = $request->file('image')->store('book-image');
                    $data->book_image = $path;
                }
                $data->title = $request->title;
                $data->description = $request->description;
                $data->publisher = $request->publisher;
                if ($validatedData) {
                    $data->author_id = $request->author_id;
                }
                $data->count_book = $request->count_book;
                $data->date_of_issue = $request->date_of_issue;
                $data->save();
                return redirect('/')->with('successEdit', 'Buku berhasil di Edit!');
            } catch (Exception $ex) {
                $request->session()->flash('gagalEdit',  $ex->getMessage());
                return redirect('/');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Book $book, $id)
    {
        try {
            Book::destroy($id);
            if ($book->book_image) {
                Storage::delete($book->book_image);
            }
            return redirect('/')->with('statusDeleteSuccess', 'Buku berhasil dihapus !');
        } catch (Exception $ex) {
            return redirect('/')->with('statusDelete', 'Buku gagal dihapus / terjadi kesalahan !');
        }
    }
    public function landingPage()
    {
        return view('landingPage.landing', [
            'halaman' => 'book',
        ]);
    }
}
