<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login_style.scss') }}">
	<title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
    </div>
@endif
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup">Sign up</h2>
		<div class="form-holder">
			<input type="text" class="input" placeholder="Name" />
			<input type="email" class="input" placeholder="Email" />
			<input type="password" class="input" placeholder="Password" />
		</div>
		<button class="submit-btn">Sign up</button>
	</div>
	<form action="{{ route('login') }}" method="POST">
		@csrf
	<div class="login slide-up">
		<div class="center">
			<h2 class="form-title" id="login">Log in</h2>
			<div class="form-holder">
				<input type="email" class="input" placeholder="Email" name='email'/>
				<input type="password" class="input" placeholder="Password" name='password' />
			</div>
			<button class="submit-btn">Log in</button>
		</div>
	</div>
	</form>
</div>
<script type="text/javascript" src="{{ asset('js/login_style.js') }}"></script>
</body>
</html>


