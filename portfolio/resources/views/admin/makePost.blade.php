@extends('admin.adminMaster')

@section('content')

    <form>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_ID" id="category" class="form-control">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{ $category->categoryName }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="sitelink" name="siteLink">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="postImg" name="postImg">
        </div>
        <button type="button" id="createPostBtn">Submit</button>
    </form>
    <script>
        //var token = '';
    </script>
@endsection