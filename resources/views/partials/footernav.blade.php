		<nav id="footernav">
			<div id="footer-menu" class="footer-menu">
@guest
				
				<div class="link">
					<a class="nav-link" href="{{route('login')}}">Login</a>
				</div>
			
@else
				@include('molecules.footerlink',['href'=>'/dashboard/articles','linkText'=>'Articles'])
				@include('molecules.footerlink',['href'=>'/dashboard/articles','linkText'=>'Images'])


				<div class="link" aria-labelledby="navbarDropdown">
					<a class="nav-link" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						Logout
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
@endguest
			</div>				
		</nav>
