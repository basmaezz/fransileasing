<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="السعودي الفرنسي للتمويل التأجيري" />
    <meta name="author" content="السعودي الفرنسي للتمويل التأجيري" />
    <title>السعودي الفرنسي للتمويل التأجيري</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('front/assets/favicon.png')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('front/css/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
</head>

<body id="page-top">


<header class="masthead">
    <div class="container">
        <div class="logo">
            <img src="{{asset('front/assets/logo.webp')}}" alt="car image">
        </div>
        <div class="masthead-heading text-uppercase mb-0">سيارتك تفزعلك</div>
    </div>
</header>


@yield('content')

     @include('frontend.conditions')
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 my-3 my-lg-0 text-lg-start">
                <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/fransileasing?s=21" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/fransileasing?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
                <!-- <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/fransileasing?s=21"><i class="fab fa-facebook-f"></i></a> -->
                <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/company/71779278/admin/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a  style="color:#fff;" class="text-decoration-none me-3" href="tel:+8001182222"><i class="fa fa-phone" style="margin-inline-end: 5px;"></i> 8001182222</a>
                <a style="color:#fff;" class=" text-decoration-none" href="mailto:infosfl@alfransi.com.sa"> <i class="fa fa-envelope" style="margin-inline-end: 5px;"></i> infosfl@alfransi.com.sa</a>
            </div>
        </div>
    </div>
</footer>

</body>
@include('sweetalert::alert')

</html>
