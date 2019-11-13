@extends('admin.admin')
@section('title')
View Customers | Dashboard
@endsection
@section('content')
<div class="row">
	<h2 align="center">Our Customers</h2>
	<div class="col-md-1" ></div>
  <div class="col-md-10">
   <div class="box">
    <div class="box-body">
      <table id="example1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>Verification status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customer as $c)
          <?php 
          if ($c->email_verified_at) 
          {
            $class = 'btn btn-success';
            $value = 'Verified';
          }
          else
          {
            $class = 'btn btn-danger';
            $value = 'Not Verified';
          }
          ?>
          <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->email}}</td>
            <td><button class='{{$class}}' disabled>{{$value}}</button></td>
            <td>
              <a href="{{route('customer_info',$c->id)}}">                    
                <button class="btn btn-primary">View More Info</button>
              </a>
            </td>
          </tr>

          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>Verification Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-md-1"></div>
</div>
<style type="text/css">
 .rm
 {
  margin-top: 13px;
}
</style>
@endsection