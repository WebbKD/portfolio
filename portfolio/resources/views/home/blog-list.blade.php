@extends('layout.master')

@section('nav')
    <header>
        <nav>
            <div class="section-content">
                <a href="/"><img src="/images/kendell-webb-logo.png" alt="kendell-webb-web-developer-seo-expert" style="width:100px; margin-top:10px;"></a>
            <span id="open" class="open">&#9776;</span>
            </div>
        </nav>
    </header>
    <div class="overlay-nav" id="nav">
        <div class="section-content">
        <a href="javascript:void(0)" id="close" class="close">&times;</a>
        <a href="/">Home</a>
        <a href="#">About</a>
        <a href="/projects">Projects</a>
        <a href="/blog">Blog</a>
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
                @foreach($tags as $tag)
                <li> <a href="/blog/{{$tag->slug}}"> {{$tag->name}}</a></li>
                @endforeach
            </ul>

            @foreach($blogs as $blog)
            <article>
                <div class="blog-box-grid">
                    <div class="blog-card-img"> <img src="https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg" alt="" width="100%" height="100%"></div>
                    <div class="blog-card-content">
                        <div class="blog-card-info">
                            <h3>{{$blog->title}}</h3>
                            <p><?php echo str_limit($blog->content, 40); ?></p>
                        </div>
                        <div class="blog-card-footer">
                                <hr>
                                <h4>{{$blog->created_at}}</h4>
                                <a href="/{{$blog->tag->slug}}/{{$blog->slug}}" class="btn">View Article</a>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </section>
@endsection