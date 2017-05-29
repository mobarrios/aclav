<?php
class UsuariosController extends BaseController 
{
  
  protected $moduloId       = '3';
  protected $carpetaModulo  = 'config.usuarios';
  protected $ruta           = 'usuarios';




    // entra desde el route inicial
    public function getIndex()
    {
       
        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
        
        $rest['usuarios']   = User::orderBy('usuario','ASC')->groupBy('profiles_id')->get();
        $rest['grupos']     = Profiles::orderBy('grupo','ASC')->get();


       // orderBy('usuario','ASC')->get();
        $rest['action']     = 'create';
        $rest['section']    = 'list';
        $rest['modulo']     = 'usuarios';

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
        $rest['modulo']     = 'usuarios';
        $rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);
    }


    // procesa el formulario para agregar
    public function postNew()
    {

       if(!parent::validarPermisos($this->moduloId,'crear'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

       $input               =   Input::all();
       $input['password']   =   Hash::make($input['password']);  


        if(User::create($input))
        {
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

        $usuario = User::find(Crypt::decrypt($id));
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

        $rest['usuario']    = User::find(Crypt::decrypt($id));
        $rest['action']     = "edit";
        $rest['section']    = 'form';
        $rest['modulo']     = 'usuarios';
        $rest['equipos']    = Equipo::lists('nombre','id');
        
        $arbitro = Arbitro::orderby('apellido')->get();

        $rest['arbitros']   = $arbitro->lists('FullName','id');


        $supervisor = Supervisor::orderby('apellido')->get();
        
        $rest['supervisores']   = $supervisor->lists('FullName','id');


        $rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'.index')->with($rest);     
    }




    // procesa el formulario de edicion
    public function postEdit($id = null)
    {   
        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


        if($id == null)
        {
            $usuario    =   User::find(Auth::user()->id);
        }
        else
        {
                $usuario    =   User::find(Crypt::decrypt($id));
        } 
    
        $input      =   Input::all();
        
        $pass       =   $input['password'];

            if (Hash::needsRehash($pass))
            {
                $pass = Hash::make($pass);
            }
    
       $input['password'] = $pass;

        $usuario->fill($input);
    
        if( $usuario->save())
            {
                return Redirect::to('home')->with('success','Registro editado Correctamente');
            
            }else{

                return Redirect::to('home')->with('danger','Error');
            }
    }



   // perfil_usuario
   public function getPerfil()
    {
        if(!parent::validarPermisos(85,'editar'))
            {
                return Redirect::back()->with('warning','Acceso denegado a esta seccion');
            }
            
        return View::make('config/usuarios/perfil');
    }

    public function postEditperfil($id = null)
    {   
        if(!parent::validarPermisos(85,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }


        if($id == null)
        {
            $usuario    =   User::find(Auth::user()->id);
        }
        else
        {
                $usuario    =   User::find(Crypt::decrypt($id));
        } 
    
        $input      =   Input::all();
        
        $pass       =   $input['password'];

            if (Hash::needsRehash($pass))
            {
                $pass = Hash::make($pass);
            }
    
       $input['password'] = $pass;

        $usuario->fill($input);
    
        if( $usuario->save())
            {
                return Redirect::to('home')->with('success','Registro editado Correctamente');
            
            }else{

                return Redirect::to('home')->with('danger','Error');
            }
    }

}

?>