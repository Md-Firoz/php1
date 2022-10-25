@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Post Page</div>
    <div class="card-body">

         <form action="{{ url('post') }}" method="post">
            {!! csrf_field() !!}
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>LastName</label><br>
            <input type="text" name="lastname" id="lastname" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>

            <input type="submit" value="Save" class="btn btn-success"><br>
         </form>
    </div>
</div>

@stop
