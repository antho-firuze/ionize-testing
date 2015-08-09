<ion:partial view="header" />

	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<ion:page:title tag="h1"/>
					<ion:page:subtitle tag="h2" function="nl2br" />
				</div>
				<div class="col-sm-9">
					<ion:page id="carousel">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<ion:medias type="picture" size="150" method="height">
								<div class="carousel-inner" role="listbox">
									<ion:media>
										<div class="item active">
											<img src="<ion:media:src />" />
										</div>
									</ion:media>
								</div>
							</ion:medias>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</ion:page>
					<!--
					<ion:page id="carousel">
						<ion:media:carousel />
					</ion:page>
					-->
				</div>
			</div>
		</div>
	</div>

	<section id="home-main-content">
		<div class="container">
			<div class="row">
				<ion:page:articles limit="4">
					<div class="col-sm-3">
						<h3><ion:article:title /></h3>
						<div class="home-block">
							<ion:article:content />
						</div>
					</div>
				</ion:page:articles>
			</div>
		</div><!--/ container -->
	</section>
	<section id="home-last-post">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						<ion:lang key="home_last_post" />
					</h2>
				</div>
			</div>
			<div class="row">
				<ion:page id="blog">
					<ion:articles limit="2">
						<ion:article>
							<div class="col-sm-6">
								<h3><a href="<ion:url />" title="<ion:title />"><ion:title /></a></h3>

								<div class="row">						
									<div class="col-sm-6">
										<ion:medias type="picture,video" limit="1">
											<ion:media:type is="video">
												<div class="embed-responsive embed-responsive-4by3">
													<ion:media:provider  is='youtube'><iframe class="embed-responsive-item"  src="<ion:media:src />"></iframe></ion:media:provider>
													<ion:media:provider  is='vimeo'><iframe class="embed-responsive-item"  src="<ion:media:src />"></iframe></ion:media:provider>
													<ion:media:provider  is='dailymotion'><iframe class="embed-responsive-item"  src="<ion:media:src />"></iframe></ion:media:provider>
													<ion:media:extension is="mp4"><video class="embed-responsive-item" controls><source src="<ion:media:src />" type="video/mp4" ></video></ion:media:extension>
													<ion:media:extension is="ogv"><video class="embed-responsive-item" controls><source src="<ion:media:src />" type="video/ogg" ></video></ion:media:extension>
												</div>
											</ion:media:type>
											<ion:media:type is="picture">
												<img class="img-responsive" src="<ion:media:src size='300,200' method='adaptive' />" />
											</ion:media:type>
										</ion:medias>
									</div>
									<div class="col-sm-6">
										<ion:article:static:flag:items limit="1">
											<span class="label label-primary"><ion:text:value /></span>
										</ion:article:static:flag:items>									
										<a href="<ion:url />" title="<ion:title />"><ion:content paragraph="1" /></a>
									</div>
								</div><!--/ row -->
								
							</div>
						</ion:article>
					</ion:articles>
				</ion:page>
			</div>
		</div><!--/ container -->
	</section>

<ion:partial view="footer" />

