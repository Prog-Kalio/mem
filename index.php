<?php 
include_once("memheader.php");

?>



<!-- Row 2 -->
			<div class="row cnt-row" id="r2">

				<div class="col-md-2 r2c" id="r2c1">
					<div class="btn-group-vertical btn-block" id="btn-category" role="group" aria-label="Button group with nested dropdown">
					  <a href="products.php"><button type="button" class="btn btn-dark"><b>CATEGORIES</b></button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Theatre</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Laboratory</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Ophthalmic</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Dental</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">ENT</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Orthopedic</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg" id="active">General</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Consumables</button></a>
					  <a href="products.php"><button type="button" class="btn btn-ctg">Hospital Furniture</button></a>
					</div>
				</div>

				<div class="col-md-7 r2c" id="r2c2">
					<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="images/banner2.png" class="d-block w-100" alt="Shop from work">
					    </div>
					    <div class="carousel-item">
					      <img src="images/banner1.png" class="d-block w-100" alt="Some medical equipment">
					    </div>
					    <div class="carousel-item">
					      <img src="images/banner4.png" class="d-block w-100" alt="Surgery">
					    </div>
					    <div class="carousel-item">
					      <img src="images/banner3.png" class="d-block w-100" alt="ICU items">
					    </div>
					    <div class="carousel-item">
					      <img src="images/banner5.png" class="d-block w-100" alt="Theatre Items">
					    </div>
					  </div>
					</div>
				</div>

				<div class="col-md-3 r2c" id="r2c3">
					<h5>We are security conscious</h5>
					<div id="regPicsDiv">
						<img src="images/security.png" class="img-fluid" alt="registration pics" id="regPics" width="360" height="300">
					</div>
				</div>

			</div>


<!-- Row 3 -->
		<div class="inb-div"><h6>CATEGORIES</h6></div>

			<div class="row cnt-row" id="r3">
				<div class="col-md-4 r3c" id="r3c1">
					<a href="products.php"><img src="images/disp-1.png" class="img-fluid" alt="Orthopedic Equipment" id="orthopedic" width="480" height="400"></a>	
				</div>
				<div class="col-md-4 r3c" id="r3c2">
					<a href="products.php"><img src="images/disp-2.png" class="img-fluid" alt="Theatre Equipment" id="theatre" width="480" height="400"></a>
				</div>
				<div class="col-md-4 r3c" id="r3c3">
					<a href="products.php"><img src="images/disp-3.png" class="img-fluid" alt="Medical Consumables" id="consumables" width="480" height="400"></a>
				</div>
			</div>

<!-- Row 4 -->
		<div class="inb-div"><h6>TOP SELLING</h6></div>

			<div class="row cnt-row" id="r4">
				<div class="col-md-3 r4c equipment" id="r4c1">
					<img src="images/opt-1.png" class="img-fluid" alt="Tonometer" id="tonometer" width="250" height="250">	
					<p><b>Tonometer</b></p>
					<p><span class="span-buy">N</span>1,350,000</p>
					<div class="approval">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                    </div>
					<a href="tonometer.php"><button class="btn btn-info btn-buy" id="btn-buy1">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart1"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r4c equipment" id="r4c2">
					<img src="images/opt-2.png" class="img-fluid" alt="AutoRef" id="autoRef" width="250" height="250">
					<p><b>AutoRef</b></p>
					<p><span class="span-buy">N</span>1,580,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="autoref.php"><button class="btn btn-info btn-buy" id="btn-buy2">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart2"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r4c equipment" id="r4c3">
					<img src="images/opt-3.png" class="img-fluid" alt="Combi Unit" id="combiUnit" width="250" height="250">
					<p><b>Combi Unit</b></p>
					<p><span class="span-buy">N</span>1,820,000</p>
					<div class="approval">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                    </div>
					<a href="combiunit.php"><button class="btn btn-info btn-buy" id="btn-buy3">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart3"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r4c equipment" id="r4c4">
					<img src="images/opt-4.png" class="img-fluid" alt="Slit Lamp" id="slitLamp" width="250" height="250">
					<p><b>Slit Lamp</b></p>
					<p><span class="span-buy">N</span>1,450,500</p>
					 <div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                     </div>
					<a href="slitlamp.php"><button class="btn btn-info btn-buy" id="btn-buy4">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart4"><i class="fa fa-cart-plus"></i></button>
				</div>
			</div>


<!-- Row 5 -->
			<div class="inb-div"><h6>PAID ADs</h6></div>
				<div class="row cnt-row" id="r5">
					<div class="col-md-6 r5c" id="r5c1">
						<img src="images/gme-1.png" class="img-fluid" alt="Ventilator" id="ventilator" width="400" height="400">
					</div>

					<div class="col-md-6 r5c" id="r5c2">
						<img src="images/covid.png" class="img-fluid" alt="Covid" id="covid" width="50" height="50">
						<p>Covid 19 is real. Stay safe.</p>
						<h5>Ventilator Machine</h5>
						<p><span class="span-buy">N</span>1,890,500</p>
						<a href="ventilator.php"><button class="btn bannerBtn" id="bannerBtn1">Buy</button></a>
					</div>
					
				</div>


