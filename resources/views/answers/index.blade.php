@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Answers</div>

                <div class="panel-body">
                    <?php $i = 1;?>
                        @foreach($result as $result)
                        
                        
                        
                      
                        <br><br>
                        <div class="card">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Question {{$i}} : {{$result->question->question_name}}</li>
                                  <li class="list-group-item">{{$result->option->option_name}}</li>
                                
                                </ul>
                              </div>
                              <?php $i++;?>
                        @endforeach
                        <a href="{{ route('dashboard') }}" class="btn btn-xs btn-info pull-right">Dashboard</a>
                        <a href="{{ route('questions') }}" class="btn btn-xs btn-success pull-left">Re-Take Quiz</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
