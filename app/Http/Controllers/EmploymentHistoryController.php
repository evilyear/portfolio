<?php

namespace App\Http\Controllers;

use App\Models\EmploymentHistory;
use App\Http\Requests\StoreEmployment_HistoryRequest;
use App\Http\Requests\UpdateEmployment_HistoryRequest;

class EmploymentHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employment_histories = EmploymentHistory::all();

        return view('admin.employment_history.index', ["employment_histories" => $employment_histories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.employment_history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployment_HistoryRequest $request)
    {
        EmploymentHistory::create($request->all());
        return view('admin.employment_history.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(EmploymentHistory $employment_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmploymentHistory $employment_history)
    {
        return view('admin.employment_history.edit',["employment_history"=>$employment_history]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployment_HistoryRequest $request, EmploymentHistory $employment_history)
    {
        $employment_history->update($request->all());
        return Redirect(route("employment_history.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmploymentHistory $employment_history)
    {
        $employment_history->delete();
        return Redirect(route("employment_history.index"));
    }
}
