@extends('layouts.app')

@section('content')
<h1 align="center">User Dashboard
</h1>
<div align="center">
<a href="{{route('update-cus-info-form',Auth::user()->id)}}"><button class="btn btn-primary">Add Full Info</button></a>
</div>
@endsection
