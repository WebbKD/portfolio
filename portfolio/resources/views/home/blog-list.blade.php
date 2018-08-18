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
            <!--Img block top-->
            <div class="img-block">

            </div>
            <h3>All Blog Articles</h3>
            <!--Chips for categories-->
            <ul>
                <li> <a href="">SEO</a></li>
                <li>Free Lancing</li>
                <li>Web Development</li>
            </ul>


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
                                <h4>Date: Jun 20th 2018</h4>
                                <a href="" class="btn">View Article</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection