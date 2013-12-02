<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Confirm</h2>

		<div>
			To confirm your account go to: {{url('ed/users/confirm-account')}}/{{$email}}/{{$token}}
		</div>
	</body>
</html>
