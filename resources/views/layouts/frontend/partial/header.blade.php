<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="/" class="logo">iBlog</a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="{{route('home')}}">Home</a></li>
				
				<li><a href="{{route('post.index')}}">Posts</a></li>
				@guest
					<li><a href="{{route('login')}}">Login</a></li>
					<li><a href="{{route('register')}}">Register</a></li>

					@else
						@if(Auth::user()->role_id == 1)
							<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
								<li>
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											<i class="material-icons"></i>Sign Out
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
								</li>
							
						@endif
						@if(Auth::user()->role_id == 2)
							<li><a href="{{route('author.dashboard')}}">Dashboard</a></li>
							<li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons"></i>Sign Out
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
						@endif
				@endguest
				
				
			</ul><!-- main-menu -->

			<div class="src-area">
				<form method ="GET" action ="{{ route('search')}}">
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" value="{{ isset($query) ? $query : ''}} "name = "query" type="text" placeholder="Type of search">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>