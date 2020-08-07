 <?php 
   include 'inc/connect.php'; 
   include 'inc/hader.php'; 
 ?>



 <!--From start here-->
	<div id="contact" class="contact">
	    <div class="container">
	        <div class="row">
	            <h2 class="wow fadeInUp">Send Your Message</h2>
	            <p class="wow fadeInUp" data-wow-delay="0.4" style="font-size: 20px;">Let's Work Together</p>
	            <div class="col-lg-6 col-md-6">
	              <form action="dbconncetmessage.php" method="post" id="main-form">
	                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
	                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
	                    <input name="username" type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name" required>
	                </div>
	                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
	                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
	                    <input name="useremail" type="email" class="form-control" aria-describedby="sizing-addon1" placeholder="Email Address" required>
	                </div>
	                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
	                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
	                    <input name="unserphone" type="number" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone Number" required>
	                </div>
	            </div>
	            <div class="col-lg-6 col-md-6">
	                <div class="input-group wow fadeInUp" data-wow-delay="2s">
	                    <textarea name="message_body" id="" cols="80" rows="6" class="form-control"></textarea>
	                </div>
	                <button type="submit" class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s">Sand Your Message</button>
	            </div>
	            </form>
	        </div>
	    </div>
	</div>
<!--From End here-->
</div>
	
</div>


















  <?php include 'inc/foter.php'; ?>