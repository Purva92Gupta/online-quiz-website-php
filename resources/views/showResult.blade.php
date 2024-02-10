@extends('layouts.header')
@section('title')
    <title>My Results</title>
@endsection
@section('main')
    <h1>Result of your quiz</h1>
    <div class="text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Total questions</th>
                    <th scope="col">Correct Answers</th>
                </tr>
            </thead>

            <tbody>
                    <tr>
                        <td>{{$quizTitle}}</td>
                        <td>{{$result->quiz_score}}</td>
                        <td>{{$result->achieved_score}}</td>
                    </tr>
            </tbody>
        </table>
        <button style='margin-right:80px'>
            <a class="nav-link" href="{{route('dashboard.view')}}">Go to Dashboard</a>
        </button>
        <button>
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </button>

    </div>
@endsection
