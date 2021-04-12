@extends('admin_layout')
@section('content')
<div class="container" style="padding: 20px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="padding: 20px">
				<div class="card-header">Danh mục bài viết
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
							<tr class="text-center">
								<th scope="col">Stt</th>
								<th scope="col">Title</th>
								<th scope="col">Description</th>
								<th scope="col">Quản lý</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($category as $value)
							<tr class="text-center">
								<th scope="row">{{ $stt++ }}</th>
								<td>{{ $value->title }}</td>
								@if ($value->category_desc)
									<td>{!!substr($value->category_desc,0,100)!!}</td>
							    @else
							    <td></td>
								@endif
								<td>
								<form action="{{ route('category.destroy',$value->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<input type="submit" class="btn-sm btn-danger" value="delete">
								</form>
									<a href="{{ route('category.show',$value->id) }}" class="btn-sm btn-primary">Edit</a>
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