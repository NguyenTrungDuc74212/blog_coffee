@extends('admin_layout')
@section('content')
<div class="container" style="padding: 20px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="padding: 20px">
				<div class="card-header">Thêm bài viết
					<a href="{{ route('dashboard') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
				</div>
				@if (session('thanhcong'))
				<p class="text-success">{{ session('thongbao') }}</p>
				@endif
				<div class="card-body">
					<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<fieldset class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="tiêu đề">
						</fieldset>
						<fieldset class="form-group">
							<label>Ảnh</label>
							<input type="file" name="image" class="form-control" placeholder="tiêu đề">
						</fieldset>
						<fieldset class="form-group">
							<label>Mô tả ngắn</label>
							<input type="text" name="short_desc" class="form-control" placeholder="mô tả ngắn">
						</fieldset>
						<fieldset class="form-group">
							<label>Nội dung</label>
							<textarea class="form-control" id="ck" name="desc"></textarea>
						</fieldset>
						<fieldset class="form-group">
							<label>Danh mục</label>
							<select class="form-control" name="category_id">
								<option>---Choose category---</option>
								@foreach ($category as $value)
								   <option value="{{ $value->id }}">{!! $value->title !!}</option>
								@endforeach
							</select>
						</fieldset>
						<input type="submit" name="thembaiviet" class="btn btn-success form-control">
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop