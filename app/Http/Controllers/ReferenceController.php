<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use App\Http\Requests\StoreReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $references = Reference::all();
        return view('admin.reference.index', ["references" => $references]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reference.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReferenceRequest $request)
    {
        $data = $request->except(['_token']);
        
        if ($request->hasFile('image')) {
            // Mentsd el az eredeti képet
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);
    
            // Mentés az adatbázisba
            $reference = new Reference;
            $data["image"] = 'images/' . $filename;
        
            $reference->fill($data);
            $reference->save();
        }

        return view('admin.reference.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reference $reference)
    {
        return view('admin.reference.edit',["reference"=>$reference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReferenceRequest $request, Reference $reference)
    {
        $data = $request->except(['_token']);

        
        // Ellenőrizd, hogy valóban feltöltötték-e a képet
        if ($request->hasFile('image')) {
            // Töröld az eredeti képet a szerverről és az adatbázisból
            $oldImagePath = public_path($reference->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
            
            // Mentsd el az új képet
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);

            // Mentés az adatbázisba
            $data["image"] = 'images/' . $filename;
            $reference->update($data);
        }

        return Redirect(route("reference.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reference $reference)
    {
        $oldImagePath = public_path($reference->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        
        $reference->delete();
        return Redirect(route("reference.index"));
    }
}
