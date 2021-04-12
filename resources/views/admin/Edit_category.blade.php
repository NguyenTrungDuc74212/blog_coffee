@extends('admin_layout')
@section('content')
<div class="container" style="padding: 20px">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card" style="padding: 20px">
				<div class="card-header">Sửa danh mục bài viết
					<a href="{{ route('dashboard') }}"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back</a>
				</div>
				<div class="card-body">
					<form action="{{ route('category.update',$category->id) }}" method="POST">
						@method('PUT')
						@csrf
						<fieldset class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" value="{{ $category->title }}">
						</fieldset>
						<fieldset class="form-group">
							<label>Mô tả</label>
							<textarea class="form-control" id="ck" name="desc">{!!$category->category_desc !!}</textarea>
						</fieldset>
						<input type="submit" name="suadanhmuc" class="btn btn-success form-control" value="Update">
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

@stop