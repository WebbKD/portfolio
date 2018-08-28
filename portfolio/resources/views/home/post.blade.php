@extends('layout.master')

@section('nav')
    <header style="position:inherit;">
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
    <section class="post-page">
        <div class="post-grid">

            <div class="post-content">
                    <h1>{{$post->title}}</h1> 
                    
                <div class="content-img">
                    <img src="/images/highlineBg.jpg" alt="">
                </div>
                <div class="blog-post-content">
                        <?php echo $post->content ?>
                </div>
            </div>

        </div>
    </section>
@endsection