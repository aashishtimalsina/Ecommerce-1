@extends('admin.admin')
@section('title')
View Customers | Dashboard
@endsection
@section('content')
<div class="row">
	<h2 align="center">Our Customers</h2>
	<div class="col-md-1" ></div>
@foreach($customer as $c)

<?php 

if ($c->profile_image) 
{
	$image = 'public/uploads/customer/profile/'.$c->profile_image;
}
else
{
	$image = 'public/cd-admin/images/user.png';
}
?>	
<a href="{{route('customer_info',$c->id)}}">
        <div class="col-md-3 rm">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-white">
              <div class="widget-user-image">
                <img class="img-circle" src="{{asset($image)}}" alt="User Avatar" style="margin: 5px;">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{$c->name}}</h3>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#">Email<span class="pull-right">{{$c->email}}</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
       </a>
@endforeach
      </div>
      <style type="text/css">
      	.rm
      	{
      		margin-top: 13px;
      	}
      </style>
@endsection