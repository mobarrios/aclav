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
			if($file->getMimeType() == 'image/jpeg' || $file->getMimeType() == 'image/x-icon' || $file->getMimeType() == 'image/png' || $file->getMimeType() == 'image/gif' ||  $file->getMimeType() == 'application/msword' || $file->getMimeType() == 'application/excel' || $file->getMimeType() == 'application/pdf' || $file->getMimeType() == 'application/zip')
			{
	
				//$date 	  		=  new DateTime();	
				$filename 		    =  $file->getFilename()."_".$this->name.".".$file->getClientOriginalExtension();	

				//$filename			= $this->name.".".$file->getClientOriginalExtension();

				if(($file->getSize()/1024) >= 20000 )
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


			}else{
				//error de tipo
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