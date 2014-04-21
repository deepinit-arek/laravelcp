<div class="navbar navbar-default navbar-fixed-top main-nav">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{{ URL::to('admin') }}}" class="navbar-brand" title="{{{ Setting::get('site.name') }}}">{{{ Setting::get('site.name') }}} </a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				@yield('main-nav-pre')
				<li class="dropdown{{ (Request::is('admin/users*|admin/roles*') ? ' active' : '') }}" title="{{{ Lang::get('core.users') }}}">
					<a id="nav_users" class="dropdown-toggle" data-toggle="dropdown" href="{{{ URL::to('admin/users') }}}">
						<span class="glyphicon glyphicon-user"></span> {{{ Lang::get('core.users') }}} <span class="caret"></span>
					</a>
					<ul aria-labelledby="nav_users" class="dropdown-menu">
						<li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/users') }}}"><span class="glyphicon glyphicon-user"></span> &nbsp; {{{ Lang::get('core.users') }}}</a></li>
						<li{{ (Request::is('admin/roles*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/roles') }}}"><span class="glyphicon glyphicon-warning-sign"></span> &nbsp; {{{ Lang::get('Roles') }}}</a></li>
					</ul>
				</li>
				@yield('main-nav-post')
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@yield('sub-nav-pre')
				<li title="{{ date('l, d M Y', time()) }}"><a href="#">{{ date('l, d M Y', time()) }}</a></li>
				<li class="panel-weather"></li>

				<li class="dropdown{{ (Request::is('admin/settings*') ? ' active' : '') }}" title="{{{ Lang::get('core.settings') }}}">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span class="glyphicon glyphicon-cog"></span>
					</a>
					<ul class="dropdown-menu">
						<li{{ (Request::is('admin/settings*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/settings') }}}"><span class="glyphicon glyphicon-th-list"></span>  &nbsp; {{{ Lang::get('core.settings') }}}</a></li>
						<li{{ (Request::is('admin/slugs*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/slugs') }}}"><span class="glyphicon glyphicon-list-alt"></span>  &nbsp; {{{ Lang::get('core.slugs') }}}</a></li>						
						<li{{ (Request::is('admin/comments*') ? ' class="active"' : '') }}><a href="{{{ URL::to('admin/comments') }}}"><span class="glyphicon glyphicon-bullhorn"></span>  &nbsp; {{{ Lang::get('core.comments') }}}</a></li>
						@yield('sub-nav-settings')
					</ul>
				</li>
				<li class="dropdown" title="{{{ Auth::user()->email }}}">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon"><img alt="{{{ Auth::user()->email }}}" src="{{ Gravatar::src(Auth::user()->email, 20) }}"></span>  &nbsp; {{{ Auth::user()->email }}}	<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{{ URL::to('user/settings') }}}"><span class="glyphicon glyphicon-wrench"></span>  &nbsp; {{{ Lang::get('core.profile') }}}</a></li>
						<li class="divider"></li>
						<li><a href="{{{ URL::to('user/logout') }}}"><span class="glyphicon glyphicon-share"></span>  &nbsp; {{{ Lang::get('core.logout') }}}</a></li>
						@yield('sub-nav-user')
					</ul>
				</li>
				@yield('sub-nav-post')
			</ul>
		</div>
	</div>
</div>