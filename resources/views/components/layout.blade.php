<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arbeit Finden</title>
	@vite(['resources/css/app.css' ,'resources/js/app.js'])
</head>
<body class="bg-black text-white pb-20">
    <!-- div containing nav and main -->
	<div class="px-10">
        <!--Navbar contains 3 dives : Logo,Links and Post a job -->
		<nav class="flex justify-between items-center py-4 border-b border-white/10">
			<!-- first div for logo -->
			<div>
				<a href="/">
					<img src="{{ Vite::asset('resources/images/gju.png') }}" alt="your logo" style="width: 50px; height: auto;">
				</a>
			</div>
			<!-- second div for links -->
			<div class="space-x-6 font-bold">
				<a href="{{ url('/') }}">Jobs</a>

				<a href="">My Jobs</a>
				<a href="">Documentation</a>
			</div>
			<!-- third div for post a job-->

			@auth
			<div class="space-x-6 font-bold flex">
				<a href="/jobs/create">post a job</a>

				<form method="POST" action="/logout">
					@csrf
					@method('DELETE')
				<button>Log Out</button>	
				</form>
			</div>
			@endauth

			@guest
             <div class="space-x-6 font-bold">
				<a href="/register">Sign Up</a>
				<a href="/login">Login</a>
			</div>
			@endguest
		</nav>

		<main class="mt-10 max-w-full mx-auto">
			{{ $slot }}
		</main>
	</div>

</body>
</html>