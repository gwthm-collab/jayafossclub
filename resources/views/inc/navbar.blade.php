<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">	 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="/">Jaya Foss Club</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class = "{{Request::is('about') ? 'active' : ''}}">
							<a href="/about">About</a>
						</li>
						<li class = "{{Request::is('contact') ? 'active' : ''}}">
							<a href="/contact">Contact</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gallery<strong class="caret"></strong></a>
							<ul class="dropdown-menu" role="menu">
								<li aria-hidden="true">
									<a href="/gallery/17">Fossage - 2017</a>
								</li>
								<li aria-hidden="true">
									<a href="#">SFD - 2014</a>
								</li>
								<li aria-hidden="true">
									<a href="#">SFD - 2011</a>
								</li>
								<li aria-hidden="true">
									<a href="#">SFD - 2010</a>
								</li>
								<li aria-hidden="true">
									<a href="#">SFD - 2009</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="/usrReg">Register</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/usrProfile">View Profile</a>
								</li>
								<li>
									<a href="/logout">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>