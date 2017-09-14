<?php require_once 'parts/header.php'; ?>

		<div class="jumbotron" style="background: none;">
			<div class="container">
				<h1>Refined Tech</h1>
				<hr>
				<div class="col-sm-6">
					<h2>Creativity.</h2>
					<p>In Web Solutions</p>
					<a class="btn btn-warning" href="#myModal" data-toggle='modal'>Get Answers.</a>
						  <!-- Modal -->
						  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title">Get in Touch</h4>
						        </div>
						        <div class="modal-body">
						          <form id="modalMail" action="">
						          	<div class="form-row">
						          		<div class="col-xs-6">
						          			<label for="first">First</label>
						          			<input type="text" class="form-control" id="first" required>
						          		</div>
						          		<div class="col-xs-6">
						          			<label for="last">Last</label>
						          			<input type="text" class="form-control" id="last" required>
						          		</div>
						          	</div>
						          	<div class="form-row">
						          		<div class="form-group">
							          		<div class="col-xs-12">
							          			<label for="email">Email</label>
							          			<input type="email" class="form-control" id="email" required>
							          		</div>
						          		</div>
						          	</div>
						          	<div class="form-row">
						          		<div class="form-group">
						          			<label for="subject">Subject</label>
						          			<input type="text" class="form-control" id="body" required></textarea>
						          		</div>
						          	</div>
						          	<div class="form-row">
						          		<div class="form-group">
						          			<label for="body">Message</label>
						          			<textarea rows="5" class="form-control" id="body" required></textarea>
						          		</div>
						          	</div>
						          	<div class="modal-footer">
						          		<button id="" class="btn btn-info" type="submit">Submit</button>
						          	</div>
						          </form>
						        </div>
						        <!-- <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          <button id="modalMail" type="submit" class="btn btn-primary">Submit</button>
						        </div> -->
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->

				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row" style="background: linear-gradient(to bottom right, #FFF, #fff, #dee);">
			<div class="container">
				<div class="col-sm-6">
					<h2 class="text-center">Dynamic Infrastructure</h2>
					<p class="lead">Refined Technologies is web development company specializing in data solutions. We offer a variety of services and solutions to your <strong>web presence</strong> needs. </p>
				</div>
				<div class="col-sm-6">
					<img class="img-responsive" src="img/infra.png" alt="">
				</div>
			</div>
		</div>
		<div class="row" style="background: linear-gradient(to top right, #fff, #fff, #dee);">
			<div class="container">
				<div class="col-sm-6">
					<img class="img-responsive" src="img/tech.png" alt="">
				</div>
				<div class="col-sm-6">
					<h2 class="text-center">The Refined Process</h2>
					<div class="panel-group" id="accordian">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#collapseOne" data-toggle='collapse' data-parent='#accordian'>
										Overview
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse in" id="collapseOne">
								<div class="panel-body">
									Our approach to site building utilizes current best practices and the latest in web technologies. We pride ourselves on delivering stable and secure finished products to our clients. 
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#collapseTwo" data-toggle='collapse' data-parent='#accordian'>
										Foundation
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="collapseTwo">
								<div class="panel-body">
									A typical shortfall in modern development is a lax approach to backend development. Your site or app is only as strong as it's foundation. Our clients look for a website that is instrumental in stream-lining processes, collecting marketing data, and functioning as a tool as opposed to just a landing page.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#collapseThree" data-toggle='collapse' data-parent='#accordian'>
										Optimization
									</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" id="collapseThree">
								<div class="panel-body">
									Mobile devices are used to search the web now more than any other device. Modern best practice dictates that web sites should be optimized for these devices for ease of use. With input from our clients, we design our sites to be easily and quickly navigated on all devices.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<h2 class="text-center">My Work</h2>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title text-center">
								Data Solutions
							</h4>
						</div>
						<img src="img/data.png" alt="" class="img-responsive">
						<div class="panel-body">
							<p>In our eyes, a website should be a marketing tool as well as a processing tool. For many clients, a web based application can improve efficiency in many facets of business and help to create an easier and more organized process. </p>
						</div>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title text-center">
								Dynamic Websites
							</h4>
						</div>
						<img src="img/dynamic.png" alt="" class="img-responsive">
						<div class="panel-body">
							<p>Being able to change content on a website is important to many clients. Regularly posting new content not only keeps your website appealing to viewers, it also helps to optimize a site for placement in search results. We offer a number of solutions for clients looking to have more control over their web presence.</p>
						</div>
					</div>	
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title text-center">
								SEO
							</h4>
						</div>
						<img src="img/seo.png" alt="" class="img-responsive">
						<div class="panel-body">
							<p>Search Engine Optimization is an integral part of modern web development. It assists search engines in indexing a web site correctly. As an example, you wouldn't want a site that sells fishing poles to be indexed when someone searches for bowling shoes - but you would want that site indexed when someone searches for "fishing poles online". By using a number of strategies, we optimize our clients sites for the major search engines.</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
	
<?php require_once 'parts/footer.php'; ?>