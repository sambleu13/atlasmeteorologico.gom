<?php

namespace App\Http\Controllers;
use App\productos;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');
    }
    public function info(){
        return view('pages.informacion');
    }
    public function acerca(){
        return view('pages.acerca-de');
    }
    public function productos(){
        return view('pages.productos');
    }
    public function temperaturas(){
        return view('pages.temp');
    }
    public function viento(){
        return view('pages.viento');
    }
    public function precipitacion(){
        return view('pages.precipitacion');
    }
    public function humedad(){
        return view('pages.humedad');
    }
    public function evaporacion(){
        return view('pages.evaporacion');
    }
     public function capa_limite(){
        return view('pages.capa_limite');
    }
    public function radiacion_corta(){
        return view('pages.radiacion_corta');
    }
     public function radiacion_larga(){
        return view('pages.radiacion_larga');
    }
      public function rosas_viento(){
        return view('pages.Rosas');
    }
      public function derrames(){
        return view('pages.derrames');
    }
    public function manual(){
        return view('pages.manual');
    } 

    public function animaciones($codigo){
        
        $product   = productos::where('codigo', $codigo)->first();
        $images_array = array();
        $select_cont=['Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre','Diciembre'=>'Diciembre'];
    
        $directorio = base_path().'/public/productos/'.$product->path;

        if( is_dir($directorio.'/Enero')){
            $images_array_path= '../productos/'.$product->path.'/Enero';
             $pila  = scandir($directorio.'/Enero'); 
             $mes='Enero';

        }
        else {
           
            $images_array_path= '../productos/'.$product->path;
             $pila  = scandir($directorio);
             $mes='';
        }
        
        for($i = 2; $i <= sizeof($pila)-1; $i++)
        {
            array_push($images_array, $images_array_path.'/'.$pila[$i]);
        }
        
        //$cars =base_path().'/public/'.$product->path;;
        return view('pages.animations',compact('product','images_array','select_cont','mes' ));
    }

       public function anim_mens(Request $request, $codigo){
        
        $product   = productos::where('codigo', $codigo)->first();
        $images_array = array();

        $mes = $request->input('sel_moth');
         $select_cont=['Enero'=>'Enero','Febrero'=>'Febrero','Marzo'=>'Marzo','Abril'=>'Abril','Mayo'=>'Mayo','Junio'=>'Junio','Julio'=>'Julio','Agosto'=>'Agosto','Septiembre'=>'Septiembre','Octubre'=>'Octubre','Noviembre'=>'Noviembre','Diciembre'=>'Diciembre'];
         
        $directorio = base_path().'/public/productos/'.$product->path;

        if( is_dir($directorio.'/'.$mes)){
            $images_array_path= '../productos/'.$product->path.'/'.$mes;
             $pila  = scandir($directorio.'/'.$mes);
        
        
        
        for($i = 2; $i <= sizeof($pila)-1; $i++)
        {
            array_push($images_array, $images_array_path.'/'.$pila[$i]);
        }
    }
        //$cars =base_path().'/public/'.$product->path;;
        return view('pages.animations',compact('product','images_array','mes','select_cont'));
    }

}
