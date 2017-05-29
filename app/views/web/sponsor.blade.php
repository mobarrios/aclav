<div class="sections10">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 
	    <center>
	    	<ul class="thumbnails">
	    	@foreach(Sponsor::all() as $sponsor)
	    	 		<li align="center" class="col-lg-1">
	    	 			<center><a class="iconGris thumbnail1" href="{{$sponsor->url}}" target="_blank"  class="lightbox-gallery">
	    	 				<img src="uploads/contenidos/sponsor/{{$sponsor->imagen}}" width="200" height="138" />
	    	 			</a></center>
	    	 		</li>
		    @endforeach
		    </ul>
	    </center>
	</div>
</div> 

