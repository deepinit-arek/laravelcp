@extends('site.layouts.default')

@section('title')
Permission Denied ::
@parent
@stop
@section('content')
<div class="page-header">
	@if (!Auth::user())
		<h3>You do not have permission to access this page.</h3>
		You must <a href ="{{{ URL::to('user/login') }}}">log-in</a> to see this page.
	@else
		<h3>You do not have permission to access this page.</h3>
	@endif

</div>
@stop
