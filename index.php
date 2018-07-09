<?php /* Template Name: Avaleht */ ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kirjastus Maagiline Ruum</title>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Import Google Font Rosario -->
    <link href="https://fonts.googleapis.com/css?family=Rosario" rel="stylesheet">

    <!-- Import Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main stylesheet -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- Ask password since website is under construction -->
    <script type="text/javascript">
        var password;
        var pass1="12345";
        password = prompt('Enter password: ');
        if (password == pass1)
        alert('Password correct. Press OK to enter website');
        else {
            window.location="http://www.google.com";
        }
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div class="page">

        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

        <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Get logo -->
            <a class="page-scroll navbar-brand" href="#page-top"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/MaagilineRuum_logopng.png"></a>


        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="meedia">Meedia</a></li>
                    <li class="dropdown">
                        <a href="#uuemad" class="dropdown-toggle">Raamatud<span class="caret"></span></a>
                        <ul class="dropdown-menu" id="dropdown">
                        <li><a href="#uuemad">Uuemad</a></li>
                        <li><a href="#psühholoogia_vaimsus">Psühholoogia ja vaimsus</a></li>
                        <li><a href="#biograafia_memuaarid">Biograafia ja memuaarid</a></li>
                        </ul>
                    </li>
                  <li><a href="kirjastusest">Kirjastusest</a></li>
                  <li><a href="tellimine">Tellimine</a></li>
                  <li class="social"><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

        </nav> <!-- End navbar -->

    <!-- Add a layer behind navbar -->
    <div class="blurryscroll"></div>

    <!-- Wrappers for background image -->
    <div class="wrapper" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/img/stars2_cropped-min.jpg');">
    </div>

    <div class="wrapper_small" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/img/stars2_cropped-min.jpg');">
    </div>


    <!-- Text for homepage -->
    <div class="parenttext">
        <div class="text1">
            <p>Jäävad ja pühad mõisted</p>
        </div>
        <div class="text2">
            <p>on maa, kus ma elan</p>
        </div>
        <div class="text3">
            <p>ja keel, mida kõnelen.</p>
        </div>
        <div class="text4">
            <p><i>Valdo Pant</i></p>
        </div>
    </div>

    <div class="parenttext2">
        <div class="container">
            <p class="lõik1">Jäävad ja pühad mõisted</p>
            <p class="lõik2">on maa, kus ma elan</p>
            <p class="lõik3">ja keel, mida kõnelen.</p>
            <p class="lõik4"><i>Valdo Pant</i></p>
        </div>
    </div>

    <!-- First section for news -->
    <section id="uudised">
        <div class="container">
            <div class="row" id="peagi-ilmumas" style="display:none;">
                <div class="col-sm-3">
                    <h4 class="white">Peagi ilmumas</h4>
                    <?php if( get_field('uudisedpilt') ): ?>
                            <img src="<?php the_field('uudisedpilt'); ?>" />
                    <?php endif; ?>
                </div>
                <div id="text" class="col-sm-9">
                    <h4><?php the_field('uudised_autor'); ?></h4>
                    <h4><strong><?php the_field('uudised_pealkiri'); ?></strong></h4>
                    <p><?php the_field('uudised_tekst'); ?></p>
                </div>
            </div>

            <!-- Option for image only -->
            <div class="row" id="uudis" style="display:none;">
                <div class="col-lg-12">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/reklaam.png" alt="">
                </div>
            </div>

            <!-- Option for text only -->
            <div class="row" id="uudis2" style="display:none;">
                <div class="col-lg-12" style="height: 300px;">
                    <p style="font-size:<?php the_field('font'); ?>;"><?php the_field('editor'); ?></p>
                </div>
            </div>

            <div class="uudised-background" id="uudised-background"></div>
            <div class="uudised-background2" id="uudised-background2"></div>
            <div class="uudised-background3" id="uudised-background3"></div>

        </div>
    </section> <!-- End first section -->

    <!-- HTML for larger screens -->
    <div class="largeScreen">

        <!-- Main section for books -->
        <section id="raamatud">
            <section id="uuemad"></section>
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <!-- Get image for the book -->
                        <?php if( get_field('pilt1') ): ?>
                            <a href="<?php the_field('raamat1_link'); ?>"><img src="<?php the_field('pilt1'); ?>"/></a>
                        <?php endif; ?>
                        <!-- Get author -->
                        <h5><?php the_field('autor1'); ?></h5>
                        <!-- Get book name -->
                        <h4><?php the_field('raamat1'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt2') ): ?>
        	                <a href="<?php the_field('raamat2_link'); ?>"><img src="<?php the_field('pilt2'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor2'); ?></h5>
                        <h4><?php the_field('raamat2'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt3') ): ?>
        	                <a href="<?php the_field('raamat3_link'); ?>"><img src="<?php the_field('pilt3'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor3'); ?></h5>
                        <h4><?php the_field('raamat3'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt4') ): ?>
        	                <a href="<?php the_field('raamat4_link'); ?>"><img src="<?php the_field('pilt4'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor4'); ?></h5>
                        <h4><?php the_field('raamat4'); ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat1_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat2_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat3_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat4_link'); ?>">VAATA</a>
                    </div>
                </div>

                <!-- Start second row of books -->

                <div class="row">
                    <div class="col-md-3">
                        <?php if( get_field('pilt5') ): ?>
        	                <a href="<?php the_field('raamat5_link'); ?>"><img src="<?php the_field('pilt5'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor5'); ?></h5>
                        <h4><?php the_field('raamat5'); ?></h4>
                    </div>
                    <div class="col-md-3">
                        <?php if( get_field('pilt6') ): ?>
        	                <a href="<?php the_field('raamat6_link'); ?>"><img src="<?php the_field('pilt6'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor6'); ?></h5>
                        <h4><?php the_field('raamat6'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt7') ): ?>
        	                <a href="<?php the_field('raamat7_link'); ?>"><img src="<?php the_field('pilt7'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor7'); ?></h5>
                        <h4><?php the_field('raamat7'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt8') ): ?>
        	                <a href="<?php the_field('raamat8_link'); ?>"><img src="<?php the_field('pilt8'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor8'); ?></h5>
                        <h4><?php the_field('raamat8'); ?></h4>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat5_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat6_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat7_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat8_link'); ?>">VAATA</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Add image between sections -->
        <section id="tsitaat1" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/img/birds.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="color: white;"><?php the_field('tsitaat1'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Add a break and header background for section heading -->
        <div class="vaheosa"></div>


        <!-- Start new section of subcategory of books -->
        <section id="raamatud">

            <!-- Section link for navigation -->
            <section id="psühholoogia_vaimsus"></section>

            <div class="container">
                <div class="row">
                    <h2>Psühholoogia & vaimsus</h2>
                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt1') ): ?>
	                        <a href="<?php the_field('vaimsus_raamat1_link'); ?>"><img src="<?php the_field('vaimsus_pilt1'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor1'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat1'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt2') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat2_link'); ?>"><img src="<?php the_field('vaimsus_pilt2'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor2'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat2'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt3') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat3_link'); ?>"><img src="<?php the_field('vaimsus_pilt3'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor3'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat3'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt4') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat4_link'); ?>"><img src="<?php the_field('vaimsus_pilt4'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor4'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat4'); ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat1_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat2_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat3_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat4_link'); ?>">VAATA</a>
                    </div>
                </div>

                <!-- ---------------------------------SECOND ROW------------------------- -->

                <div class="row">
                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt5') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat5_link'); ?>"><img src="<?php the_field('vaimsus_pilt5'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor5'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat5'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt6') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat6_link'); ?>"><img src="<?php the_field('vaimsus_pilt6'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor6'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat6'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt7') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat7_link'); ?>"><img src="<?php the_field('vaimsus_pilt7'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor7'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat7'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('vaimsus_pilt8') ): ?>
        	                <a href="<?php the_field('vaimsus_raamat8_link'); ?>"><img src="<?php the_field('vaimsus_pilt8'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('vaimsus_autor8'); ?></h5>
                        <h4><?php the_field('vaimsus_raamat8'); ?></h4>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat5_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat6_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a style="display:<?php the_field('vaimsus_nupp7'); ?>;" class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat7_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a style="display:<?php the_field('vaimsus_nupp8'); ?>;" class="btn btn-secondary btn-lg" href="<?php the_field('vaimsus_raamat8_link'); ?>">VAATA</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tsitaat2" style="background: url('<?php echo get_bloginfo('template_directory'); ?>/img/birds.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p style="color: white;"><?php the_field('tsitaat2'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="vaheosa"></div>

        <section id="raamatud">
            <section id="biograafia_memuaarid"></section>
            <div class="container">
                <div class="row">
                    <!-- Title for new section -->
                    <h2>Biograafia & memuaarid</h2>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt1') ): ?>
        	                <a href="<?php the_field('biograafia_raamat1_link'); ?>"><img src="<?php the_field('biograafia_pilt1'); ?>"/></a><?php endif; ?>
                        <h5><?php the_field('biograafia_autor1'); ?></h5>
                        <h4><?php the_field('biograafia_raamat1'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt2') ): ?>
        	                <a href="<?php the_field('biograafia_raamat2_link'); ?>"><img src="<?php the_field('biograafia_pilt2'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor2'); ?></h5>
                        <h4><?php the_field('biograafia_raamat2'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt3') ): ?>
        	                <a href="<?php the_field('biograafia_raamat3_link'); ?>"><img src="<?php the_field('biograafia_pilt3'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor3'); ?></h5>
                        <h4><?php the_field('biograafia_raamat3'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt4') ): ?>
        	                <a href="<?php the_field('biograafia_raamat4_link'); ?>"><img src="<?php the_field('biograafia_pilt4'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor4'); ?></h5>
                        <h4><?php the_field('biograafia_raamat4'); ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat1_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat2_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat3_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat4_link'); ?>">VAATA</a>
                    </div>
                </div>

                <!-- Second row -->
                <div class="row">
                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt5') ): ?>
                            <a href="<?php the_field('biograafia_raamat5_link'); ?>"><img src="<?php the_field('biograafia_pilt5'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor5'); ?></h5>
                        <h4><?php the_field('biograafia_raamat5'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt6') ): ?>
        	                <a href="<?php the_field('biograafia_raamat6_link'); ?>"><img src="<?php the_field('biograafia_pilt6'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor6'); ?></h5>
                        <h4><?php the_field('biograafia_raamat6'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt7') ): ?>
                            <a href="<?php the_field('biograafia_raamat7_link'); ?>"><img src="<?php the_field('biograafia_pilt7'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor7'); ?></h5>
                        <h4><?php the_field('biograafia_raamat7'); ?></h4>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('biograafia_pilt8') ): ?>
        	                <a href="<?php the_field('biograafia_raamat8_link'); ?>"><img src="<?php the_field('biograafia_pilt8'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('biograafia_autor8'); ?></h5>
                        <h4><?php the_field('biograafia_raamat8'); ?></h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat5_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat6_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a style="display:<?php the_field('biograafia_nupp7'); ?>;" class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat7_link'); ?>">VAATA</a>
                    </div>
                    <div class="col-md-3">
                        <a style="display:<?php the_field('biograafia_nupp8'); ?>;" class="btn btn-secondary btn-lg" href="<?php the_field('biograafia_raamat8_link'); ?>">VAATA</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- HTML for smaller screens -->
    <div class="smallScreen">

        <section id="raamatud">
            <section id="uuemad"></section>
            <div class="container">
                <div class="row">
                    <?php the_field('editor2'); ?>
                    <div class="col-md-3">
                        <?php if( get_field('pilt1') ): ?>
        	                <a href="<?php the_field('raamat1_link'); ?>"><img src="<?php the_field('pilt1'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor1'); ?></h5>
                        <h4><?php the_field('raamat1'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat1_link'); ?>">VAATA</a>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt2') ): ?>
        	                <a href="<?php the_field('raamat2_link'); ?>"><img src="<?php the_field('pilt2'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor2'); ?></h5>
                        <h4><?php the_field('raamat2'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat2_link'); ?>">VAATA</a>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt3') ): ?>
        	                <a href="<?php the_field('raamat3_link'); ?>"><img src="<?php the_field('pilt3'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor3'); ?></h5>
                        <h4><?php the_field('raamat3'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat3_link'); ?>">VAATA</a>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt4') ): ?>
        	                <a href="<?php the_field('raamat4_link'); ?>"><img src="<?php the_field('pilt4'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor4'); ?></h5>
                        <h4><?php the_field('raamat4'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat4_link'); ?>">VAATA</a>
                    </div>
                </div>

                <!-- Second row -->

                <div class="row">
                    <div class="col-md-3">
                        <?php if( get_field('pilt5') ): ?>
        	                <a href="<?php the_field('raamat5_link'); ?>"><img src="<?php the_field('pilt5'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor5'); ?></h5>
                        <h4><?php the_field('raamat5'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat5_link'); ?>">VAATA</a>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt6') ): ?>
        	                <a href="<?php the_field('raamat6_link'); ?>"><img src="<?php the_field('pilt6'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor6'); ?></h5>
                        <h4><?php the_field('raamat6'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat6_link'); ?>">VAATA</a>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt7') ): ?>
        	                <a href="<?php the_field('raamat7_link'); ?>"><img src="<?php the_field('pilt7'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor7'); ?></h5>
                        <h4><?php the_field('raamat7'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat7_link'); ?>">VAATA</a>
                    </div>

                    <div class="col-md-3">
                        <?php if( get_field('pilt8') ): ?>
        	                <a href="<?php the_field('raamat8_link'); ?>"><img src="<?php the_field('pilt8'); ?>"/></a>
                        <?php endif; ?>
                        <h5><?php the_field('autor8'); ?></h5>
                        <h4><?php the_field('raamat8'); ?></h4>
                        <a class="btn btn-secondary btn-lg" href="<?php the_field('raamat8_link'); ?>">VAATA</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mobile footer -->
        <section id="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>© 2018 Maagiline Ruum OÜ | raamat@maagilineruum.ee</p>
                    </div>
                </div>
            </div>
        </section>
    </div> <!-- End mobile version -->


        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>© 2018 Maagiline Ruum OÜ | raamat@maagilineruum.ee</p>
                    </div>
                </div>
            </div>
        </section>

    </div>

<!-- Get all JS files -->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/scrolling-nav.js"></script>

    <script type="text/javascript">

        // Set all elements invisible
        document.getElementById("peagi-ilmumas").style.display = 'none';
        document.getElementById("uudised-background").style.display = 'none';
        document.getElementById("uudis").style.display = 'none';
        document.getElementById("uudis2").style.display = 'none';
        document.getElementById("uudised-background2").style.display = 'none';
        document.getElementById("uudised-background3").style.display = 'none';

        // Show elements according to the selection by user made via Wordpress
        if (<?php the_field('valik'); ?> == 1) {
            document.getElementById("peagi-ilmumas").style.display = 'block';
            document.getElementById("uudised-background").style.display = 'block';
        } else if (<?php the_field('valik'); ?> == 2) {
            document.getElementById("uudis").style.display = 'block';
            document.getElementById("uudised-background2").style.display = 'block';
        } else if (<?php the_field('valik'); ?> == 3) {
            document.getElementById("uudis2").style.display = 'block';
            document.getElementById("uudised-background3").style.display = 'block';
        }
    </script>




</body>

</html>
