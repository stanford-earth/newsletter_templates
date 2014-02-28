<?
$sections = array(
    array(
        "id" => "dean",
        "position" => 1,
        "title" => "Dean's Letter",
        "bgcolor" => "#1c5c99",
        "features" => TRUE,
        "listitems" => FALSE,
        "events" => FALSE
        ),
    array(
        "id" => "news",
        "position" => 2,
        "title" => "News &amp; Discoveries",
        "bgcolor" => "#357082",
        "features" => TRUE,
        "listitems" => TRUE,
        "events" => FALSE
        ),
    array(
        "id" => "faculty",
        "position" => 3,
        "title" => "Faculty News &amp; Honors",
        "bgcolor" => "#5d5f9c",
        "features" => TRUE,
        "listitems" => TRUE,
        "events" => FALSE
        ),
    array(
        "id" => "teaching",
        "position" => 4,
        "title" => "Teaching & Learning",
        "bgcolor" => "#9a4121",
        "features" => TRUE,
        "listitems" => TRUE,
        "events" => FALSE
        ),
    array(
        "id" => "alumni",
        "position" => 5,
        "title" => "Alumni News &amp; Class Notes",
        "bgcolor" => "#b47e00",
        "features" => TRUE,
        "listitems" => TRUE,
        "events" => FALSE
        ),
    array(
        "id" => "events",
        "position" => 6,
        "title" => "Upcoming Events",
        "bgcolor" => "#497b00",
        "features" => FALSE,
        "listitems" => FALSE,
        "events" => TRUE
        )
);
?>


    <!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" style="width: 100%;">
<head>

        <!-- Define Charset -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

        <!-- Responsive Meta Tag -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

        <title>Earth Matters - Autumn 2013 | School of Earth Sciences - Stanford University</title>

        
 <style type="text/css">
		body{
			width:100%;
			background-color:#FFFFFF;
			font-family:'Source Sans Pro', sans-serif;
			font-size:14px;
			margin:0;
			padding:0;
			-webkit-font-smoothing:antialiased;
		}
		.section a{
			color:#cc0000 !important;
			text-decoration: underline;
		}
		.feature .text{
			margin-left:310px !important;
		}
		ul{
			color:#333333;
			font-family:'Source Sans Pro', sans-serif;
			font-size:14px;
			margin-left:18px;
			padding-left:2px;
		}
		li{
			margin:10px;
		}
		img{
			xmax-width:100%;
		}

		tbody,td{
			border:none !important;
			border-top:0 !important;
			background-color:auto;
		}
		.banner td{
			padding:3px 15px 3px 20px;
			color:#ffffff;
			text-transform:uppercase;
			font-size:11px;
		}
		.main{
			color:#333333;
			font-size:14px;
			font-weight:400;
			text-decoration:none;
			line-height:18px;
			margin-left:6pt;
			margin-right:24pt;
		}
		.main a:link{
			color:#CC0000;
			text-decoration:none;
		}
		.main a:visited{
			color:#CC0000;
			text-decoration:none;
		}
		.main a:hover{
			color:#CC0000;
			text-decoration:underline;
		}
	 
		.links{
			color:#333333;
			font-size:14px;
			font-weight:400;
			text-decoration:none;
			line-height:18px;
			margin-left:15px;
			margin-right:24pt;
			padding:10px;
		}
		.links a:link{
			color:#333333 !important;
		}
		.links a:visited{
			color:#333333 !important;
		}
		.links a:hover{
			color:#CC0000 !important;
		}
		.links .title{
			font-size:inherit;
			font-weight:normal;
			color:#CC0000;
		}
		p,h1,h2,h3,h4{
			margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
		}
		.head{
			color:#FFFFFF;
			font-size:20px;
			font-weight:400;
			margin-left:6pt;
			padding:2px 5px;
		}
		.feature{
			padding:5px 5px 15px 5px;
		}
		.subhead,.subhead a{
			color:#333333 !important;
			font-family:'Crimson Text', serif;
			font-weight:normal;
			text-decoration:none;
			line-height:20px;
			margin:0 0 .25em 0;
		}
		html{
			width:100%;
		}
		.footer{
			color:#333333;
			font-size:12px;
			font-weight:400;
			text-decoration:none;
			line-height:15px;
			margin-left:6pt;
			margin-right:24pt;
		}
		.footer a:link{
			color:#CC0000;
			text-decoration:none;
		}
		.footer a:visited{
			color:#CC0000;
			text-decoration:none;
		}
		.footer a:hover{
			color:#CC0000;
			text-decoration:underline;
		}

	.container-middle {
        	width: 95%;
		_width: 730px;
		max-width: 730px;
        }

