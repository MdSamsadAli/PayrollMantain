@extends('layouts.app')


@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">Payroll</h1>
	</div>
	
	<form action="{{route('payroll.store')}}" method="POST">
			{{ csrf_field() }}
		
			<div class="form-group col-md-4">
				<label for="role">Select a Employee</label>
				<select name="employee_id"  cols="5" rows="5" class="form-control">
					@foreach($employee as $employee)
						<option value="{{ $employee->id }}">{{ $employee->id }}</option>
					@endforeach
				</select>
			</div>
		
			<div class="form-group col-md-4">
				<label for="role">Salary</label>
				<select name="salary"  cols="5" rows="5" class="form-control">
					@foreach($employee as $employee)
						<option value=""></option>
					@endforeach
				</select>
			</div>
		
			<div class="form-group col-md-4">
				<label for="role">Over Time</label>
				<select name="overtime"  cols="5" rows="5" class="form-control">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
				</select>
			</div>
		
		<div class="form-group col-md-4">
			<label for="town">Hours: </label>
			<input type="number" name="hours" class="form-control">		
		</div>
		
		<div class="form-group col-md-4">
			<label for="city">Rate: </label>
			<input type="number" name="rate" class="form-control">		
		</div>
		
		<div class="form-group col-md-4">
			<label for="country">Gross: </label>
			<input type="text" name="gross" class="form-control">		
		</div>		
		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Create</button>
		</div>
	</form>

	@endsection