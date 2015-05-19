<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Convenia</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/freelancer.css" type="text/css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Cases</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#abduzidos">Abduzidos</a>
                </li>
                <li class="page-scroll">
                    <a href="#ferias">Período de Férias</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">Convenia</span>
                    <hr class="star-light">
                    <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="abduzidos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Abduzidos</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1">
                <p class="text-justify">Sabe-se que por trás de cada cometa há um OVNI. Esses OVNIs frequentemente buscam bons desenvolvedores aqui na Terra. Infelizmente só têm espaço para levar um grupo de devs por vez. Para a seleção, há um engenhoso esquema, da associação do nome do cometa ao nome do grupo, que possibilita a cada grupo saber se será levado ou não.</p>
            </div>
            <div class="col-lg-5">
                <p class="text-justify">Os dois nomes, do grupo e do cometa, são convertidos em um número que representa o produto das letras do nome, onde “A” é 1 e “Z” é 26. Assim, o grupo “LARANJA” seria 12 * 1* 18 * 1 * 14 * 10 * 1 = 30240. Se o resto da divisão do número do grupo por 45 for igual ao resto da divisão do número do cometa por 45, então o grupo será levado.</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#" class="btn btn-lg btn-outline">
                    <i class="fa fa-group"></i> Abduzir desenvolvedor
                </a>
            </div>
        </div>
    </div>
</section>

<section class="success" id="ferias">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Período de Férias</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1">
                <p class="text-justify">Foram contratados 5 programadores em datas diferentes. Precisamos organizar qual vai ser o período de férias destes funcionários de acordo a lei CLT. Não sabemos ao certo como funciona, mas já escutamos falar em algo sobre período aquisitivo e período concessivo. Com base na data de contratação dos programadores quais seriam esses períodos para cada um?</p>
            </div>
            <div class="col-lg-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Funcionário</th>
                            <th class="text-center">Data da contratação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>José Silva</td>
                            <td class="text-center">01/01/2014</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="#" class="btn btn-lg btn-outline">
                    <i class="fa fa-calendar-o"></i> Calcular período
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Freelancer</h3>
                    <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- jQuery -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/plugins/jquery-easing-original/jquery.easing.min.js"></script>
<script src="assets/plugins/classie/classie.js"></script>
<script src="assets/javascript/cbpAnimatedHeader.js"></script>
<!-- Custom Theme JavaScript -->
<script src="assets/javascript/freelancer.js"></script>
</body>

</html>
