<!doctype html>
<html>
<head>
	<title>Login</title>
</head>
<body>

    <!-- Loading Bootstrap -->
    {{ HTML::style(asset('FlatUI/bootstrap/css/bootstrap.css'))}}

    <!-- Loading Flat UI -->
    {{ HTML::style(asset('FlatUI/css/flat-ui.css'))}}
	<style type="text/css">														
		.container {
		  margin: 50px auto;
		  width: 640px;
		}
		 
		.login {
		  position: relative;
		  margin: 0 auto;
		  padding: 20px 20px 20px;
		  width: 310px;
		  background: #fff;
		}
		.login p.submit {
		  text-align: right;
		}
		 
		.login-help {
		  margin: 20px 0;
		  font-size: 11px;
		  color: white;
		  text-align: center;
		  text-shadow: 0 1px #2a85a1;
		}
		 
		.login-help a {
		  color: #cce7fa;
		  text-decoration: none;
		}
		 
		.login-help a:hover {
		  text-decoration: underline;
		}
		 
		:-moz-placeholder {
		  color: #c9c9c9 !important;
		  font-size: 13px;
		}
		 
		::-webkit-input-placeholder {
		  color: #ccc;
		  font-size: 13px;
		}
		.container {
		  margin: 50px auto;
		  width: 640px;
		}
		.login:before {
		  content: '';
		  position: absolute;
		  top: -8px;
		  right: -8px;
		  bottom: -8px;
		  left: -8px;
		  z-index: -1;
		  background: rgba(0, 0, 0, 0.08);
		  border-radius: 4px;
		}
		h1
		{
			color: #3b3b3b;
			text-align: center;
			padding-bottom: 10px;
			border-bottom: 3px solid #3b3b3b;
			margin-bottom: 50px;
			margin-top: 0px;
		}
		 
		.login p {
		  margin: 20px 0 0;
		}
		 
		.login p:first-child {
		  margin-top: 0;
		}
		 
		.login input[type=text], .login input[type=password] {
		  width: 278px;
		}
		 
		.login p.remember_me {
		  float: left;
		  line-height: 31px;
		}
		 
		.login p.remember_me label {
		  font-size: 12px;
		  color: #777;
		  cursor: pointer;
		}
		 
		.login p.remember_me input {
		  position: relative;
		  bottom: 1px;
		  margin-right: 4px;
		  vertical-align: middle;
		}
		input {
		  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
		  font-size: 14px;
		}
		 
		input[type=text], input[type=password] {
		  margin: 5px;
		  padding: 0 10px;
		  width: 200px;
		  height: 34px;
		  color: #404040;
		  background: white;
		  border: 1px solid;
		  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
		  border-radius: 2px;
		  outline: 5px solid #eff4f7;
		  -moz-outline-radius: 3px;
		  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
		  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
		}
		 
		input[type=text]:focus, input[type=password]:focus {
		  border-color: #7dc9e2;
		  outline-color: #dceefc;
		  outline-offset: 0;
		}
		 

		input[type=checkbox],
		input[type=radio] {
		border: 1px solid #c0c0c0;
		margin: 0 0.1em 0 0;
		padding: 0;
		font-size: 16px;
		line-height: 1em;
		width: 1.25em;
		height: 1.25em;
		background: #fff;
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ededed), to(#fbfbfb));
		 
		-webkit-appearance: none;
		-webkit-box-shadow: 1px 1px 1px #fff;
		-webkit-border-radius: 0.25em;
		vertical-align: text-top;
		display: inline-block;
		 
		}
		 
		input[type=radio] {
		-webkit-border-radius: 2em; /* Make radios round */
		}
		 
		input[type=checkbox]:checked::after {
		content:"âœ”";
		display:block;
		text-align: center;
		font-size: 16px;
		height: 16px;
		line-height: 18px;
		}
		 
		input[type=radio]:checked::after {
		content:"â—";
		display:block;
		height: 16px;
		line-height: 15px;
		font-size: 20px;
		text-align: center;
		}
		 
		select {
		border: 1px solid #D0D0D0;
		background: url(http://www.quilor.com/i/select.png) no-repeat right center, -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fbfbfb), to(#ededed));
		background: -moz-linear-gradient(19% 75% 90deg,#ededed, #fbfbfb);
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
		color: #444;
		}
		.eror
		{
			color: #ee0000;
		}
		input[type=submit],input[type=button],.button
		{
		    border: 1px solid #3079ed;
		    color: #fff;
		    text-shadow: 0 1px rgba(0,0,0,0.1);
		    background-color: #4d90fe;
		    background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
		    background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
		    background-image: -ms-linear-gradient(top,#4d90fe,#4787ed);
		    background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
		    background-image: linear-gradient(top,#4d90fe,#4787ed);
		    padding:10px 10px 10px 10px;
		    padding-left: 50px;
		    padding-right: 20px;
		}
		input[type=submit]:hover,select,input[type=button]:hover,.button:hover
		{
		    border: 1px solid #2f5bb7;
		    color: #fff;
		    text-shadow: 0 1px rgba(0,0,0,0.3);
		    background-color: #357ae8;
		    background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
		    background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
		    background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
		    background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
		    background-image: linear-gradient(top,#4d90fe,#357ae8);
		}
	</style>
	<div class="container">
		  <div class="login">
		    <h1>Silahkan Login</h1>
		    {{ Form::open(array('url' => 'login')) }}
		    	<p class="eror">
					{{ $errors->first('username') }}
					{{ $errors->first('password') }}
				</p>
				<p style="margin-bottom:0px;">
					{{ Form::text('username', Input::old('email'), array('placeholder' => 'Username')) }}
				</p>

				<p style="margin-top:0px;">
					{{ Form::password('password', array('placeholder' => 'Password')) }}
				</p>

		      <p class="submit">{{ Form::submit('Login',array('width'=>"150px") ) }}</p>
		    {{ Form::close() }}
		  </div>
		 
	</div>
	
	
</body>
</html>