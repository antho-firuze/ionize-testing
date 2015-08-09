<ion:partial view="header" />
	<ion:partial view="page_header" />

	<ion:page:articles type="">
		<ion:article>
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="article">
							<ion:title tag="h3" />
							<ion:content />
							<div class="article-pictures">
								<ion:medias type="file">
									<a href="<ion:media:src />"><ion:media:title /></a>
								</ion:medias>
							</div>
						</div>
					</div>

					<div class="col-sm-5">
						<ion:medias type="picture" limit="1">
							<img src="<ion:media:src />" class="img-responsive" />
						</ion:medias>
					</div>
				</div>
			</div><!--/ container -->
		</ion:article>
	</ion:page:articles>
	<div class="container">
		<div class="row">
			<!--
				Articles : type 'bloc'
				authorization : not set : Apply filtering
								all : displays all articles (includes all deny_codes)
								401 : display only 401 articles
								403 : display only 403 articles
								404 : display only 404 articles
				usage :
				authorization="all" : 			All articles, with or without authorizations
				authorization="all,401,403" : 	Only free access articles + 401 + 403
				authorization="401,403" : 		Only 401 + 403
				authorization="401" : 			Only 401

			-->
			<ion:articles type="bloc" authorization="all">
				<ion:article >
					<div class="col-sm-4">
							<ion:title tag="h4" />
							<ion:deny is=''>
								<ion:content  />
							</ion:deny>
							<ion:else>
								<ion:deny is='401'>
									<ion:content paragraph="1"/>
									<p><b>Restriction : 401</b></p>
								</ion:deny>
								<ion:deny is='403'>
									<ion:content paragraph="1"/>
									<p><b>Restriction : 403</b></p>
								</ion:deny>
							</ion:else>
					</div>
				</ion:article>
			</ion:articles>
		</div>
	</div><!--/ container -->
<ion:partial view="footer" />
