<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--font awesome icon-->
<!--<link rel="stylesheet" href="../fonts/css/all.min.css">-->

<!--boxicons-->
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">

<!--custom css file-->
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Responsive 404 website - jeandoe</title>
</head>

<style>
    @charset "utf-8";
@import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap");

/*custom css file made by jendoe*/

:root{
	--header-height: 3.5rem;

	--main-clr: #0f4c20;
	--black: #121413;
	--white: #fdf;
	--dark-green: #041609;

	--body-font: 'Space Grotesk', 'Ubumtu Mono',sans-serif;

/*
	typography

	b-fsz: biggest font size,
	n-fsz: normal font size,
	s-fsz: smaller font size
*/

	--b-fsz: 2.375rem;
	--n-fsz: .938rem;
	--s-fsz: .75rem;
}

/*responsive typography*/

@media screen and (min-width: 1024px){
	:root{
		--b-fsz: 5rem;
		--n-fsz: 1rem;
		--s-fsz: .813rem;
	}
}

/*base*/

*{
    color: white !important;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html{
/*	font-size: 95%;*/
}

body{
	font-family: var(--body-font) ;
	font-size: var(--n-fsz);
	font-weight: 500;
	color: var(--black);
}

ul{
	list-style: none;
}

a{
	text-decoration: none;
}

img{
	max-width: 100%;
	height: auto;
}

/*reusable css classes*/

.container{
	max-width: 1024px;
	margin-left: 1.5rem;
	margin-right: 1.5rem;
}

.main{
	overflow: hidden; /*for animations ScrollReveal*/
}


/*header and nav*/

.header{
	position: fixed;
	width: 100%;
	background-color: transparent;
	top: 0; left: 0;
	z-index: 100;
}

.nav{
	height: var(--header-height);
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.nav_logo,
.nav_toggle{
	color: var(--black);
	display: inline-flex;
}

.nav_logo{
	font-weight: 700;
}

.nav_toggle{
	font-size: 1.25rem;
	cursor: pointer;
}

@media screen and (max-width:767px){
	.nav_menu{
		position: fixed;
		left: 0;
		top: -100%;
		width: 100%;
		background-color: var(--main-clr);
		padding: 5rem 0 4rem;
		border-radius: 0 0 1rem 1rem;
		box-shadow: 0 2px 4px hsla(38, 4%, 15%, .15);
		transition: .4s;
	}
}

.nav_list{
	text-align: center;
	display: flex;
	flex-direction: column;
	row-gap: 2rem;
}

.nav_link{
	color: var(--black);
	transform: .4s;
}
.nav_link:hover{
	color: var(--white);
}

.nav_close{
	position: absolute;
	top: 1rem; right: 1.5rem;
	font-size: 1.5rem;
	color: var(--black);
	cursor: pointer;
}

/*show menu*/
.show-menu{
	top: 0;
}

.home{
	background-color: var(--main-clr);
	height: 100vh;
	display: grid;
	padding: 6rem 0 2rem;
}

.home_container{
	display: grid;
	align-content: center;
	row-gap: 1.5rem;
}

.home_data{
	text-align: center;
}

.home_title{
	font-size: var(--b-fsz);
	margin: .75rem 0;
}

.btn{
	margin-top: 2rem;
	display: inline-block;
	background-color: var(--black);
	color: var(--white);
	padding: .8rem 1.5rem;
	border-radius: .5rem;
	transition: .4s;
}

.btn:hover{
	box-shadow: 0 4px 12px hsla(38, 1%, 8%, .4);
}

.home_img img{
	width: 230px;
	animation: floaty 1.8s infinite alternate;
}

.home_img{
	justify-self: center;
}

.home_shadow{
	width: 130px;
	height: 24px;
	background-color: hsla(38, 1%, 9%, .56);
	margin: 0 auto;
	border-radius: 50%;
	filter: blur(7px);
	animation: shadow 1.8s infinite alternate;
}

.home_footer{
	display: flex;
	justify-content: center;
	column-gap: .5rem;
	font-size: var(--s-fsz);
	align-self: flex-end;
}

/*animate ghost*/

@keyframes floaty{
	0%{
		transform: translateY(0);
	}
	100%{
		transform: translateY(15px);
	}
}

@keyframes shadow{
	0%{
		transform: scale(1, 1);
	}
	100%{
		transform: scale(.85, .85);
	}
}

@media screen and (max-width: 320px){
	.home{
		padding-top: 5rem;
	}
}

@media screen and (min-width: 767px){
	.nav{
		height: calc(var(--header-height) + 1.5rem);
	}

	.nav_toggle,
	.nav_close{
		display: none;
	}

	.nav_list{
		flex-direction: row;
		column-gap: 3.5rem;
	}

}


@media screen and (min-width: 1024px){
	.home_container{
		grid-template-columns: repeat(2, 1fr);
		align-items: center;
		column-gap: 2rem;
	}

	.home_data{
		text-align: initial;
	}

	.home_img img{
		width: 400px;
	}
	.home_shadow{
		width: 250px;
		height: 40px;
	}
}

@media screen and (min-width: 1048px){
	.container{
		margin-left: auto;
		margin-right: auto;
	}
}

@media screen and (min-width: 2048px){
	body{
		zoom: 1.7;
	}
	.home{
		height: initial;
		row-gap: 4rem;
	}
}


@media screen and (min-width: 3840px){
	body{
		zoom: 3.1;
	}
}

</style>
<body>

<!--header section-->

{{-- <header class="header">
	<nav class="nav container">
		<a href="#" class="nav_logo">JD.COMPANY</a>

		<div class="nav_menu" id="nav-menu">
			<ul class="nav_list">
				<li class="nav_item"><a href="#" class="nav_link">Home</a></li>
				<li class="nav_item"><a href="#" class="nav_link">About</a></li>
				<li class="nav_item"><a href="#" class="nav_link">Contact</a></li>
			</ul>
			<div class="nav_close" id="nav-close">
				<i class="bx bx-x"></i>
			</div>
		</div>

		<!--Toggle button-->
		<div class="nav_toggle" id="nav-toggle">
			<i class="bx bx-grid-alt"></i>
		</div>
	</nav>
</header>
	 --}}
<!--main section-->

<main class="main">
	<section class="home">
		<div class="home_container container">
			<div class="home_data">
				<span>Error 404</span>
				<h1 class="home_title">Nice Try</h1>
				<p>we can't seem to find the page <br> you are looking for.</p>
				<a href="/" class="btn">Go Home</a>
			</div>

			<div class="home_img">
				<img src="{{URL('images/ghost2.png')}}" alt="ghost img">
				<div class="home_shadow"></div>
			</div>
		</div>

		<footer class="home_footer">
			<span>(+62) 2322-32132</span>
			<span>|</span>
			<span>zolfa@gmail.com</span>
		</footer>
	</section>
</main>

<!--scrollreveal-->
<script src="{{URL('js/scrollreveal.min.js')}}"></script>

<!--main js-->
<script src="{{URL('js/main.js')}}"></script>

</body>
</html>
