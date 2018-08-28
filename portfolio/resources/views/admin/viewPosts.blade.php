@extends('admin.master')

@section('content')

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Category</th>
          <th>Site Link</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->category->name}}</td>
          <td>{{$post->siteLink}}</td>
          <td>{{$post->active()}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection