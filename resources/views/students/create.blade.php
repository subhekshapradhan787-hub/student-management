@extends('layouts.app')

@section('content')

<h2>Add Student</h2>

<form method="POST" action="/students">

@csrf

<input type="text" name="name" placeholder="Name" class="form-control mb-2">

<input type="email" name="email" placeholder="Email" class="form-control mb-2">

<input type="text" name="phone" placeholder="Phone" class="form-control mb-2">

<input type="text" name="course" placeholder="Course" class="form-control mb-2">

<button class="btn btn-success">Save</button>

</form>

@endsection