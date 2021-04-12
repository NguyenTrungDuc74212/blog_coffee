@extends('admin_layout')
@section('content')
<div class="container" style="padding: 20px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="padding: 20px">
				<div class="card-header">Thêm danh mục bài viết
					<a href="{{ route('dashboard') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
				</div>
				@if (session('thanhcong'))
					<p class="text-success">{{ session('thongbao') }}</p>
				@endif
				<div class="card-body">
					<form action="{{ route('category.store') }}" method="POST">
						@csrf
						<fieldset class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="tiêu đề">
						</fieldset>
						<fieldset class="form-group">
							<label>Mô tả</label>
							<textarea class="form-control" id="ck" name="desc"></textarea>
						</fieldset>
						<input type="submit" name="themdanhmuc" class="btn btn-success form-control">
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop