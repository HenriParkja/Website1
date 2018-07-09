<?php /* Template Name: Tellimine */ ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kirjastus Maagiline Ruum | Tellimine</title>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Font for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main stylesheet for this page -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/tellimine-style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rosario" rel="stylesheet">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

    <!-- Brand and toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>
      <a class="page-scroll navbar-brand" href="/"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/MaagilineRuum_logopng.png"></a>

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../meedia">Meedia</a></li>
                <li class="dropdown">
                <a href="../#uuemad" class="dropdown-toggle page-scroll">Raamatud<span class="caret"></span></a>
                <ul class="dropdown-menu" id="dropdown">
                    <li><a class="page-scroll" href="/#uuemad">Uuemad</a></li>
                    <li><a class="page-scroll" href="/#psühholoogia_vaimsus">Psühholoogia ja vaimsus</a></li>
                    <li><a class="page-scroll" href="/#biograafia_memuaarid">Biograafia ja memuaarid</a></li>
                </ul>
              </li>
              <li><a href="../kirjastusest">Kirjastusest</a></li>
              <li><a href="../tellimine">Tellimine</a></li>
              <li class="social"><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class="blurryscroll"></div>
    <div id="page">
        <div id="tellimine">
            <div class="container">
                <div class="row">

                    <!-- Start ordering form -->
                    <div class="col-lg-6" id="vorm">
                        <h1>Tellimisvorm</h1>
                        <form name="htmlform" role="form" method="post" action="<?php echo get_bloginfo('template_directory'); ?>/html_form_send.php">
                            <div class="field">
                                <label for="first_name">Eesnimi*</label>
                                <input type="text" name="first_name" maxlength="50" size="50" required>
                           </div>
                           <div class="field">
                               <label for="last_name">Perekonnanimi*</label>
                               <input class="lahter" type="text" name="last_name" maxlength="50" size="30" required>
                           </div>
                           <div class="field">
                               <label for="email">E-mail*</label>
                               <input  type="text" name="email" maxlength="80" size="30" required>
                           </div>
                           <div class="field">
                               <label for="telephone">Telefoninumber*</label>
                               <input type="text" name="telephone" maxlength="80" size="30" required>
                           </div>

                           <!-- Get all books that are available for ordering -->
                           <div class="field">
                                <label for="raamatuNimi">Raamat*</label>
                                <select id="bookname" name="bookname" onchange="show2()">
                                    <option value="0" selected disabled hidden>Vali soovitud raamat</option>
                                    <option id="15" value="<?php the_field('raamat15'); ?>"><?php the_field('raamat15'); ?></option>
                                    <option id="14"value="<?php the_field('raamat14'); ?>"><?php the_field('raamat14'); ?></option>
                                    <option id="13" value="<?php the_field('raamat13'); ?>"><?php the_field('raamat13'); ?></option>
                                    <option id="12" value="<?php the_field('raamat12'); ?>"><?php the_field('raamat12'); ?></option>
                                    <option id="11"value="<?php the_field('raamat11'); ?>"><?php the_field('raamat11'); ?></option>
                                    <option id="10" value="<?php the_field('raamat10'); ?>"><?php the_field('raamat10'); ?> </option>
                                    <option id="9" value="<?php the_field('raamat9'); ?>"><?php the_field('raamat9'); ?></option>
                                    <option id="8"value="<?php the_field('raamat8'); ?>"><?php the_field('raamat8'); ?></option>
                                    <option id="7" value="<?php the_field('raamat7'); ?>"><?php the_field('raamat7'); ?></option>
                                    <option id="6" value="<?php the_field('raamat6'); ?>"><?php the_field('raamat6'); ?></option>
                                    <option id="5"value="<?php the_field('raamat5'); ?>"><?php the_field('raamat5'); ?></option>
                                    <option id="4" value="<?php the_field('raamat4'); ?>"><?php the_field('raamat4'); ?></option>
                                    <option id="3" value="<?php the_field('raamat3'); ?>"><?php the_field('raamat3'); ?></option>
                                    <option id="2"value="<?php the_field('raamat2'); ?>"><?php the_field('raamat2'); ?></option>
                                    <option id="1" value="<?php the_field('raamat1'); ?>"><?php the_field('raamat1'); ?></option>
                                </select>
                           </div>

                           <!-- Choose amount of book -->
                           <div class="field" id="addToCart" style="display:none;">
                               <label for="kogus" >Kogus*</label>
                               <input id="kogus" type="number" name="kogus" style="width: 40px; margin-right: 340px; text-align: center;">
                               <input type="button" class="btn btn-md lisa" value="+ Lisa tellimusse" onclick="addItem()">
                           </div>

                           <!-- Choose method for sending -->
                           <div class="field">
                                <label for="transport">Saatmisviis*</label>
                                <select id="transport" name="transport" onchange="java_script_:show(this.options[this.selectedIndex].value)">
                                    <option value="" selected disabled hidden>Vali saatmise viis</option>
                                    <option value="Smartpost">SmartPOST pakiautomaat - 2,99€</option>
                                    <option value="Omniva">Omniva pakiautomaat - 2,99€</option>
                                    <option value="Postkontor">Lähim postkontor - 3,20€</option>
                                </select>
                           </div>

                           <div class="field" id="postkontor" style="display:none;">
                               <label for="aadress">Aadress*</label>
                               <input type="text" name="aadress" maxlength="150" size="30">
                           </div>

                           <!-- Package automats -->
                           <div class="field" id="smartpost" style="display:none;">
                                <label for="pakiautomaat_valik">Pakiautomaat*</label>
                                <select name="pakiautomaat">
                                    <option value="pakiautomaat" selected disabled hidden>Vali endale sobilik pakiautomaat</option>
                                    <option value="pakiautomaat" disabled>---Harjumaa---</option>
                                    <option value="Jüri Konsum">Jüri Konsum</option>
                                    <option value="Keila Selver">Keila Selver</option>
                                    <option value="Kuusalu Grossi Toidukaubad">Kuusalu Grossi Toidukaubad</option>
                                    <option value="Laagri Maksimarket">Laagri Maksimarket</option>
                                    <option value="Laagri Selver">Laagri Selver</option>
                                    <option value="Loo Gross">Loo Gross</option>
                                    <option value="Maardu Maxima">Maardu Maxima</option>
                                    <option value="Muuga Maxima">Muuga Maxima</option>
                                    <option value="Peetri Selver">Peetri Selver</option>
                                    <option value="Saku Selver">Saku Selver</option>
                                    <option value="Saue Maxima">Saue Maxima</option>
                                    <option value="Tabasalu Rimi">Tabasalu Rimi</option>
                                    <option value="Viimsi Kaubanduskeskus">Viimsi Kaubanduskeskus</option>
                                    <option value="Viimsi Selver">Viimsi Selver</option>
                                    <option value="Balti Jaama Turg">Balti Jaama Turg</option>
                                    <option value="Kärberi Selver">Kärberi Selver</option>
                                    <option value="Priisle Maxima XXX">Priisle Maxima XXX</option>
                                    <option value="Raudalu Konsum">Raudalu Konsum</option>
                                    <option value="Stockmann">Stockmann</option>
                                    <option value="Tallinna Haabersti Rimi">Tallinna Haabersti Rimi</option>
                                    <option value="Tallinna Järve Keskus">Tallinna Järve Keskus</option>
                                    <option value="Tallinna Kadaka Selver">Tallinna Kadaka Selver</option>
                                    <option value="Tallinna Kaubamaja">Tallinna Kaubamaja</option>
                                    <option value="Tallinna Kristiine Keskus">Tallinna Kristiine Keskus</option>
                                    <option value="Tallinna Läänemere Selver">Tallinna Läänemere Selver</option>
                                    <option value="Tallinna Lasnamäe Centrum (RIMI)">Tallinna Lasnamäe Centrum (RIMI)</option>
                                    <option value="Tallinna Lasnamäe Prisma">Tallinna Lasnamäe Prisma</option>
                                    <option value="Tallinna Magistrali Keskus">Tallinna Magistrali Keskus</option>
                                    <option value="Tallinna Marja Gross">Tallinna Marja Gross</option>
                                    <option value="Tallinna Merimetsa Selver">Tallinna Merimetsa Selver</option>
                                    <option value="Tallinna Mustamäe Keskus">Tallinna Mustamäe Keskus</option>
                                    <option value="Tallinna Mustika Prisma">Tallinna Mustika Prisma</option>
                                    <option value="Tallinna Nõmme Keskus">Tallinna Nõmme Keskus</option>
                                    <option value="Tallinna Pirita Selver">Tallinna Pirita Selver</option>
                                    <option value="Tallinna Rocca Al Mare Keskus">Tallinna Rocca Al Mare Keskus</option>
                                    <option value="Tallinna Sikupilli Prisma">Tallinna Sikupilli Prisma</option>
                                    <option value="Tallinna Smuuli Maxima">Tallinna Smuuli Maxima</option>
                                    <option value="Tallinna Solaris Keskus">Tallinna Solaris Keskus</option>
                                    <option value="Tallinna Stroomi Keskus">Tallinna Stroomi Keskus</option>
                                    <option value="Tallinna Tähesaju Selver">Tallinna Tähesaju Selver</option>
                                    <option value="Tallinna Tondi Selver">Tallinna Tondi Selver</option>
                                    <option value="Tallinna Tööstuse RIMI">Tallinna Tööstuse RIMI</option>
                                    <option value="Tallinna Torupilli Selver">Tallinna Torupilli Selver</option>
                                    <option value="Tallinna Ülemiste keskus">Tallinna Ülemiste keskus</option>
                                    <option value="Vilde tee Maxima XX">Vilde tee Maxima XX</option>
                                    <option value="pakiautomaat" disabled>---Hiiumaa---</option>
                                    <option value="Kärdla Selver">Kärdla Selver</option>
                                    <option value="pakiautomaat" disabled>---Ida-Virumaa---</option>
                                    <option value="Ahtme Maxima">Ahtme Maxima</option>
                                    <option value="Jõhvi Grossi Toidukaubad">Jõhvi Grossi Toidukaubad</option>
                                    <option value="Jõhvi Tsentraal">Jõhvi Tsentraal</option>
                                    <option value="Kohtla-Järve Vironia Keskus">Kohtla-Järve Vironia Keskus</option>
                                    <option value="Narva Astri Keskus">Narva Astri Keskus</option>
                                    <option value="Narva Prisma">Narva Prisma</option>
                                    <option value="Sillamäe SK-Market (Konsum)">Sillamäe SK-Market (Konsum)</option>
                                    <option value="pakiautomaat" disabled>---Järvamaa---</option>
                                    <option value="Paide Maksimarket">Paide Maksimarket</option>
                                    <option value="Paide Selver">Paide Selver</option>
                                    <option value="Türi mini-Rimi">Türi mini-Rimi</option>
                                    <option value="pakiautomaat" disabled>---Jõgevamaa---</option>
                                    <option value="Jõgeva Kaubahall">Jõgeva Kaubahall</option>
                                    <option value="Jõgeva Pae Konsum">Jõgeva Pae Konsum</option>
                                    <option value="Põltsamaa Selver">Põltsamaa Selver</option>
                                    <option value="pakiautomaat" disabled>---Läänemaa---</option>
                                    <option value="Haapsalu Rimi">Haapsalu Rimi</option>
                                    <option value="Rannarootsi keskus">Rannarootsi keskus</option>
                                    <option value="pakiautomaat" disabled>---Lääne-Virumaa---</option>
                                    <option value="Rakvere Kroonikeskus">Rakvere Kroonikeskus</option>
                                    <option value="Rakvere Põhjakeskus">Rakvere Põhjakeskus</option>
                                    <option value="Tapa Bussijaam">Tapa Bussijaam</option>
                                    <option value="pakiautomaat" disabled>---Pärnumaa---</option>
                                    <option value="Pärnu Kaubamajakas">Pärnu Kaubamajakas</option>
                                    <option value="Pärnu Keskus">Pärnu Keskus</option>
                                    <option value="Pärnu Mai Selver">Pärnu Mai Selver</option>
                                    <option value="Pärnu Maksimarket">Pärnu Maksimarket</option>
                                    <option value="Pärnu Maxima XXX">Pärnu Maxima XXX</option>
                                    <option value="Pärnu Ülejõe Selver">Pärnu Ülejõe Selver</option>
                                    <option value="Vändra Konsum">Vändra Konsum</option>
                                    <option value="pakiautomaat" disabled>---Põlvamaa---</option>
                                    <option value="Põlva Edu Keskus">Põlva Edu Keskus</option>
                                    <option value="pakiautomaat" disabled>---Raplamaa---</option>
                                    <option value="Märjamaa mini-Rimi">Märjamaa mini-Rimi</option>
                                    <option value="Rapla Maxima">Rapla Maxima</option>
                                    <option value="Rapla Selver">Rapla Selver</option>
                                    <option value="pakiautomaat" disabled>---Saaremaa---</option>
                                    <option value="paKuressaare Kihelkonna mini-Rimi">Kuressaare Kihelkonna mini-Rimi</option>
                                    <option value="Kuressaare Saare Selver">Kuressaare Saare Selver</option>
                                    <option value="pakiautomaat" disabled>---Tartumaa---</option>
                                    <option value="Elva Maxima">Elva Maxima</option>
                                    <option value="Elva mini-Rimi">Elva mini-Rimi</option>
                                    <option value="Tartu Aardla Selver">Tartu Aardla Selver</option>
                                    <option value="Tartu Anne Prisma">Tartu Anne Prisma</option>
                                    <option value="Tartu Anne Selver">Tartu Anne Selver</option>
                                    <option value="Tartu Eeden">Tartu Eeden</option>
                                    <option value="Tartu Kaubamaja -1 korrus">Tartu Kaubamaja -1 korrus</option>
                                    <option value="Tartu Kaubamaja 0 korrus">Tartu Kaubamaja 0 korrus</option>
                                    <option value="Tartu Kvartal">Tartu Kvartal</option>
                                    <option value="Tartu Lembitu Konsum">Tartu Lembitu Konsum</option>
                                    <option value="Tartu Lõunakeskuse Rimi">Tartu Lõunakeskuse Rimi</option>
                                    <option value="Tartu Raadi Maxima">Tartu Raadi Maxima</option>
                                    <option value="Tartu Rebase Rimi">Tartu Rebase Rimi</option>
                                    <option value="Tartu Ringtee Selver">Tartu Ringtee Selver</option>
                                    <option value="Tartu Saare Maxima">Tartu Saare Maxima</option>
                                    <option value="Tartu Tasku moe- ja vabaajakeskus">Tartu Tasku moe- ja vabaajakeskus</option>
                                    <option value="Tartu Vahi Selver">Tartu Vahi Selver</option>
                                    <option value="Tartu Veeriku Selver">Tartu Veeriku Selver</option>
                                    <option value="pakiautomaat" disabled>---Valgamaa---</option>
                                    <option value="Otepää Maxima">Otepää Maxima</option>
                                    <option value="Tõrva Maxima">Tõrva Maxima</option>
                                    <option value="Valga Selver">Valga Selver</option>
                                    <option value="pakiautomaat" disabled>---Viljandimaa---</option>
                                    <option value="Viljandi Männimäe Selver">Viljandi Männimäe Selver</option>
                                    <option value="Viljandi Turu Konsum">Viljandi Turu Konsum</option>
                                    <option value="Viljandi Uku keskus">Viljandi Uku keskus</option>
                                    <option value="pakiautomaat" disabled>---Võrumaa---</option>
                                    <option value="Võru Kagukeskus">Võru Kagukeskus</option>
                                    <option value="Võru Rimi">Võru Rimi</option>
                                   </select>
                          </div>

                          <div class="field" id="omniva" style="display:none">
                                <label for="pakiautomaat_valik">Pakiautomaat*</label>
                                <select name="pakiautomaat">
                                   <option value="pakiautomaat" selected disabled hidden>Vali endale sobilik pakiautomaat</option>
                                   <option value="pakiautomaat" disabled>---Harjumaa---</option>
                                   <option value="Jüri Konsum">Jüri Konsum</option>
                                   <option value="Kehra">Kehra</option>
                                   <option value="Keila Rõõmu kaubamaja">Keila Rõõmu kaubamaja</option>
                                   <option value="Kose kauplus">Kose kauplus</option>
                                   <option value="Kuusalu">Kuusalu</option>
                                   <option value="Laagri Maksimarket">Laagri Maksimarket</option>
                                   <option value="Loksa Konsum">Loksa Konsum</option>
                                   <option value="Maardu Pärli Keskus">Maardu Pärli Keskus</option>
                                   <option value="Maardu Maxima XX">Maardu Maxima XX</option>
                                   <option value="Paldiski Maxima">Paldiski Maxima</option>
                                   <option value="Peetri Selver">Peetri Selver</option>
                                   <option value="Raasiku">Raasiku</option>
                                   <option value="Saku Konsum">Saku Konsum</option>
                                   <option value="Saue Kaubanduskeskus">Saue Kaubanduskeskus</option>
                                   <option value="Tabasalu Rimi">Tabasalu Rimi</option>
                                   <option value="Tallinna Akadeemia Konsum">Tallinna Akadeemia Konsum</option>
                                   <option value="Tallinna Arsenali keskus">Tallinna Arsenali keskus</option>
                                   <option value="Tallinna Balti Jaam">Tallinna Balti Jaam</option>
                                   <option value="Tallinna Haabersti Rimi">Tallinna Haabersti Rimi</option>
                                   <option value="Tallinna Järve Keskus">Tallinna Järve Keskus</option>
                                   <option value="Tallinna Järveotsa Grossi">Tallinna Järveotsa Grossi</option>
                                   <option value="Tallinna Kadaka Selver">Tallinna Kadaka Selver</option>
                                   <option value="Tallinna Kakumäe Selver">Tallinna Kakumäe Selver</option>
                                   <option value="Tallinna Kristiine Keskus">Tallinna Kristiine Keskus</option>
                                   <option value="Tallinna Lasnamäe Centrum">Tallinna Lasnamäe Centrum</option>
                                   <option value="Tallinna Lasnamäe Centrum 2">Tallinna Lasnamäe Centrum 2</option>
                                   <option value="Tallinna Lasnamäe Prisma">Tallinna Lasnamäe Prisma</option>
                                   <option value="Tallinna Lauluväljaku Maxima">Tallinna Lauluväljaku Maxima</option>
                                   <option value="Tallinna Linnamäe Maxima XXX">Tallinna Linnamäe Maxima XXX</option>
                                   <option value="Tallinna Magdaleena">Tallinna Magdaleena</option>
                                   <option value="Tallinna Magistrali Keskus">Tallinna Magistrali Keskus</option>
                                   <option value="Tallinna Marienthali keskus">Tallinna Marienthali keskus</option>
                                   <option value="Tallinna Merimetsa Selver">Tallinna Merimetsa Selver</option>
                                   <option value="Tallinna Mustakivi keskus">Tallinna Mustakivi keskus</option>
                                   <option value="Tallinna Mustamäe Keskus">Tallinna Mustamäe Keskus</option>
                                   <option value="Tallinna Mustika keskus">Tallinna Mustika keskus</option>
                                   <option value="Tallinna Nurmenuku">Tallinna Nurmenuku</option>
                                   <option value="Tallinna Nõmme turu">Tallinna Nõmme turu</option>
                                   <option value="Tallinna Paepargi Maxima XX">Tallinna Paepargi Maxima XX</option>
                                   <option value="Tallinna Pallasti">Tallinna Pallasti</option>
                                   <option value="Tallinna Pelgulinna Selver">Tallinna Pelgulinna Selver</option>
                                   <option value="Tallinna Pirita Selver">Tallinna Pirita Selver</option>
                                   <option value="Tallinna Punane Selver">Tallinna Punane Selver</option>
                                   <option value="Tallinna Pääsküla Rimi">Tallinna Pääsküla Rimi</option>
                                   <option value="Tallinna Raudalu Konsum">Tallinna Raudalu Konsum</option>
                                   <option value="Tallinna Rocca al Mare">Tallinna Rocca al Mare</option>
                                   <option value="Tallinna Sikupilli Prisma">Tallinna Sikupilli Prisma</option>
                                   <option value="Tallinna Stockmann">Tallinna Stockmann</option>
                                   <option value="Tallinna Sõle Säästumarket">Tallinna Sõle Säästumarket</option>
                                   <option value="Tallinna Sõpruse Rimi">Tallinna Sõpruse Rimi</option>
                                   <option value="Tallinna Telliskivi Rimi">Tallinna Telliskivi Rimi</option>
                                   <option value="Tallinna Tondi Selver">Tallinna Tondi Selver</option>
                                   <option value="Tallinna Torupilli Selver">Tallinna Torupilli Selver</option>
                                   <option value="Tallinna Valdeku Comarket">Tallinna Valdeku Comarket</option>
                                   <option value="Tallinna Viru bussiterminal">Tallinna Viru bussiterminal</option>
                                   <option value="Tallinna Viru Keskus">Tallinna Viru Keskus</option>
                                   <option value="Tallinna Õismäe Maxima">Tallinna Õismäe Maxima</option>
                                   <option value="Tallinna Ülemiste keskus">Tallinna Ülemiste keskus</option>
                                   <option value="Tallinna Ümera Maxima">Tallinna Ümera Maxima</option>
                                   <option value="Viimsi Kaubanduskeskus">Viimsi Kaubanduskeskus</option>
                                   <option value="Viimsi Pärnamäe Rimi">Viimsi Pärnamäe Rimi</option>
                                   <option value="pakiautomaat" disabled>---Hiiumaa---</option>
                                   <option value="Kärdla Konsum">Kärdla Konsum</option>
                                   <option value="pakiautomaat" disabled>---Ida-Virumaa---</option>
                                   <option value="Jõhvi Jewe kaubanduskeskus">Jõhvi Jewe kaubanduskeskus</option>
                                   <option value="Jõhvi Maxima">Jõhvi Maxima</option>
                                   <option value="Kiviõli Maxima">Kiviõli Maxima</option>
                                   <option value="Kohtla-Järve Ahtme Maxima">Kohtla-Järve Ahtme Maxima</option>
                                   <option value="Kohtla-Järve Säästumarket">Kohtla-Järve Säästumarket</option>
                                   <option value="Kohtla-Järve Vironia keskus">Kohtla-Järve Vironia keskus</option>
                                   <option value="Narva Astri keskus">Narva Astri keskus</option>
                                   <option value="Narva Fama keskus">Narva Fama keskus</option>
                                   <option value="Narva Kreenholmi Maxima">Narva Kreenholmi Maxima</option>
                                   <option value="Narva Prisma">Narva Prisma</option>
                                   <option value="Sillamäe">Sillamäe</option>
                                   <option value="pakiautomaat" disabled>---Järvamaa---</option>
                                   <option value="Paide Selver">Paide Selver</option>
                                   <option value="Türi Maxima">Türi Maxima</option>
                                   <option value="pakiautomaat" disabled>---Jõgevamaa---</option>
                                   <option value="Jõgeva Konsum">Jõgeva Konsum</option>
                                   <option value="Põltsamaa Selver">Põltsamaa Selver</option>
                                   <option value="Torma A ja O">Torma A ja O</option>
                                   <option value="pakiautomaat" disabled>---Läänemaa---</option>
                                   <option value="Haapsalu Kastani">Haapsalu Kastani</option>
                                   <option value="Haapsalu Konsum">Haapsalu Konsum</option>
                                   <option value="pakiautomaat" disabled>---Lääne-Virumaa---</option>
                                   <option value="Kadrina Konsum">Kadrina Konsum</option>
                                   <option value="Kunda Konsum">Kunda Konsum</option>
                                   <option value="Rakvere Põhjakeskus">Rakvere Põhjakeskus</option>
                                   <option value="Rakvere Turutare">Rakvere Turutare</option>
                                   <option value="Tamsalu Grossi">Tamsalu Grossi</option>
                                   <option value="Tapa Grossi">Tapa Grossi</option>
                                   <option value="Väike-Maarja">Väike-Maarja</option>
                                   <option value="pakiautomaat" disabled>---Pärnumaa---</option>
                                   <option value="Lihula Konsum">Lihula Konsum</option>
                                   <option value="Pärnu Jannseni Rimi">Pärnu Jannseni Rimi</option>
                                   <option value="Pärnu Kaubamajakas">Pärnu Kaubamajakas</option>
                                   <option value="Pärnu Maksimarket">Pärnu Maksimarket</option>
                                   <option value="Pärnu Maxima">Pärnu Maxima</option>
                                   <option value="Pärnu Port Artur 2">Pärnu Port Artur 2</option>
                                   <option value="Pärnu Ülejõe Selver">Pärnu Ülejõe Selver</option>
                                   <option value="Pärnu-Jaagupi">Pärnu-Jaagupi</option>
                                   <option value="pakiautomaat" disabled>---Põlvamaa---</option>
                                   <option value="Põlva Kaubamaja">Põlva Kaubamaja</option>
                                   <option value="Põlva Selver">Põlva Selver</option>
                                   <option value="Räpina Maxima">Räpina Maxima</option>
                                   <option value="pakiautomaat" disabled>---Raplamaa---</option>
                                   <option value="Kohila Konsum">Kohila Konsum</option>
                                   <option value="Märjamaa Maxima">Märjamaa Maxima</option>
                                   <option value="Rapla Maxima">Rapla Maxima</option>
                                   <option value="pakiautomaat" disabled>---Saaremaa---</option>
                                   <option value="Kuressaare Maxima">Kuressaare Maxima</option>
                                   <option value="Kuressaare Smuuli">Kuressaare Smuuli</option>
                                   <option value="Orissaare">Orissaare</option>
                                   <option value="pakiautomaat" disabled>---Tartumaa---</option>
                                   <option value="Elva Konsum">Elva Konsum</option>
                                   <option value="Tartu Anne Selver">Tartu Anne Selver</option>
                                   <option value="Tartu Eeden">Tartu Eeden</option>
                                   <option value="Tartu Kesklinna Keskus">Tartu Kesklinna Keskus</option>
                                   <option value="Tartu Kivilinna">Tartu Kivilinna</option>
                                   <option value="Tartu Lembitu Konsum">Tartu Lembitu Konsum</option>
                                   <option value="Tartu Lõunakeskus">Tartu Lõunakeskus</option>
                                   <option value="Tartu Raadi Maxima">Tartu Raadi Maxima</option>
                                   <option value="Tartu Rebase Rimi">Tartu Rebase Rimi</option>
                                   <option value="Tartu Ringtee Selver">Tartu Ringtee Selver</option>
                                   <option value="Tartu Sõbra Keskus">Tartu Sõbra Keskus</option>
                                   <option value="Tartu Tasku Keskus">Tartu Tasku Keskus</option>
                                   <option value="Tartu Ujula Konsum">Tartu Ujula Konsum</option>
                                   <option value="Tartu Veeriku Selver">Tartu Veeriku Selver</option>
                                   <option value="pakiautomaat" disabled>---Valgamaa---</option>
                                   <option value="Otepää Maxima">Otepää Maxima</option>
                                   <option value="Tõrva Maxima">Tõrva Maxima</option>
                                   <option value="Valga Selver">Valga Selver</option>
                                   <option value="Tõrva Maxima">Tõrva Maxima</option>
                                   <option value="Valga Maxima">Valga Maxima</option>
                                   <option value="pakiautomaat" disabled>---Viljandimaa---</option>
                                   <option value="Karksi-Nuia">Karksi-Nuia</option>
                                   <option value="Viljandi Bussijaam">Viljandi Bussijaam</option>
                                   <option value="Viljandi Maksimarket">Viljandi Maksimarket</option>
                                   <option value="Viljandi Männimäe Selver">Viljandi Männimäe Selver</option>
                                   <option value="pakiautomaat" disabled>---Võrumaa---</option>
                                   <option value="Antsla Konsum">Antsla Konsum</option>
                                   <option value="Võru Maksimarket">Võru Maksimarket</option>
                                   <option value="Võru Maxima">Võru Maxima</option>

                                  </select>
                         </div>

                          <div class="field">
                            <label for="comments">Märkused</label>
                            <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                            </div>
                            <div class="field">
                                <input type="submit" name="submit" class="btn btn-md" value="Saada">
                            </div>
                           </form>

                            <p>*Tärniga märgitud väljad on kohustuslikud</p>
                    </div>

                    <!-- Display the sum of the order -->
                    <div class="col-lg-6">
                        <div id="tellimus" style="display:none;">
                            <h4>Tellimus:</h4>
                            <div class="text" id="tellimus1">
                            </div>
                            <h4 style="display: inline;"><strong>Kokku: </strong></h4><h4 id="kokku" style="display: inline;"></h4>
                        </div>
                        <h4 id="arve">Arve saadame 2 tööpäeva jooksul märgitud emaili aadressile.  <br><br>
                            Tellitud raamatud postitame 2 tööpäeva jooksul pärast arve laekumist. </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>© 2018 Maagiline Ruum OÜ | raamat@maagilineruum.ee</p>
                </div>
            </div>
        </div>
    </footer>


    <script>
        var sum;
        var totalSum = 0;
        var clicks = 0;
        var btn1 = document.createElement("BUTTON");
        var div1 = document.createElement("div");

        function show(aval) {
            if (aval == "Smartpost") {
            smartpost.style.display='block';
            omniva.style.display='none';
            postkontor.style.display='none';
            sum2 = totalSum + smartpostPrice;
            kokku.innerHTML = parseFloat(sum2).toFixed(2);
            kokku.append("€");
            transportPrice = smartpostPrice;

            }
            else if (aval == "Omniva") {
            smartpost.style.display='none';
            omniva.style.display='block';
            postkontor.style.display='none';
            sum2 = totalSum + omnivaPrice;
            kokku.innerHTML = parseFloat(sum2).toFixed(2);
            kokku.append("€");
            transportPrice = omnivaPrice;

            } else if (aval == "Postkontor") {
                smartpost.style.display='none';
                omniva.style.display='none';
                postkontor.style.display='block';
                sum2 = totalSum + postkontorPrice;
                kokku.innerHTML = parseFloat(sum2).toFixed(2);
                kokku.append("€");
                transportPrice = postkontorPrice;
            }
        }

        function show2() {
            var select = document.getElementById("select");
            if (select.options[select.selectedIndex].value != "0") {
                kogus.style.display = "block";
            }
        }

        var i;

        for (i = 6; i < 16; i++) {
            if (document.getElementById(i).value == "") {
                document.getElementById(i).style.display = "none";
            }
        }
    </script>

    <!-- Include the rest of JS -->
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/tellimine.js"></script>
</body>
</html>
