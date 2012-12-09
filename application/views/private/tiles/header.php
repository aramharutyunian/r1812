<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title><?php echo I18n::get('admin.title');?></title>
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php echo HTML::style('media/private/css/style.css');?>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
		
		
		<!-- JS -->
		<?php echo HTML::script('media/private/js/jquery-1.8.2.min.js');?>
		<?php echo HTML::script('media/private/js/css3-mediaqueries.js');?>
		<?php echo HTML::script('media/private/js/custom.js');?>
		<?php echo HTML::script('media/private/js/tabs.js');?>
		
		<?php echo HTML::style('media/private/css/superfish.css');?>	
		<!-- superfish -->
		<?php echo HTML::script('media/private/js/superfish-1.4.8/js/hoverIntent.js');?>
		<?php echo HTML::script('media/private/js/superfish-1.4.8/js/superfish.js');?>
		<?php echo HTML::script('media/private/js/superfish-1.4.8/js/supersubs.js');?>
		
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<?php echo HTML::script('media/private/js/prettyPhoto/js/jquery.prettyPhoto.js');?>
		
		<?php echo HTML::style('media/private/js/prettyPhoto/css/prettyPhoto.css');?>
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<?php echo HTML::style('media/private/js/poshytip-1.1/src/tip-twitter/tip-twitter.css');?>
		<?php echo HTML::style('media/private/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css');?>
		<?php echo HTML::script('media/private/js/poshytip-1.1/src/jquery.poshytip.min.js');?>

		<!-- ENDS poshytip -->
		
		<!-- Language  swicher -->
		<!-- begin CSS -->
		<?php echo HTML::style('media/private/js/language-switcher/css/polyglot-language-switcher.css');?>
                
                <!-- Load Date Picker css -->
                <link rel="stylesheet" href="<?php echo Kohana::$base_url ?>media/private/css/datePicker/jquery.ui.all.css">
                <link rel="stylesheet" href="<?php echo Kohana::$base_url ?>media/private/css/datePicker/demos.css">
        <!-- end CSS -->
	
	<!-- begin JS -->
	<?php echo HTML::script('media/private/js/language-switcher/js/persist-min.js');?>
	<?php echo HTML::script('media/private/js/language-switcher/js/jquery.polyglot.language.switcher.js');?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
				effect: 'fade',
                testMode: true,
                onChange: function(evt){
                //    alert("The selected language is: "+evt.selectedItem);
              	  var lng =evt.selectedItem;
        	        $('input[name="lang"]').val(lng);
        	        document.lng_form.submit();
                }
//                ,afterLoad: function(evt){
//                    alert("The selected language has been loaded");
//                },
//                beforeOpen: function(evt){
//                    alert("before open");
//                },
//                afterOpen: function(evt){
//                    alert("after open");
//                },
//                beforeClose: function(evt){
//                    alert("before close");
//                },
//                afterClose: function(evt){
//                    alert("after close");
//                }
			});
            $('.customselect').polyglotLanguageSwitcher({
                effect: 'fade',
                testMode: true
               // onChange: function(evt){
                    //    alert("The selected language is: "+evt.selectedItem);

               // }
//                ,afterLoad: function(evt){
//                    alert("The selected language has been loaded");
//                },
//                beforeOpen: function(evt){
//                    alert("before open");
//                },
//                afterOpen: function(evt){
//                    alert("after open");
//                },
//                beforeClose: function(evt){
//                    alert("before close");
//                },
//                afterClose: function(evt){
//                    alert("after close");
//                }
            });
        });
    </script>
	<!-- end JS -->
		<!-- End -->
		
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Flex Slider -->
		<?php echo  HTML::style('media/private/css/flexslider.css');?>
		<?php echo HTML::script('media/private/js/jquery.flexslider-min.js');?>
		
		<!-- ENDS Flex Slider -->
		
		<!-- Less framework -->
		<?php echo  HTML::style('media/private/css/lessframework.css');?>
		
		<!-- modernizr -->
		<?php echo HTML::script('media/private/js/modernizr.js');?>
		
		
		<!-- SKIN -->
		<?php echo  HTML::style('media/private/css/skin.css');?>
		<?php echo HTML::script('media/private/js/moveform.js');?>
		<script src=""></script>
		

	</head>
	
	
	<body lang="en">
	
		
	