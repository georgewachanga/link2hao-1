@extends("layout.admin")

@section("content")

        <!-- main content start-->
<div class="main-content main-content5">
    <!-- header-starts -->
    <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--notification menu start -->
        <div class="menu-right">
            <div class="user-panel-top">
                <div class="profile_details_left">
                    <ul class="nofitications-dropdown">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>

                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new messages</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all messages</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="login_box" id="loginContainer">
                            <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form>
                                </div>
                            </div>
                            <!-- search-scripts -->
                            <script src="js/classie.js"></script>
                            <script src="js/uisearch.js"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                            <!-- //search-scripts -->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 3 new notification</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="images/1.png" alt=""></div>
                                        <div class="notification_desc">
                                            <p>Lorem ipsum dolor sit amet </p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all notification</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>You have 8 pending task</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar yellow" style="width:40%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="progress progress-striped active">
                                            <div class="bar green" style="width:90%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar red" style="width: 33%;"></div>
                                        </div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="task-info">
                                            <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="bar  blue" style="width: 80%;"></div>
                                        </div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all pending task</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span style="background:url(images/1.jpg) no-repeat center"> </span>
                                    <div class="user-name">
                                        <p>Michael<span>Administrator</span></p>
                                    </div>
                                    <i class="lnr lnr-chevron-down"></i>
                                    <i class="lnr lnr-chevron-up"></i>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                <li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                            </ul>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="social_icons">
                    <div class="col-md-4 social_icons-left">
                        <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
                    </div>
                    <div class="col-md-4 social_icons-left pinterest">
                        <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
                    </div>
                    <div class="col-md-4 social_icons-left twi">
                        <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--notification menu end -->
    </div>
    <!-- //header-ends -->
    <div id="page-wrapper">
        <div class="graphs">
            <h3 class="blank1">Simple Charts</h3>
            <div class="graph_box">
                <div class="col-md-4 grid_2">
                    <div class="grid_1">
                        <h4>Circular</h4>
                        <canvas id="doughnut" height="300" width="470" style="width: 470px; height: 300px;"></canvas>
                        <script>
                            var doughnutData = [
                                {
                                    value: 30,
                                    color:"#F44336"
                                },
                                {
                                    value : 50,
                                    color : "#929292"
                                },
                                {
                                    value : 100,
                                    color : "#00aced"
                                },
                                {
                                    value : 40,
                                    color : "#9358ac"
                                },
                            ];
                            new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
                        </script>
                    </div>
                </div>
                <div class="col-md-4 grid_2">
                    <div class="grid_1">
                        <h4>Radar</h4>
                        <canvas id="radar" height="300" width="470" style="width: 470px; height: 300px;"></canvas>
                        <script>
                            var radarChartData = {
                                labels : ["","","","","","",""],
                                datasets : [
                                    {
                                        fillColor : "#00aced",
                                        strokeColor : "#00aced",
                                        pointColor : "#00aced",
                                        pointStrokeColor : "#fff",
                                        data : [65,59,90,81,56,55,40]
                                    },
                                    {
                                        fillColor : "#8BC34A",
                                        strokeColor : "#8BC34A",
                                        pointColor : "#8BC34A",
                                        pointStrokeColor : "#fff",
                                        data : [28,48,40,19,96,27,100]
                                    }
                                ]

                            };
                            new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
                        </script>
                    </div>
                </div>
                <div class="col-md-4 grid_2">
                    <div class="grid_1">
                        <h4>PolarArea</h4>
                        <canvas id="polarArea" height="300" width="450" style="width: 450px; height: 300px;"></canvas>
                        <script>
                            var chartData = [
                                {
                                    value : Math.random(),
                                    color: "#8BC34A"
                                },
                                {
                                    value : Math.random(),
                                    color: "#C7604C"
                                },
                                {
                                    value : Math.random(),
                                    color: "#21323D"
                                },
                                {
                                    value : Math.random(),
                                    color: "#9D9B7F"
                                },
                                {
                                    value : Math.random(),
                                    color: "#7D4F6D"
                                },
                                {
                                    value : Math.random(),
                                    color: "#9358ac"
                                }
                            ];
                            new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
                        </script>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="graph_box1">
                <div class="col-md-6 grid_2 grid_2_bot">
                    <div class="grid_1">
                        <h4>Pie</h4>
                        <div class="legend">
                            <div id="os-Win-lbl">Chrome <span>100%</span></div>
                            <div id="os-Mac-lbl">Internet Explorer <span> 50%</span></div>
                            <div id="os-Other-lbl">Safari<span>30%</span></div>
                        </div>

                        <canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
                        <script>
                            var pieData = [
                                {
                                    value: 30,
                                    color:"#ef553a"
                                },
                                {
                                    value : 50,
                                    color : "#00aced"
                                },
                                {
                                    value : 100,
                                    color : "#8BC34A"
                                }

                            ];
                            new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
                        </script>
                    </div>
                </div>
                <div class="col-md-6 grid_2 grid_2_bot">
                    <div class="grid_1">
                        <h4>Line</h4>
                        <canvas id="line1" height="100" width="600" style="width: 600px; height: 100px;"></canvas>
                        <script>
                            var lineChartData = {
                                labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
                                datasets : [
                                    {
                                        fillColor : "#fff",
                                        strokeColor : "#F44336",
                                        pointColor : "#fbfbfb",
                                        pointStrokeColor : "#F44336",
                                        data : [20,35,45,30,10,65,40]
                                    }
                                ]

                            };
                            new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
                        </script>
                    </div>
                    <div class="line-bottom-grid">
                        <div class="grid_1">
                            <h4>Bar</h4>
                            <canvas id="bar1" height="100" width="600" style="width: 600px; height: 100px;"></canvas>
                            <script>
                                var barChartData = {
                                    labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon","Tue","Wed","Thu"],
                                    datasets : [
                                        {
                                            fillColor : "#8BC34A",
                                            strokeColor : "#8BC34A",
                                            data : [25,40,50,65,55,30,20,10,6,4]
                                        },
                                        {
                                            fillColor : "#8BC34A",
                                            strokeColor : "#8BC34A",
                                            data : [30,45,55,70,40,25,15,8,5,2]
                                        }
                                    ]

                                };
                                new Chart(document.getElementById("bar1").getContext("2d")).Bar(barChartData);
                            </script>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>

@endsection