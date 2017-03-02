@extends('layout')


@section('content')

        <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: lightgrey;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>


        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <header class="intro-header" style="background-image: url('img/cover-picture.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Giraffe International</h1>
                            <hr class="small">
                            <span class="subheading">Learn more about the tallest living terrestrial animals</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <!-- Main Content -->


        <h2><hr>News<hr></h2>
        <div class="row">
            <div class="col-sm-4">
                <div> <img class="img-rounded img-responsive img-center img" src="img/logo.jpg" alt="">
                   <h2>News #1</h2></div>
            </div>
            <div class="col-sm-4">
                <div> <img class="img-rounded img-responsive img-center img" src="img/logo.jpg" alt="">
                    <h2>News #2</h2></div>
            </div>
            <div class="col-sm-4">
                <div> <img class="img-rounded img-responsive img-center img" src="img/logo.jpg" alt="">
                    <h2>News #3</h2></div>
            </div>
        </div>

    <button><a href="list">View all posts</a></button>



    </body>
</html>


@endsection