<!DOCTYPE html>

<html lang="en">



<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<!-- Boxicons -->

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	

	<!-- My CSS -->

	<link rel="stylesheet" href="{{asset('admin/style.css')}}">



	



	<title>Admin</title>

</head>



<body>



	<!-- SIDEBAR -->

	<section id="sidebar">

		<a href="{{url('a-panel')}}" class="brand">

			<i class='bx bxs-smile'></i>

			<span class="text">Admin</span>

		</a>

		<ul class="side-menu top">

			<li class="@yield('shops')">

				<a href="{{route('shops.index')}}">

					<i class='bx bxs-dashboard' ></i>

					<span class="text">Tepa Reklama</span>

				</a>

			</li>

			<li class="@yield('banners')">

				<a href="{{route('banners.index')}}">

					<i class='bx bxs-dashboard' ></i>

					<span class="text">Banner</span>

				</a>

			</li>

			<li class="@yield('categories')">

				<a href="{{route('categories.index')}}">

					<i class='bx bxs-dashboard' ></i>

					<span class="text">Kategoriyalar</span>

				</a>

			</li>

			<li class="@yield('products')">

				<a href="{{route('products.index')}}">

					<i class='bx bxs-shopping-bag-alt' ></i>

					<span class="text">Mahsulotlar</span>

				</a>

			</li>



			<li class="@yield('blogs')">

				<a href="{{route('blogs.index')}}">

					<i class='bx bx-news'></i>

					<span class="text">Yangiliklar</span>

				</a>

			</li>

			<li class="@yield('partners')">

				<a href="{{route('partners.index')}}">

					<i class='bx bxs-group' ></i>

					<span class="text">Hamkorlar</span>

				</a>

			</li>

			<li class="@yield('abouts')">

				<a href="{{route('abouts.index')}}">

					<i class='bx bxs-dashboard' ></i>

					<span class="text">Biz haqimizda</span>

				</a>

			</li>	

		</ul>

		<ul class="side-menu">

			<li class="@yield('orders')">

				<a href="{{route('orders.index')}}">

					<i class='bx bxs-wallet-alt'></i>

					<span class="text">Buyurtmalar</span>

				</a>

			</li>

			<li class="@yield('sms')">

				<a href="{{route('sms.index')}}">

					<i class='bx bxs-message-dots' ></i>

					<span class="text">Xabarlar</span>

				</a>

			</li>

			<li>

				<a href="#" class="logout">

					<i class='bx bxs-log-out-circle' ></i>

					<span class="text">Logout</span>

				</a>

			</li>

		</ul>

	</section>

	<!-- SIDEBAR -->



	<!-- CONTENT -->

	<section id="content">

		<!-- NAVBAR -->

		<nav>

			<i class='bx bx-menu' ></i>

			<a href="#" class="nav-link">Categories</a>

			<form action="#">

				<div class="form-input">

					<input type="search" placeholder="Search...">

					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>

				</div>

			</form>

			<input type="checkbox" id="switch-mode" hidden>

			<label for="switch-mode" class="switch-mode"></label>

		</nav>

		<!-- NAVBAR -->

		@yield('content')

	</section>

	<!-- CONTENT -->

	

	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>;



	<script src="{{asset('admin/script.js')}}"></script>

</body>

</html>