@extends('admin.adminMaster')

@section('content')

    <form method="POST" action="/storeCategory">
            {{ csrf_field() }}
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="categoryName" id="category">
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection