<!doctype html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
            input[type=radio]#red {
                accent-color: red;
                pointer-events: none;
            }
            input[type=radio]#green {
                accent-color: green;
                pointer-events: none;
            }
        </style>
        @yield('title')
    </head>

    <body>
        <img src="https://github.com/Purva92Gupta/PublicImages/blob/main/QuizImage.png?raw=true" alt="Quiz Image" width="100%" height="400">

        <br>
        <div style="padding: 1%"></div>
        @if(session('success'))
            <span class="alert alert-success">{{session('success')}}</span>
        @endif
        @if(session('msg'))
            <span class="alert alert-info">{{session('msg')}}</span>
        @endif
        @if(session('error'))
            <span class="alert alert-danger">{{session('error')}}</span>
        @endif
        <br>
        <div style="padding: 3%">
            @yield('main')
        </div>
    </body>
</html>
