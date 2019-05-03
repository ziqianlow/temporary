@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
      <h1>Create new notes</h1>
    </div>
    <form method="POST" action="{{route('create.note')}}" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Name">
    <div class="form-group">
        <label>Content</label>
      <textarea class="form-control" name="content" placeholder="Enter Content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection