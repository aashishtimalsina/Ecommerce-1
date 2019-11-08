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
					<th col="2">Action</th>
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
						@else

						@endif
					</td>
					<td align="center">

						@if(Auth::user()->name != $r->name)
						@csrf
						@if($r->role == 'Admin')
						@if($r->role)
						<form action="{{route('remove-role',$r->id)}}" method="POST">
							@csrf
							<button type="submit" class="btn btn-danger">Remove Admin</button>
						</form>
						@else
						<form action="{{route('give-role',$r->id)}}" method="POST"> 
							@csrf
							<button type="submit" class="btn btn-default">Make Admin </button>
							<input type="hidden" name="give" value="Admin">

						</form>
						@endif
						@elseif($r->role == 'User')
						@if($r->role)
						<form action="{{route('remove-role',$r->id)}}" method="POST">
							@csrf
							<button type="submit" class="btn btn-danger">Remove User</button>

						</form>
						@else
						<form action="{{route('give-role',$r->id)}}" method="POST">
							@csrf
							<button type="submit" class="btn btn-success">Make User</button>
							<input type="hidden" name="give" value="User">

							@endif
							@else
							<div class="btn-group">
								<form action="{{route('give-role',$r->id)}}" method="POST">
								@csrf
								<button type="submit" class="btn btn-success">Make Admin</button>
								<input type="hidden" name="give" value="Admin">

							</form>
							<form action="{{route('give-role',$r->id)}}" method="POST">
								@csrf
								<button type="submit" class="btn btn-success">Make User</button>
								<input type="hidden" name="give" value="User">

							</form>
							</div>
							@endif
						</a>
					</form>
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