@extends('frontend.layouts.app')
@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area other_bread">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="{{route('/')}}">home</a></li>
                        <li>/</li>
                        <li>blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!--blog body area start-->
<div class="blog_area blog_page blog_reverse">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <!--blog sidebar start-->
                <aside class="blog_sidebar">
                   <!--search form start-->
                    <div class="sidebar_widget search_form">
                        <form action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--search form end-->
                    
                     <!--categories start-->
                    <div class="sidebar_widget widget_categories">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            @foreach ($blog_types as $item)
                                <li><a href="{{ route('blog_type',$item->id) }}">{{$item->title}}</a></li>
                            @endforeach
                         </ul>
                    </div>
                    <!--categories end-->
                    
                     <!--recent post start-->
                    <div class="sidebar_widget recent_post">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/post1.png" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Blog image post format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/post2.png" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Post in Gallery format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div> 
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/post3.png" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Single post in Audio format </a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/post4.png" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Post in Video format vitae</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>     
                    </div>
                    <!--recent post end-->
                    
                    <!--recent post start-->
                    <div class="sidebar_widget recent_post">
                        <h3 class="widget_title">Comments</h3>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Blog image post format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Post in Gallery format</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div> 
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Single post in Audio format </a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>
                        <div class="sidebar_post">
                            <div class="post_img">
                                <a href="blog-details.html"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                            </div>
                            <div class="post_text">
                                <h3><a href="blog-details.html">Post in Video format vitae</a></h3>
                                <span>March 3, 2018</span>
                            </div>
                            
                        </div>     
                    </div>
                    <!--recent post end-->
                    
                    
                    <div class="sidebar_widget tags_widget">
                        <h3 class="widget_title">Tag Cloud</h3>
                        <ul>
                            <li><a href="#">Ecommerce</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Store</a></li>
                            <li><a href="#">Ideas</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Smart</a></li>
                        </ul>
                    </div>
                    
                </aside>
 
                <!--blog sidebar start-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--blog grid area start-->
                <div class="blog_grid_area">
                    @foreach ($blogs as $item)
                        <div class="blog_grid">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{ asset('images/blog_images/'.$item->image) }}" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="post_date">
                                    <span class="day">10</span>
                                    <span class="month">/ Dec</span>
                                </div>
                                <h3 class="post_title"><a href="blog-details.html">{{ $item->title }}</a></h3>
                                <p class="post_desc">{!! Str::limit($item->description, 200, $end='...') !!}</p>
                                <a class="read_more" href="{{ route('blog_detail',$item->id) }}">read more</a>
                                <div class="post_meta">
                                <span>Posted by </span>
                                    <span><a href="#">admin</a></span>
                                    <span><a href="#">/ WordPress</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="blog_grid">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/blog4.png" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">10</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="blog-details.html">Format ectus fermentum</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="blog-details.html">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog_grid gallery">
                        <div class="blog_thumb_active owl-carousel">
                            <div class="single_blog_thumb">
                                <a href="#"><img src="assets/img/blog/blog1.png" alt=""></a>
                            </div>
                            <div class="single_blog_thumb">
                                <a href="#"><img src="assets/img/blog/blog2.png" alt=""></a>
                            </div>
                            <div class="single_blog_thumb">
                                <a href="#"><img src="assets/img/blog/blog3.png" alt=""></a>
                            </div>
                            <div class="single_blog_thumb">
                                <a href="#"><img src="assets/img/blog/blog1.png" alt=""></a>
                            </div>
                        </div>
                        
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">12</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="blog-details.html">Post in Gallery format ectus fermentum</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="blog-details.html">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="blog_grid audio">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/blog2.png" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">01</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="blog-details.html">Single post in Audio format suspendisse</a></h3>
                            <div class="blog_aduio_icone">
                                <audio controls>
                                  <source src="https://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3?1" type="audio/mp3">
                                </audio>
                            </div>
                            <a class="read_more" href="blog-details.html">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog_grid video">
                        <div class="blog_thumb embed-responsive embed-responsive-16by9">
                                
                            <iframe  height="700" src="https://www.youtube.com/embed/2Zt8va_6HRk"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">10</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="blog-details.html">Post in Video format vitae lacus eget</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="blog-details.html">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="blog_grid">
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="assets/img/blog/blog3.png" alt=""></a>
                        </div>
                        <div class="blog_content">
                            <div class="post_date">
                                <span class="day">10</span>
                                <span class="month">/ Dec</span>
                            </div>
                            <h3 class="post_title"><a href="blog-details.html">Format ectus fermentum</a></h3>
                            <p class="post_desc">Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor</p>
                            <a class="read_more" href="blog-details.html">read more</a>
                            <div class="post_meta">
                               <span>Posted by </span>
                                <span><a href="#">admin</a></span>
                                <span><a href="#">/ WordPress</a></span>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--blog grid area start-->
            </div>
        </div>
    </div>
</div>
<!--blog section area end-->

<!--blog pagination area start-->
<div class="blog_pagination">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <ul>
                    <li class="" style="">{!! $blogs->links() !!}</li>
                </ul>
            </div>
            {{-- <div class="col-12">
                <div class="pagination">
                    <ul>
                        <li class="current">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next"><a href="#">next</a></li>
                        <li><a href="#">>></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!--blog pagination area end-->
@endsection