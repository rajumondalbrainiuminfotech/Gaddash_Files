<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="public/css/responsive.css">
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead



        <style>
body {
	padding: 0px;
	width: 100%;
	height: 100%;
	overflow: hidden;
	float: left;
	margin: 0 0;
	min-height: 100%;
}
video {
	width: 100%;
	height: 100vh;
	float: left;
	object-fit: cover;
	object-position: center;
}
.mobileVideo, .tabVideo {
	display: none;
}
picture {
	width: 100%;
	float: left;
	margin: 0 0;
	min-height: 100vh;
	background-image: url(deskImg.jpg);
	display: none;
	background-size: 100%;
}
@media screen and (min-width: 240px) and (max-width: 599px) {
	body {
		background-size: cover;
		min-height: 100vh;
		width: 100%;
		float: left;
	}
	video {
		object-fit: cover;
		background: #fff;
		height: 100%;
		object-position: center;
	}
	picture {
		background-image: url(deskImg.jpg);
		background-size: 314%;
		background-position: center;
	}
	.deskVideo, .tabVideo {
		display: none;
	}
	.mobileVideo {
		display: block;
	}
}
@media screen and (min-width: 600px) and (max-width: 800px) {
	.deskVideo, .mobileVideo {
		display: none;
	}
	.tabVideo {
		width: 100%;
		height: 100vh;
		object-fit: cover;
		object-position: center;
		display: block;
	}
	picture {
		background-image: url(deskImg.jpg);
		background-size: cover;
		background-position: center;
	}
}
</style>
    </head>
    <body class="font-sans antialiased">
        @inertia

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
