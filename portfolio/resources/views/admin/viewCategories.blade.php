@extends('admin.master')

@section('content')

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Header</th>
          <th>Header</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td><!--Edit button-->r</td>
          <td><!--Delete Button-->sit</td>
        </tr>
      </tbody>
    </table>
  </div>

@endsection