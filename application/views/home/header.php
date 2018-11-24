<div class="header" id="ban">
	<div class="container">
		<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<div class="header-search">
				<div class="search">
					<input class="search_box" type="checkbox" id="search_box">
					<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
					<div class="search_form">
						<form action="#" method="post">
							<input type="text" name="Search" placeholder="Search...">
							<input type="submit" value="Send">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li class="<?= ($this->uri->segment(1) == '') ? 'active act' : '' ?>"><a href="<?=base_url() ?>">Home</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'about') ? 'active act' : '' ?>"><a href="<?=base_url('about') ?>">About</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'features') ? 'active act' : '' ?>"><a href="<?=base_url('features') ?>">Features</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'travel') ? 'active act' : '' ?>"><a href="<?=base_url('travel') ?>">Travel</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'fashion') ? 'active act' : '' ?>"><a href="<?=base_url('fashion') ?>">Fashion</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'music') ? 'active act' : '' ?>"><a href="<?=base_url('music') ?>">Music</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'codes') ? 'active act' : '' ?>"><a href="<?=base_url('codes') ?>">Codes</a>
							</li>
							<li class="<?=($this->uri->segment(1) == 'contact') ? 'active act' : '' ?>"><a href="<?=base_url('contact') ?>">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
			<ul>
				<li><a href="#"> </a>
				</li>
				<li><a href="#" class="pin"> </a>
				</li>
				<li><a href="#" class="in"> </a>
				</li>
				<li><a href="#" class="be"> </a>
				</li>

				<li><a href="#" class="vimeo"> </a>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>