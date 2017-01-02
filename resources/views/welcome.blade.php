<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Greegde</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: #636b6f;
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
            #main_box{
                border: 5px solid grey;
                background: #ebf3ce;
                padding: 10px;
                height: 450px;
            }

            #next:hover, #prev:hover{
                cursor: pointer;
            }
            #cap{
                margin-top: 15px;
                color: black;
                font-family: arial;
            }
            


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">

                <div id="main_box">
                    <div id="ins_cont">
                        <!-- slideshow -->
                        <div class="cycle-slideshow" 
                            data-cycle-fx=scrollHorz
                            data-cycle-timeout=3000
                            data-cycle-prev="#prev"
                            data-cycle-next="#next"
                            data-cycle-slides=">a,>img"
                            >
                            
                            @foreach($imgs as $img)

                            <a href="{{$img->url}}">
                            <img src="uploads/{{ $img->name}}" width="350px" height="390px"></a>

                            @endforeach

<!--

                            <img src="http://malsup.github.io/images/p2.jpg" width="350px" height="390px">
                            <img src="http://malsup.github.io/images/p3.jpg" width="350px" height="390px">
                            <img src="http://malsup.github.io/images/p4.jpg" width="350px" height="390px">
-->
                            <div id="cap" class="cycle-caption"></div>
                        </div>

                        <!-- prev/next links -->
                        <div id="controls">
                            <div class=center>
                                <span id=prev><img class="arr" src="image/l_arr.png" width="30px" height="30px" /></span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span id=next><img class="arr" src="image/r_arr.png" width="30px" height="30px" /></span>
                            </div>
                        </div>





                       <!-- <img src="uploads/1.png" width="350px" height="390px" />  -->

                    <!--
                        <p>GRE<span style="color:red;">edge</span> Toolbar</p>

                        <p>Build your GRE Vocabulary<br>as you browse the web</p>

                        <p>Effortless. Simple. Free.</p>

                        <button>Download Now</button>
                        <p>Requires Firefox: 3.0.9-3.5.*</p>

                        -->

                    </div>
                </div>



                

            <!--
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                -->

            </div>
        </div>
    </body>

    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- jquery's cycle plugin-->
  <script src="js/cycle.js"></script>
</html>
