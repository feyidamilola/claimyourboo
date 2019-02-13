<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@site_username">
    <meta name="twitter:title" content="Top 10 Things Ever">
    <meta name="twitter:description" content="Up than 200 characters."> {{--
    <meta name="twitter:creator" content="@creator_username"> --}}
    <meta name="twitter:image" content="{{ asset('img/bg2.jpg')}}"> {{--
    <meta name="twitter:domain" content="YourDomain.com"> --}}
    <script>
        window.Laravel = {csrfToken: '{{csrf_token()}}'}
    </script>

    <title>Claim your boo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css"
    />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css"
    />
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />


</head>

<body>
    <div class="overlay"></div>
    <video autoplay muted loop id="myVideo">
    <source src="{{asset('img/main_comp.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    <div id="app" class="page">

        <div class="page__nav">
            <div><img src="{{ asset('img/logo.png')}}" width="120"></div>
            <div>
                <p id="about-click">Disclaimer</p>
            </div>
        </div>
        <div>
            <Canva :details="{{ json_encode($details) }}" :number="{{ json_encode($number) }}" :image="{{ json_encode($image) }}"></Canva>

            <div id="share"></div>
            <div class="sharethis-inline-share-buttons"></div>

            <a href="https://twitter.com/intent/tweet">Share on Twitter</a>

        </div>


        <div class="addthis_inline_share_toolbox"></div>

        <div class="about opacity-0">
            <span class="close">X</span>
            <div>
                ClaimYourBoo is meant to be light hearted and fun, so every result or reaction gotten from this application should not be
                taken seriously. We will not be held responsible for any damages to your relationships or negative outcomes
                associated with taking this quiz.
            </div>
            <p></p>
        </div>
    </div>
<div id="share"></div>
    </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c643ae439a58df6"></script>

    {{--
    <script></script> --}}

    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c64787e7056550011c4a059&product='inline-share-buttons' async='async'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>

    <script src="{{asset('js/app.js')}}"></script>
    {{--
    <script src="{{'js/changebackground.js'}}"></script> --}}
    <script src="{{ asset('js/displayabout.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script>
        $("#share").jsSocials({
                shares: [ "twitter"]
            });
    </script>
    <script>

    </script>

</body>

</html>
