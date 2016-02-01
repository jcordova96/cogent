@extends('layouts.master')

@section('content')

<div class="row">
    <div class="sixteen columns">
        <div class="breadcrumb">
            <a href="index.html" class="first_bc"><span>Home</span></a>
            <a href="page_left_sidebar.html" class="last_bc"><span>Page with Left Sidebar</span></a>
        </div>

        <div class="h40"></div>
    </div>
</div>


<div class="row">

    <!-- Side Column -->
    <div class="four columns sidebar">
        <h4 class="title"><span>Categories</span></h4>
        <ul class="side_bar_menu">
            <li><a href=""><span class="hover_span"></span><span class="link_span">Graphic Design</span></a></li>
            <li><a href=""><span class="hover_span"></span><span class="link_span">Web Design</span></a></li>
            <li><a href=""><span class="hover_span"></span><span class="link_span">Web Development</span></a></li>
            <li><a href=""><span class="hover_span"></span><span class="link_span">Mobile Development</span></a></li>
            <li><a href=""><span class="hover_span"></span><span class="link_span">Bespoke Solutions</span></a></li>
        </ul>

        <!-- Accordions -->
        <h2 class="title"><span>What we offer</span></h2>
        <div class="acc_holder">
            <div class="acc_item">
                <h4 class="accordion"><span class="acc_control"></span><span class="acc_heading">Outstanding Support</span></h4>
                <div class="accordion_content">To live is the rarest thing in the world. Most people exist, that is all.</div>
            </div>
            <div class="acc_item">
                <h4 class="accordion"><span class="acc_control"></span><span class="acc_heading">Customer Satisfaction</span></h4>
                <div class="accordion_content">To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.</div>
            </div>
            <div class="acc_item">
                <h4 class="accordion"><span class="acc_control"></span><span class="acc_heading">Detailed Documentation</span></h4>
                <div class="accordion_content">Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that.</div>
            </div>
        </div>
        <!-- Accordions::END -->

    </div>
    <!-- Side Column::END -->




    <!-- Wide Column -->
    <div class="twelve columns">
        <div class="post_item">
            <div class="pic">
                <a href="blog_item.html"><img src="images/blog_img_700.jpg"/><div class="img_overlay"></div></a>
            </div>
            <h3 class="post_title"><a href="blog_item.html">Bespoke Business Solutions</a></h3>
            <p class="post_meta">
                <span class="calendar"><a href="blog.html">24 September, 2012</a></span>
                <span class="author"><a href="blog.html">by Admin</a></span>
                <span class="comments"><a href="blog_item.html">3 Comments</a></span>
                <span class="tags"><a href="">Web Design</a>, <a href="">Web Development</a></span>
            </p>
            <p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum elementum arcu, at facilisis leo pretium eget. Nulla lacus risus, aliquam id faucibus sit amet, imperdiet vitae quam. In eu nunc nunc, in lacinia neque. Curabitur dictum fringilla lectus id fringilla. In et turpis ac lorem molestie auctor vitae nec purus. Vestibulum ullamcorper ...</p>
        </div>

        <div class="post_item">
            <div class="pic">
                <a href="blog_item.html"><img src="images/blog_img2_700.jpg"/><div class="img_overlay"></div></a>
            </div>
            <h3 class="post_title"><a href="blog_item.html">Clean & Modern Design</a></h3>
            <p class="post_meta">
                <span class="calendar"><a href="">24 September, 2012</a></span>
                <span class="author"><a href="">by Admin</a></span>
                <span class="comments"><a href="">3 Comments</a></span>
                <span class="tags"><a href="">Web Design</a>, <a href="">Web Development</a></span>
            </p>
            <p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum elementum arcu, at facilisis leo pretium eget. Nulla lacus risus, aliquam id faucibus sit amet, imperdiet vitae quam. In eu nunc nunc, in lacinia neque. Curabitur dictum fringilla lectus id fringilla. In et turpis ac lorem molestie auctor vitae nec purus. Vestibulum ullamcorper ...</p>
        </div>

        <div class="post_item">
            <div class="pic">
                <a href=""><img src="images/blog_img3_700.jpg"/><div class="img_overlay_zoom"></div></a>
            </div>
            <h3 class="post_title"><a href="">Rich and Easy Customization</a></h3>
            <p class="post_meta">
                <span class="calendar"><a href="">24 September, 2012</a></span>
                <span class="author"><a href="">by Admin</a></span>
                <span class="comments"><a href="">3 Comments</a></span>
                <span class="tags"><a href="">Web Design</a>, <a href="">Web Development</a></span>
            </p>
            <p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum elementum arcu, at facilisis leo pretium eget. Nulla lacus risus, aliquam id faucibus sit amet, imperdiet vitae quam. In eu nunc nunc, in lacinia neque. Curabitur dictum fringilla lectus id fringilla. In et turpis ac lorem molestie auctor vitae nec purus. Vestibulum ullamcorper ...</p>
        </div>



        <div class="pagination clearfix">
            <div class="links">
                <b>1</b>
                <a href="">2</a>
                <a href="">&rsaquo;</a>
                <a href="">&raquo;</a>
            </div>
        </div>

    </div>
    <!-- Wide Column::END -->


</div>

@stop
