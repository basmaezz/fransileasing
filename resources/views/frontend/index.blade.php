@extends('layouts.app')
@section('content')

    <div class="car-section">
        <div class="" id="Layer_3">
            <div id="houses">
            </div>
            <div id="road">
            </div>
        </div>
        <div id="Layer_1">
            <img id="car" src="{{asset('front/assets/car1.png')}}" alt="Car image">
        </div>
        <div id="Layer_2">
            <img id="car2" src="{{asset('front/assets/car.png')}}" alt="Car image">
        </div>
    </div>

    <div class="page-section bottom-sec">
        <div class="container">
            <div class="text-center mt-5 mb-5">
                <a class="btn btn-primary btn-lg text-uppercase" href="{{route('apply')}}"> قـــدم طلبك الأن</a>

            </div>
            <table class="darkTable mt-5">
                <thead>
                <tr>
                    @foreach(\App\Models\Setting::all() as $setting)
                    <th>{{$setting->name}}</th>
                    @endforeach
{{--                    <th>فترة التمويل</th>--}}
{{--                    <th>هامش الربح</th>--}}
{{--                    <th>التأمين</th>--}}
{{--                    <th>الفسط الشهري</th>--}}
{{--                    <th>معدل النسبة السنوي</th>--}}
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach(\App\Models\Setting::all() as $setting)
                        <td>{{$setting->value}}</td>
{{--                    <td>SAR100.000</td>--}}
                    @endforeach
{{--                    <td>4 سنوات</td>--}}
{{--                    <td>4.99%</td>--}}
{{--                    <td>1.5%</td>--}}
{{--                    <td>2.599SAR</td>--}}
{{--                    <td>12.77%</td>--}}
                </tr>
                </tbody>
            </table>

        </div>
    </div>
@endsection
