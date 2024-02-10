@extends('layouts.header')

@section('title')
    <title>Dashboard</title>
@endsection

@section('main')
    <h1>Quiz List</h1>
    <div class="text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">No. of questions</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                @php
                    $sl=1;
                @endphp
                @if ($quizList)
                    @foreach($quizList as $quiz)
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td>{{ $quiz['title'] }}</td>
                            <td>{{ $quiz['questions'] }}</td>
                            <td> 
                                <button>
                                    <a class="nav-link" href="{{ url('/give-quiz/'.$quiz['id']) }}">Start Quiz</a>
                                </button> 
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <button>
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
    </button>
@endsection
