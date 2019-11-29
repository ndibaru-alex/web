<?php include "roomserver.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Rooms</title>
</head>
<body>
	<div>
<?php include "header.html" ?>
</div>
<div style="margin-top: 140px">
	


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        <div class="col-lg-9">
		    		<div class="row">
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				
		    					
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="#">Suite Room</a></h3>
		    						<p><span class="price mr-2">sh8000</span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 3 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 1</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="#" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    			
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    					
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="#">Family Room</a></h3>
		    						<p><span class="price mr-2">sh2000</span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 3 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 1</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="#" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    				
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="#">Deluxe Room</a></h3>
		    						<p><span class="price mr-2">sh10000</span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 5 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 2</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="#" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    				
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="#">Classic Room</a></h3>
		    						<p><span class="price mr-2">sh13000</span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 5 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 2</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="#" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    				
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="#">Superior Room</a></h3>
		    						<p><span class="price mr-2">sh16000</span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 6 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 3</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="#" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    			
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="#">Luxury Room</a></h3>
		    						<p><span class="price mr-2">sh20000</span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 5 Persons</li>
		    							<li><span>Size:</span> 45 m2</li>
		    							<li><span>View:</span> Sea View</li>
		    							<li><span>Bed:</span> 2</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="#" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Book Now</h3>


	      			<form id="r" method="post" action="rooms.php" >
	      			
	      				<div class="fields">
	      					<div class="form-group">
		                <b>Book NO</b><input type="text" name="id"  class="form-control " placeholder="Book number">
		              </div>
		              
		              <div class="form-group">
		                <b>checkIn</b><input type="date" name="idate" id="checkin_date" class="form-control checkin_date" placeholder="Check In Date">
		              </div>
		              <div class="form-group">
		                <b>checkOut</b><input type="date" name="odate" id="checkout_date" class="form-control checkout_date" placeholder="Check Out Date">
		              </div>

		              <div class="form-group">
		                
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="roomtype" id="" form="r" class="form-control">
	                    	<option value="">Room Type</option>
	                    	<option value="Suite">Suite</option>
	                      <option value="Family Room">Family Room</option>
	                      <option value="Deluxe Room">Deluxe Room</option>
	                      <option value="Classic Room">Classic Room</option>
	                      <option value="Superior Room">Superior Room</option>
	                      <option value="Luxury Room">Luxury Room</option>
	                    </select>
	                  </div>
		              </div>

		              <div class="form-group">
		                
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="adult" id="" form="r" class="form-control">
	                    	<option value="0 Adult">0 Adult</option>
	                    	<option value="1 Adult">1 Adult</option>
	                      <option value="2 Adult">2 Adult</option>
	                      <option value="3 Adult">3 Adult</option>
	                      <option value="4 Adult">4 Adult</option>
	                      <option value="5 Adult">5 Adult</option>
	                      <option value="6 Adult">6 Adult</option>
	                    </select>
	                  </div>
		              </div>

		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="children" id="" form="r" class="form-control">
	                    	<option value="0 Children">0 Children</option>
	                    	<option value="1 Children">1 Children</option>
	                      <option value="2 Children">2 Children</option>
	                      <option value="3 Children">3 Children</option>
	                      <option value="4 Children">4 Children</option>
	                      <option value="5 Children">5 Children</option>
	                      <option value="6 Children">6 Children</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		               <b>Name</b> <input type="text" name="bname"  class="form-control " placeholder="your name">
		              </div>
		              <div>
		                <input type="submit" value="Submit" name="rom" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	           </form>
	      		</div>
	      		
	        </div>
		    </div>
    	</div>
    </section>
  

<?php include "footer.html" ?>
</div>
</body>
</html>