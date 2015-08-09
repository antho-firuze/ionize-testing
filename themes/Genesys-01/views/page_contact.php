<ion:partial view="header" />

<ion:partial view="page_header" />

<div class="container">
	<div class="row">
		<div class="col-sm-9">

			<!-- Articles with no type -->
			<ion:page:articles type="">

				<ion:article>
					<ion:title tag="h3" />
					<ion:content />
				</ion:article>

			</ion:page:articles>

			
			<!--
				Success message
				Displayed if the form was successfuly validated
			-->
			<ion:form:contact:validation:success is="true">
				<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<ion:lang key="form_alert_success_title" tag="h4" />
					<ion:lang key="form_alert_success_message" tag="p" />
				</div>
			</ion:form:contact:validation:success>

			<!--
				Error message
				Displayed if the form doesn't pass the validation
				the 'form_message_error' key is located in : themes/your_theme/language/xx/tags_lang.php
			-->
			<ion:form:contact:validation:error is="true" >
				<div class="alert alert-danger" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<ion:lang key="form_alert_error_title" tag="h4" />
					<ion:lang key="form_alert_error_message" tag="p" />
				</div>
			</ion:form:contact:validation:error>

			<!--
				Form has no action because the same page will process the data.
				POST data are catched by the global Tagmanager and processed by the Tagmanager's library method 'process_data'
				defined in : /themes/your_theme/libraries/Tagmanager/Contact.php
				as declared in the form config file : /themes/your_theme/config/forms.php
			-->
			<form method="post" action="">

				<!-- The form name must be set so the tags identify it -->
				<input type="hidden" name="form" value="contact" />

				<div class="form-group">
					<label for="name"><ion:lang key="form_label_name" /></label>
					<input class="form-control" name="name" type="text" id="name" value="<ion:form:contact:field:name />"<ion:form:contact:error:name is="true"> class="error" </ion:form:contact:error:name>/>
					<ion:form:contact:error:name tag="small" class="text-danger" />
				</div>

				<div class="form-group">
					<label for="email"><ion:lang key="form_label_email" /></label>
					<input class="form-control" name="email" type="text" id="email" value="<ion:form:contact:field:email />"<ion:form:contact:error:email is="true"> class="error" </ion:form:contact:error:email> />
					<ion:form:contact:error:email tag="small" class="text-danger" />
				</div>


				<div class="form-group">
					<label for="topic"><ion:lang key="form_label_topic" /></label>
					<input class="form-control" name="topic" type="text" id="topic" value="<ion:form:contact:field:topic />"<ion:form:contact:error:topic is="true"> class="error" </ion:form:contact:error:topic> />
					<ion:form:contact:error:topic tag="small" class="text-danger" />
				</div>

				<div class="form-group">
					<label for="message"><ion:lang key="form_label_message" /></label>
					<textarea class="form-control" name="message" id="message" rows="7" placeholder="<ion:lang key="form_label_message" />"<ion:form:contact:error:message is="true"> class="error" </ion:form:contact:error:message>><ion:form:contact:field:message /></textarea>
					<ion:form:contact:error:message tag="small" class="text-danger" />
				</div>


				<button type="submit" class="btn btn-primary"><ion:lang key="form_button_send" /></button>
			</form>

		</div><!--/ col-sm-9 -->

		<!-- 
			Contact page articles 
		-->
		<div class="col-sm-3">		
			<ion:page:articles type="bloc">
				
				<ion:article>
					<ion:title tag="h3" />
					<ion:content />
					<ion:medias type="picture">
						<img src="<ion:media:src size='430' />" />
					</ion:medias>
				</ion:article>
			</ion:page:articles>
			
		</div><!--/ col-sm-3 -->
    </div><!--/ row -->
</div><!--/ container -->

	

<ion:partial view="footer" />
