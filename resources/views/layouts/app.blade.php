<!DOCTYPE html>
<html>
<head>

<title>Student Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background:#f4f6f9">

<nav class="navbar navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand">Student Management</a>

<a href="/dashboard" class="text-white">Dashboard</a>

<a href="/students" class="text-white">Students</a>

<a href="/courses" class="text-white">Courses</a>

</div>

</nav>

<div class="container mt-4">

@yield('content')

</div>

</body>

</html>