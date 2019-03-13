<!-- Styles -->
<link href="{{ asset('css/app.css')}}" rel="stylesheet">
<!-- thumbs -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/thumbs.css')}}">
<!-- para usar los iconos de material design -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    body{
        background-color: #DEF2F1;
    }
    #imagen {
        margin            : 0;
        background-color  : #1b1a3c;

    }
    .logotipos {
        float: left;
        width: 20.33%;
        padding: 5px;
    }
    .logotipos2 {
        float: left;
        width: 55.33%;
        padding-left: 5px;
        padding-top: 20px;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .wrapper {
        //position: relative;
        padding :             0px 0px 30px 0px;
        background-color :    #def2f1;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);
        //z-index: 9000;
    }
    .wrapper_p {
        //position: relative;
        padding :             0px 0px 30px 0px;
        background-color :    white;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);
        //z-index: 9000;
    }
    .wrapper_contacto {
    //position: relative;
        padding :             0px 0px 30px 0px;
        background-color :    #fff;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);
    //z-index: 9000;
    }
    
    .wrapper2{ /*se modifico*/
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: white;
        padding-right: 5%;
        padding-left: 15%;
        color: #1B1A3C;
        text-align: right;
        font-size: 21px;
    }
    /*se agregó*/
    .wrapper2 p{
        padding-right: 0;
    }
    .herramienta{ /*se modifico*/
        padding-top: 20px;
        padding-bottom: 20px;
        //background-color: white;
        padding-right: 15%;
        color: #1B1A3C;
        text-align: left;
        font-size: 21px;
        margin-left: 30px;
    }
    /*se agregó*/
    .herramienta h2{
        font-weight: bold;
    }
    .variables{ /*se modifico*/
        background-color: white;
        color: #1B1A3C;
        text-align: right;
        font-size: 21px;
    }
/*se agregó*/
    .variables h2, p{
        padding-right: 12%;
    }

    .estadisticos{
        color: #1B1A3C;
        font-size: 21px;
    }

    .estadisticos h2{
        padding-left: 8%;
        font-weight: bold;
    }

    .wrapper3 {
    //position: relative;
        background-color :    #def2f1;
        font-size: 24px;
        color: #1B1A3C;
        padding-top: 30px;
        padding-bottom: 30px;
        padding-left: 100px;
        padding-right: 100px;
        text-align: justify;

    }
    .wrappero {
    //position: relative;
        background-color :    #fff;
        font-size: 20px;
        color: #1B1A3C;


        padding-left: 100px;

        text-align: justify;

    }
    .wrapper4 {
    //position: relative;
        background-color :    #fff;
        font-size: 22px;
        color: #1B1A3C;

        text-align: right;

    }
    .col-wrapper-left {
        background-color: transparent;
        margin-top:           30px;
        margin-left: 10px;
        margin-right: 5px;
        //border:           0 solid #ddd;
    }
    .col-wrapper-left2 {
        background-color: transparent;
    padding :             0px 0px 30px 0px;
    }
    .col-wrapper-left3 {
        background-color: transparent;
        margin-top:           30px;
        margin-left: 10px;
        margin-right: 5px;
        //border:           0 solid #ddd;
    }
    .col-wrapper-center {

        background-color: transparent;
        margin-top:           30px;
        margin-right: 5px;
        margin-left: 5px;
        //border:           0 solid #ddd;
    }
    .col-wrapper-right {

        background-color: transparent;
        margin-top:           30px;
        margin-left: 5px;
        margin-right: 5px;


       // border:           0 solid #ddd;
    }
    .f_sld_prod {
    //width: 1200px;
        margin-top            : 20px;
        margin-bottom: 20px;
        padding-top: 20px;
        background-image  : url("{{ asset('img/destacado-secundario-inicio.jpg')}}");
        background-color  : #1b1a3c;
    //border-left       : 0 solid #dddddd;

    }
    .f_sld_prod2 {
    //width: 1200px;
        margin-top            : 20px;
        margin-bottom: 20px;
        padding-top: 20px;
        background-image  : url("{{ asset('img/encabezado.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
        background-color  : #1b1a3c;
    //border-left       : 0 solid #dddddd;
    }

.f_sld_prod2>.button {
      background-color: #4AAB8C; /*#4CAF50;  Green */
      border: none;
      color: white;
      padding: 10px 26px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      float: right;
      margin-right: 20px;
      margin-top: 20px;
    }

    #f_sld_prod3 {
    //width: 1200px;
        margin-top            : 20px;
        margin-bottom: 20px;
        padding-top: 20px;
        background-image  : url("{{ asset('img/destacado-secundario-inicio.jpg')}}");
        background-color  : #1b1a3c;
    //border-left       : 0 solid #dddddd;

    }
    #f_sld_background {
        margin: 0px;
        padding: 20px;
        background-image  : url("{{ asset('img/destacado-secundario-inicio.jpg')}}");
        background-color  : #1b1a3c;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);

    }
    #f_sld_info {
        margin: 0px;
        padding: 10px;
	background-image  : url("{{ asset('img/encabezado.jpg')}}");
	background-repeat: no-repeat;
        background-size: cover;
        background-color  : #1b1a3c;
	padding-top: 30px;
	padding-bottom: 30px;
    }
