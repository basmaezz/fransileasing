@extends('dashboard.layouts.app')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

        <div class="container-fluid py-6" style="text-align: right">
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3 d-flex justify-content-between align-items-center" style="text-align: right">
                            @if((\App\Models\Condition::all()->count() == 0))
                            <a href="{{route('create-conditions')}}" class="btn bg-gradient-dark ">اضافه </a>

                            @elseif((\App\Models\Condition::all()->count() ==1))
                            <a href="{{route('edit-conditions')}}" class="btn bg-gradient-dark ">تعديل </a>
                            @endif
                            <h6 class="mb-0" style="padding-bottom: 18px;">الشروط والاحكام</h6>


                        </div>
                        <div class="card-body pt-4 p-3" style="text-align: right">
                            <form role="form text-right" style="text-align: right">
                                @foreach(\App\Models\Condition::all() as $condition)
                                    <p style="color:#066173;">{!! $condition->name !!}</p>
                                @endforeach

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    </main>


@endsection

