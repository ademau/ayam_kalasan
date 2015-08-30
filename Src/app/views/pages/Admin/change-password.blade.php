@extends('layouts.Admin')

@section('content-header')
                    <h1>
                        Change Password
                        <small>change password</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                        <li class="active">change-password</li>
                    </ol>
@stop
@section('content')

							<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ubah Password</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
							    {{ Form::open(array('url' => 'change-password')) }}
							    	<p class="eror">
							    		{{ Session::get('message') }}
										@if ($errors->has())
										
											@foreach ($errors->all() as $error)
												{{ $error }}		
											@endforeach
										
										@endif
										{{ $errors->first('username') }}
                                    <div class="box-body">
                                        <div class="form-group">
                                        	<label for="username">User Name</label>
											{{ Form::text('username', Input::old('email'), array('placeholder' => 'Username','class'=>'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                        	<label for="password">Old Password</label>
											{{ Form::password('password', array('placeholder' => 'Password Lama','class'=>'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                        	<label for="new_passsword">New Password</label>
											{{ Form::password('new_password', array('placeholder' => 'Password Baru','class'=>'form-control')) }}
                                        </div>
                                        <div class="form-group">
                                        	<label for="new_password1">New Password (Confirmation)</label>
											{{ Form::password('new_password1', array('placeholder' => 'Konfirmasi Password Baru','class'=>'form-control')) }}
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
		   						 {{ Form::close() }}
                            </div>

	

	
@stop
                                            

