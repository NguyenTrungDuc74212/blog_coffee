@extends('layout')
@section('content')
@push('active')
<li><a href="{{ route('home') }}"  class="navig_li">Trang chủ</a></li>
@foreach ($category as $value)
<li><a href="{{ route('baiviet.show',$value->id.'?'.Str::slug($value->title))}}" class="navig_li {{ $value->id==$post->category_id?'active':'' }}">{{ $value->title }}</a></li>
@endforeach
@endpush
<div class="single">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="single-top">
					<a href="#"><img class="img-responsive" src="{{asset('public/upload/post/'.$post->image)  }}" alt=" "></a>
					<div class=" single-grid">
						<h4>{{ $post->title }}</h4>				
						<ul class="blog-ic">
							<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
							<li><span><i class="glyphicon glyphicon-time"> </i>{{ $post->created_at->format('d-m-Y') }}</span></li>		  						 	
							<li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits: {{ $post->views }}</span></li>
						</ul>		  						
						<p>{!! $post->desc !!}</p>
					</div>
					<div class="comments heading">
						<h3>Bình luận về bài viết</h3>
						<div class="media">
							<div class="media-body">
								<h4 class="media-heading">	Richard Spark</h4>
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
							</div>
							<div class="media-right">
								<a href="#">
									<img src="images/si.png" alt=""> </a>
								</div>
							</div>
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img src="images/si.png" alt="">
									</a>
								</div>
								<div class="media-body">
									<h4 class="media-heading">Joseph Goh</h4>
									<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
								</div>
							</div>
						</div>
						<div class="comment-bottom heading">
							<h3>Để lại bình luận của bạn</h3>
							<form>	
								<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
								<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
								<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
								<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 about-right heading">
					<div class="abt-2">
						<h3 class="text-center">Bài viết liên quan</h3>
						@foreach ($post_related as $value)
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
				</div>
			</div>
		</div>					
	</div>
	@stop