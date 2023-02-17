<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Company Form</title>
@vite('resources/js/app.js')
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add Company</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('companies.index') }}"> Indietro</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="name" class="form-control" placeholder="Company Name" value="{{ old('name') }}">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Email:</strong>
<input type="email" name="email" class="form-control" placeholder="Company Email" value="{{ old('email') }}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Company Address:</strong>
<input type="text" name="address" class="form-control" placeholder="Company Address" value="{{ old('address') }}">
@error('address')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Invia</button>
</div>
</form>
</body>
</html>