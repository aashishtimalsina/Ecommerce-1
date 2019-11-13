@extends('admin.admin')
@section('title')
View Customers | Dashboard
@endsection
@section('content')
<?php 

if($user->profile_image) 
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
    @if($user->email_verified_at)
    <span ><i class="fa fa-check fa-5x" style="color: green;"></i></span>
    @else
    <span><i class="fa fa-times fa-5x" style="color: red;"></i></span>
    @endif
    <br>
    <img src="{{asset($image)}}" alt="User Profile" class="img-circle" height="350px" width="400px" align="center" style="margin-left: 90px;"> 

  </div>
  <div class="col-md-6">    
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
<hr>
<hr>
<hr>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3">
    <button type="button" class="btn btn-primary btn-lg buttonleft" data-toggle="modal" data-target="#viewaddress">
      View Address
    </button>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-3">
    <button type="button" class="btn btn-primary btn-lg buttonleft" data-toggle="modal" data-target="#vieworders">
      View Orders
    </button>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-3">
    <button type="button" class="btn btn-primary btn-lg buttonleft" data-toggle="modal" data-target="#viewreviews">
      View Reviews
    </button>
  </div>
</div>

<div class="modal fade" id="viewaddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" id="exampleModalLabel" align="center">{{$user->name}}'s Registered Addresses</h3>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Addresses</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>@mdo</td>
            </tr>
            <tr>
              <td>@fat</td>
            </tr>
            <tr>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="vieworders" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" id="exampleModalLabel" align="center">{{$user->name}}'s Orders</h3>
      </div>
      <div class="modal-body">
       <table class="table table-striped">
        <thead>
          <tr>
            <th>OrderID</th>
            <th>Price</th>
            <th>OrederDate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>@mdo</td>
            <td>Rs 5546</td>
            <td>2019-11-11 21:00:00</td>
          </tr>
          <tr>
            <td>@mdo</td>
            <td>Rs 5546</td>
            <td>2019-10-11 21:10:51</td>
          </tr>
          <tr>
            <td>@mdo</td>
            <td>Rs 5546</td>
            <td>2019-11-12 21:50:30</td>
          </tr>
        </tbody>
      </table>      
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="viewreviews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" id="exampleModalLabel" align="center">{{$user->name}}'s Reviews</h3>
      </div>
      <div class="modal-body">
        <table class="table table-striped" accesskey="5469">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Review</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mobile</td>
            <td>Very good purchase </td>
          </tr>
          <tr>
            <td>Huawei P30 Pro</td>
            <td>Best mobile for camera and performance</td>
          </tr>
          <tr>
            <td>Capo</td>
            <td>Premium Quality Capo</td>
         </tr>
        </tbody>
      </table>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  .buttonleft 
  {
    margin-left: 10px;
  }
</style>
@endsection