@extends('layouts.appAdmin')

@section('title')
User
@endsection

@section('content')
<div>
<form action="admin/user" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="image">
<input type="submit" value="Upload">
</div>
@endsection