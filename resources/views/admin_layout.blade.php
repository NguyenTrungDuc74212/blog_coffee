<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
	@stack('css')
	<title>ADMIN</title>
</head>
<body>
	<style type="text/css">
		nav.navbar.navbar-expand-lg {
			color: white;
			margin: 0px 75px;
		}
		.menu {
			padding: 10px;
			color: white;
			background: linear-gradient(45deg, #8fc34a, #4caf50);
		}
		a.navbar-brand {
			color: white;
		}

		a.nav-link {
			color: white;
		}
	</style>
	<div class="menu">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="#">Blog Api laravel</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					@if (Auth::check())
					<li class="nav-item">
						<a href="" class="nav-link">
							<i class="fa fa-user" aria-hidden="true"></i>
							Xin chào {{ Auth::user()->name }}</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('dangxuat') }}" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>
						</li>
						@else
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('dangky') }}">Đăng ký<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="{{ route('login') }}">Đăng nhập<span class="sr-only">(current)</span></a>
						</li>
						@endif
					</ul>
				</div>
			</nav>
		</div>
		@yield('content')
<script type="text/javascript">
	$(document).ready(function() {
		CKEDITOR.replace('ck');
	});
</script>
	</body>
	</html>