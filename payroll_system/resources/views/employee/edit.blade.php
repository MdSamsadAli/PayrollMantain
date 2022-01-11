@extends('layouts.app')


@section('content')

	<div class="col-lg-12">
		<h1 class="page-header">Update Employee: {{ $employees->name }}</h1>
	</div>
		
	<form action="{{ route('employee.update', $employees->id)}}" method="POST">
			{{ csrf_field() }}
			
		<div class="form-group col-md-6">
			<label for="name">Name: </label>
			<input type="text" name="name" value="{{$employees->name}}" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="email">Email: </label>
			<input type="email" name="email" value="{{$employees->email}}" class="form-control">		
		</div>
		
		
		
		
		<div class="form-group col-md-2">
			<label for="address">Address: </label>
			<input type="text" name="address"  value= "{{ $employees->address}}" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="country">Role: </label>
			<input type="text" name="role"  value= "{{ $employees->role->name}}" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="country">Department: </label>
			<input type="text" name="department"  value= "{{ $employees->department->name}}" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="salary">Salary: </label>
			<input type="text" name="salary"  value= "{{ $employees->salary}}" class="form-control">		
		</div>
		
		<div class="form-group col-lg-6">
			<label for="role">Select a Role</label>
			<select name="role_id"  cols="5" rows="5" class="form-control">
				@foreach($roles as $role)
					<option value="{{ $role->id}}"
						@if($employee->role->id == $role->id)
							selected							
						@endif						
					>{{ $role->name }}</option>
				@endforeach
			</select>
		</div>

        <div class="form-group col-lg-6">
			<label for="department">Select a Department</label>
			<select name="department_id"  cols="5" rows="5" class="form-control">
				@foreach($departments as $department)
					<option value="{{ $department->id}}"
						@if($employee->department->id == $department->id)
							selected							
						@endif						
					>{{ $department->name }}</option>
				@endforeach
			</select>
		</div>
		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Update Changes</button>
		</div>
	</form>

@endsection