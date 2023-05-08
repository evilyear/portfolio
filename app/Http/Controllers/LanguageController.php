<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();

        return view('admin.language.index', ["languages" => $languages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLanguageRequest $request)
    {
        $data = $request->except(['_token']);

        $language = new Language;
        $language->fill($data);
        $language->save();

        return view('admin.language.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        return view('admin.language.edit',["language"=>$language]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $data = $request->except(['_token']);
        $language->update($data);
        return Redirect(route("language.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return Redirect(route("language.index"));
    }
}
