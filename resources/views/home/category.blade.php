@extends("layout.master")
@section("title", "Category")

@section("content")
    @include("partials._banner")
    @include("partials._permalinks")
    <div class="living_middle">
        <div class="container">
            <h2 class="title block-title">CONTENT NAME</h2>
            <div class="col-md-8 wow fadeInRight" data-wow-delay="0.4s">
                <div class="educate_grid">
                    <div class="col-md-6 room-grid">
                        <div class="living_box"><a href="single.html">
                                <img src="images/e4.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Hall</span>
			    </span>
                            </a>
                            <div class="living_desc desc1">
                                <h3><a href="#">aliquam volutp</a></h3>
                                <p>Lorem ipsum consectetuer adipiscing </p>
                                <p class="educate"><img src="images/star1.png" alt=""/></p>
                                <p class="price pr_box">$150</p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 room-grid">
                        <div class="living_box"><a href="single.html">
                                <img src="images/e3.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Room</span>
			    </span>
                            </a>
                            <div class="living_desc desc1">
                                <h3><a href="#">aliquam volutp</a></h3>
                                <p>Lorem ipsum consectetuer adipiscing </p>
                                <p class="educate"><img src="images/star1.png" alt=""/></p>
                                <p class="price pr_box">$150</p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="educate_grid1">
                    <div class="col-md-6 room-grid">
                        <div class="living_box"><a href="single.html">
                                <img src="images/e1.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Balcony</span>
			    </span>
                            </a>
                            <div class="living_desc desc1">
                                <h3><a href="#">aliquam volutp</a></h3>
                                <p>Lorem ipsum consectetuer adipiscing </p>
                                <p class="educate"><img src="images/star1.png" alt=""/></p>
                                <p class="price pr_box">$150</p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 room-grid">
                        <div class="living_box"><a href="single.html">
                                <img src="images/e2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Pool</span>
			    </span>
                            </a>
                            <div class="living_desc desc1">
                                <h3><a href="#">aliquam volutp</a></h3>
                                <p>Lorem ipsum consectetuer adipiscing </p>
                                <p class="educate"><img src="images/star1.png" alt=""/></p>
                                <p class="price pr_box">$150</p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @include("partials._sidebar")
        </div>
    </div>

            @endsection
