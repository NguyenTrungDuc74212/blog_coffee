@extends('layout')
@section('content')
@push('active')
<li><a href="{{ route('home') }}"  class="navig_li">Trang chủ</a></li>
@foreach ($category as $value)
<li><a href="{{ route('baiviet.show',$value->id.'?'.Str::slug($value->title))}}" class="navig_li">{{ $value->title }}</a></li>
@endforeach
@endpush
@stop