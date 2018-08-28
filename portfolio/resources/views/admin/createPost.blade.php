@extends('admin.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

        <form method="POST" action="/store-post" style="width:100%;">
            {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            </div>

            <div class="form-group col-md-6">
                    <label for="siteLink">Site Link</label>
                    <input type="text" class="form-control" id="siteLink" name="siteLink">
            </div>

            <div class="form-group col-md-6">
                <label for="category">Category</label>
                <select id="category" class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                    <label for="category">Tag</label>
                    <select id="category" class="form-control" name="tag_id">
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
            </div>

            
        </div>

        <div class="form-group">
            <label for="editor">Content</label>
            <textarea class="form-control" id="editor" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        </form>  
</div>
@endsection

@section('javascriptLinks')
    <script>
        $(document).ready(function() {
            $('#editor').summernote();
        });
    </script>
@endsection