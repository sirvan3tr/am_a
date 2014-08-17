<?php 
	$current = "contact";
	include("header.php"); 
?>
<!--  Page Title -->
<div id="page-title">

	<!-- 960 Container Start -->
	<div class="container">
		<div class="sixteen columns">
			<h2>Contact</h2>
		</div>
	</div>
	<!-- 960 Container End -->
	
</div>
<!-- Page Title End -->

<!--  960 Container Start -->
<div class="container">
	
	<!-- Contact Form -->
	<div class="eleven columns">
		<h4 class="headline">Let's Keep in Touch</h4>
		

		<div class="success-message">
			<div class="notification success closeable">
				<p><span>Success!</span> Your message has been sent.</p>
			</div>
		</div>


		<div id="contact-form">
			<form method="post" action="contactscript.php">
				
				<div class="field">
					<label>Name:</label>
					<input type="text" name="name" class="text" />
				</div>
				
				<div class="field">
					<label>Email: <span>*</span></label>
					<input type="text" name="email" class="text" />
				</div>
				
				<div class="field">
					<label>Message: <span>*</span></label>
					<textarea name="message" class="text textarea" ></textarea>
				</div>
				
				<div class="field">
					<input type="button" id="send" value="Send Message"/>
					<div class="loading"></div>
				</div>
				
			</form>
		</div>
		

</div>
	
	<!-- Contact Details -->
	<div class="five columns">
		<div class="widget">
			<h5>Contact Details</h5>
			
			<ul class="contact-details" style="padding-top: 8px;">
				<li><i class="icon-map-marker"></i> <p>Harrow<br/>Middlesex, UK</p></li>
				<li><i class="icon-user"></i> <p>Phone: 07776305635</p></li>
				<li><i class="icon-envelope"></i><p>Email: <a href="#">info@am-accountancy.co.uk</a></p></li>
				<li><i class="icon-globe"></i> <p>Web: <a href="#">www.am-accountancy.co.uk/</a></p></li>
				<li><i class="icon-time"></i><p>
						Mon-Fri: 9:00 → 18:00 <br/>
				</p></li>
			</ul>

		</div>
	</div>

	<!-- Social Media -->
	<div class="five columns">
		<div class="widget">
			<h5>Social Media</h5>
			<p>
			<div id="social" class="tooltips">
				<a href="#" rel="tooltip" title="LinkedIn"><img src="images/social_icons/linkedin.png" alt="LinkedIn" /></a>
				<a href="#" rel="tooltip" title="Contact"><img src="images/social_icons/mail.png" alt="Contact" /></a>
			</div>
			</p>
		</div>
	</div>

</div>
<!-- End 960 Container -->
<?php include("footer.php"); ?>