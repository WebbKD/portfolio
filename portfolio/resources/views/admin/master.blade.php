<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
        <!-- include libraries(jQuery, bootstrap) -->
    <!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">


    include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/dashboard.css">
    
</head>
<body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
                <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">KWebbCodes</a>
                <ul class="navbar-nav px-3">
                  <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                  </li>
                </ul>
              </nav>
          
              <div class="container-fluid">
                <div class="row">
                  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link" href="/view-categories">
                            View Categories
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/create-category">
                                New Category
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/view-tags">
                            View Tags
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/create-tag">
                              New Tag
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/view-posts">
                                View Posts
                          </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="/create-post">
                                New Post
                            </a>
                        </li>
                      </ul>
                    </div>
                  </nav>
          
                  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('content')
                  </main>
                </div>
              </div>
          
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script src="/js/app.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
@yield('javascriptLinks')
</body>
</html>