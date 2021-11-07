<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Http\Resources\AuthorResource;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editForm($id)
    {
        $data = Authors::where('id', $id)->first();
        return view('layouts.crudPengarang.editPengarang', compact('data'));
    }
    public function detailAuthor($id)
    {
        $data = Authors::with('book')->where('id', $id)->first();

        return view('pengarang.detailPengarang', compact('data'));
    }
    public function index()
    {
        $notFound = "";
        $author = Authors::latest();

        if (count($author->get()) == 0) {
            $notFound = "Penagarang tidak ditemukan";
        }

        return view('pengarang.index', [
            'halaman' => 'pengarang',
            'pengarang' => $author->filter(request(['search']))->paginate(8)->withQueryString(),
            'notfound' => $notFound
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function indexForm()
    {
        return view('layouts.crudPengarang.addPengarang', [
            'halaman' => 'pengarang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //id, name, date_of_birh, place_of_birth, gender, email, hp, create_at, update_at.
    {

        try {
            Authors::create([
                'name' => $request->name,
                'date_of_birth' => $request->date_of_birth,
                'place_of_birth' => $request->place_of_birth,
                'gender' => $request->gender,
                'author_description' => $request->author_description,
                'author_image' => $request->file('author_image')->store('author-image')
            ]);
            $request->session()->flash('successTambah', 'Author berhasil di tambah!');
            return redirect('/pengarang');
        } catch (Exception $ex) {
            $request->session()->flash('gagalTambah', 'Author gagal di tambah! error');
            return redirect('/pengarang');
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
        //$data = Authors::find($id);
        $data = Authors::with('book')->find($id);
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
    public function update(Request $request, $id)
    {
        try {
            $data = Authors::find($id);

            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                if ($data->author_image) {
                    Storage::delete($data->author_image);
                }
                $path = $request->file('image')->store('author-image');
                $data->author_image = $path;
            }
            $data->name = $request->name;
            $data->date_of_birth = $request->date_of_birth;
            $data->place_of_birth = $request->place_of_birth;
            $data->gender = $request->gender;
            $data->author_description = $request->author_description;
            $data->save();
            return redirect('/pengarang')->with('statusSuccess', 'Pengarang berhasil di Edit');
        } catch (Exception $ex) {
            return redirect('/pengarang')->with('statusFailed', 'Pengarang gagal di Edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authors $author, $id)
    {
        try {
            $data = Authors::find($id);
            Authors::destroy($id);
            if ($data->author_image) {
                Storage::delete($data->author_image);
            }
            return redirect('/pengarang')->with('statusDeleteSuccess', 'Pengarang berhasil dihapus !');
        } catch (Exception $ex) {
            return redirect('/pengarang')->with('statusDeleteFailed', 'Pengarang gagal dihapus / terjadi kesalahan !');
        }
    }
}
