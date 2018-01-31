@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                  <div class="panel-body">
                        <div class="row">
                                <div class="col-md-3 text-center">
                                        <h1>{{ $questions }}</h1>
                                        questions in our database
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <h1>{{ $users }}</h1>
                                        users registered
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <h1>{{ $quizzes }}</h1>
                                        quizzes taken
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
