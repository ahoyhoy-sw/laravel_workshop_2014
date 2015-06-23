<!-- app/views/partials/sidebar.blade.php -->
<div class="sidebar">
	{{-- Ignore --}}
	@if (Auth::check())
	<p><span class="label label-success">Admin-ing</span></p>
	<a href="{{ route('auth.logout') }}">Logout</a></p>
	@else
	<a href="{{ route('auth.index') }}">Login</a></p>
	@endif
</div>