/*se agrego h2*/
    #f_sld_info h2{
        color: #FFFFFF;
        text-align: center;
        font-weight: bold;
        padding-left: 8%;
        padding-right: 8%;
    }
    #f_sld_background2 {
        width: 100%;
        margin            : 0px auto;
       //background-position: center center;
        background-color  : #1b1a3c;
        background-image  : url("{{ asset('img/destacado-principal-acerca.jpg')}}");
        background-repeat: no-repeat;
        background-size:  cover;

    }
    .fondo{ /*se modifico*/
        background-color: #fff;
        padding-top: 10px;
        padding-right: 5%;
        padding-left: 5%;
        padding-bottom: 20px;
        color: #1B1A3C;
    }
    /*se agregó h3 y h1*/
    .fondo h3{
        font-weight: bold;
        text-align: center;
    }

    .fondo h1{
        font-weight: bold;
        text-align: center;
    }
    .titulo{
        padding-top: 20px;
        padding-left: 100px;
        font-size: 24px;
        font-weight: bold;
        //text-align: center;
        color: #1B1A3C;
    }
    .titulo2{ /*se modificó*/
        padding-left: 4%;
        padding-right: 4%;
        padding-top: 40px;
        padding-bottom: 40px;
        font-size: 24px;
        text-align: center;
        color: #1B1A3C;
        line-height: 1.3;
    }
    .columnas{ /*se modificó*/
        padding-top: 10px;
        padding-bottom: 20px;
        padding-left: 0px;
        padding-right: 0px;
        font-size: 30px;
        font-weight: bold;
        color: #1B1A3C;
        line-height: 26px;
        text-align: center;
    }
    .columnas2{
        padding-top: 0px;
        padding-left: 50px;
        font-size: 28px;
        color: #1B1A3C;
        line-height: 26px;
    }
    .columnas3{
        padding-top: 0px;
    //padding-left: 90px;
        font-size: 28px;
        color: #1B1A3C;
        line-height: 26px;
    }

    .footer_bg {
        margin-top: 0px;
        background-color:#1b1a3c;
        padding-top: 45px;
        padding-right: 5%;
	padding-left: 5%;
	padding-bottom: 30px;
        margin-left: 0px;
        margin-right: 0px;
        //text-align: center;
        -webkit-box-shadow :   0 0 12px 0 rgba(0,0,0,0.30);
        -moz-box-shadow :     0 0 12px 0 rgba(0,0,0,0.30);
        box-shadow :          0 0 12px 0 rgba(0,0,0,0.30);

    }
    footer[role="contentinfo"] {
        padding-top: 0;
        padding-bottom: 0;
        font-size: 14px;
    //background-color: darken(#11b7f7, 18%);
        color:#fff;
    a {
        color: #ffffff;
    &:focus,
    &:hover,
    &:active {
         color: #ffffff;
     }
    }
    .btn-default {
        color: #fff !important;
    }
    h4 {
        font-size: 120%;
        font-weight: bold;
        margin-bottom: 4px;
        text-transform: uppercase;
    }
    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-brand {
        text-align: center;
        margin-top: 6px;
    }

    ul.social {
        margin: 0;
        padding: 24px 0 0;
        width: 100%;
        text-align: center;
    > li {
        display: inline-block;
    > a {
        display: inline-block;
        font-size: 18px;
        line-height: 30px;
    .square(30px);
        border-radius: 36px;
        background-color: darken(#d6e3f4, 27%); // @gray-light;
        color:#fff; // #fff; // edited
    margin: 0 3px 3px 0;
    &:hover {
         text-decoration: none;
         background-color: darken(#7ab0f0, 32%); // @link-hover-color;
         color: #fff; // added
     }
    }
    }
    }
   // }
//ANIMACION

.conta {
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
}
.col-centered{
    float: none;
    margin: 0 auto;
}
    canvas {
	margin-left: auto;
    margin-right: auto;
    display: block;
    
}

.material-icons {
	font-size: 18px;
}

.btn{
	padding: .2rem 0.2rem;
}

.btn-custom{
	border-bottom:2px solid #ccc;
 	position:relative;
}

.btn-custom:hover {
    top:1px;
    border-bottom-width:1px;
}

.btn-custom:active {
    top:2px;
    border-bottom:0;
}

.loader {
    border: 8px solid #f3f3f3; /* Light grey */
    border-top: 8px solid #555; /* Blue */
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: spin 2s linear infinite;

    margin-left: auto;
    margin-right: auto;
}
Dulce, [27.09.18 12:10]
/* fallback */
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}

    
.slide_style_right{
    float: right;
}

.Site_title{
    text-shadow: 2px 2px 10px #000000;
    color:#FFFFFF;
}


/*se agregaron los siguientes estilos*/

    .atlasNumRow{
        display: flex;
        justify-content: center;
        align-items: center;

      /*  margin-left: auto;
  margin-right: auto;*/
    }

    .atlasNum{
        display: inline-block;
        text-align: center;
        color: #1B1A3C;
        overflow: hidden;
    }
    .atlasNum h2{
        font-size: 2em;
    }
    .atlasNum span{
        font-size: 1em;
    }

#climatologias-lista{
      margin-left: auto;
      margin-right: auto;
}

  #climatologias-lista td, #climatologias-lista th {
    padding-right: 10px;
    padding-left: 10px;
    font-size: 16px;
}

    #climatologias-lista th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #4AAB8C;
    color: #FFFFFF;
}

    .gruposWork{
        padding-top: 30px;
        padding-bottom: 30px;
        padding-right: 8%;
        padding-left: 8%;
        color: #000000;
    }

    .gruposWork h3{
        font-weight: bold;
        text-align: center;
    }

    .gruposWork h4{
        font-weight: bold;
    }

    #contact_info{
        color: #000000;
        text-align: center;
    }

    #contact_info p{
        padding-right: 0;
    }

    .manual {
        color: #000000;
        background-color: #FFFFFF;
        font-size: 16px;
    }

    .manual h1, h2, h3, h4, h5 {
        font-weight: bold;
    }

    .manual h5{
        font-size: 15px;
    }

 .manual p, h1, h2, h3, h4, h5 {
        padding-right: 8%;
        padding-left: 5%;
    }

    .manual h2 a, h3 a, h4 a, h5 a {
        color: #387C66;
    }

    .manual h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover {
        color: #4AAB8C;
    }

