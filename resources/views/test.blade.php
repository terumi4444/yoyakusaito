@extends('master')
@section('title', 'test')

@section('stylesheet')
	<meta charset="UTF-8">
<!--	<title>Document</title>-->
@endsection('stylesheet')

@section('content')    
	<form method="POST" action="/upload/" enctype="multipart/form-data">

		{{ csrf_field() }}

        <input type="file" id="file" name="file" class="form-control">

        <button type="submit">アップロード</button>

	</form>
@endsection('content')
