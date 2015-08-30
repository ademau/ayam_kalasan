<!doctype html>
<html lang="en">
<head>
   <?php Session::flush(); ?>
    <title>Silahkan Login</title>
     {{ HTML::style('MCU/css/login.css')}}
     {{ HTML::style('css/login.css')}}
	 {{ HTML::script('js/jquery-2.1.0.min.js')}}

</head>
<body style=''>
	<div class="Judul">Lihat Hasil Medical Check Up</div>
	<br><br><br><br><br><br><br><br>
	<div class="Login middle">
		<div class="LoginInfo">
			<img src="img/Logo-Lab-thamrin.png" class="imgLogin">
		</div>
		<div class="WarperLogin">
			{{ Form::open(array('url' => 'MCU/login', 'class' => 'form-horizontal')) }}

			    <!-- Name -->
			    <div class="control-group {{{ $errors->has('username') ? 'error' : '' }}}">
			        <div class="controls">
			            {{ Form::text('username', Input::old('username'), array('placeholder'=> 'Username')) }}
			            {{ $errors->first('username') }}
			        </div>
			    </div>

			    <!-- Password -->
			    <div class="control-group {{{ $errors->has('password') ? 'error' : '' }}}">
			        <div class="controls">
			            {{ Form::password('password', array('placeholder'=> 'Password')) }}
			            {{ $errors->first('password') }}
			        </div>
			    </div>

			    <!-- Login button -->
			    <div class="control-group">
			        <div class="controls">
			            {{ Form::submit('Login', array('class' => 'button blue','width'=>'300px')) }}
			        </div>
			    </div>

			{{ Form::close() }}
			<div id="loading" name="loading"></div>

		</div>
	</div>
<br><br>


	<div class="kiri bawah">
		<img src="img/RSUBundaThamrin.jpg" width=300px height=50px alt="RSU Bunda Thamrin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="IMG/LaboratoriumKlinikThamrin.png" width="400px" height=50px alt="Laboratorium Klinik Bunda Thamrin">
	</div>

</body>
</html>