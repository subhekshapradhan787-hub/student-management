@extends('layouts.app')

@section('content')

<h2>Student List</h2>

<a href="/students/create" class="btn btn-primary mb-3">Add Student</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Course</th>
<th>Action</th>
</tr>

@foreach($students as $student)

<tr>

<td>{{ $student->id }}</td>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->phone }}</td>
<td>{{ $student->course }}</td>

<td>

<a href="/students/{{$student->id}}/edit" class="btn btn-warning">Edit</a>

<form action="/students/{{$student->id}}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger">Delete</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection