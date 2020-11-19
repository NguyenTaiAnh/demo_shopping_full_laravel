@extends('master')
@section('content')
    <!-- Begin Torress's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Blog Grid View</h2>
                <ul>
                    <li><a href="{{Route('index')}}">Home</a></li>
                    <li class="active">Blog Left Sidebar</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Torress's Breadcrumb Area End Here -->

    <!-- Begin Torress's Blog Left Sidebar Area -->
    <div class="blog-grid-view_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="torress-blog-sidebar-wrapper">
                        <div class="torress-blog-sidebar">
                            <h4 class="torress-blog-sidebar-title">Search</h4>
                            <div class="search-form_area">
                                <form class="search-form" action="javascript:void(0)">
                                    <input type="text" class="search-field" placeholder="search here">
                                    <button type="submit" class="search-btn"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="torress-blog-sidebar">
                            <h4 class="torress-blog-sidebar-title">Archives</h4>
                            <ul class="torress-blog-archive">
                                <li><a href="javascript:void(0)">April 2019</a></li>
                            </ul>
                        </div>
                        <div class="torress-blog-sidebar">
                            <h4 class="torress-blog-sidebar-title">Recent Posts</h4>
                            <div class="recent-post">
                                <div class="recent-post_thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/1.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="recent-post_desc">
                                    <span><a href="blog-details-left-sidebar.html">Quisque Egestas</a></span>
                                    <span class="post-date">June 25,2019</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post_thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/2.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="recent-post_desc">
                                    <span><a href="blog-gallery-format.html">Post With Gallery</a></span>
                                    <span class="post-date">June 24,2019</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post_thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/3.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="recent-post_desc">
                                    <span><a href="blog-details-left-sidebar.html">Maecenas Ultricies</a></span>
                                    <span class="post-date">June 24,2019</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post_thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/4.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="recent-post_desc">
                                    <span><a href="blog-details-left-sidebar.html">Tortor Posuere</a></span>
                                    <span class="post-date">June 24,2019</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post_thumb">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/1.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="recent-post_desc">
                                    <span><a href="blog-details-left-sidebar.html">Hello World!</a></span>
                                    <span class="post-date">June 24,2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="torress-blog-sidebar">
                            <h4 class="torress-blog-sidebar-title">Comments</h4>
                            <div class="recent-comment">
                                <div class="user-img">
                                    <img class="img-full" src="torress/assets/images/blog/admin.jpg" alt="Torress's Blog Image">
                                </div>
                                <div class="user-info">
                                    <span>HasTech say:</span>
                                    <a href="javascipt:void(0)">Nulla auctor mi vel nisl...</a>
                                </div>
                            </div>
                            <div class="recent-comment">
                                <div class="user-img">
                                    <img class="img-full" src="torress/assets/images/blog/user.jpg" alt="Torress's Blog Image">
                                </div>
                                <div class="user-info">
                                    <span>Pamela Gibson say:</span>
                                    <a href="javascipt:void(0)">Mauris Venenatis Orci Quis...</a>
                                </div>
                            </div>
                            <div class="recent-comment">
                                <div class="user-img">
                                    <img class="img-full" src="torress/assets/images/blog/admin.jpg" alt="Torress's Blog Image">
                                </div>
                                <div class="user-info">
                                    <span>HasTech say:</span>
                                    <a href="javascipt:void(0)">Quisque Semper Nunc Vitae...</a>
                                </div>
                            </div>
                            <div class="recent-comment">
                                <div class="user-img">
                                    <img class="img-full" src="torress/assets/images/blog/user.jpg" alt="Torress's Blog Image">
                                </div>
                                <div class="user-info">
                                    <span>Pamela Gibson say:</span>
                                    <a href="javascipt:void(0)">Thanks for the information, anyway :)</a>
                                </div>
                            </div>
                        </div>
                        <div class="torress-blog-sidebar">
                            <h4 class="torress-blog-sidebar-title">Categories</h4>
                            <ul class="torress-blog-archive">
                                <li><a href="javascript:void(0)">Bed</a></li>
                                <li><a href="javascript:void(0)">Chair</a></li>
                                <li><a href="javascript:void(0)">Decor</a></li>
                                <li><a href="javascript:void(0)">Kitchen</a></li>
                                <li><a href="javascript:void(0)">Lamp</a></li>
                                <li><a href="javascript:void(0)">Table</a></li>
                                <li><a href="javascript:void(0)">Uncategorized</a></li>
                            </ul>
                        </div>
                        <div class="torress-blog-sidebar">
                            <h4 class="torress-blog-sidebar-title">Tags</h4>
                            <ul class="torress-tags_list">
                                <li><a href="javascript:void(0)">Growth</a></li>
                                <li><a href="javascript:void(0)">Health</a></li>
                                <li><a href="javascript:void(0)">Nutrients</a></li>
                                <li><a href="javascript:void(0)">Nutrition</a></li>
                                <li><a href="javascript:void(0)">Travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row blog-item_wrap">
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/1.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text_area">
                                        <div class="title">
                                            <h3><a href="blog-details-left-sidebar.html"> Blog Image Post</a></h3>
                                        </div>
                                        <div class="meta">
                                            <span>By <strong>admin</strong>/ Date <strong> June 28, 2019</strong></span>
                                        </div>
                                        <div class="short-desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.</p>
                                        </div>
                                        <div class="torress-btn-ps_left">
                                            <a class="torress-btn_dark" href="blog-details-left-sidebar.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/2.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text_area">
                                        <div class="title">
                                            <h3><a href="blog-details-left-sidebar.html">Quisque egestas</a></h3>
                                        </div>
                                        <div class="meta">
                                            <span>By <strong>admin</strong>/ Date <strong> June 25, 2019</strong></span>
                                        </div>
                                        <div class="short-desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.</p>
                                        </div>
                                        <div class="torress-btn-ps_left">
                                            <a class="torress-btn_dark" href="blog-details-left-sidebar.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="torress-single-blog_slider slider-navigation_style-1">
                                    <div class="single-item">
                                        <div class="blog-img">
                                            <a href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="torress/assets/images/blog/medium-size/4.jpg" alt="Torress's Blog Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="blog-img">
                                            <a href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="torress/assets/images/blog/medium-size/3.jpg" alt="Torress's Blog Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="blog-img">
                                            <a href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="torress/assets/images/blog/medium-size/2.jpg" alt="Torress's Blog Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="blog-img">
                                            <a href="blog-details-left-sidebar.html">
                                                <img class="img-full" src="torress/assets/images/blog/medium-size/1.jpg" alt="Torress's Blog Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text_area">
                                        <div class="title">
                                            <h3><a href="blog-details-left-sidebar.html">Post With Gallery</a></h3>
                                        </div>
                                        <div class="meta">
                                            <span>By <strong>admin</strong>/ Date <strong> June 24, 2019</strong></span>
                                        </div>
                                        <div class="short-desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue
                                                condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                                bibendum massa nec, fermentum odio.</p>
                                        </div>
                                        <div class="torress-btn-ps_left">
                                            <a class="torress-btn_dark" href="blog-details-left-sidebar.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="blog-img img-hover_effect">
                                    <a href="blog-details-left-sidebar.html">
                                        <img class="img-full" src="torress/assets/images/blog/medium-size/3.jpg" alt="Torress's Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text_area">
                                        <div class="title">
                                            <h3><a href="blog-details-left-sidebar.html">Tortor Posuere</a></h3>
                                        </div>
                                        <div class="meta">
                                            <span>By <strong>admin</strong>/ Date <strong> June 24, 2019</strong></span>
                                        </div>
                                        <div class="short-desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero
                                                eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus
                                                pharetra, bibendum massa nec, fermentum odio.</p>
                                        </div>
                                        <div class="torress-btn-ps_left">
                                            <a class="torress-btn_dark" href="blog-details-left-sidebar.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/256180869&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true">
                                    </iframe>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text_area">
                                        <div class="title">
                                            <h3><a href="blog-details-left-sidebar.html">Post With Audio</a></h3>
                                        </div>
                                        <div class="meta">
                                            <span>By <strong>admin</strong>/ Date <strong> June 24, 2019</strong></span>
                                        </div>
                                        <div class="short-desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero
                                                eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus
                                                pharetra, bibendum massa nec, fermentum odio.</p>
                                        </div>
                                        <div class="torress-btn-ps_left">
                                            <a class="torress-btn_dark" href="blog-details-left-sidebar.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/9No-FiEInLA" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-text_area">
                                        <div class="title">
                                            <h3><a href="blog-details-left-sidebar.html">Post With Video</a></h3>
                                        </div>
                                        <div class="meta">
                                            <span>By <strong>admin</strong>/ Date <strong> June 24, 2019</strong></span>
                                        </div>
                                        <div class="short-desc">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero
                                                eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus
                                                pharetra, bibendum massa nec, fermentum odio.</p>
                                        </div>
                                        <div class="torress-btn-ps_left">
                                            <a class="torress-btn_dark" href="blog-details-left-sidebar.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="torress-paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="torress-pagination-box">
                                            <li class="active"><a href="javascript:void(0)">1</a></li>
                                            <li><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a class="Next" href="javascript:void(0)">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Blog Left Sidebar Area End Here -->

    <!-- Begin Torress's Brand Area -->
    <div class="torress-brand_area">
        <div class="container">
            <div class="torress-brand_nav">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="torress-brand_slider slider-navigation_style-1">
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/1.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/2.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/3.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/4.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/5.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/1.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                            <div class="slide-item">
                                <a href="javascript:void(0)">
                                    <img src="torress/assets/images/brand/2.jpg" alt="Torress's Brand Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Torress's Brand Area End Here -->

@endsection
