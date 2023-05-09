<?php

namespace App\Http\Controllers;

use App\Models\MainData;
use App\Http\Requests\StoreMainDataRequest;
use App\Http\Requests\UpdateMainDataRequest;

class MainDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $main_datas = MainData::all();

        return view('admin.main_data.index', ["main_datas" => $main_datas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.main_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMainDataRequest $request)
    {
        //$data = $request->except(['_token']);

        //$main_data = new MainData;
        //$main_data->fill($data);
        //dd($data);
        //$main_data->save();

        MainData::create($request->all());
        return view('admin.main_data.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(MainData $main_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainData $main_data)
    {
        return view('admin.main_data.edit',["main_data"=>$main_data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMainDataRequest $request, MainData $main_data)
    {
        $data = $request->except(['_token']);
        $main_data->update($data);
        return Redirect(route("main_data.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainData $main_data)
    {
        $main_data->delete();
        return Redirect(route("main_data.index"));
    }
}
