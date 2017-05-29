<?php
 
 class Upload 
{
	protected $name;

	public function __construct()
	{
		$date =  new DateTime();	
		$this->name = $date->getTimestamp();

	}


	public function up($file = null ,$path = null)
	{
		if($file)
		{
			//$date 	  		=  new DateTime();	
			$filename 		    =  $file->getFilename()."_".$this->name.".".$file->getClientOriginalExtension();	

			//$filename			= $this->name.".".$file->getClientOriginalExtension();

			if(($file->getSize()/1024) >= 10000 )
			{
				return false;
			}
			
			$upload_success = $file->move($path , $filename);
			
			if( $upload_success ) {

				return $filename;
				//$novedad->imagen = $filename ;

			} else {

				return false;

			}	
		}


	}

	public function del($file = null, $path = null)
	{
		if(File::exists($path.$file))
		{
			File::delete($path.$file);
		}	
	}	
}
 ?>