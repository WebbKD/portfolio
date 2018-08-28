@extends('admin.master')

@section('content')

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Tag Name</th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($tags as $tag)
        <tr>
          <td>{{$tag->id}}</td>
          <td>{{$tag->name}}</td>
          <td><a href="/edit-tag/{{$tag->id}}" class="btn btn-primary">Edit</a></td>
          <td><a href="/destroy-tag/{{$tag->id}}" class="btn btn-danger">Destroy</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection