
<style type="text/css">
	.page-footer{
		font-size: 1.0em;
		background-color: #110025;
	}
	.page-footer a{
		color: white;
		text-decoration: none;
	}

	.link-foot{
		margin-left: 1em;
	}

	.link-foot a:hover{
		color: rgb(255,0,85);
	}

	.page-footer a:hover{
		color: #727bfa;
	}
	.page-footer, .font-small, .special-color-dark, .pt-4, .py-4{
		color: white;
	}

	.page-footer hr{
		color: white;
	}

	.container-foot{
		background-color: #2d0065;
		border-top: 2px solid #110025;
	}
	.container-foot a:hover{
		color: #b49cd0;
	}
	.row{
		margin-right: 0;
	}

</style>

</main>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 container-foot text-center text-md-left">
	<!-- Footer Links -->

	<!-- Grid row -->
	<div class="row">

		<!-- Grid column -->
		<div class="col-md-4 mx-auto">

			<!-- Content -->
			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
			<p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
			adipisicing elit.</p>

		</div>
		<!-- Grid column -->

		<hr class="clearfix w-100 d-md-none">

		<!-- Grid column -->
		<div class="col-md-2 mx-auto">

			<!-- Links -->
			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>

		</div>
		<!-- Grid column -->

		<hr class="clearfix w-100 d-md-none">

		<!-- Grid column -->
		<div class="col-md-2 mx-auto">

			<!-- Links -->
			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>

		</div>
		<!-- Grid column -->

		<hr class="clearfix w-100 d-md-none">

		<!-- Grid column -->
		<div class="col-md-2 mx-auto">

			<!-- Links -->
			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

			<ul class="list-unstyled">
				<li>
					<a href="#!">Link 1</a>
				</li>
				<li>
					<a href="#!">Link 2</a>
				</li>
				<li>
					<a href="#!">Link 3</a>
				</li>
				<li>
					<a href="#!">Link 4</a>
				</li>
			</ul>

		</div>
		<!-- Grid column -->

	</div>
	<!-- Grid row -->

</footer>

<footer class="page-footer font-small stylish-color-dark pt-4">
	<!-- Footer Links -->

	<!-- Call to action 
	<ul class="list-unstyled list-inline text-center py-2">
		<li class="list-inline-item">
			<h5 class="mb-1">Register for free</h5>
		</li>
		<li class="list-inline-item">
			<a href="#!" class="btn btn-danger btn-rounded" style="color: white;" >Sign up!</a>
		</li>
	</ul>
	Call to action 

	<hr> -->

	<!-- Social buttons -->
	<ul class="list-unstyled list-inline text-center">
		<li class="list-inline-item">
			<a class="link-foot" target="_blank" href=""><i class="fab fa-facebook-f"></i></a>
		</li>
		<li class="list-inline-item">
			<a class="link-foot" target="_blank" href=""><i class="fab fa-youtube"></i></a>
		</li>
		<li class="list-inline-item">
			<a class="link-foot" target="_blank" href=""><i class="fab fa-instagram"></i></a>
		</li>
		<li class="list-inline-item">
			<a class="link-foot" target="_blank" href=""><i class="fab fa-linkedin-in"></i></a>
		</li>
	</ul>
	<!-- Social buttons -->
	<p>
		Powered by <a href='http://processwire.com'>ProcessWire CMS</a>  &nbsp; | &nbsp; 
		<?php 
		if($user->isLoggedin()) {
			// if user is logged in, show a logout link
			echo "<a href='{$config->urls->admin}login/logout/'>Logout ($user->name)</a>";
		} else {
			// if user not logged in, show a login link
			echo "<a href='{$config->urls->admin}'>Admin Login</a>";
		}
		?>
	</p>

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
		<a href=""> BruNau1</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
