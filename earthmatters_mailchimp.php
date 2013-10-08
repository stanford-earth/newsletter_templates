<?
$sections = array(
    array(
        "id" => "dean",
        "position" => 1,
        "title" => "Dean's Letter",
        "bgcolor" => "#1c5c99",
        "features" => FALSE,
        "listitems" => FALSE
        ),
    array(
        "id" => "news",
        "position" => 2,
        "title" => "News &amp; Discoveries",
        "bgcolor" => "#357082",
        "features" => TRUE,
        "listitems" => TRUE
        ),
    array(
        "id" => "faculty",
        "position" => 3,
        "title" => "Faculty News &amp; Honors",
        "bgcolor" => "#5d5f9c",
        "features" => TRUE,
        "listitems" => TRUE
        ),
    array(
        "id" => "teaching",
        "position" => 4,
        "title" => "Teaching & Learning",
        "bgcolor" => "#9a4121",
        "features" => TRUE,
        "listitems" => TRUE
        ),
    array(
        "id" => "alumni",
        "position" => 5,
        "title" => "Alumni News &amp; Class Notes",
        "bgcolor" => "#b47e00",
        "features" => TRUE,
        "listitems" => TRUE
        ),
    array(
        "id" => "events",
        "position" => 6,
        "title" => "Upcoming Events",
        "bgcolor" => "#497b00",
        "features" => TRUE,
        "listitems" => TRUE
        )
    );
    ?>

    <!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>

        <!-- Define Charset -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

        <!-- Responsive Meta Tag -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">

        <title>Stanford School of Earth Sciences</title>

        <style type="text/css">

        body{
            width: 100%; 
            background-color: #FFFFFF; 
            font-family: 'Source Sans Pro', sans-serif;
            margin:0; 
            padding:0; 
            -webkit-font-smoothing: antialiased;
        }

        ul {
            color: #333333;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            margin-left: 18px;
            padding-left: 2px;
        }

        li {
            margin: 10px;
        }

        img {
            max-width: 100%;
        }

        table {
            margin: auto;
        }

        tbody,
        td {
            border: none !important;
            border-top: 0 !important;
        }

        .banner td {
            padding: 3px 15px 3px 20px;
            color: #ffffff;
            text-transform: uppercase;
            font-size: 11px;
        }

        .main { 
            color: #333333; 
            font-size: 14px; 
            font-weight: 400; 
            text-decoration: none; 
            line-height: 18px; 
            margin-left: 6pt; 
            margin-right: 24pt 
        }

        .main a:link  { 
            color: #CC0000; 
            text-decoration: none 
        }

        .main a:visited  { 
            color: #CC0000; 
            text-decoration: none 
        }

        .main a:hover  { 
            color: #CC0000; 
            text-decoration: underline 
        }

        .main-image {
            margin-right: 5px;
        }

        .links { 
            color: #333333; 
            font-size: 14px; 
            font-weight: 400; 
            text-decoration: none; 
            line-height: 18px; 
            margin-left: 6pt; 
            margin-right: 24pt 
        }

        .links a:link  { 
            color: #333333; 
            text-decoration: none 
        }

        .links a:visited  { 
            color: #333333; 
            text-decoration: none 
        }

        .links a:hover  { 
            color: #CC0000; 
            text-decoration: underline 
        }

        p,h1,h2,h3,h4{
            margin-top:0;
            margin-bottom:0;
            padding-top:0;
            padding-bottom:0;
        }

        .head {
            color: #FFFFFF;
            font-size: 20px;
            font-weight: 400;
            margin-left: 6pt;
            padding: 2px 5px;
        }

        .subhead {
            color: #333333;
            font-size: 22px;
            font-family: 'Crimson Text', serif;
            font-weight: normal;
            text-decoration: none; 
            line-height: 20px;
            margin: 0 0 .5em 0;
        }

        html{
            width: 100%; 
        }

        .footer { 
            color: #333333; 
            font-size: 12px; 
            font-weight: 400; 
            text-decoration: none; 
            line-height: 15px; 
            margin-left: 6pt; 
            margin-right: 24pt 
        }

        .footer a:link  { 
            color: #CC0000; 
            text-decoration: none 
        }

        .footer a:visited  { 
            color: #CC0000; 
            text-decoration: none 
        }

        .footer a:hover  { 
            color: #CC0000; 
            text-decoration: underline 
        }



        /* ----------- responsivity ----------- */
        @media only screen and (max-width: 640px){

            /*------ top header ------ */
            .header-bg{width: 440px !important; height: 10px !important;}
            .main-header{line-height: 28px !important;}
            .main-subheader{line-height: 28px !important;}

            /*----- --features ---------*/
            .feature{width: 420px !important;}
            .feature-middle{width: 400px !important; text-align: center !important;}
            .feature-img{width: 400px !important; height: auto !important;}

            .container{width: 440px !important;}
            .container-middle{width: 420px !important;}
            .mainContent{width: 400px !important;}

            .main-image{/*width: 400px !important;*/ height: auto !important;}
            .subhead .main-image {max-width: 165px !important;}
            .banner{width: 417px !important; height: auto !important;}
            .banner td {padding: 3px 5px;}
            /*------ sections ---------*/
            .section-item{width: 400px !important;}
            .section-img{width: 400px !important; height: auto !important;}
            /*------- prefooter ------*/
            .prefooter-header{padding: 0 10px !important; line-height: 24px !important;}
            .prefooter-subheader{padding: 0 10px !important; line-height: 24px !important;}
            /*------- footer ------*/
            .top-bottom-bg{width: 420px !important; height: auto !important;}

        }

        @media only screen and (max-width: 479px){

         /*------ top header ------ */
         .banner td {padding: 3px 5px;}
         .header-bg{width: 280px !important; height: 10px !important;}
         .top-header-left{width: 260px !important; text-align: center !important;}
         .top-header-right{width: 260px !important;}
         .main-header{line-height: 28px !important; text-align: center !important;}
         .main-subheader{line-height: 28px !important; text-align: center !important;}

         /*------- header ----------*/
         .logo{width: 260px !important;}
         .nav{width: 260px !important;}

         /*----- --features ---------*/
         .feature{width: 260px !important;}
         .feature-middle{width: 240px !important; text-align: center !important;}
         .feature-img{width: 240px !important; height: auto !important;}


         .container{width: 280px !important;}
         .container-middle{width: 260px !important;}
         .mainContent{width: 240px !important;}

         .main-image{width: 260px !important; height: auto !important;}
         .subhead .main-image {max-width: 260px !important; margin: 0 0 .25em 0;}
         .banner{width: 260px !important; height: auto !important;}
         /*------ sections ---------*/
         .section-item{width: 240px !important;}
         .section-img{width: 240px !important; height: auto !important;}
         /*------- prefooter ------*/
         .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
         .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
         /*------- footer ------*/
         .top-bottom-bg{width: 260px !important; height: auto !important;}

     }   
     </style>
 </head>
 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table border="0" width="100%" cellpadding="0" cellspacing="0"><tr><td>
        <table width="800" border="0" cellpadding="0" cellspacing="0" align="center" class="container" bgcolor="FFFFFF">
            <!-- banner -->                 
            <tr>
                <td>
                    <table border="0" width="735" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                        <tr bgcolor="FFFFFF">
                            <td align="center" colspan="2"><img style="display: block;" class="main-image" width="735" height="206" src="https://stanford.box.com/shared/static/g4fph4ur2ru54wl8t0l4.png" alt="Stanford School Of Earth Science - Earth Matters" /></td>
                        </tr>
                    </table>
                    <table border="0" width="735" align="center" cellpadding="3" cellspacing="0" class="container-middle banner" bgcolor="#a09a8f">
                        <tr>
                            <td align="left" mc:edit="header-text-left">A Quarterly Newsletter From</td>
                            <td align="right" mc:edit="header-text-right">Autumn 2013</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- end banner -->

            <tr><td height="10"></td></tr>
            <? foreach ($sections as $section) { ?>
            <tr>
                <td>
                    <table border="1" bordercolor="#cccccc" width="733" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                        <tr bgcolor="FFFFFF">
                            <td height="27" style="background-color: <?= $section['bgcolor'] ?>;" class="head" mc:edit="<?= $section['bgcolor'] ?>title">
                                <?= $section['title'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding: 5px;">
                                <p class="subhead">
                                <span mc:edit="<?= $section['id'] ?>-image"><img src="https://stanford.box.com/shared/static/mpvufg2q88rppairlub6.png" class="main-image" align="left" style="max-width: 298px; max-height: 156px;"></span>
                                <span mc:edit="<?= $section['id'] ?>-header">header</span>
                                </p>
                                <div mc:edit="<?= $section['id'] ?>-teaser" class="main">Copy</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div mc:hideable mc:repeatable>
                                    <ul>
                                        <li mc:repeatable><span mc:edit="<?= $section['id'] ?>-link">link</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr><td height="10"></td></tr>
            <? } ?>
            <!-- Features2 -->
            <tr>
                <td>
                    <table border="0" width="735" align="center" cellpadding="0" cellspacing="0" class="container-middle">
                        <tr>
                            <td>

                                <!-- credits -->
                                <table border="0" width="362" align="left" cellpadding="0" cellspacing="0" bgcolor="FFFFFF" class="feature">
                                    <tr><td align="left" valign="top"i mc:edit="footer-left">
                                        <p class=footer><b>Earth Matters</b> is produced quarterly by the Stanford School of Earth Sciences. We look forward to your <a href="#">story ideas</a>, <a href="#">comments</a> and <a href="#"> alumni updates</a>.<br><br>
                                            <b>Pam Matson</b>, <i>Dean</i><br>
                                            <b>Nancy Peterson</b>, <i>Editor</i><br>
                                            <b>Rebecca Smith Vogel</b>, <i>Interim Dean for External Relations</i><br>
                                            <b>Astrid Thompson</b>, <i>Director of Alumni Relations & Development</i><br>
                                            <b>Aaron Cole</b>, <i>Digital Production</i><br>
                                            <b>Clark Creative Group</b>, <i>Design</i><br><br>
                                            <b>Contributors</b><br>Tom Hayden, (Name), (Name)<br><br>
                                            <b>Photography</b><br>
                                            TBD

                                        </td></tr>

                                    </table>
                                    <!-- end credits -->

                                    <table border="0" align="left" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="30" width="11"></td>
                                        </tr>
                                    </table>
                                    <!-- contact -->
                                    <table border="0" width="362" height="362" align="left" cellpadding="0" cellspacing="0" bgcolor="FFFFFF" class="feature">
                                        <tr><td align="left" valign="top" mc:edit="footer-right"><p class=main><b>Connect to Stanford Earth Sciences</b><br><br><img src="connect.jpg"><p class=footer><a href="http://earth.stanford.edu" target="_blank">earth.stanford.edu</a><br><br><b>Stanford University School of Earth Sciences</b><br>397 Panama Mall<br>Mitchell Building 101<br>Stanford, CA 94305-2210<br>Tel: (650) 723-2544<p class=footer>. . . . . . . . . . . . . . . . . . . .<br><a href="http://alumni.stanford.edu/get/page/magazine/sage" target="_blank"><img src="sage-logo.gif" border="0"></a><br><b>Need eco-advice?</b> Student authors welcome your queries on sustainability and the environment. <a href="http://alumni.stanford.edu/get/page/magazine/sage" target="_blank">>></a><br>. . . . . . . . . . . . . . . . . . . .<br><b>Generation Anthropcene</b><br>Student podcast about planetary change. <a href="http://www.stanford.edu/group/anthropocene/cgi-bin/wordpress/" target="_blank">>></a> </td></tr>
                                    </table>
                                    <!-- end contact -->

                                </td>
                            </tr>   
                            <tr bgcolor="FFFFFF">
                                <td>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- end features -->

                <tr><td height="35"></td></tr>

            </table>
        </td></tr></table>
    </body>
    </html>