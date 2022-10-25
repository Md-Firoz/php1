@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Contact Page</div>
    <div class="card-body">


        <p class="card-title">Nmae : {{ $contacts->name }}</p>
        <p class="card-title">Email : {{ $contacts->email }}</p>

        <p class="card-title">Address : {{ $contacts->address }}</p>
        <p class="card-title">Phone : {{ $contacts->mobile }}</p>
        <p class="card-title">Date : {{ $contacts->date }}</p>
    </div>
</div>