/*a continuación se presentan estilos para manual de usuario*/
.section.docs-heading {
    padding: 60px 0;
}

.affix {
    position: static;
}

@media (min-width: 992px) {
    .affix,
    .affix-bottom {
        width: 213px
    }
    .affix {
        position: fixed;
        top: 20px
    }
    .affix-bottom {
        position: absolute
    }
    .affix .bs-docs-sidenav,
    .affix-bottom .bs-docs-sidenav {
        margin-top: 0;
        margin-bottom: 0
    }
}

@media (min-width: 1200px) {
    .affix,
    .affix-bottom {
        width: 263px
    }
    .embed-container{
        min-height: 800px;
    }
}

/* SIDEBAR */

@media (min-width: 768px) {
    .docs-sidebar {
        padding-top: 20px;
        padding-left: 20px
    }
    .embed-container{
        min-height: 980px;
    }
}

@media (max-width: 767px) {
  .embed-container{
        min-height: 960px;
    }
}

/* all links */
.docs-sidebar .nav>li>a {
    color: #111;
    /*border-left: 2px solid transparent;*/
    padding: 0 20px;
    font-size: 16px;
    /*font-weight: bold;*/
}

/* nested links */
.docs-sidebar .nav .nav>li>a {
    padding-left: 40px;
    font-size: 15px;
}

.docs-sidebar .nav .nav .nav>li>a {
    padding-left: 60px;
    font-size: 14px;
}

/*.docs-sidebar .nav>li>a.selected {
    color: #387C66;
    font-weight: bold;
}
*/

/* hover links */
.docs-sidebar .nav>li:not(.active)>a:hover {
    color: #387C66;
    text-decoration: none;
    background-color: transparent;
    /*border-left-width: 1px;
    border-left-color: #0E97EE;*/
}

/* active links */
.docs-sidebar .nav>li>a.selected, .docs-sidebar .nav>li>.nav>li>a.selected, .docs-sidebar .nav>li>.nav>li>.nav>li>a.selected {
    font-weight: bold;
    color: #387C66;
}

@media (min-width: 992px) {
    .docs-sidebar .nav ul {
        /*display: none;*/
        padding-bottom: 10px;
    }
    .docs-sidebar .nav>.active>ul {
        display: block
    }
}

#tabla-manual{
    text-align: center;
    margin-right: 5%;
    margin-left: 5%;
    line-height: 1.1;
}

  #tabla-manual td, #tabla-manual th {
    padding-left: 5px;
    padding-right: 5px;
    font-size: 12px;
}

    #tabla-manual th {
    padding-top: 5px;
    padding-bottom: 5px;
    text-align: left;
    background-color: #4AAB8C;
    color: #FFFFFF;
}


#tabla-estas{
    margin-left: auto;
    margin-right: auto;
}

  #tabla-estas td, #tabla-estas th {
    padding-right: 10px;
    padding-left: 10px;
    font-size: 13px;
}

    #tabla-estas th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #4AAB8C;
    color: #FFFFFF;
}

.img-manual{
    padding-left: 5%;
    padding-right: 5%;
    text-align: center;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

p>a, p>a:visited{
    color: #4AAB8C;
}
p>a:hover{
    color: #1b1a3c;
}

/*ultima modificacion: 5 de diciembre de 2018*/
</style>
