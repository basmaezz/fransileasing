@extends('dashboard.layouts.app')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

        <div class="container-fluid py-6" style="text-align: right">
            <div class="row">
                <div class="col-md-7 mt-4">
                    <div class="card">
                        <div class="card-header pb-0 px-3" style="text-align: right">
                            <h6 class="mb-0" style="padding-bottom: 18px;">الشروط والاحكام</h6>
                        </div>
                        <div class="card-body pt-4 p-3" style="text-align: right">
                            <form role="form text-right" style="text-align: right" action="{{route('store-conditions')}}" method="post">
                                @csrf
                                <textarea name="name">
                                 {!! $conditions[0]->name !!}

                                </textarea>
                                <script>
                                    CKEDITOR.replace( 'name' );
                                </script>

                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">حفظ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    </main>


@endsection

