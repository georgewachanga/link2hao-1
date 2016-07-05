@extends("layout.master")
@section("title", "Home")
@section("content")

@include("partials._banner")
@include("partials._permalinks")
    <div class="living_middle">
        <div class="container">
            <h2 class="title block-title">CONTENT NAME</h2>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <img src="images/l1.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Hostel</span>
			    </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#">Riam Hostels</a></h3>
                        <div class="location">Location: <span> lurambi</span> </div>
                        <a href="single" class="btn3">View</a>
                        <p class="price">Ksh:100.00</p>
                    </div>
                    <table border="1" class="propertyDetails">
                        <tbody><tr>
                            <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                            <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                            <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <img src="images/l2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Hostel</span>
			    </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#">Mama Atoti Hostels</a></h3>
                        <div class="location">Location: <span> lurambi</span> </div>
                        <a href="single" class="btn3">View</a>
                        <p class="price">Ksh:89.00</p>
                    </div>
                    <table border="1" class="propertyDetails">
                        <tbody><tr>
                            <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                            <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                            <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <img src="images/l2.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Rental</span>
			    </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#">Ijab</a></h3>
                        <div class="location">Location: <span> lurambi</span> </div>
                        <a href="single" class="btn3">View</a>
                        <p class="price">Ksh:89.00</p>
                    </div>
                    <table border="1" class="propertyDetails">
                        <tbody><tr>
                            <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                            <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                            <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <img src="images/l3.jpg" class="img-responsive" alt=""/>
				<span class="sale-box">
				  <span class="sale-label">Rental</span>
			    </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#">Mwiyala rentals</a></h3>
                        <div class="location">Location: <span> lurambi</span> </div>
                        <a href="single" class="btn3">View</a>
                        <p class="price">Ksh:100.00</p>
                    </div>
                    <table border="1" class="propertyDetails">
                        <tbody><tr>
                            <td><img src="images/area.png" alt="" style="margin-right:7px;">2,412m</td>
                            <td><img src="images/bed.png" alt="" style="margin-right:7px;">6 Beds</td>
                            <td><img src="images/drop.png" alt="" style="margin-right:7px;">3 Baths</td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
    </div>


@endsection