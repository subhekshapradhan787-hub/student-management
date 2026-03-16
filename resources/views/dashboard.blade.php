@extends('layouts.app')

@section('content')

<div class="row">

<div class="col-md-4">
<div class="card bg-primary text-white p-3">
<h3>Total Students</h3>
<h1>{{ $students }}</h1>
</div>
</div>

<div class="col-md-4">
<div class="card bg-success text-white p-3">
<h3>Total Courses</h3>
<h1>{{ $courses }}</h1>
</div>
</div>

</div>

<h3 class="mt-4">Latest Students</h3>

<table class="table table-bordered">

<tr>
<th>Name</th>
<th>Email</th>
<th>Course</th>
</tr>

@foreach($latest as $student)

<tr>

<td>{{ $student->name }}</td>

<td>{{ $student->email }}</td>

<td>{{ $student->course }}</td>

</tr>

@endforeach

</table>

@endsection