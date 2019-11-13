@extends('admin.admin')
@section('title')
Give Role Form| Dashboard
@endsection
@section('content')
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <form action="{{route('store-given-role')}}" method="POST">
     @csrf
     <legend align="center">Give Role</legend>
     <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="name">
      @error('name')
      <div class="text text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email">
      @error('email')
      <div class="text text-danger">{{ $message }}</div>
      @enderror
    </div>
<div class="form-group">
  <label>Role</label>
  <select name="role" class="form-control">
    @foreach($role as $r)
    <option value="{{$r->role_name}}">{{$r->role_name}}</option>
    @endforeach
  </select>
</div>
      <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter Password" name="password">
    @error('password')
    <div class="text text-danger">{{ $message }}</div>
@enderror
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="col-md-3"></div>
</div>
@endsection