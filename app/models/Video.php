<?php

class Video extends Eloquent
{
	protected $table 	= 'video';
	protected $fillable = array('titulo','object','estado','copete','fuente'); 

	public function Club()
	{
		return $this->belongsToMany('Club','videos_club');
	}

	public function getFetchHighestRes() {
		$videoid = $this->attributes['object'];
	    $resolutions = array('maxresdefault', 'hqdefault', 'mqdefault');     
	    foreach($resolutions as $res) {
	        $imgUrl = "https://i.ytimg.com/vi/$videoid/$res.jpg";
	        if(@getimagesize(($imgUrl))) 
	            return $imgUrl;
	    }
	
	}

	public function getCreatedAtAttribute()
	{
		$value = date("d-m-Y",strtotime($this->attributes['created_at'])); 
		return $value;
	}

}

?>