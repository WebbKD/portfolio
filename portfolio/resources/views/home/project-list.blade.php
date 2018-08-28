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
    <section class="project-list">
        <div class="masonry-project-display">
            @foreach($projects as $project)
                <article class="masonry-card">
                    <p><?php echo str_limit($project->content, 40); ?></p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>{{$project->title}}</h3></figcaption>
                    </figure>
                    <a href="/project/{{$project->id}}" class="btn">View Project</a>
                </article>
            @endforeach
           
        </div>
    </section>
@endsection