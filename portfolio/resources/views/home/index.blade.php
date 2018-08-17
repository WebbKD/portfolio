@extends('layout.master')

@section('nav')
    <header>
        <nav class="transparent">
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

    <section id="landing-section">
        <h2>Kendell Webb</h2>
        <h3>Full Stack Developer and Digital Marketer</h3>
    </section>
    <section id="about-section">
        <div class="section-content">
            <h2>About Me</h2>
            
                <article>
                    <p>I am an aspiring fullstack developer from the New York City Area. I have a passion for developing front end interfaces and designing backend systems. My primary focus is backend development.</p>
                </article>
                <img src="https://i.pinimg.com/736x/98/a7/60/98a760486859621eeed95aaf9138c26a--portfolio-pictures-professional-headshots.jpg" alt="">
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
                <div class="img-box" style="background-image:url(https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg);">
                    
                </div>
                <div class="img-box" style="background-image:url(http://dianamiller.com/wp-content/uploads/2014/07/Biz_8324_RETD-600x399.jpg);">
                    
                </div>
                <div class="img-box" style="background-image:url(https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg);">

                </div>
                <div class="img-box"></div>
                <div class="img-box"></div>
                <div class="img-box"></div>
            </div>
            <a href="" class="btn">View All Projects</a>
    </section>
    <section id="quote-section">
            <span>"Sometimes you can only discover the right path by taking the wrong path 50 times"</span>
            <span>John Sonmez</span>
    </section>

    <section id="blog-section">
        <div class="section-content">
            <h2 style="text-align:center;">Recent Blog</h2>
            
        
        <div class="blog-grid">
            <div>
                <div class="section-content">
                    <div class="img-box"> <img src="https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg" alt="" width="100%"></div>
                    <h3>First Blog Post</h3>
                </div>
            </div>

            <div>
                <div class="section-content">
                    <div class="img-box"> <img src="https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg" alt="" width="100%"></div>
                    <h3>First Blog Post</h3>
                </div>
            </div>

            <div>
                <div class="section-content">
                    <div class="img-box"> <img src="https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg" alt="" width="100%"></div>
                    <h3>First Blog Post</h3>
                </div>
            </div>

            <div>
                <div class="section-content">
                    <div class="img-box"> <img src="https://i.ytimg.com/vi/MsoJQzG2FUU/maxresdefault.jpg" alt="" width="100%"></div>
                    <h3>First Blog Post</h3>
                </div>
            </div>
        </div>
       
    </div>
    <a href="" class="btn">View All Blogs</a>
    </section>
@endsection

@section('javascriptLinks')
    <script src="js/scrollNav.js"></script>
@endsection