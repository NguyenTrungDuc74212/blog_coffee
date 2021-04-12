@extends('layout')
@section('content')
@push('active')
<li><a href="{{ route('home') }}"  class="navig_li">Trang chủ</a></li>
@foreach ($category as $value)
<li><a href="{{ route('baiviet.show',$value->id.'?'.Str::slug($value->title))}}" class="navig_li {{ $value->id==$category_id->id?'active':'' }}">{{ $value->title }}</a></li>
@endforeach
@endpush
<div class="about">
	<div class="container">
		<div class="about-main">
			<div class="col-md-8 about-left">
				<div class="about-one">
					<h3>{{ $category_id->title }}</h3>
				</div>
				<div class="about-two">
					<p>{!! $category_id->category_desc !!}</p>
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
							@foreach ($category_post as $value)
							{{-- 	 --}}			
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
				</div>	
			</div>
			<div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Bài viết xem nhiều nhất</h3>
                    @foreach ($post_view as $value)
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
					<h3>Danh mục gợi ý</h3>
					<ul>
						@foreach ($category_goiy as $value)
						<li><a href="{{ route('baiviet.show',$value->id.'?'.Str::slug($value->title))}}">{{ $value->title }}</a></li>
						@endforeach
		
					</ul>	
				</div>
			</div>
			<div class="clearfix"></div>			
		</div>		
	</div>
</div>
<!--about-end-->
@stop