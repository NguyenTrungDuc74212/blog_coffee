@extends('admin_layout')
@section('content')
@push('css')
  <link href="{{ asset('public/css/register.css' )}}"rel='stylesheet' type='text/css' />
@endpush
	<form action="{{ route('dangky_post')}}" method="POST">
		@csrf
		<label>
			<p class="label-txt">Email của bạn</p>
			<input type="text" class="input" name="email">
			<div class="line-box">
				<div class="line">
				</div>
				@error('email')
				<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</label>
		<label>
			<p class="label-txt">Tên của bạn</p>
			<input type="text" class="input" name="name">
			<div class="line-box">
				<div class="line"></div>
				@error('name')
				<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</label>
		<label>
			<p class="label-txt">Địa chỉ của bạn</p>
			<input type="text" class="input" name="address">
			<div class="line-box">
				<div class="line"></div>
				@error('address')
				<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</label>
		<label>
			<p class="label-txt">Mật khẩu của bạn</p>
			<input type="text" class="input" name="password">
			<div class="line-box">
				<div class="line"></div>
				@error('password')
				<p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
		</label>
		<button type="submit">Đăng ký</button>
	</form>
	<script type="text/javascript">
		$(document).ready(function(){

			$('.input').focus(function(){
				$(this).parent().find(".label-txt").addClass('label-active');
			});

			$(".input").focusout(function(){
				if ($(this).val() == '') {
					$(this).parent().find(".label-txt").removeClass('label-active');
				};
			});

		});
	</script>
@stop
