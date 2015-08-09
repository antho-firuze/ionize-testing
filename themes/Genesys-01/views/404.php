<ion:partial view="header" />

<ion:partial view="page_header" />
<div class="container">
	<ion:page:articles type="">

		<ion:article>
			<div class="row ">
				<div class="col-sm-7">
						<ion:title tag="h3" />
						<ion:content />
						<hr />
							<ion:medias type="file">
								<a href="<ion:media:src />"><ion:media:title /></a>
							</ion:medias>
				</div>

				<div class="col-sm-5">
					<ion:medias type="picture" limit="1">
						<img src="<ion:media:src />" />
					</ion:medias>
				</div>
			</div>
		</ion:article>

	</ion:page:articles>
	</div>

<ion:partial view="footer" />