/*
	@media only screen and (max-width: 640px){
		.header-bg{
			width:440px !important;
			height:10px !important;
		}

}	@media only screen and (max-width: 640px){
		.main-header{
			line-height:28px !important;
		}

}	@media only screen and (max-width: 640px){
		.main-subheader{
			line-height:28px !important;
		}

}	@media only screen and (max-width: 640px){
		.feature{
		}

}	@media only screen and (max-width: 640px){
		.feature-middle{
			width:400px !important;
			text-align:center !important;
		}

}	@media only screen and (max-width: 640px){
		.feature-img{
			width:400px !important;
			height:auto !important;
		}

}	@media only screen and (max-width: 640px){
		.mainContent{
			width:400px !important;
		}

}	@media only screen and (max-width: 640px){
		.main-image{
			height:auto !important;
		}

}	@media (max-width: 640px){
		.feature .main-image{
			max-width:115px !important;
			border: 1px solid red !important;
		}

}	@media only screen and (max-width: 640px){
		.feature .text{
			margin-left:165px !important;
		}

}	@media only screen and (max-width: 640px){
		.banner{
			height:auto !important;
		}

}	@media only screen and (max-width: 640px){
		.banner td{
			padding:3px 5px;
		}

}	@media only screen and (max-width: 640px){
		.section-item{
			width:400px !important;
		}

}	@media only screen and (max-width: 640px){
		.section-img{
			width:400px !important;
			height:auto !important;
		}

}	@media only screen and (max-width: 640px){
		.prefooter-header{
			padding:0 10px !important;
			line-height:24px !important;
		}

}	@media only screen and (max-width: 640px){
		.prefooter-subheader{
			padding:0 10px !important;
			line-height:24px !important;
		}

}	@media only screen and (max-width: 640px){
		.top-bottom-bg{
			width:420px !important;
			height:auto !important;
		}

}	@media only screen and (max-width: 479px){
		.banner td{
			padding:3px 5px;
		}

}	@media only screen and (max-width: 479px){
		.header-bg{
			width:280px !important;
			height:10px !important;
		}

}	@media only screen and (max-width: 479px){
		.top-header-left{
			width:260px !important;
			text-align:center !important;
		}

}	@media only screen and (max-width: 479px){
		.top-header-right{
			width:260px !important;
		}

}	@media only screen and (max-width: 479px){
		.main-header{
			line-height:28px !important;
			text-align:center !important;
		}

}	@media only screen and (max-width: 479px){
		.main-subheader{
			line-height:28px !important;
			text-align:center !important;
		}

}	@media only screen and (max-width: 479px){
		.logo{
			width:260px !important;
		}

}	@media only screen and (max-width: 479px){
		.nav{
			width:260px !important;
		}

}	@media only screen and (max-width: 479px){
		.feature{
			width:260px !important;
		}

}	@media only screen and (max-width: 479px){
		.feature-middle{
			width:240px !important;
			text-align:center !important;
		}

}	@media only screen and (max-width: 479px){
		.feature-img{
			width:240px !important;
			height:auto !important;
		}

}	@media only screen and (max-width: 479px){
		.feature .text{
			margin-left:1px !important;
		}

}	@media only screen and (max-width: 479px){
		.mainContent{
			width:240px !important;
		}

}	@media (max-width: 479px){
		.feature .main-image{
			width: 115px;
			border-color: green;
		}

}	@media only screen and (max-width: 479px){
		.section .main-image{
		}

}	@media only screen and (max-width: 479px){
		.banner{
			height:auto !important;
		}

}	@media only screen and (max-width: 479px){
		.section-item{
			width:240px !important;
		}

}	@media only screen and (max-width: 479px){
		.section-img{
			width:240px !important;
			height:auto !important;
		}

}	@media only screen and (max-width: 479px){
		.prefooter-header{
			padding:0 10px !important;
			line-height:28px !important;
		}

}	@media only screen and (max-width: 479px){
		.prefooter-subheader{
			padding:0 10px !important;
			line-height:28px !important;
		}

}	@media only screen and (max-width: 479px){
		.top-bottom-bg{
			width:260px !important;
			height:auto !important;
		}

}
*/

