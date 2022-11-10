<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ["except" => ["index"]]);
    }

    public function index()
    {
        $data = array(
            'id' => "project",
            'project' => Project::orderBy('created_at', 'desc')->paginate(9)
        );
        return view('project.project')->with($data);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::all();
        return view('project.create', ['project' => $project]);
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
            'namaProject.required'    => 'Nama Project wajib diisi!',
            'imagePath.required'    => 'Wajib upload gambar!',
            'description.required'    => 'Deskripsi Project wajib diisi!',
            'namaProject.unique'      => 'Nama Project sudah ada!',
            'namaProject.min'     => 'Nama Project minimal memiliki :min karakter!',
            'namaProject.max'     => 'Nama Project maksimal memiliki :max karakter!',
            'imagePath.max'     => 'Ukuran file gambar terlalu besar! Maksimal ukuran gambar sebesar :max!',
            'imagePath.mimes'     => 'File gambar harus berupa format :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'required|image|mimes:jpg,png,jpeg|max:5000',
            'namaProject' => 'required|unique:projects|min:5|max:20',
            'description' => 'required'
        ],$messages);
        $project = new Project;
        $project->namaProject = $request->input('namaProject');
        $project->description = $request->input('description');
        if($request->hasfile('imagePath'))
        {
            $file = $request->file('imagePath');  
            $filenameFirst = $file->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $filename = $filenameUnik . '_' . time() . '.' . $extension;
            $file->move('storage/project/', $filename);
            $project->imagePath = $filename;
        }
        $project->save();
        return redirect('/project')->with(['success' => 'Data Project telah disimpan.']);

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
            'id' => "project",
            'project' => Project::find($id)
        );
        return view('project.show')->with($data);
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
            'id' => "project",
            'project' => Project::find($id)
        );
        return view('project.edit')->with($data);
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
            'namaProject.required'    => 'Nama Project wajib diisi!',
            'description.required'    => 'Deskripsi Project wajib diisi!',
            'namaProject.min'     => 'Nama Project minimal memiliki :min karakter!',
            'namaProject.max'     => 'Nama Project maksimal memiliki :max karakter!',
            'imagePath.max'     => 'Ukuran file gambar terlalu besar! Maksimal ukuran gambar sebesar :max!',
            'imagePath.mimes'     => 'File gambar harus berupa format :mimes!'
        ];
        $this -> validate($request,[
            'imagePath' => 'image|mimes:jpg,png,jpeg|max:5000',
            'namaProject' => 'required|min:5|max:20',
            'description' => 'required'
        ],$messages);
        $project = Project::find($id);
        $project->namaProject = $request->input('namaProject');
        $project->description = $request->input('description');
        if($request->hasfile('imagePath'))
        {
            $destination = 'storage/project/'.$project->imagePath;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('imagePath');  
            $filenameFirst = $file->getClientOriginalName();
            $filenameUnik = pathinfo($filenameFirst, PATHINFO_FILENAME);
            $extension = $request->file('imagePath')->getClientOriginalExtension();
            $filename = $filenameUnik . '_' . time() . '.' . $extension;
            $file->move('storage/project/', $filename);
            $project->imagePath = $filename;
        }
        $project->update();
        return redirect('project')->with(['update' => 'Data Project berhasil di update.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $project = Project::find($id);
    //     $project->delete();
    //     $image = Project::findOrFail($id);
    //     return redirect('project')->with(['berhasil' => 'Data Project berhasil di hapus.']);
    // }

    public function hapus($id)
    {
        $project = Project::find($id);
        $image = Project::findOrFail($id);
        $destination = 'storage/project/'.$project->imagePath;
        File::delete($destination);
        $project->delete();
        return redirect('/project')->with(['berhasil' => 'Data Project berhasil di hapus.']);
    }
}
