@extends('layout.master')

@section('nav')
    <header>
        <nav class="transparent">
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

    <section id="landing-section">
        <h2>Kendell Webb</h2>
        <h3>Full Stack Developer and Digital Marketer</h3>
    </section>
    <section id="about-section">
        <div class="section-content">
            <h2>About Me</h2>
            
                <article>
                    <p>I am fullstack developer and digital marketer from the New York City Area. I have a passion for developing front end interfaces, designing backend systems, ranking websites high in search engines, and running online ads. My primary focus is backend development and SEO.</p>
                </article>
                <img src="/images/Kendell-Webb.jpg" style="height:300px" alt="Kendell Webb, Full Stack Developer, Nyc Seo Expert, Soical Media Marketer" >
        </div>
    </section>
    <section id="skill-section">
            <h2>My Skills</h2>
            <div class="skills-grid">
            <div class="icon-block">
                <i class="fa fa-code" aria-hidden="true"></i>
                <h4>Backend</h4>
                <ul>
                    <li>Laravel/php</li>
                    <li>Asp.Net/C#</li>
                    <li>SQL, noSQL</li>
                </ul>
            </div>
            <div class="icon-block">
                <i class="fa fa-database" aria-hidden="true"></i>
                <h4>Database</h4>
                <ul>
                    <li>MySQL</li>
                    <li>SQL Server</li>
                    <li>MongoDB</li>
                </ul>
            </div>
            <div class="icon-block">
                <i class="fa fa-laptop" aria-hidden="true"></i>
                <h4>Frontend</h4>
                <ul>
                    <li>Html5/CSS3</li>
                    <li>Javascript</li>
                </ul>
            </div>
            <div class="icon-block">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                <h4>Digital Marketing</h4>
                <ul>
                    <li>Seo</li>
                    <li>Google Adwords</li>
                    <li>Facebook Ads</li>
                </ul>
            </div>
            </div>
    </section>
    <section id="project-section">
            <h2>Recent Projects</h2>
            <div class="project-grid">
                @foreach($projects as $project)
                <div class="img-box" style="background-image:url({{$project->postImg}});">
                    
                </div>
                @endforeach
            </div>
            <a href="/projects" class="btn">View All Projects</a>
    </section>
    <section id="quote-section">
            <span>"Sometimes you can only discover the right path by taking the wrong path 50 times"</span>
            <span>John Sonmez</span>
    </section>

    <section id="blog-section">
        <div class="section-content">
            <h2 style="text-align:center;">Recent Blog</h2>
            
        
        <div class="blog-grid">
            @foreach($blogs as $blog)
            <article>
                <div class="section-content">
                    <div class="img-box"> <img src="{{$blog->postImg}}" alt="" width="100%"></div>
                    <h3>{{$blog->title}}</h3>
                </div>
            </article>
            @endforeach
        </div>
       
    </div>
    <a href="/blog" class="btn">View All Blogs</a>
    </section>
@endsection

@section('javascriptLinks')
    <script src="js/scrollNav.js"></script>
@endsection