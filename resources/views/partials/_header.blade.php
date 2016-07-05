<body>
<div class="header">
    <div class="col-md-12">
        <!--div class="logo">
            <a href="/"><img src="images/logo.png" alt="logo"/></a>
        </div-->


        <div class="menu" >
            <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
            <ul class="nav" id="nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="about">About us</a></li>
                <li><a href="services">Our services</a></li>
                <!--li><a href="news">Blog</a></li-->

                <li><a href="contact">Contact us</a></li>
                <li><a href="advertise">Advertise </a></li>
                <div class="pull-right">
                    @if(Auth::check())
                        <li><a href="/logout">Logout </a></li>
                    @else
                        <li><a href="/login">Login </a></li>
                        <li><a href="/register">Register</a> </li>
                    @endif
                </div>

                <div class="clearfix"></div>
            </ul>
            <script type="text/javascript" src="/js/responsive-nav.js"></script>
        </div>

        <!-- start search-->
        <!--div class="search-box">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"> </span>
                </form>
            </div>
        </div-->
        <!----search-scripts>
        <script src="js/classie.js"></script>
        <script src="js/uisearch.js"></script>
        <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script---->
        <!----//search-scripts---->
        <div class="clearfix"></div>
    </div>
    <!--div class="col-sm-2 eader_right">
        <div id="loginContainer"><a href="dashboard" id="loginButton"><img src="images/login.png"><span>Login</span></a>
            <!--div id="loginBox">
                <form id="loginForm">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email">
                        </fieldset>
                        <fieldset>
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </fieldset>
                        <input type="submit" id="login" value="Sign in">
                        <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                    </fieldset>
                    <span><a href="#">Forgot your password?</a></span>
                </form>
            </div-->
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="kichwa">
    <img src="/images/head.jpg" class="img-responsive"/>
</div>
