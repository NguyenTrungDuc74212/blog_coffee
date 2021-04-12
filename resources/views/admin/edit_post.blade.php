@extends('admin_layout')
@section('content')
<div class="container" style="padding: 20px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="padding: 20px">
				<div class="card-header">Sửa bài viết
					<a href="{{ route('dashboard') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
				</div>
				@if (session('thanhcong'))
				<p class="text-success">{{ session('thongbao') }}</p>
				@endif
				<div class="card-body">
					<form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<fieldset class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" value="{{ $post->title }}">
						</fieldset>
						<fieldset class="form-group">
							<label>Ảnh</label>
							<input type="hidden" name="image_old" value="{{ $post->image }}">
							<input type="file" name="image" class="form-control">
						</fieldset>
						<fieldset class="form-group">
							<label>Mô tả ngắn</label>
							<input type="text" name="short_desc" class="form-control" value="{{ $post->short_desc }}">
						</fieldset>
						<fieldset class="form-group">
							<label>Nội dung</label>
							<textarea class="form-control" id="ck" name="desc">{{ $post->desc}}</textarea>
						</fieldset>
						<fieldset class="form-group">
							<label>Danh mục</label>
							<select class="form-control" name="category_id">
								<option>---Choose category---</option>
								@foreach ($category as $value)
 <option {{ $value->id==$post->category_id ? 'selected':''}} value="{{ $value->id }}">{{ $value->title }}</option>
								@endforeach
							</select>
						</fieldset>
						<input type="submit" name="suabaiviet" class="btn btn-success form-control" value="Lưu">
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop