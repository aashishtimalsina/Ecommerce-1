@extends('admin.admin')
@section('title')
Add Role | Dashboard
@endsection
@section('content')
<div class="row">
<div class="col-md-3">
	</div>
	<div class="col-md-6">
<form action="{{route('store-role')}}" method="POST">
	@csrf
	<legend align="center">Create Role</legend>
  <div class="form-group">
    <label>Role Name</label>
    <input type="text" class="form-control" placeholder="Enter Role Name" name="name">
    @error('name')
    <div class="text text-danger">{{ $message }}</div>
@enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-md-3"></div>
</div>
@endsection