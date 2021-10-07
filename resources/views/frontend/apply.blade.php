@extends('layouts.app')
@section('content')
    <section class="page-section" id="contact" dir="rtl">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">قدم طلبك</h2>
                <h3 class="section-subheading">يسعد السعودي الفرنسي للتمويل التأجيري (SFL) بخدمتكم
                </h3>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{route('store-order')}}" method="post">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="name">الإسم </label>
                            <input class="form-control" id="name" type="text" placeholder="الإسم *"
                                   data-sb-validations="required"name="name"/>
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="phone">رقم الجوال</label>
                            <input class="form-control" id="tel" type="tel" placeholder="رقم الجوال *"
                                   data-sb-validations="required" name="tel"/>
{{--                            <div class="invalid-feedback" data-sb-feedback="phone:required">يرجى إدخال رقم الجوال</div>--}}
                            @error('tel')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="city">المدينة</label>
                            <select class="form-select" id="city" aria-label="City" name="city_id">
                                <option > المدينه</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            @error('city_id')<span class="text-danger">{{ $message }}</span>@enderror

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label d-block">الراتب الشهري</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input kchecked" id="salary" type="checkbox" name="salary"
                                       data-sb-validations="" value="1" />
                                <label class="form-check-label" for="salary">الراتب الشهري   ١٠ الاف ريال فاكثر</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label d-block">عداد المركبة </label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input kchecked" id="vehicle" type="checkbox" name="vehicle"
                                       data-sb-validations="" value="1" />
                                <label class="form-check-label" for="counter">عداد المركبة أقل من او يساوي 25 الف
                                    كم</label>
                                @error('vehicle')<span class="text-danger">{{ $message }}</span>@enderror

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="monthlyExpenses"> الالتزامات الشهرية</label>
                            <input class="form-control" id="monthlyExpenses" type="text" placeholder="الالتزامات الشهرية"
                                   data-sb-validations="required" name="monthly"/>
                            @error('monthly')<span class="text-danger">{{ $message }}</span>@enderror

                            {{--                            <div class="invalid-feedback" data-sb-feedback="monthlyExpenses:required">يرجى إدخال--}}
{{--                                 الالتزامات الشهرية--}}
{{--                            </div>--}}
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="ModelYear">سنة الصنع</label>
                            <select class="form-select" id="ModelYear" aria-label="CitModelYeary" name="year_id">
                                @foreach($years as $year)
                                    <option value="{{$year->id}}">{{$year->name}}</option>
                                @endforeach
                            </select>
                            @error('year_id')<span class="text-danger">{{ $message }}</span>@enderror

                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">

                            <label class="form-label" for="vehicle">نوع السيارة</label>
                            <select class="form-select vehicle-select " id="vehicle-select" aria-label="Vehicle" name="car_id">
                                <option >نوع السياره</option>
                                @foreach ( $cars as $car)
                                    <option value="{{$car->id}}">{{$car->name}}</option>
                                @endforeach
                            </select>
                            @error('car_id')<span class="text-danger">{{ $message }}</span>@enderror

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label" for="model">موديل السيارة</label>
                            <select class="form-select vehicle-model" id="vehicle-model" aria-label="Model" name="car_models_id">
                                <option value="All cars">موديل السيارة</option>
                            </select>
                            @error('car_models_id')<span class="text-danger">{{ $message }}</span>@enderror

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-check form-check-inline policy">
                                <input class="form-check-input kchecked" id="agree" type="checkbox" name="agree" />
                                <label class="form-check-label" for="agree">قرأت الشروط والاحكام<!--<a
                                        href="{{route('conditions')}}" style="color: yellow;">الشروط والأحكام</a>--> </label>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">تم إرسال البيانات بنجاح</div>
                    </div>
                </div>

                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">حدث خطأ أثناء الإرسال</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit" >تأكيد وإرسال
                    </button>
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {

            $('#vehicle-select').on('change', function (e) {
                var car_id = e.target.value;

                $.ajax({
                    url: "{{ route('getModel') }}",
                    type: "GET",
                    data: {
                        car_id: car_id
                    },
                    success: function (data) {

                        $('#vehicle-model').empty();
                          // console.log(data);
                        $.each(data.carmodels, function (index, carmodel) {
                            $('#vehicle-model').append('<option value="' + carmodel.id + '">' + carmodel.name + '</option>');
                        })
                    }
                })
            });
        });

        $(document).ready(function () {
            var submit_btn = document.querySelector('#submitButton')
            agree.onchange = function (e) {
                if (vehicle.checked && salary.checked && agree.checked) {
                    submit_btn.classList.remove('disabled')
                }
            }
            vehicle.onchange = function (e) {
                if (vehicle.checked && salary.checked && agree.checked) {
                    submit_btn.classList.remove('disabled')
                }
            }
            salary.onchange = function (e) {
                if (vehicle.checked && salary.checked && agree.checked) {
                    submit_btn.classList.remove('disabled')
                }
            }
        });
    </script>
    <style>label{float: right !important;}</style>
@endsection
