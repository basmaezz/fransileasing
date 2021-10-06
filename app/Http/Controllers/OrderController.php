<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Http\Requests\OrderRequest;
use App\Models\Age;
use App\Models\Car;
use App\Models\CarModels;
use App\Models\City;
use App\Models\Order;
use App\Models\User;
use App\Models\Year;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index()
    {
        $cars=Car::all();
        $cities=City::all();
        $years=Year::all();
       return view('frontend.apply',compact(['cars','cities','years']));
    }

    public function getModel(Request $request)
    {
       $carmodels = CarModels::where('car_id',$request->car_id) ->get();
        return response()->json([
            'carmodels' => $carmodels
        ]);
    }
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'tel' => 'required',
        ]);
        Order::create($request->all());

        return redirect()->back()->with('success','تم تقديم الطلب بنجاح');
    }

    public function getAll(Request $request)
    {

        if ($request->ajax()) {

            $data = Order::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Active</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('dashboard.admin.orders');
    }

    public function fileExport()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new OrdersExport(), 'orders-collection.xlsx');
    }

}
