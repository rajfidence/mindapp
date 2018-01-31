@extends('layouts.app')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                        <div class="panel-heading">
                        Below are some Questions for you to answer.</div>
                    <div class="panel-body">
                     {!! Form::open(['method' => 'POST', 'route' => ['answers.store']]) !!}
                    @if($questions)
                    <?php $i = 1; ?>
                    @foreach($questions as $question)
                        <div class="card" style="margin: 50px">
                            <div class="card-header">
                            <h3>{{$question->question_name}}</h3>
                            </div>
                            <input
                            type="hidden"
                            name="questions[{{ $i }}]"
                            value="{{ $question->id }}">
                            <ul class="list-group list-group-flush">
                            @foreach($question->options as $option)
                                    <li class="list-group-item">  <input
                                        type="radio"
                                        name="answers[{{ $question->id }}]"
                                        value="{{ $option->id }}"
                                        { { old('answers') ? checked="checked" : '' } }
                                        />
                                        {{ $option->option_name }}
                                    </li>
                        @endforeach
                            </ul>
                        </div>
                        <?php $i++; ?>
                      @endforeach
                      {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!} 
                      @endif
                      {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection