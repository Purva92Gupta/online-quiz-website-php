<!doctype html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Online Quiz Website</title>
    </head>

    <body>
        <img src="https://github.com/Purva92Gupta/PublicImages/blob/main/QuizImage.png?raw=true" alt="Quiz Image" width="100%" height="400">

        <div style="padding: 1%"> </div>

        @if(session('error'))
            <span class="alert alert-danger">{{session('error')}}</span>
        @endif
        @if(session('msg'))
            <span class="alert alert-info">{{session('msg')}}</span>
        @endif

        <div style="padding: 3%">
            <h1>Login</h1>
            <img src="https://github.com/Purva92Gupta/PublicImages/blob/main/quiz%20gif.gif?raw=true" alt="Quiz Image">
            </br>
            <form method="post" action="{{route('login.action')}}">
                @csrf
                <div class="form-group">
                    <label for="inputEmail">Username</label>
                    <input type="text" name="user" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter username">
                </br>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Enter password">
                </div>
                </br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br>
            <span>Don't have an account? <a href="{{route('register.view')}}">Signup for free!</a></span>
        </div>
    </body>
</html>
