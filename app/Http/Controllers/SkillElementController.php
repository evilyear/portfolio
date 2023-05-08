<?php

namespace App\Http\Controllers;

use App\Models\SkillElement;
use App\Models\Skill;
use App\Http\Requests\StoreSkillElementRequest;
use App\Http\Requests\UpdateSkillElementRequest;

class SkillElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill_elements = SkillElement::all();
       
        return view('admin.skill_element.index', ["skill_elements" => $skill_elements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $skills = Skill::all();
        return view('admin.skill_element.create',["skills"=> $skills]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillElementRequest $request)
    {
        $data = $request->except(['_token']);

        $skill_element = new SkillElement;
        $skill_element->fill($data);
        $skill_element->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(SkillElement $skill_element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SkillElement $skill_element)
    {
        $skills = Skill::all();
        return view('admin.skill_element.edit',["skill_element"=>$skill_element,"skills"=> $skills]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillElementRequest $request, SkillElement $skill_element)
    {
        $data = $request->except(['_token']);
        $skill_element->update($data);
        return Redirect(route("skill_element.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SkillElement $skill_element)
    {
        $skill_element->delete();
        return Redirect(route("skill_element.index"));
    }
}
