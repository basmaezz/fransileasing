<?php

namespace App\Http\Controllers;

use App\Exports\OrdersExport;
use App\Http\Requests\OrderRequest;
use App\Models\Age;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\City;
use App\Models\Order;
use App\Models\User;
use App\Models\Year;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\Facades\DataTables;
use Alert;
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
       $carmodels = CarModel::where('car_id',$request->car_id) ->get();
        return response()->json([
            'carmodels' => $carmodels
        ]);
    }
    public function store(OrderRequest $request)
    {
        Order::create($request->all());
        Alert::success('تم بنجاح', 'تم تسجيل الطلب بنجاح');
        return redirect()->back();
    }

    public function getAll(Request $request,DataTables $dataTable)
    {

        if ($request->ajax()) {

            $data = Order::with('Car','City')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('City', function (Order $order) {
                    return $order->City->name;
                }) ->addColumn('Car', function (Order $order) {
                    return $order->Car->name;
                }) ->toJson();
           
        }
        return view('dashboard.admin.orders');
    }

    public function fileExport()
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new OrdersExport(), 'orders-collection.xlsx');
    }

}
