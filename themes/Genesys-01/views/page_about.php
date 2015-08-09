<ion:partial view="header" />

	<ion:partial view="page_header" />
	<div class="container">
		<div class="row">
			<div class="col-sm7">		
				<ion:title tag="h2" />  
				<ion:articles type="">
					<ion:article>
						<div class="article">
							<ion:title tag="h3" />
							<ion:content />
							<div class="article-pictures">
								<ion:medias type="picture">
									<img src="<ion:media:src />" />
								</ion:medias>
								<ion:medias type="file">
									<a href="<ion:media:src />"><ion:media:title /></a>
								</ion:medias>
							</div>
						</div>
					</ion:article>
				</ion:articles>
			</div>
			<div class="col-sm-5">
				<ion:medias type="picture" limit="1">
					<img src="<ion:media:src />" />
				</ion:medias>
			</div>
		</div>
		<div class="row">
			<ion:articles type="bloc">
				<ion:article>
					<div class="col-sm-12">
						<div class="panel">
							<ion:title tag="h5" />
							<ion:content />
						</div>
					</div>
				</ion:article>
			</ion:articles>

		</div>
	</div><!--/ container -->


<ion:partial view="footer" />
