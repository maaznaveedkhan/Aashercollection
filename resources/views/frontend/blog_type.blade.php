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
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <ul>
                        <li class="" style="">{!! $blogs->links() !!}</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--blog pagination area end-->
@endsection