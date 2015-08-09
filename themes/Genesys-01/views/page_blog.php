<ion:partial view="header" />

	<ion:partial view="page_header" />
	<div class="container">
		<div class="row">
			<div class="col-sm-9">

				<!-- Current category -->
				<ion:page:category:current:title expression="!=''">
					<h4><ion:lang key="you_are_browsing_category" /> : <ion:page:category:current:title/></h4>
					<hr />
				</ion:page:category:current:title>

				<!-- Current tag -->
				<ion:page:tag:current:title expression="!=''">
					<h4><ion:lang key="you_are_browsing_tag" /> : <ion:page:tag:current:title/></h4>
					<hr />
				</ion:page:tag:current:title>

				<!-- Current Archive : show the active category name -->
				<ion:archives:archive:is_active>
					<h4><ion:translation term="you_are_browsing_archive" /> : <span><ion:archive:period /></span></h4>
					<hr />
				</ion:archives:archive:is_active>

				<ion:page:articles>
					
					<ion:article>

						<div class="row">
							<div class="col-sm-4">
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
										<img class="img-responsive" src="<ion:media:src size='300,200' method='adaptive' />"  />
									</ion:media:type>

								</ion:medias>
							</div>
							<div class="col-sm-8">
								<h2><a href="<ion:url />"><ion:title class="pagetitle" /></a></h2>
								<p><small class="text-muted"><ion:date format="complete" /></small></p>
								<p><small><ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " /></small></p>
								<ion:content paragraph="1" />
								<p><small><em><ion:article:tags:list link="true" separator=", "  prefix="lang('title_tags') : " /></em></small></p>
							</div>
						</div><!--/ row -->
						<hr />

					</ion:article>
				
				</ion:page:articles>


				<!-- Pagination -->
				<ion:page:articles:pagination />


			</div><!--/ col-sm-9 -->

			<div class="col-sm-3">

				<!--
					Categories :
					Only categories used by articles linked to the current page are displayed
				-->		
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
					
				<h3><ion:lang key="title_tags" /></h3>
				<ion:page:tags>
					<a class="tag<ion:tag:nb_articles />" href="<ion:tag:url />" title="<ion:tag:title />"><span class="label label-primary"><ion:tag:title /></span></a>
				</ion:page:tags>

			</div><!--/ col-sm-3 -->
		</div><!--/ row -->
	</div><!--/ container -->


<ion:partial view="footer" />