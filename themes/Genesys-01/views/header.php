<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="revisit-after" content="15 days" />
	
	<meta name="description" content="<ion:meta_description />" />
	<meta name="keywords" content="<ion:meta_keywords />" />
	<meta name="language" content="<ion:current_lang />" />
	
	<link rel="shortcut icon" href="<ion:theme_url />assets/ico/favicon.ico">

	<title><ion:meta_title /> | <ion:site_title /></title>
  
    <!-- Bootstrap core CSS -->
    <link href="<ion:theme_url />assets/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="<ion:theme_url />assets/css/theme.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	<!-- Ionize JS Lang object -->
	<ion:jslang />

	<!-- if JS needs to get the theme URL, we give it to him -->
	<script type="text/javascript">
		var theme_url = '<ion:theme_url />';
	</script>

	<ion:google_analytics />

</head>

<body>

	 <!--/ Logo Zone -->
	 
	<!-- Main Menu -->			
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">   
	 <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-mainmenu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand" href="<ion:home_url />" title="<ion:site_title />"><ion:site_title /></a>
        </div>
		 <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-mainmenu">
			<ion:tree_navigation active_class="active" tag="ul"  class="nav navbar-nav" /> 
			
			<ion:languages tag="ul" class="nav navbar-nav navbar-right">
				<li <ion:language:is_active> class="active"</ion:language:is_active>>
					<a  href="<ion:language:url />">
						<ion:language:name  />
					</a>
				</li>
			</ion:languages>	
        </div>
      </div>	 
    </nav >
	<!--/ Main Menu -->



