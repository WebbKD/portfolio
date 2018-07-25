@extends('layouts.master')

@section('content')
        <section id="home">
            <div class="landing-text">
                Hey, I'm <span style="color: rgb(247, 207, 162)">Kendell Webb</span>. <br/> I am a FullStack Developer <br /> and <br /> Digital Marketer.
            </div>
        </section>

        <section id="about">
            <div class="grid-wrapper card grid-wrapper-template-about">
                <div class="about-right-content">
                    <div class="content-right-content-wrapper">
                        <h2>About</h2>
                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus eaque porro optio magni, animi fugiat temporibus corrupti earum cum, officia, harum et molestias consectetur quasi cumque unde neque suscipit. Soluta.</span>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus cum totam, nisi dolores, ullam velit ipsum laboriosam suscipit aperiam non consequuntur ipsam accusamus tempore, adipisci saepe atque praesentium autem ab.</span>
                        <h2>Connect With Me</h2>
                        <div class="smLinks">
                            <a href="https://www.facebook.com/KendellWebb95" class="fa fa-facebook"></a>
                            <a href="https://www.instagram.com/kwebbcodes/" class="fa fa-instagram"></a>
                            <a href="https://twitter.com/KWebbCodes" class="fa fa-twitter"></a>
                        </div>
                    </div>
                </div>
            </div>        
        </section>

        <section id="skills">
            <div class="grid-wrapper card grid-wrapper-template-skills">
                    <h2 class="title" style="text-align: center;">Skills</h2>   
                    <div class="icon-block ">
                        <i class="fa fa-database" aria-hidden="true"></i>
                        <h2 class="center-text">Backend</h2>
                        <li>C#/Asp.Net MVC5</li>
                        <li>Laravel/php</li>
                        <li>SQL</li>
                        <li>MySQL, SQLServer</li>
                        <li>MongoDB</li>
                    </div>
                    <div class="icon-block">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        <h2 class="center-text">Frontend</h2>
                        <li>Html5, Css3</li>
                        <li>Javascript</li>
                        <li>Angular6(Currently Learning)</li>
                    </div>
                    <div class="icon-block">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <h2 class="center-text">Design</h2>
                        <li>Photoshop</li>
                        <li>Canva</li>
                    </div>
                    <div class="icon-block">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h2 class="center-text">Digital Marketing</h2>
                        <li>SEO</li>
                        <li>Google Ad Words</li>
                        <li>Facebook Ads</li>
                    </div>
            </div>        
        </section>
 
        <section id="projects">
            <div class="grid-wrapper card grid-wrapper-template-projects">
               <h2 class="title" style="text-align: center;">My Recent Projects</h2>
               <div class="tile" style="background:url(https://images.unsplash.com/photo-1477091889224-8320eb2f1c66?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=830309c43318e8040ac6d5156e954370&w=1000&q=80); background-repeat: no-repeat; background-size: cover;">
                   <div class="tile-title">
                       My first project
                   </div>            
                   <a href="" class="btn tile-btn"> Read More</a>
               </div>
               <div class="tile"></div>
               <div class="tile"></div>
               <div class="tile"></div>
               <div class="tile"></div>
               <div class="tile"></div>
               <a href="" class="btn projects-btn">View All Projects</a> 
            </div>
        </section>

        <section id="blog">
            <div class="grid-wrapper card grid-wrapper-template-blogs">
                <h2 class="title" style="text-align: center;">My Recent Blogs</h2>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <div class="tile"></div>
                <a href="" class="btn blogs-btn">View All Blogs</a> 
             </div>   
        </section>
@endsection