@extends('admin.master')

@section('content')

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Slug</th>
          <th colspan="2"></th>
        </tr>
      </thead>
      <tbody>
          @foreach($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td>Slug Name</td>
          <td><a href="/edit-category/{{ $category->id }}" class="btn btn-primary">Edit</a></td>
          <td><a href="/destroy-category/{{$category->id}}" class="btn btn-danger">Remove</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection