@extends('layout.master')

@section('nav')
    <header>
        <nav>
            <div class="section-content">
            <a href="">Logo</a>
            <span id="open" class="open">&#9776;</span>
            </div>
        </nav>
    </header>
    <div class="overlay-nav" id="nav">
        <div class="section-content">
        <a href="javascript:void(0)" id="close" class="close">&times;</a>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Projects</a>
        <a href="#">Blog</a>
        </div>
    </div>
@endsection

@section('content')
    <section class="blog-listing section-content">
        <div class="blog-list">
            <h3>All Blog Articles</h3>
            <div>
                <div class="blog-box-grid">
                    <div class="blog-card-img"> <img src="https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg" alt="" width="100%" height="100%"></div>
                    <div class="blog-card-content">
                        <div class="blog-card-info">
                            <h3>First Blog Post</h3>
                            <p>This will be the truncated content of the blogs in the database</p>
                        </div>
                        <div class="blog-card-footer">
                                <hr>
                                <span>Date: Jun 20th 2018</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="category-list">
            <div class="category-box">
                <h3>Categories</h3>
                <ul>
                    <li>Some Category</li>
                    <li>Some Category</li>
                </ul>
            </div>
        </div>
    </section>
@endsection