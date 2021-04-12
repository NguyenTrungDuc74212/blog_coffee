@extends('layout')
@section('content')
@push('active')
<li><a href="{{ route('home') }}"  class="navig_li active">Trang chủ</a></li>
@foreach ($category as $value)
<li><a href="{{ route('baiviet.show',$value->id.'?'.Str::slug($value->title))}}" class="navig_li">{{ $value->title }}</a></li>
@endforeach
@endpush
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-one">
                    <p>Bài viết nổi bật</p>
                    <h3>Coffee of the month</h3>
                </div>
                <div class="about-two">
                    <a href="{{ route('post_detail.show',$post_random->id) }}"><img src="{{ asset('public/upload/post/'.$post_random->image) }}" alt="" /></a>
                    @if (Auth::check())
                        <p>Posted by {{ Auth::user()->name }}
                            {{ $post_random->created_at->format('d-m-Y')}}<br> 
                            <span>{{ $post_random->views }} lượt xem</span></p>
                    @endif
                    <p>{{ $post_random->short_desc }}</p>
                    <div class="about-btn">
                        <a href="{{ route('post_detail.show',$post_random->id) }}">Đọc tiếp</a>
                    </div>
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
                </div>  
                <div class="about-tre">
                    <div class="a-1">
                        <div class="row">
                            @foreach ($post as $value)
                            {{--     --}}           
                            <div class="col-md-6 abt-left" style="margin: 20px 0px">
                                <a href="{{ route('post_detail.show',$value->id) }}">
                                    <img src="{{ asset('public/upload/post/'.$value->image) }}" alt="{{ Str::slug($value->title) }}" />
                                </a>
                                <h6>{{ $value->category->title }}</h6>
                                <h3>{{ $value->title }}</h3>
                                <p>{!! $value->short_desc !!}</p>
                                <label>{{ $value->created_at->format('d-m-Y') }}</label>
                                <div class="about-btn">
                                    <a href="{{ route('post_detail.show',$value->id) }}">Đọc tiếp...</a>
                                </div>
                            </div>
                            @endforeach 
                        </div>                  

                        <div class="clearfix"></div>
                    </div>
                    {{ $post->appends(Request()->all())}}
                </div>  
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Bài viết mới nhất</h3>
                    @foreach ($post_new as $value)
                    <div class="might-grid">
                        <div class="grid-might">
                            <a href="{{ route('post_detail.show',$value->id) }}"><img src="{{ asset('public/upload/post/'.$value->image) }}" class="img-responsive" alt=""> </a>
                        </div>
                        <div class="might-top">
                            <h4><a href="{{ route('post_detail.show',$value->id) }}">{{ $value->title }}</a></h4>
                            <p>{!!substr($value->short_desc,0,200) !!}</p>
                            <a href="{{ route('post_detail.show',$value->id)}}">Đọc tiếp...</a>
                            <label style="font-size: 14px">{{ $value->views }} lượt xem</label>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach                    
                </div>
                <div class="abt-2">
                    <h3>Bài viết xem nhiều nhất</h3>
                    <ul>
                        @foreach ($post_view as $value)
                        <li><a href="{{ route('post_detail.show',$value->id)}}">
                            {{ $value->title }}
                        </a><span class="views" style="font-size: 14px">
                            {{ $value->views }} lượt xem</span></li>

                         @endforeach
                    </ul>   
                </div>
                <div class="abt-2">
                    <h3>NEWS LETTER</h3>
                    <div class="news">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                            <input type="submit" value="Đăng ký">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>            
        </div>      
    </div>
</div>
@stop