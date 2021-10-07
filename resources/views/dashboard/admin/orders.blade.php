@extends('dashboard.layouts.app')
@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">الصفحات</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">لوحه التحكم</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">لوحه التحكم</h6>
                </nav>

            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container">
            <a class="btn btn-success" href="{{ route('file-export') }}" style="float: right">تصدير البيانات الى أكسيل</a>
            <table class="table table-bordered data-table">

                <thead>
                <tr>
                    <th>No</th>
                    <th>الأسم</th>
                    <th>رقم الجوال</th>
                    <th>المدينه</th>
                    <th>السياره</th>
{{--                    <th width="100px">تفعيل/رفض</th>--}}
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </main>

    <script type="text/javascript">
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('orders') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'tel', name: 'tel'},
                    {data: 'City', name: 'City.name'},
                    {data: 'Car', name: 'Car.name'},
                    // {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });

    </script>
{{--    {{$dataTable->scripts()}}--}}

@endsection
