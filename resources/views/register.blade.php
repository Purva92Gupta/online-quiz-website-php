<!doctype html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>SignUp</title>
    </head>

    <body>
    <img src="https://github.com/Purva92Gupta/PublicImages/blob/main/QuizImage.png?raw=true" alt="Quiz Image" width="100%" height="400">
        <div style="padding: 5%">
            <h1>Signup</h1>
            <img src="https://github.com/Purva92Gupta/PublicImages/blob/main/quiz%20gif.gif?raw=true" alt="Quiz Image">
            </br>
            <form method="post" action="{{route('register.save')}}">
                @csrf

                <div class="form-group">
                    <label for="inputEmail">Username</label>
                    <input type="text" name="username" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                </br>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter password">
                </div>
                </br>

                <button type="submit" class="btn btn-primary">Signup</button>
            </form>
            </br>

            @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
            @endif

            <span>Already registered? <a href="{{route('login.view')}}">Login here!</a></span>
        </div>
    </body>
</html>