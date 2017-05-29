<?php
class ModulosController extends BaseController 
{

  protected $moduloId  = '6';
  protected $carpetaModulo  = 'config.modulos';
  protected $ruta           = 'modulos';



    public function __construct()
    {
        $modulo         = Modulos::where('modulo','=', 'modulos')->first();
        $this->moduloId = $modulo->id; 

    }

    // entra desde el route inicial
    public function getIndex()
    {
       
   
        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


        $rest['modulos']   = Modulos::all();
        $rest['action']     = 'create';
        $rest['section']    = 'list';
        $rest['modulo']     = 'modulos';

        return View::make($this->carpetaModulo.'.index')->with($rest);
    
    }


    // muestra el formulario para agregar
    public function getNew()
    {
       
      
        if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


        $rest['action']     = "create";
        $rest['section']    = 'new';
        $rest['modulo']     = 'modulos';
        //$rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);
       
    }


    // procesa el formulario para agregar
    public function postNew()
    {
        $perfiles   =   Profiles::all();
        
        $modulo     =   new Modulos();   
       	$input      =   Input::all();

        $modulo->fill($input);


        if($modulo->save())
        {
            foreach ($perfiles as $key ) 
            {
                 
                    //al crear nuevo modulo crea 
                    $pm                 = new ProfilesModulos();
                    $pm->crear          = 0;
                    $pm->borrar         = 0;
                    $pm->editar         = 0;
                    $pm->listar         = 0;
                    $pm->modulos_id     = $modulo->id;
                    $pm->profiles_id    = $key->id;
                
                    $pm->save();            
            }                

            return Redirect::to($this->ruta)->with('success','Registro creado Correctamente');

        }else{

            return Redirect::to($this->ruta)->with('danger','Error');
        }
        
    }


    // procesa el delete
    public function getDel($id = null)
    {

     
        if(!parent::validarPermisos($this->moduloId,'borrar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


        //borra modulos
        $data   = Modulos::find(Crypt::decrypt($id));
        $pm     = ProfilesModulos::where('modulos_id','=',Crypt::decrypt($id))->delete();



        $data->delete();    

        return Redirect::to($this->ruta)->with('success','Registro Eliminado Correctamente');
  
    }


    // muestra el formulario con los datos de edicion
   public function getEdit($id = null)
    {


        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
        
        $rest['idPerfil']    = Crypt::decrypt($id);
        $rest['action']     = "edit";
        $rest['section']    = 'form';
        $rest['modulo']     = 'modulos';
        $rest['grupo']      = Profiles::find(Crypt::decrypt($id));

       //$rest['profilesModulos']    = profilesModulos::where('profiles_id','=',Crypt::decrypt($id))->get();
        
        $rest['modulos']   =  Modulos::all();

         $a = new Modulos();
         //$a = new ProfilesModulos();

         //$a = ProfilesModulos::where('profiles_id','=',Crypt::decrypt($id))->get();



            //$rest['perfil'] = ProfilesModulos::where('profiles_id','=', Crypt::decrypt($id) )->get();
            $rest['perfil'] = $a->orderBy('modulo','ASC')->get();//->profile(Crypt::decrypt($id));


   
          /*  foreach($per as $p){
                echo $p->modulo;
                echo $p->profile(Crypt::decrypt($id));
            }*/

          //return dd($per);

        return View::make($this->carpetaModulo.'.index')->with($rest); 
          
    }



    // procesa el formulario de edicion
    public function postEdit()
    {
        
        $record = Input::get('idRecord') ;

       
        foreach($record as $id){

            $profilesModelos = ProfilesModulos::find($id);

            if(Input::get('crear_'.$id)){
              $profilesModelos->crear = 1;
            }else{
              $profilesModelos->crear = 0;   
            }

            if(Input::get('borrar_'.$id)){
               $profilesModelos->borrar = 1;
            }else{
              $profilesModelos->borrar = 0;   
            }

            if(Input::get('editar_'.$id)){

              $profilesModelos->editar = 1;
            }else{
              $profilesModelos->editar = 0;   
            }
             if(Input::get('listar_'.$id)){
              $profilesModelos->listar = 1;
            }else{
              $profilesModelos->listar = 0;   
            }
    
            $profilesModelos->save();        

        }

        return Redirect::to('perfiles')->with('success','Actualizado Correctamente');

  //return Input::all();

       /* $perfil     =  ProfilesModulos::find();
        $modulos    =  Modulos::all();

        Input::all();
        
        foreach($modulos as $modulo)
        {
            $perfil->where('modulos_id','=',$modulo->id)->get();
            $perfil->crear  = 1;
            $perfil->borrar = 1;
            $perfil->editar = 1;
            $perfil->listar = 1;
            
            $perfil->save();

        }
*/
          



        /*
        $usuario    =   Profiles::find(Crypt::decrypt($id));
        $input      =   Input::all();


        $usuario->fill($input);

        if( $usuario->save())
        {
            return Redirect::to($this->ruta)->with('success','Registro editado Correctamente');

        }else{

            return Redirect::to($this->ruta)->with('danger','Error');
        }
        */
    }

    public function getEditar($id = null)
    {


        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

        
        $rest['modulos']     = Modulos::find(Crypt::decrypt($id));
       // $rest['action']     = "edit";
        $rest['section']    = 'editar';
        $rest['modulo']     = 'modulos';
        //$rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);
    

    }

    public function postEditar($id = null)
    {

         $modulo    = Modulos::find(Crypt::decrypt($id));
         $input     =   Input::all();
         $modulo->fill($input);
         $modulo->save($input);

        return Redirect::to($this->ruta)->with('success','Registro editado Correctamente');

    }

}
?>