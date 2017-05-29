<?php


class TemporadaController extends BaseController
{

  protected $moduloId       = '36';
  protected $carpetaModulo  = 'temporada';
  protected $ruta           = 'temporada';
  protected $modulo 		= 'temporada';


    public function __construct()
    {
        $modulo         = Modulos::where('modulo','=', 'temporada')->first();
        $this->moduloId = $modulo->id; 
    }

    public function getCerrar()
    {

        if(!parent::validarPermisos($this->moduloId,'editar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }

        $temporada          = Temporada::find(Session::get('temporada_actual_id'));
        $temporada->actual  = 0;
        $temporada->save();

        $equipo             = Equipo::where('o2','=',1)->get();

        foreach($equipo as $eq)
        {
            $eq->o2 = 0;
            $eq->save();
        }


        return Redirect::back()->with('warning','Temporada Terminada !!');
    }

    // entra desde el route inicial
    public function getIndex()
    {
       
        if(!parent::validarPermisos($this->moduloId,'listar'))
        {
            return Redirect::back()->with('warning','Acceso denegado a esta seccion');
        }
        

        //$rest['data']       = Temporada::orderBy('fecha_inicio','DESC')->get();
        $rest['data']       = Temporada::where('actual','=',1)->get();
        $rest['action']     = 'create';
        $rest['section']    = 'list';
        $rest['modulo']     = $this->modulo;

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
        $rest['modulo']     = 'temporada';
        //$rest['perfiles']   =  Profiles::lists('grupo','id');

        return View::make($this->carpetaModulo.'./form/graldata')->with($rest);
    }


    // procesa el formulario para agregar
    public function postNew()
    {

       $temporadas = Temporada::where('actual','=',1)->get();

       foreach($temporadas as $temporada)
       {
            $temporada->actual = 0;
            $temporada->save();
       }

       $input             =  Input::all();   
       $input['actual']   =  1;    

       $nueva = Temporada::create($input);

        if($nueva)
        {   
            Session::put('temporada_actual_id',$nueva->id);

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

        $usuario = Temporada::find(Crypt::decrypt($id));
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

        $rest['model']      = Temporada::find(Session::get('temporada_actual_id'));
        $rest['action']     = "edit";
        $rest['section']    = 'form';
        $rest['modulo']     = 'temporada';

        //$rest['perfiles']   =  Profiles::lists('grupo','id');

       return View::make($this->carpetaModulo.'.form.graldata')->with($rest);     
    }



    // procesa el formulario de edicion
    public function postEdit($id = null)
    {
        $usuario    =   Temporada::find(Session::get('temporada_actual_id'));
        $input      =   Input::all();
      

        /*  
        $pass       =   $input['password'];

            if (Hash::needsRehash($pass))
            {
                $pass = Hash::make($pass);
            }
        $input['password'] = $pass;
        */

       $usuario->fill($input);
    
        if( $usuario->save())
            {
                return Redirect::to($this->ruta)->with('success','Registro editado Correctamente');
            
            }else{

                return Redirect::to($this->ruta)->with('danger','Error');
            }
    }

}