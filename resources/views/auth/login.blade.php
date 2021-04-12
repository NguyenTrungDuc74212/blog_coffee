@extends('admin_layout')
@section('content')
@push('css')
<link href="{{ asset('public/css/login.css' )}}"rel='stylesheet' type='text/css' />
@endpush
@push('li')
<ul class="navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('dangky') }}">Đăng ký<span class="sr-only">(current)</span></a>
  </li>
</ul>
@endpush


<div class="login-page">
  <div class="form">
    <h1>Đăng nhập</h1>
    @if (session('thongbao'))
    <p class="text-success">{{ session('thongbao') }}</p>
    @elseif(session('loi'))
    <p class="text-danger">{{ session('loi') }}</p>
    @endif
    <form class="login-form" action="{{ route('submit_login') }}">
      <input type="text" placeholder="Email" name="email" />
      <input type="password" placeholder="password" name="pass" />
      <button type="submit">Đăng nhập</button>
      <p class="message">Chưa đăng ký? <a href="{{ route('dangky') }}">Tạo tài khoản</a></p>
    </form>
  </div>
</div>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });
</script>
@stop