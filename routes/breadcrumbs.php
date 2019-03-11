<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', url('/'));
});

// Home > Informacion

Breadcrumbs::register('informacion', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Información', url('informacion'));
});

// Home > acerca-de

Breadcrumbs::register('acerca-de', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Acerca', url('acerca-de'));
});

// Home -> manual de usuario

Breadcrumbs::register('manual', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Manual de usuario', url('manual'));
});

// Home > contacto

Breadcrumbs::register('contact-us', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contacto', url('contact-us'));
});

// Home > productos 

Breadcrumbs::register('products', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Productos', url('products'));
});

// Home > productos > temp 

Breadcrumbs::register('temp', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('temperatura', url('temp'));
});

// Home > productos > viento 

Breadcrumbs::register('viento', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Viento', url('products/viento'));
});

// Home > productos > viento > rosas de viento

Breadcrumbs::register('rosas_viento', function($breadcrumbs)
{
    $breadcrumbs->parent('viento');
    $breadcrumbs->push('Rosas de viento', url('rosas_viento'));
});

// Home > productos > precipitacion 

Breadcrumbs::register('precipitacion', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Precipitacion', url('precipitacion'));
});

// Home > productos > capa limite

Breadcrumbs::register('capa_limite', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Altura capa limite', url('capa_limite'));
});

// Home > productos > evaporacion

Breadcrumbs::register('evaporacion', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Evaporación', url('evaporacion'));
});

// Home > productos > radiacion onda larga

Breadcrumbs::register('radiacion_larga', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Radiación de onda larga', url('radiacion_larga'));
});

// Home > productos > radiacion onda corta

Breadcrumbs::register('radiacion_corta', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Radiación de onda corta', url('radiacion_corta'));
});

// Home > productos > humedad relativa

Breadcrumbs::register('humedad', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Humedad', url('humedad'));
});

// Home > productos > derrames

Breadcrumbs::register('derrames', function($breadcrumbs)
{
    $breadcrumbs->parent('products');
    $breadcrumbs->push('Derrames de petróleo', url('derrames'));
});
