@extends('layouts.header')

@section('title')
    <title>Quiz</title>
@endsection

@section('main')
    <h2>Quiz Title: {{$quiz->title}} - Solution</h2>
    <div class="text-left">
        <form method="post" action="{{route('store.answer')}}">
            @csrf
            <input type="hidden" name="quiz_id" value="{{$quiz->id}}" readonly required>
            @php
                $i = 1;
                $options = ['option_a', 'option_b', 'option_c', 'option_d'];
            @endphp
            <hr>
            @foreach($questions as $question)
                <option selected value>Question {{$i}}: {{$question->question}}</option>
                <hr>

                @foreach($options as $option)
                    @php
                        $isCheckedFirst = ($question->correct_option == $option && $givenAnswers[$i] == $option);
                        $isCheckedSecond = ($givenAnswers[$i] == $option);
                    @endphp

                    <input type="radio" id="{{ $isCheckedFirst ? 'green' : 'red' }}" name="answer[{{ $i }}]" value="{{ $option }}" {{ $isCheckedFirst ? 'checked="checked"' : ($isCheckedSecond ? 'checked="checked"' : '') }}>
                    <label for="{{ $isCheckedFirst ? 'green' : 'red' }}">{{ strtoupper(substr($option, -1)) }}. {{ $question->$option }}</label><br>
                @endforeach
                
                @if ($question->correct_option == "option_a")
                    <mark>Correct Answer is  -- > {{$question->option_a}}</mark>
                @elseif ($question->correct_option == "option_b")
                    <mark>Correct Answer is  -- > {{$question->option_b}}</mark>
                @elseif ($question->correct_option == "option_c")
                    <mark>Correct Answer is  -- > {{$question->option_c}}</mark>
                @elseif ($question->correct_option == "option_d")
                    <mark>Correct Answer is  -- > {{$question->option_d}}</mark>
                @endif

                @php
                    $i++;
                @endphp
                <hr>
            @endforeach
            <button type="submit" class="btn btn-primary">Show Score</button>
        </form>
    </div>
@endsection
