<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainData;
use App\Models\Skill;
use App\Models\SkillElement;
use App\Models\EmploymentHistory;
use App\Models\Education;
use App\Models\Language;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$main_datas =  MainData::all();

        $current_datas = [];
        $current_datas["name"] =  MainData::getTitleByKey('name', app()->currentLocale());
        $current_datas["position"] =  MainData::getTitleByKey('position', app()->currentLocale());
        $current_datas["intro_description"] =  MainData::getTitleByKey('intro_description', app()->currentLocale());
        $current_datas["birthdate"] =  MainData::getTitleByKey('birthdate', app()->currentLocale());
        $current_datas["birthplace"] =  MainData::getTitleByKey('birthplace', app()->currentLocale());
        $current_datas["facebook"] =  MainData::getTitleByKey('facebook', app()->currentLocale());
        $current_datas["linkedin"] =  MainData::getTitleByKey('linkedin', app()->currentLocale());
        $current_datas["about_me"] =  MainData::getTitleByKey('about_me', app()->currentLocale());
        $current_datas["cv_pdf"] =  MainData::getTitleByKey('cv_pdf', app()->currentLocale());
        $current_datas["email"] =  MainData::getTitleByKey('email', app()->currentLocale());
        $current_datas["phone"] =  MainData::getTitleByKey('phone', app()->currentLocale());
        $current_datas["adress"] =  MainData::getTitleByKey('adress', app()->currentLocale());
        $current_datas["resume_description"] =  MainData::getTitleByKey('resume_description', app()->currentLocale());
        $current_datas["copyright"] =  MainData::getTitleByKey('copyright', app()->currentLocale());
        
        $skills = Skill::all();
        $skill_elements = SkillElement::orderBy('skill_id', 'desc')->get();
        $employment_histories = EmploymentHistory::all();
        $educations = Education::all();
        $languages = Language::all();
        
        return view('front.main.index', [
            "current_datas"=>$current_datas, 
            "skills"=>$skills, 
            "skill_elements"=>$skill_elements,
            "employment_histories"=>$employment_histories,
            "educations"=>$educations,
            "languages"=>$languages,
        ]);
    }

}
