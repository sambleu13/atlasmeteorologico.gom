@extends('layouts.master')

@section('title')
    <title>Contacto</title>
@endsection

@section('content')

    <!--main container -->
    <div class="wrapper">
     {!! Breadcrumbs::render('contact-us') !!}
        <div class="row">
            <div class="container-fluid">
            <div class="col-lg-12">
                    <div id="f_sld_info">
                                 <h2>
                            <center>
                                <strong>
                                    <font color="#fff">
                                        CONTACTO
                                    </font>
                                </strong>
                            </center>
                        </h2>
                    </div>
         
                    <br><br>
                </div>
                </div>
                </div>  
                <div class="row">
            <div class="container">
		<div class="col-lg-6">
                    <center>
                    <!--<img src="{{ asset('img/map.png')}}" width="280">-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1882.4928938965168!2d-99.175618!3d19.326423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x921bfe65dd679787!2sUNAM-+Center+for+Atmospheric+Sciences!5e0!3m2!1sen!2sus!4v1540938585651" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </center>
                </div>
                <div class="col-lg-6" id="contact_info">
                    <center>
                    <br>
                    <h3><strong>Grupo Interacción Oceáno Atmósfera</strong></h3>
                    <p style="font-size: 20px">
                        Circuito de la Investigación Científica s/n<br>
                        Ciudad Universitaria<br>
                        Delegación Coyoacán<br>
                        C.P. 04510<br>
                        Ciudad de México<br>
                        <br>
                        Tel: +52 55 56224048
                        <br>
                        Correo: ioa@atmosfera.unam.mx
                    </p>
                    </center>
                </div>
            </div>
        </div>






    </div><!-- end wrapper -->

@endsection
