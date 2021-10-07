<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.settings');
    }
    public function create()
    {
        return view('dashboard.admin.settings');
    }
    public function store(Request $request)
    {
//        dd($request->all());
        if(!is_array($request->get('name')) || !is_array($request->get('value'))){
            flash("Wrong values");
            redirect()->back();
        }
        $names = $request->get('name');
        $values = $request->get('value');
        foreach ($names as $k=>$item) {
            Setting::create([
                    'name' => $item,
                    'value' => $values[$k]
                  ]
            );
        }

        Alert::success('تم بنجاح', 'تم الحفظ');
        return redirect()->back();
    }
}
