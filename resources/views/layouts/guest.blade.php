<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Ecommerce') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .auth-card{
            max-width:450px;
            margin:auto;
            margin-top:70px;
            border:none;
            border-radius:15px;
            box-shadow:0 10px 30px rgba(0,0,0,.15);
        }

        .card-header{
            background:#198754;
            color:#fff;
            text-align:center;
            font-size:24px;
            font-weight:bold;
            border-radius:15px 15px 0 0 !important;
        }

        .btn-success{
            width:100%;
        }

        a{
            text-decoration:none;
        }

        .form-control{
            height:48px;
        }
    </style>

</head>

<body>

<div class="container">

    <div class="card auth-card">

        <div class="card-header">
            {{ config('app.name','Ecommerce') }}
        </div>

        <div class="card-body">

            {{ $slot }}

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>