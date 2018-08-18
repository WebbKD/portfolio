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
    <section class="project-list">
        <div class="masonry-project-display">
            <div class="masonry-card">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum amet cumque explicabo dolorum? Culpa modi nisi perferendis harum maxime laboriosam consequatur ea enim facere! Veritatis voluptatem veniam dolorum aperiam? Libero.</p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>Post 1</h3></figcaption>
                    </figure>
                    <a href="" class="btn">View Project</a>
            </div>

            <div class="masonry-card">
                    <p> Lorem ipsum dolor sit amet consectetur fugit dicta voluptatem, optio cupiditate minima autem quaerat sunt amet a voluptatibus ipsa ullam? Placeat, rem!</p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>Post 1</h3></figcaption>
                    </figure>
                    <a href="" class="btn">View Project</a>
            </div>

            <div class="masonry-card">
                    <p>Lore, adipisicing elit. Cum amet cumque explicabo dolorum? Culpa modi nisi perferendis harum maxime laboriosam consequatur ea enim facere! Veritatis voluptatem veniam dolorum aperiam? Libero.</p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>Post 1</h3></figcaption>
                    </figure>
                    <a href="" class="btn">View Project</a>
            </div>

            <div class="masonry-card">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum amet cumque explicabo dolorum? Culpa modi nisi perferendis harum maxime laboriosam consequatur ea enim facere! Veritatis voluptatem veniam dolorum aperiam? Libero.</p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>Post 1</h3></figcaption>
                    </figure>
                    <a href="" class="btn">View Project</a>
            </div>
            <div class="masonry-card">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum amet cumque explicabo dolorum? Culpa modi nisi perferendis harum maxime laboriosam consequatur ea enim facere! Veritatis voluptatem veniam dolorum aperiam? Libero.</p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>Post 1</h3></figcaption>
                    </figure>
                    <a href="" class="btn">View Project</a>
            </div>

            <div class="masonry-card">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum amet cumque explicabo dolorum? Culpa modi nisi perferendis harum maxime laboriosam consequatur ea enim facere! Veritatis voluptatem veniam dolorum aperiam? Libero.</p>
                    <figure style="margin-bottom:20px;">
                        <img src="https://via.placeholder.com/350x150" alt="">
                        <figcaption><h3>Post 1</h3></figcaption>
                    </figure>
                    <a href="" class="btn">View Project</a>
            </div>
        </div>
    </section>
@endsection