<!-- Row 6 -->
		 	<div class="inb-div"><h6>FEATURED BRANDS</h6></div>
			<div class="row cnt-row" id="r6">
				<div class="col-md-3 r6c equipment" id="r6c1">
					<img src="images/lab-1.png" class="img-fluid" alt="Stuart Block Heater" id="blockheater" width="250" height="250">
					<p><b>Block Heater</b></p>
					<p><span class="span-buy">N</span>660,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="blockheater.php"><button class="btn btn-info btn-buy" id="btn-buy6">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart6"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r6c equipment" id="r6c2">
					<img src="images/lab-2.png" class="img-fluid" alt="Floor Standing Centrifuge" id="centrifuge" width="250" height="250">
					<p><b>Centrifuge</b></p>
					<p><span class="span-buy">N</span>980,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="centrifuge.php"><button class="btn btn-info btn-buy" id="btn-buy7">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart7"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r6c equipment" id="r6c3">
					<img src="images/lab-3.png" class="img-fluid" alt="Electric Oven" id="oven" width="250" height="250">
					<p><b>Electric Oven</b></p>
					<p><span class="span-buy">N</span>100,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="oven.php"><button class="btn btn-info btn-buy" id="btn-buy8">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart8"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r6c equipment" id="r6c4">
					<img src="images/lab-4.png" class="img-fluid" alt="Hematology Analyzer" id="Hematology Analyzer" width="250" height="250">
					<p><b>Hematology Analyzer</b></p>
					<p><span class="span-buy">N</span>580,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="analyzer.php"><button class="btn btn-info btn-buy" id="btn-buy9">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart9"><i class="fa fa-cart-plus"></i></button>
				</div>
			</div>

<!-- Row 7 -->
		<div class="inb-div"><h6></h6></div>
			<div class="row" id="r7">
				<div class="col-md-8 r7c" id="r7c1">
					<a href="#"><img src="images/blackfriday1.png" class="img-fluid" alt="Black Friday Sales"></a>
				</div>
				<div class="col-md-2 r7c" id="r7c2">
					<a href="autoclave.php"><img src="images/off-1.png" class="img-fluid" alt="AutoClave"></a>
					<p><b>Autoclave</b><br>
					<span class="span-buy">N</span>320,000</p>
				</div>
				<div class="col-md-2 r7c" id="r7c3">
					<a href="trolley.php"><img src="images/off-2.png" class="img-fluid" alt="Trolley"></a>
					<p><b>Trolley</b><br>
					<span class="span-buy">N</span>50,000</p>
				</div>
			</div>


<!-- Row 8 -->
		 <div class="inb-div"><h6>SPONSORED PRODUCTS</h6></div>
			<div class="row cnt-row" id="r8">
				<div class="col-md-3 r8c equipment" id="r8c1">
					<img src="images/mem-1.png" class="img-fluid" alt="Surgical Suction" id="surgicalsuction" width="250" height="250">
					<p><b>Surgical Suction</b></p>
					<p><span class="span-buy">N</span>1,570,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="surgicalsuction.php"><button class="btn btn-info btn-buy" id="btn-buy10">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart10"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r8c equipment" id="r8c2">
					<img src="images/mem-2.png" class="img-fluid" alt="Suction" id="suction" width="250" height="250">
					<p><b>Suction</b></p>
					<p><span class="span-buy">N</span>950,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="suction.php"><button class="btn btn-info btn-buy" id="btn-buy11">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart11"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r8c equipment" id="r8c3">
					<img src="images/mem-3.png" class="img-fluid" alt="Dehumidifier" id="dehumidifier" width="250" height="250">
					<p><b>Dehumidifier</b></p>
					<p><span class="span-buy">N</span>1,580,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="dehumidifier.php"><button class="btn btn-info btn-buy" id="btn-buy12">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart12"><i class="fa fa-cart-plus"></i></button>
				</div>
				<div class="col-md-3 r8c equipment" id="r8c4">
					<img src="images/mem-4.png" class="img-fluid" alt="Anesthesia" id="anesthesia" width="250" height="250">
					<p><b>Anesthesia</b></p>
					<p><span class="span-buy">N</span>1,580,000</p>
					<div class="approval">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
					<a href="anesthesia.php"><button class="btn btn-info btn-buy" id="btn-buy13">Buy</button></a>
					<button class="btn btn-warning buy-cart" id="buy-cart13"><i class="fa fa-cart-plus"></i></button>
				</div>
			</div>


<!-- Row 9 -->
			<div class="inb-div"><h6>PAID ADs</h6></div>
				<div class="row cnt-row" id="r9">
					<div class="col-md-7 r9c" id="r9c1">
						<p>"Little Angel" as it's often called</p>
						<h5>Extracorporeal lithotripter ESWL-109</h5>
						<p>Lithotripsy with non X -ray radiation; Zero electromagnetic radiation; work of low energy; enhanced the quality of core components of shock wave source, extend the working life and reduce treatment costs, real micro- carbon technologies.</p>
						<p><span class="span-buy">N</span>1,890,500</p>
						<a href="lithotripter.php"><button class="btn bannerBtn" id="bannerBtn2">Buy</button></a>
					</div>

					<div class="col-md-5 r9c" id="r9c2">
						<img src="images/smallbanner.png" class="img-fluid" alt="lithotripter" id="lithotripter" width="400" height="400">
					</div>
					
				</div>


<?php include_once("memfooter.php") ?>