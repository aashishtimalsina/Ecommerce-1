@extends('admin.admin')
@section('title')
Add Role | Dashboard
@endsection
@section('content')
<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">
		<table class="table table-dark"  style="margin-top:25px; ">
			<thead>
				<tr>
					<th>User Name</th>
					<th>Role</th>
					@if(Auth::user()->role == 'SuperAdmin')
					<th colspan="5">Action</th>
					@endif
				</tr>
			</thead>
			<tbody>
				@foreach($role as $r)
				@if(Auth::user()->role == 'SuperAdmin')
				<tr>
					<td>{{$r->name}}</td>
					<td>
						@if($r->role == 'SuperAdmin')
						<button type="button" class="btn bg-navy" disabled>{{$r->role}}</button>

						@elseif($r->role == 'Admin')
						<button type="button" class="btn bg-olive" disabled>{{$r->role}}</button>
						@elseif($r->role == 'User')
						<button type="button" class="btn bg-orange" disabled>{{$r->role}}</button>
						@elseif($r->role)
						<button type="button" class="btn bg-white" disabled>{{$r->role}}</button>
						@else

						@endif
					</td>
					<td align="center">
						@if($r->role)
						@if($r->role != 'SuperAdmin')
						<form action="{{route('remove-role',$r->id)}}" method="POST">
							@csrf
							<button class="btn btn-danger"> Remove {{$r->role}}</button>
							<input type="hidden" name="remove" value="{{$r->role}}">
						</form>
						@foreach($roles as $ar)
						@if($r->role != $ar->role_name)
						<form action="{{route('give-role',$r->id)}}" method="POST">
							@csrf
							<button class="btn btn-success">Make {{$ar->role_name}}</button>
							<input type="hidden" name="give" value="{{$ar->role_name}}">
						</form>
						@endif
						@endforeach
						@endif
						@else
							@foreach($roles as $ar)
						<form action="{{route('give-role',$r->id)}}" method="POST">
							@csrf
							<button class="btn btn-success">Make {{$ar->role_name}}</button>
							<input type="hidden" name="give" value="{{$ar->role_name}}">
						</form>
						@endforeach
						@endif
					</td>
				</tr>
				@elseif(Auth::user()->role == 'Admin')
				<tr>
					@if($r->role != 'SuperAdmin')
					<td>{{$r->name}}</td>
					<td>
						@if($r->role == 'Admin')
						<button type="button" class="btn bg-olive" disabled>{{$r->role}}</button>
						@elseif($r->role == 'User')
						<button type="button" class="btn bg-orange" disabled>{{$r->role}}</button>
						@elseif($r->role)
						<button type="button" class="btn bg-white" disabled>{{$r->role}}</button>
						@else

						@endif
					</td>
					@endif
				</tr>
				@endif

				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection