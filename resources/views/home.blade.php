@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> 
            </div>
            <nav class="navbar navbar-inverse">
              <ul class="nav navbar-nav">
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
              </ul>
              <p class="navbar-text">Some text</p>
            </nav>
        </div>
    </div>
</div>
@endsection
