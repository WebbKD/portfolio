@extends('layout.master')

@section('nav')
    <header style="position:inherit;">
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
    <section class="post-page">
        <div class="post-grid">
            <div class="post-content">
                <h1>{{$post->title}}</h1>   
            <?php echo $post->content ?>
            </div>
            <div class="right-sidebar">
                <div class="right-side-content">
                
                </div>
                <div class="right-side-content">
                        
                </div>
            </div>
        </div>
    </section>
@endsection