.section.last {
  border-bottom: 1px solid #054567;
}
</style>

<style>
@media only screen and (max-width: 640px) {
  .feature img {
    width: 150px !important;
    height: 95px !important;
   }

  .feature #dean-section img {
    width: 120px !important;
    height: 120px !important; 
  }
  .feature td.first {
    width: 150px !important;
    height: auto;
  }
  .feature #dean-section td.first {
    width: 120px !important;
    height: auto;
  }
}

@media only screen and (max-width: 420px) {
  .feature img {
    width: 100px !important;
    height: 63px !important;
   }

  .feature #dean-section img {
    width: 80px !important;
    height: 80px !important; 
  }
  .feature td.first {
    width: 100px !important;
    height: auto;
  }
  .feature #dean-section td.first {
    width: 80px !important;
    height: auto;
  }
  .footer .feature {
    width: 100% !important;
  }
}
    
</style>

</head>
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="width: 100%;background-color: #FFFFFF;font-family: 'Source Sans Pro', sans-serif;font-size: 14px;margin: 0;padding: 0;-webkit-font-smoothing: antialiased;">
    <table border="0" width="100%" cellpadding="0" cellspacing="0"><tr><td style="background-color: auto;border: none !important;border-top: 0 !important;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="container" bgcolor="FFFFFF">
            
            <!-- banner -->                 
            <tr>
                <td style="background-color: auto;border: none !important;border-top: 0 !important;">
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                        <tr><td height="10" style="background-color: auto;border: none !important;border-top: 0 !important;"></td></tr>
                        <tr class="footer" style="color: #333333;font-size: 12px;font-weight: 400;text-decoration: none;line-height: 15px;margin-left: 6pt;margin-right: 24pt;">
                            <td colspan="2" align="center" style="background-color: auto;border: none !important;border-top: 0 !important;"><a href="">View this newsletter in your browser.</a></td>
                        </tr>
                        <tr><td height="10" style="background-color: auto;border: none !important;border-top: 0 !important;"></td></tr>
                        <tr bgcolor="#FFFFFF">
                            <td align="center" colspan="2" style="background-color: auto;border: none !important;border-top: 0 !important;"><img border="0" src="https://gallery.mailchimp.com/167e9da7acec83c4cc802b3e7/images/earthmatters_banner.2.png" alt="Stanford School Of Earth Science - Earth Matters" border="0" style="margin: 0;padding: 0;display: block;max-width: 100%;" class="main-image"></td>
                        </tr>
                    </table>
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="container-middle banner">
                        <tr>
                            <td mc:edit="issue-date" align="right" bgcolor="#a09a8f" style="background-color: #a09a8f;padding: 3px 15px 3px 20px;color: #ffffff;text-transform: uppercase;font-size: 11px;border: none !important;border-top: 0 !important;">Issue Date</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- end banner -->
	    <? foreach ($sections as $section) { ?>
	    <?
	      $pos='';
	      if ($section === reset($sections)) {
   		$pos = 'first';
              }
	      if ($section === end($sections)) {
   		$pos = 'last';
              }
	    ?>
	    <! -- begin section -->
            <tr><td height="10" style="background-color: auto;border: none !important;border-top: 0 !important;"></td></tr>
            <tr>
                <td>
                    <table width="100%" align="center" cellpadding="0" cellspacing="0" class="container-middle section <?= $pos ?>">
                        <tr>
                            <td height="27"><h2 mc:edit="<?= $section['id'] ?>-sectiontitle" style="color: #054567; border-bottom: 1px solid #666; font-size: 20px;font-weight: 600;"><?= $section['title']?></h2></td>
                        </tr>
			<? if($section['features']) { ?>
                        <tr mc:repeatable>
                            <td valign="top" class="feature" style="background-color: auto;border: none !important;border-top: 0 !important;">
				<table border="0" cellpadding="0" cellspacing="0" id="<?= $section['id'] ?>-section">
					<tr>
						<td width="" valign="top" class="first"><a href="" style="color: #cc0000 !important;"><img mc:edit="<?= $section['id'] ?>-image" class="main-image" border="0" src="https://d2q0qd5iz04n9u.cloudfront.net/_ssl/proxy.php/https/gallery.mailchimp.com/167e9da7acec83c4cc802b3e7/images/earthmatters_default_200x126.png"></a></td>
						<td width="10">&nbsp;</td>
						<td valign="top">
							<div class="subhead" mc:edit="<?= $section['id'] ?>-subhead" style="font-size: 1.5em;font-weight: normal;color: #333333 !important;">Lorem ipsum dolor sit amet</div>
							<div mc:edit="<?= $section['id']?>-teaser">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium laoreet iaculis. Vivamus egestas porta egestas. Maecenas faucibus sodales cursus. Cras velit sem, consectetur eu imperdiet at, mollis id ipsum. Phasellus justo felis, imperdiet ut suscipit in, mattis non ipsum. Phasellus iaculis et justo in fringilla. Curabitur at laoreet nibh. Nunc egestas mi vel scelerisque iaculis.</div>
						</td>
					</tr>
				</table>
			    </td>
                        </tr>
                        <? } ?>
			<? if($section['listitems']) { ?>
                        <tr mc:hideable>
                            <td class="links" style="background-color: auto;color: #333333;font-size: 14px;font-weight: 400;text-decoration: none;line-height: 18px;margin-left: 15px;margin-right: 24pt;padding: 10px;border: none !important;border-top: 0 !important;">
				<h3 class="title" mc:edit="more-<?= $section['id'] ?>">More <?= $section['title'] ?></h3>                                
                                    <ul style="color: #333333;font-family: 'Source Sans Pro', sans-serif;font-size: 14px;margin-left: 18px;padding-left: 2px;">
                                        <li mc:repeatable style="margin: 10px;"><span mc:edit="more-<?= $section['id'] ?>-item">more link</span></li>
</span></li>
                                    </ul>
                            </td>
                        </tr>
                        <? } ?>
			<? if($section['events']) { ?>
                        <tr style=" border-bottom: 2px solid #ccc;">
                            <td valign="top" class="feature" style="background-color: auto;padding: 5px 5px 15px 5px;border: none !important;border-top: 0 !important;">
				<div class="links" style="color: #333333;font-size: 14px;font-weight: 400;text-decoration: none;line-height: 18px;margin-left: 15px;margin-right: 24pt;padding: 10px;">
					<div mc:repeatable class="vevent">
				        <span mc:edit="event-item"><strong>event title</strong><br>
					Date/Location</span>
					</div>
				</div>
        			<p mc:edit="event-section-description" style="margin-top: 0;margin-bottom: 0;padding-top: 0;padding-bottom: 0;">Please visit <a href="http://earth.stanford.edu/events" target="_self" style="color: #cc0000 !important;">earth.stanford.edu/events</a> for a comprehensive list of on-campus events including seminars and lectures.</p>
</td>
                        </tr>

                        <? } ?>
                    </table>
                </td>
            </tr>
            <!-- end section -->
             <? } ?>

	    <!-- begin footer -->
            <tr><td height="10" style="background-color: auto;border: none !important;border-top: 0 !important;"></td></tr>
            <tr class="footer">
                <td style="background-color: auto;border: none !important;border-top: 0 !important;">
                    <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                        <tr>
                            <td style="background-color: auto;border: none !important;border-top: 0 !important;">

                                <!-- credits -->
                                <table border="0" width="49%" align="left" cellpadding="0" cellspacing="0" bgcolor="FFFFFF" class="feature" style="margin: auto;padding: 5px 5px 15px 5px;">
                                    <tr><td mc:edit="footer-col1" align="left" valign="top" i="" style="background-color: auto;border: none !important;border-top: 0 !important;"><p class="footer" style="margin-top: 0;margin-bottom: 0;padding-top: 0;padding-bottom: 0;color: #333333;font-size: 12px;font-weight: 400;text-decoration: none;line-height: 15px;margin-left: 6pt;margin-right: 24pt;">
	<em>Earth Matters</em> is produced three times annually by the Stanford School of Earth Sciences.  We look forward to your <a href="mailto:earthmatters-newsletter@stanford.edu?subject=Earth%20Matters%3A%20Story%20Ideas" style="color: #CC0000;text-decoration: none;">story ideas</a>, <a href="mailto:earthmatters-newsletter@stanford.edu?subject=Earth%20Matters%3A%20Comments" style="color: #CC0000;text-decoration: none;">comments</a> and <a href="mailto:earthmatters-newsletter@stanford.edu?subject=Earth%20Matters%3A%20Alumni%20Updates" style="color: #CC0000;text-decoration: none;">alumni updates</a>.<br>
	<br>
	Nancy Peterson, Editor and Writer<br>
	Ker Than, Writer<br>
	Aaron Cole, Digital Production<br>
	Astrid Thompson, Alumni Relations Director</p>
