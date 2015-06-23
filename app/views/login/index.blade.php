<!-- app/views/login/index.blade.php -->
{{ Form::open(['route' => 'auth.process', 'method' => 'POST', 'class' => 'form-signin', 'role' => 'form']) }}
{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Enter username', 'required', 'autofocus']) }}
{{ Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Enter password', 'required']) }}
{{ Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) }}
{{ Form::close() }}

