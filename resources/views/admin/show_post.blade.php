@extends('admin_layout')
@section('content')
<div class="container" style="padding: 20px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="padding: 20px">
				<div class="card-header">Danh sách bài viết
					<a href="{{ route('dashboard') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
				</div>
				@if (session('thanhcong'))
				<p class="text-success">{{ session('thanhcong') }}</p>
				@endif
				<div class="card-body">
					@php
					{{$stt = 1;}}
					@endphp
					<table class="table">
						<thead>
							<tr class="text-center text-nowrap">
								<th scope="col">Stt</th>
								<th scope="col">Title</th>
								<th scope="col">Ảnh</th>
								<th scope="col">mô tả ngắn</th>
								<th scope="col">Danh mục</th>
								<th scope="col">Lượt xem</th>
								<th scope="col">Quản lý</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($post as $value)
							<tr class="text-center">
								<th scope="row">{{ $stt++ }}</th>
								<td>{{ $value->title }}</td>
								<td><img src="{{ asset('public/upload/post/'.$value->image) }}" alt="" class="w-50"></td>
								<td>{{ $value->short_desc }}</td>
								@if ($value->category)
								<td>{!! $value->category->title !!}</td>
								@else
                                 <td></td>
								@endif
								<td>{{ $value->views }} lượt xem</td>
								<td>
									<form action="{{ route('post.destroy',$value->id) }}" method="POST">
										@csrf
										@method('DELETE')
										<input type="submit" class="btn-sm btn-danger" value="delete">
									</form>
									<a href="{{ route('post.show',$value->id) }}" class="btn-sm btn-primary">Edit</a>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

@stop