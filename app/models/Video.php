<?php

class Video extends Eloquent
{
	protected $table 	= 'video';
	protected $fillable = array('titulo','object','estado','copete'); 

	public function getFetchHighestRes() {
		$videoid = $this->attributes['object'];
	    $resolutions = array('maxresdefault', 'hqdefault', 'mqdefault');     
	    foreach($resolutions as $res) {
	        $imgUrl = "https://i.ytimg.com/vi/$videoid/$res.jpg";
	        if(@getimagesize(($imgUrl))) 
	            return $imgUrl;
	    }
	
	}

}

?>