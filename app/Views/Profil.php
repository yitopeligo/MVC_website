      <div class="content">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				  <div class="card">
					<div class="card-header card-header-primary">
					  <h4 class="card-title">
					<?php 
					if($error){
						echo('Fehler beim Aktualisieren!');
					}
					else {					
						if($aktualisiert){
							  echo('Aktualisiert'); 
						} 
						else{
							echo('Profil Bearbeiten');
						}
					}
					?>				  
					</h4>
					</div>
					<div class="card-body">
					  <form action="profil" method="post">
						<div class="row">
						  <div class="col-md-12">
							<div class="form-group">
							  <label>Mail</label>
							  <input type="text" name="mail" class="form-control" value=<?php echo('"'. $user_check .'"');?>>
							</div>
						  </div>
						</div>
					   <div class="row">
						  <div class="col-md-12">
							<div class="form-group">
							  <label>Passwort</label>
							  <input type="password" name="password" class="form-control">
							</div>
						  </div>
						</div>
						<button type="submit" class="btn btn-primary pull-right">Aktualisieren</button>
						<div class="clearfix"></div>
					  </form>
					</div>
				  </div>
				</div>
			</div>
        </div>
	</div>
	
	