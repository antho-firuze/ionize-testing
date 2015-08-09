<ion:partial view="header" />

<ion:partial view="page_header" />
<div class="container">
	<div class="row">
		<div class="col-sm-9">
		
			<?php if ('<ion:article:category field="title" />' != '') :?>

				<p id="category_highlight"><em>//</em> <ion:lang key="you_are_browsing_category" /> : <span><ion:article:category field="title" /></span></p>
		
			<?php endif; ?>

			
			<ion:page:article>

				<h2><ion:title /></h2>

				<p><small class="text-muted"><ion:date format="complete" /></small></p>
				
				
		<!-- Carousel -->
     
				<div id="carousel-home" class="carousel slide" data-ride="carousel" data-interval="false">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					  <ion:medias type="picture"  size="1140,375" method="adaptive">
						<div class="item  <ion:media:index is="1">active</ion:media:index>">
						<img src="<ion:media:src size='960,533' method='adaptive' />"  data-id="<ion:media:index />" alt="<ion:media:alt />" class="img-responsive"  />
						</div>
					  </ion:medias>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-home" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-home" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>

		<!--/ Carousel -->
				<hr />
				<ion:medias type="video">

					<ion:media:provider  is='youtube'><iframe class="embed-responsive-item"  src="<ion:media:src />"></iframe></ion:media:provider>
					<ion:media:provider  is='vimeo'><iframe class="embed-responsive-item"  src="<ion:media:src />"></iframe></ion:media:provider>
					<ion:media:provider  is='dailymotion'><iframe class="embed-responsive-item"  src="<ion:media:src />"></iframe></ion:media:provider>
					<ion:media:extension is="mp4"><video class="embed-responsive-item" controls><source src="<ion:media:src />" type="video/mp4" ></video></ion:media:extension>
					<ion:media:extension is="ogv"><video class="embed-responsive-item" controls><source src="<ion:media:src />" type="video/ogg" ></video></ion:media:extension>
					<hr />	
				</ion:medias>

				<!-- content -->
				<ion:content link_key="title" link_title="subtitle" />
				<hr />
				<p><small><ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " /></small></p>
			</ion:page:article>
			
			
		</div><!--/ col-sm-9 -->

		<div class="col-sm-3">

			<h3><ion:lang key="title_categories" /></h3>
			<ul class="list-group">
				<ion:page:categories>
					<li class="list-group-item">
						<a <ion:category:is_active> class="<ion:category:active_class />" </ion:category:is_active> href="<ion:category:url />" title="<ion:category:title />"><ion:category:title />  <span class="badge pull-right"><ion:category:nb_articles /></span></a>
					</li>
				</ion:page:categories>
			</ul>
			
			<h3><ion:lang key="title_archives" /></h3>			
			<ul class="list-group">
				<ion:archives with_month="true">
					<li class="list-group-item"><a class="<ion:archive:active_class />" title="<ion:archive:period />" href="<ion:archive:url />"><ion:archive:period /></a></li>
				</ion:archives>
			</ul>

		</div><!--/ col-sm-3 -->
	</div><!--/ row -->
</div><!--/ container -->

<ion:partial view="footer" />