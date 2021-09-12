<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMajorRequest;
use App\Models\Major;
use App\Models\MajorCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $majors = Major::all();
        return view('admin.major.index', [
            'majors' => $majors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = MajorCategory::all();
        return view('admin.major.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMajorRequest $request, Major $major)
    {   
        $major = New Major;
        $major->category_id = $request->category_id;
        $major->name = $request->name;
        $major->description = $request->description;
        if ($request->hasFile('image')) {
            
            $pictureName = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('local')->putFileAs('public/major', $request->file('image'), $pictureName);
            $major->image = $pictureName;
        }
        $major->save();

        return redirect()->route('admin.major.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $major = Major::find($id);
        $categories = MajorCategory::all();
        return view('admin.major.edit', [
            'categories' => $categories,
            'major' => $major
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMajorRequest $request, $id)
    {
        $major = Major::find($id);
        $major->category_id = $request->category_id;
        $major->name = $request->name;
        $major->description = $request->description;
        if ($request->hasFile('image')) {
            
            $pictureName = time() . '.' . $request->image->getClientOriginalExtension();
            Storage::disk('local')->putFileAs('public/major', $request->file('image'), $pictureName);
            $major->image = $pictureName;
        }
        $major->save();

        return redirect()->route('admin.major.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $major = Major::find($id);
        $major->delete();

        
        return redirect()->route('admin.major.index');

    }
}
