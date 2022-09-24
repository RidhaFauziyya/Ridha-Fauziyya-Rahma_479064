<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "about",
            'about' => About::all()
        );
        return view('about.about')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $about = About::all();
        return view('about.create', ['about' => $about]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'namaAktifitas.required'    => 'Nama Aktifitas wajib diisi!',
            'imagePath.required'    => 'Wajib upload gambar!',
            'description.required'    => 'Deskripsi Aktifitas wajib diisi!',
            'namaAktifitas.unique'      => 'Nama Aktifitas sudah ada!',
            'namaAktifitas.min'     => 'Nama Aktifitas minimal memiliki :min karakter!',
            'namaAktifitas.max'     => 'Nama Aktifitas maksimal memiliki :max karakter!',
            'imagePath.max'     => 'Ukuran file gambar terlalu besar! Maksimal ukuran gambar sebesar :max!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|file|max:5000',
            'namaAktifitas' => 'required|unique:abouts|min:5|max:20',
            'description' => 'required'
        ],$messages);
        $about = new About;
        $about->namaAktifitas = $request->input('namaAktifitas');
        $about->description = $request->input('description');
        $file = $request->file('imagePath');
        $filename = $file->getClientOriginalName();
        $file->move('storage/about/', $filename);
        $about->imagePath = $filename;
        $about->save();
        return redirect('/about')->with(['success' => 'Data Aktivitas telah disimpan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "about",
            'about' => About::find($id)
        );
        return view('about.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "about",
            'about' => About::find($id)
        );
        return view('about.edit')->with($data);
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
        $messages = [
            'namaAktifitas.required'    => 'Nama Aktifitas wajib diisi!',
            'description.required'    => 'Deskripsi Aktifitas wajib diisi!',
            'namaAktifitas.min'     => 'Nama Aktifitas minimal memiliki :min karakter!',
            'namaAktifitas.max'     => 'Nama Aktifitas maksimal memiliki :max karakter!',
            'imagePath.max'     => 'Ukuran file gambar terlalu besar! Maksimal ukuran gambar sebesar :max!'
        ];
        $this -> validate($request,[
            'imagePath' => 'max:5000',
            'namaAktifitas' => 'required|min:5|max:20',
            'description' => 'required'
        ],$messages);
        $about = About::find($id);
        $about->namaAktifitas = $request->input('namaAktifitas');
        $about->description = $request->input('description');
        if($request->hasfile('imagePath'))
        {
            $destination = 'storage/about/'.$about->imagePath;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('imagePath');
            $filename = $file->getClientOriginalName();
            $file->move('storage/about/', $filename);
            $about->imagePath = $filename;
        }
        $about->update();
        return redirect('about')->with(['update' => 'Data Aktifitas berhasil di update.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $about = About::find($id);
    //     $about->delete();
    //     $image = About::findOrFail($id);
    //     return redirect('about')->with(['berhasil' => 'Data Aktifitas berhasil di hapus.']);
    // }

    public function hapus($id)
    {
        $about = About::find($id);
        $image = About::findOrFail($id);
        $destination = 'storage/about/'.$about->imagePath;
        File::delete($destination);
        $about->delete();
        return redirect('/about')->with(['berhasil' => 'Data Aktifitas berhasil di hapus.']);
    }
}
