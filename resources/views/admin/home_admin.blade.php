@extends('admin_layout')
@section('content')
	<div class="container" style="padding: 20px">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card" style="padding: 20px">
					<div class="card-header">Dashboard</div>
					<div class="card-body">
						<a href="{{ route('category.create') }}" class="btn btn-success w-100 mb-2">Thêm danh mục bài viết</a>
						<a href="{{ route('category.index') }}" class="btn btn-success w-100 mb-2">Liệt kê danh mục bài viết</a>
						<a href="{{ route('post.create') }}" class="btn btn-primary w-100 mb-2">Thêm bài viết</a>
						<a href="{{ route('post.index') }}" class="btn btn-primary w-100 mb-2">Liệt kê bài viết</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	@stop