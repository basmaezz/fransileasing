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
            <div class="text-center">
                    <div class="text-center mt-5">
                <a class="btn btn-primary btn-xl text-uppercase" href="form.html" target="_blank"> قـــدم طلبك الأن</a>

            </div>
                <h2 class="section-heading text-uppercase">ما نقدمه لك</h2>
                <h3 class="section-subheading">نقدم لك تسهيلات عديدة للحصول على سيارة</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="circle">
                        <span class="">0%</span>
                    </div>
                    <h4 class="my-3">دفعة أولى</h4>
                    <p class="">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</p>
                </div>
                <div class="col-md-4">
                    <div class="circle">
                        <span class="">0%</span>
                    </div>
                    <h4 class="my-3">هامش ربح</h4>
                    <p class="">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</p>
                </div>
                <div class="col-md-4">
                    <div class="circle">
                        <span class="">0%</span>
                    </div>
                    <h4 class="my-3">رسوم إدارية</h4>
                    <p class="">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه</p>
                </div>
            </div>
        

        </div>
    </div>

@endsection

