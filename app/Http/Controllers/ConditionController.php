<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;
use Alert;

class ConditionController extends Controller
{
    public function index()
    {
        $conditions=Condition::all();
        return view('dashboard.admin.conditions.conditions',compact('conditions'));
    }

    public function create()
    {
        return view('dashboard.admin.conditions.create');
    }
    public function store(Request $request)
    {

        Condition::create([
            'name'=>$request->name]);
        Alert::success('تم بنجاح', 'تم التسجيل');
        return redirect()->route('conditions');
    }
    public function getAll()
    {
        $conditions=Condition::all();
        return view('frontend.conditions',compact('conditions'));
    }
    public function view()
    {
        $conditions=Condition::all();
        return view('dashboard.admin.conditions.edit',compact('conditions'));
    }
    public function update(Request  $request , Condition $condition)
    {
        Condition::update([
            'name'=>$request->name]);
        Alert::success('تم بنجاح', 'تم تسجيل الطلب بنجاح');
        return redirect()->back();
    }

}
