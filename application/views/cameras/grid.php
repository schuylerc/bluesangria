<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>









					<div class="row">
                          
                         <!-- main col left --> 
                         <div class="col-sm-6">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="http://192.168.1.200/videostream.cgi?user=admin&amp;pwd=&amp;resolution=16&amp;rate=0" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead">Server Area</p>
                                  <p>Preset Positions</p>
                                  		<button class="btn btn-primary" onclick="jump(1,1);">1</button>
										<button class="btn btn-primary" onclick="jump(1,2);">2</button>
										<button class="btn btn-primary" onclick="jump(1,3);">3</button>
										<button class="btn btn-primary" onclick="jump(1,4);">4</button>
										<button class="btn btn-primary" onclick="jump(1,5);">5</button>
                                </div>
                              </div>

                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="http://192.168.1.2001/videostream.cgi?user=admin&amp;pwd=&amp;resolution=16&amp;rate=0" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead">Dog Run</p>
                                  <p>Preset Positions</p>
                                  		<button class="btn btn-primary" onclick="jump(1,1);">1</button>
										<button class="btn btn-primary" onclick="jump(1,2);">2</button>
										<button class="btn btn-primary" onclick="jump(1,3);">3</button>
										<button class="btn btn-primary" onclick="jump(1,4);">4</button>
										<button class="btn btn-primary" onclick="jump(1,5);">5</button>
                                </div>
                              </div>
                           
                          </div>
                          
                         <!-- main col right --> 
                         <div class="col-sm-6">
                           
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="http://192.168.1.202/videostream.cgi?user=admin&amp;pwd=&amp;resolution=16&amp;rate=0" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead">Garage</p>
                                  <p>Preset Positions</p>
                                  		<button class="btn btn-primary" onclick="jump(1,1);">1</button>
										<button class="btn btn-primary" onclick="jump(1,2);">2</button>
										<button class="btn btn-primary" onclick="jump(1,3);">3</button>
										<button class="btn btn-primary" onclick="jump(1,4);">4</button>
										<button class="btn btn-primary" onclick="jump(1,5);">5</button>
                                </div>
                              </div>

                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="http://192.168.1.203/videostream.cgi?user=admin&amp;pwd=&amp;resolution=16&amp;rate=0" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead">Workshop</p>
                                  <p>Preset Positions</p>
                                  		<button class="btn btn-primary" onclick="jump(1,1);">1</button>
										<button class="btn btn-primary" onclick="jump(1,2);">2</button>
										<button class="btn btn-primary" onclick="jump(1,3);">3</button>
										<button class="btn btn-primary" onclick="jump(1,4);">4</button>
										<button class="btn btn-primary" onclick="jump(1,5);">5</button>
                                </div>
                              </div>
                           
                          </div>

                       </div>



<script>
$(document).ready(function(){
	$.get( "updatecams.php", { command: "31" });
});

function jump(camera, position){
	$.get( "movecams.php", { position: position, camera: camera });
}

</script>
