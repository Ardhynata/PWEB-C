@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               
<!--Area Form-->
<form class="form-horizontal" role="form" method="POST" action="{{ url('/contact') }}">
   <table class="table table-hover table-responsive table-bordered">
       <tr>
           <td>Email</td>
           <td><input type="text" name="email" class="form-control"></td>
       </tr>
       <tr>
           <td>Message</td>
           <td><textarea name="message" class="form-control"></textarea></td>
       </tr>
            <td></td>
                <td>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa fa-pencil"></i> Submit
                </button>
                </td>
            </div>
        </div>
    </div>
</div>
@endsection
