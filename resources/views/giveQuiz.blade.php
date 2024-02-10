@extends('layouts.header')
@section('title')
    <title>Quiz</title>
@endsection
@section('main')

    <h2>Quiz Title: {{$quiz->title}}</h2>
    <div class="text-left">
        <form method="post" action="{{route('show.answer')}}" onsubmit="return validateform()">
            @csrf
            <input type="hidden" name="quiz_id" value="{{$quiz->id}}" readonly required>
            @php
                $i=1;
            @endphp
            <hr>
            @foreach($questions as $question)
                <option selected value>Question {{$i}}: {{$question->question}}</option>
                <hr>
                <input type="radio" id="option1" name="answer[{{$i}}]" value="option_a" required>
                <label for="option1">A. {{$question->option_a}}</label><br>
                
                <input type="radio" id="option2" name="answer[{{$i}}]" value="option_b" required>
                <label for="option2">B. {{$question->option_b}}</label><br>
                
                <input type="radio" id="option3" name="answer[{{$i}}]" value="option_c" required>
                <label for="option3">C. {{$question->option_c}}</label><br>

                <input type="radio" id="option4" name="answer[{{$i}}]" value="option_d" required>
                <label for="option4">D. {{$question->option_d}}</label><br><br>

                @php
                    $i++;
                @endphp
                <hr>
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
