<!-- app/views/partial/notifications.blade.php -->
@if($message = Session::get('success'))
<div class="alert alert-dismissable alter-success backend-hud">
<button type="button" class="close" data-dismiss="alert">
	<strong>Successfully!!</strong> {{ $message }}
</button>
</div>
@endif
