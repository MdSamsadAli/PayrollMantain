<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<div class="panel-body">
				<h2>VEGA</h2>
            </div>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<!-- Left Side Of Navbar -->
			<ul class="nav navbar-nav">
				<li><a href="{{ route('department.index') }}">Departments</a></li>
				<li><a href="{{ route('roll.index') }}">Roles</a></li>
				<li><a href="{{ route('employee.index') }}">Employee</a></li>				
				<li><a href="{{ route('payroll.index') }}">Payroll</a></li>				
			</ul>

			<!-- Right Side Of Navbar -->
			<ul class="nav navbar-nav navbar-right">
				<!-- Authentication Links -->
			@guest

					<li><a href="{{route('login')}}">Login</a></li>
					<li><a href="{{route('register')}}">Register</a></li>
				@endguest
					<li><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
							{{auth()->check()?auth()->user()->name:null}} <span class="caret"></span>
							 {{-- {{ Auth::user()->name }} --}}
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="{{route('logout')}}">
									Logout
								</a>

									{{-- <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form> --}}
							</li>
						</ul>
					</li>
			</ul>
		</div>
	</div>
</nav>