</td></tr>

                                    </table>
                                    <!-- end credits -->

                                    <!-- contact -->
                                    <table border="0" width="49%" align="left" cellpadding="0" cellspacing="0" bgcolor="FFFFFF" class="feature" style="margin: auto;padding: 5px 5px 15px 5px;">
                                        <tr><td mc:edit="footer-col2" align="left" valign="top" style="background-color: auto;border: none !important;border-top: 0 !important;"><div class="footer" style="color: #333333;font-size: 12px;font-weight: 400;text-decoration: none;line-height: 15px;margin-left: 6pt;margin-right: 24pt;">
	<p style="margin-top: 0;margin-bottom: 0;padding-top: 0;padding-bottom: 0;">
		<a href="http://earth.stanford.edu/" target="_self" style="color: #CC0000;text-decoration: none;">Stanford School of Earth Sciences</a><br>
		397 Panama Mall<br>
		Mitchell Building 101<br>
		Stanford CA 94305-2210<br>
		Phone (650) 723-2544</p>
	<ul class="footer" style="color: #333333;font-family: 'Source Sans Pro', sans-serif;font-size: 12px;margin-left: 6pt;padding-left: 2px;font-weight: 400;text-decoration: none;line-height: 15px;margin-right: 24pt;">
		<li style="margin: 10px;"><a href="https://twitter.com/stanfordearth" target="_self" style="color: #CC0000;text-decoration: none;">Follow us on Twitter</a></li>
		<li style="margin: 10px;"><a href="http://www.facebook.com/pages/Stanford-School-of-Earth-Sciences/60350681195" target="_self" style="color: #CC0000;text-decoration: none;">Follow us on Facebook</a></li>
		<li style="margin: 10px;"><a href="http://www.youtube.com/user/stanfordearthscience" target="_self" style="color: #CC0000;text-decoration: none;">View our YouTube channel</a></li>
	</ul>
</div>
<br>
</td></tr>
                                    </table>
                                    <!-- end contact -->

                                </td>
                            </tr>   
                        </table>
                    </td>
                </tr>
                <!-- end footer -->

                <tr><td height="35" style="background-color: auto;border: none !important;border-top: 0 !important;"></td></tr>

            </table>
        </td></tr></table>
            </body>
    </html>
