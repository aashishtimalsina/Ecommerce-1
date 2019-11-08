@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<form action="{{route('update_user_info',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
  <div class="form-group">
    <label>Full Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" name="full_name">
  </div>
  <div class="form-group">
  	<label>Username</label>
  	<input type="text" name="name" class="form-control" value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label>Age</label>
    <input type="number" min="1" max="100" class="form-control" placeholder="Enter Age" name="age">
  </div>
  <label>Sex</label>
                <div class="form-group">
                  <input type="radio" value="Male" name="sex">Male
                  <input type="radio" value="Female" name="sex">Female
                  <input type="radio" value="Others" name="sex">Others
              </div>

  <div class="form-group">
  	<label>Phone No.</label>
  	<input type="number" min="0" name="phone_no" class="form-control">
  </div>

<div class="form-group">
	<label>Address</label>
	<input type="text" name="address" class="form-control">
</div>
<div class="form-group">
	<label>Profile Image</label>
	<input type="file" name="profile_image" class="form-control">
</div>
  <button type="submit" class="btn btn-primary">Add Information</button>
</form>
</div>
</div>

@endsection
