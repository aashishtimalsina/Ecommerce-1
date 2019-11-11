@extends('admin.admin')
@section('title')
View Customers | Dashboard
@endsection
@section('content')
<?php 

if ($user->profile_image) 
{
  $image = 'public/uploads/customer/profile/'.$user->profile_image;
}
else
{
  $image = 'public/cd-admin/images/user.png';
}
?>  
<div class="row">
      <h1 align="center" style="margin-right: 130px;">{{$user->full_name}}</h1>

  <div class="col-md-6">
          <img src="{{asset($image)}}" alt="User Profile" class="img-circle" height="350px" width="400px" align="center" style="margin-left: 90px;"> 

  </div>
  <div class="col-md-6">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    </div>
    
    <h3>Username::{{$user->name}} </h3>
    <br>
    <h3>Age::{{$user->age}}</h3>
    <br>
    <h3>Sex::{{$user->sex}}</h3>
    <br>
    <h3>Phone no.::{{$user->phone_no}}</h3>
    <br>
    <h3>Address::{{$user->address}}</h3>
    <br>
    <h3>Email::{{$user->email}}</h3>
  </div>
</div>
@endsection