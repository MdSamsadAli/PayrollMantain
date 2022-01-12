@extends('layouts.app')

@section('content')

	<hr>
		<h1 class="text-center">Payroll</h1>
	<hr>
    <a href="{{route('payroll.create')}}" class="btn btn-primary">created</a>
	<br>
	<br>
	<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued</td>
			<th>Employee Name</th>
			<th>Base Salary</th>
			<th>Over-Time</th>
			<th>Hours</th>
			<th>Rate</th>
			<th>Gross</th>
			<th>Edit</th>	
			<th>Trash</th>
		</thead>		
			
		<tbody>
			{{-- @if($employee->payrolls->count()> 0) --}}
				@foreach($payroll as $payroll)
					<tr>		
						<td>
                            created_at-
						<td>
                           NAME
						</td>
                        <td>salary</td>
                        <td>OT</td>
                        <td>32</td>
                        <td>12</td>
                        <td>TOTAL</td>
						
						
						<td>
                            <a href="#" class="btn btn-success">Edit</a>
							{{-- <a href="{{ route('payrolls.edit', ['id' => $payroll->id]) }}" class="btn btn-success">Edit</a> --}}
						</td>
						<td>
                            <form action="#">
							{{-- <form action="{{ route('payrolls.destroy', ['id' => $payroll->id]) }}" method="POST"> --}}
								{{-- {{csrf_field() }} --}}
								{{-- {{method_field('DELETE')}} --}}
								<button class="btn btn-danger">Bin</button>
							</form>
						</td>
					</tr>
				@endforeach
			{{-- @else --}}
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			{{-- @endif --}}
		</tbody>							
	</table>
@endsection