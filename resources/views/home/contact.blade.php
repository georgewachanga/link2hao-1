@extends("layout.master")
@section("title", "contact")
@section("content")
    <div class="contact">
        <div class="container">
            <h1>This is where to find us</h1>
            <div class="col-md-9 wow fadeInLeft" data-wow-delay="0.4s">

            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-delay="0.4s">
                <address class="address">
                    <p>Lurambi <br>Kakamega.</p>
                    <dl>
                        <dt></dt>

                        <dd>Mobile phone:<span> 0702452640</span></dd>

                        <dd>E-mail:&nbsp; <a href="mailto:info@example.com">info@link2hao.com</a></dd>
                    </dl>
                </address>
            </div>
        </div>
    </div>
    <div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <h2>Drop us a message to enable us serve you better</h2>
            <form>
                <div class="to">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:20px">
                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left:20px">
                    <div class="clearfix"></div>
                </div>
                <div class="text">
                    <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
                </div>
                <div class="form-submit1">
                    <input name="submit" type="submit" id="submit" value="Send Message">

                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer_top">
                <h3>Subscribe to our newsletter</h3>
                <form>
		<span>
			<i><img src="images/mail.png" alt=""></i>
		    <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
		    <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Subscribe"> </label>
		    <div class="clearfix"> </div>
		</span>
                </form>
            </div>
@endsection