<?php
class PerfilesController extends BaseController 
{
  
  protected $moduloId       = '4';
  protected $carpetaModulo  = 'config.perfiles';
  protected $ruta           = 'perfiles';


    // entra desde el route inicial
    public function getIndex()
    {
       	
       if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
        
        $rest['perfiles']   = Profiles::orderBy('grupo','ASC')->get();
        $rest['action']     = 'create';
        $rest['section']    = 'list';
        $rest['modulo']     = 'perfiles';

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
        $rest['section']    = 'form';
        $rest['modulo']     = 'perfiles';
        $rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);
    }


    // procesa el formulario para agregar
    public function postNew()
    {
     
       	$input      =   Input::all();

        $input['is_equipo']     = Input::has('is_equipo') ? true : false ;
        $input['is_arbitro']    = Input::has('is_arbitro') ? true : false;
        $input['is_supervisor'] = Input::has('is_supervisor') ? true : false;


        $profile    =   new Profiles($input);

        if($profile->save())
        {
            // por cada nuevo grupo creamos los permisos para todos los modulos del sistema
            $modulos        =   Modulos::all();
         
            foreach($modulos as $modulo)
            {

                $profileModulo  =   new ProfilesModulos();    
                $profileModulo->modulos_id  = $modulo->id;
                $profileModulo->crear       = 0;
                $profileModulo->borrar      = 0;
                $profileModulo->editar      = 0;
                $profileModulo->listar      = 0;
                $profileModulo->profiles_id  = $profile->id;

                $profileModulo->save();

                 
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

        $usuario = Profiles::find(Crypt::decrypt($id));
        $pm      = ProfilesModulos::where('profiles_id','=', Crypt::decrypt($id))->delete();
        $user    = User::where('profiles_id','=',Crypt::decrypt($id))->delete();

        $usuario->delete();

        return Redirect::to($this->ruta)->with('success','Registro Eliminado Correctamente');
    }


    // muestra el formulario con los datos de edicion
   public function getEdit($id = null)
    {
       
        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

        $rest['perfiles']    = Profiles::find(Crypt::decrypt($id));
        $rest['action']     = "edit";
        $rest['section']    = 'form';
        $rest['modulo']     = 'perfiles';

        //$rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);     
    }



    // procesa el formulario de edicion
    public function postEdit($id = null)
    {
        $usuario    =   Profiles::find(Crypt::decrypt($id));
        
        $input      =   Input::all();

        $input['is_equipo']     = Input::has('is_equipo') ? true : false ;
        $input['is_arbitro']    = Input::has('is_arbitro') ? true : false ;
        $input['is_supervisor'] = Input::has('is_supervisor') ? true : false ;
        
        $usuario->fill($input);
    
        if( $usuario->save())
            {
                return Redirect::to($this->ruta)->with('success','Registro editado Correctamente');
            
            }else{

                return Redirect::to($this->ruta)->with('danger','Error');
            }
    }

}

?>