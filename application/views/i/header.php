<!DOCTYPE html>
<html>
    <head>
    <meta charset='utf-8'>
    <title>147House - Main</title>
    <link rel="stylesheet" href="/asset/css/style.css" >
    <link href="/asset/css/select2.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/asset/js/html5.js"></script>
    <![endif]-->
    <!--[if IE 7]>
    <link href="/asset/css/ie7.css" rel="stylesheet">
    <![endif]-->
    <!--[if IE 8]>
    <link href="/asset/css/ie8.css" rel="stylesheet">
    <![endif]-->
    <!--[if IE 9]>
    <link href="/asset/css/ie9.css" rel="stylesheet">
    <![endif]-->
    <script src="/asset/js/jquery-1.7.2.min.js"></script>
    <script src="/asset/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/asset/js/script.js"></script>
    <script src="/asset/js/select2.min.js"></script>
    <script src="/asset/js/house.js"></script>
    <script>
        (function($){
            $(document).ready(function() { 
                $('body').addClass('home');/*tmp script for emulation wordpress body classes*/
            });
        })(jQuery);
    </script>
    </head>
    <body>
        <div id="page">
            <header>
                <div id="header_wrapper">
                    <img id="logoImg" src="/asset/images/logo.png"><h1><a href="/">147House.com</a></h1>
                    <nav id="site-navigation" class="main-navigation">
                        <div class="nav-menu">
                            <ul>
                                <li class="page_item"><a href="listing.html">Buy</a>
                                    <ul class="children">
                                        <li class="page_item"><a href="listing.html">House</a></li>
                                        <li class="current_page_item"><a href="listing.html">Condos</a></li>
                                    </ul>
                                </li>
                                <li class="page_item"><a href="agents.html">Sell</a></li>
                                <li class="page_item"><a href="blog.html">Rent</a></li>
                                <li class="page_item"><a href="post.html">Knowledge</a></li>
                                <li class="page_item"><a href="post.html">Q&A</a></li>
                                <li class="page_item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </nav><!--end of #site-navigation-->
                    <div id="header_widget">
                        <aside class="widget">
                            <div class="login_buttons">
                                <a class="register" href="login.html">Login</a>
                                <a class="login" href="login.html">Register</a>
                            </div>
                        </aside>
                    </div><!--end of #header_widget-->
                </div><!--end of #header_wrapper-->
            </header>