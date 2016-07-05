@extends("layout.master")

@section("content")
    <div class="page-not-found">
        <h1>404</h1>
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