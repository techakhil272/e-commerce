<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        ._3SkBxJ {
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            line-height: 20px;
            font-size: 16px;
            letter-spacing: .1px;
            font-weight: 500;
            color: #fff;
            position: relative;
            font-family: Roboto, Arial, sans-serif;
        }

        a:-webkit-any-link {
            cursor: pointer;
        }

        ._3SkBxJ span {
            font-weight: 600;
            font-size: 20px;
        }

        a,
        img {
            text-decoration: none;
            border: none;
            outline: none;
            margin: 0px 10px 0px 1px
        }

        ._3SkBxJ .V3C5bO {
            width: 16px;
            height: 16px;
            margin: 0 8px;
        }

        .custom-product {
            height: 600px
        }

        .slider-text {
            background-color: #35443585 !important;
        }

        .trending-image {
            height: 100px;
        }

        .trening-item {
            float: left;
            width: 20%;
        }

        .trending-wrapper {
            margin: 30px;
        }

        .detail-img {
            height: 200px;
        }

        .search-box {
            width: 500px !important
        }

        .cart-list-devider {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>

<body>

    @include('layouts.partials.navbar')
    @yield('content')

    {{ View::make('layouts.partials.footer') }}
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

</body>

</html>
