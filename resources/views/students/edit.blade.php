@extends('layouts.app')

@section('content')

<h2>Edit Student</h2>

<form action="/students/{{$student->id}}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="{{$student->name}}" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" value="{{$student->email}}" class="form-control">
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" value="{{$student->phone}}" class="form-control">
</div>

<div class="mb-3">
<label>Course</label>
<input type="text" name="course" value="{{$student->course}}" class="form-control">
</div>

<button class="btn btn-success">Update Student</button>

</form>

@endsection