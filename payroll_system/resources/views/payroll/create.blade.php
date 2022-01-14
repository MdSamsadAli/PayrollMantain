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
					@foreach($employees as $employee)
						<option value="{{ $employee->id }}">{{ $employee->name }}</option>
					@endforeach
				</select>
			</div>
		
			<div class="form-group col-md-4">
				<label for="role">Salary</label>
				<input onkeyup="calcGrossSalary()" type="number" name="salary" class="form-control" id = "salary">
				{{-- <select name="salary"  cols="5" rows="5" class="form-control">
					@foreach($employee as $employee)
						<option value="{{$employee->salary}}">{{"$employee->salary"}}</option>
					@endforeach
				</select> --}}
			</div>
		
			<div class="form-group col-md-4">
				<label for="overtime">Over Time</label>
				<select id = "overtime" name="over_time"  cols="5" rows="5" class="form-control">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
				</select>
			</div>
		
		<div class="form-group col-md-4">
			<label for="town">Hours: </label>
			<input onkeyup="calcGrossSalary()" value= "0" type="number" name="hours" class="form-control" id = "hours">		
		</div>
		
		<div class="form-group col-md-4">
			<label for="city">Rate: </label>
			<input onkeyup="calcGrossSalary()" value = "0" type="number" name="rate" class="form-control" id = "rate">		
		</div>
		
		<div class="form-group col-md-4">
			<label for="country">Gross: </label>
			<input type="text" value = "0" name="gross" class="form-control" id = "gross">		
		</div>		
		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Create</button>
		</div>
	</form>

	<script>
		const overtime = document.getElementById('overtime');
		const basicSalary = document.getElementById('salary');
		const hours = document.getElementById('hours');
		const rate = document.getElementById('rate');
		const gross = document.getElementById('gross');

		overtime.addEventListener('change', () => {
			if(overtime.value == "No"){
				hours.disabled = true;
				rate.disabled = true;
			}

			if(overtime.value == "Yes"){
				hours.disabled = false;
				rate.disabled = false;
			}
		});


		function calcGrossSalary(){
			gross.value = parseInt(basicSalary.value) + (parseInt(hours.value) * parseInt(rate.value));
		}
	</script>

	@endsection