@extends('backendtemplate')
@section('mainsection')
<div class="container">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Genres Edit From</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{ route('genres.update',$genres->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-md-12">
					<label>Genres Title</label>
					<input type="text" name="title" class="form-control" value="{{$genres->title}}">
					@error('title')
		  <div class="alert alert-danger">{{$message}}</div>
		@enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br>
					<input type="submit" value="update" class="btn btn-info">
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
