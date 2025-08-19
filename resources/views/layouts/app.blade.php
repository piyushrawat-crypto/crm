<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title', 'Default Title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{asset('assets/images/fevicon.png')}}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!-- site css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.css')}}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{asset('assets/css/perfect-scrollbar.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.css">


</head>
<style>
    /* Softer borders */
    .table-bordered {
        border: 1px solid #e2e8f0;
    }

    /* Zebra striping */
    .table-hover tbody tr:nth-child(odd) {
        background-color: #f9fafc;
    }

    /* Hover highlight */
    .table-hover tbody tr:hover {
        background-color: #eef2ff;
    }

    /* Search bar styling */
    .dataTables_filter input {
        border-radius: 20px;
        padding: 6px 15px;
        border: 1px solid #cbd5e1;
        outline: none;
    }

    /* Pagination buttons */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        border-radius: 50px;
        padding: 5px 12px;
        margin: 2px;
        border: none;
        background-color: #f1f5f9 !important;
        color: #4e73df !important;
    }

    /* .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: linear-gradient(90deg, #4e73df, #1cc88a) !important;
        color: white !important;
    } */

    /* Table header */
    .table thead th {
        font-weight: 600;
        color: #374151;
    }

    /* Make table text darker for readability */
    .table td,
    .table th {
        color: #1e293b;
        /* Dark slate */
        font-size: 14px;
    }

    /* Slightly bigger font for headers */
    .table thead th {
        font-size: 15px;
        font-weight: 700;
    }

    /* Light row background without fading text */
    .table-hover tbody tr:nth-child(odd) {
        background-color: #f4f6f8;
    }

    .table-hover tbody tr:hover {
        background-color: #e0e7ff;
    }

    /* Increase row height for breathing space */
    .table td {
        padding: 12px 10px;
        vertical-align: middle;
    }

    /* Badge clarity */
    .badge {
        font-size: 13px;
        font-weight: 600;
    }

    /* DataTables search box styling */
    .dataTables_filter input {
        border-radius: 20px;
        padding: 6px 15px;
        border: 1px solid #94a3b8;
        font-size: 14px;
        color: #1e293b;
    }

    /* Pagination contrast */
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        color: #1e293b !important;
        font-size: 13px;
        background-color: #f1f5f9 !important;
    }
</style>

<body class="inner_page login">
    @include('partial.sidebar')
    <div id="content">
        @auth
        @include('partial.header')
        @endauth
        @yield('content')
    </div>

</body>

<!-- jQuery -->


<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>





</html>