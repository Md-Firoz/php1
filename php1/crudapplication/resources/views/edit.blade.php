@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Contact Page</div>
    <div class="card-body">


        <form action="{{ url('contact/' .$contacts->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"><br>
            <label>Email</label><br>
            <input type="email" name="email" id="email" value="{{$contacts->email}}" class="form-control"><br>

            <label>Address</label><br>
            <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"><br>
            <label>Date</label><br>
            <input type="date" name="date" id="date" value="{{$contacts->date}}" class="form-control"><br>

            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>

@stop