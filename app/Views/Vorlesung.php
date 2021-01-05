      <div class="content">
        <div class="container-fluid">
		<div class="row">
		
		<?php foreach ($vorlesungen as $vorlesung) { ?>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <a href="noten?fach=<?php echo $fach_id; ?>&v=<?php echo(strtolower($vorlesung['name'])); ?>"><i class="material-icons">content_copy</i></a>
                  </div>
                  <p class="card-category">Vorlesung</p>
                  <a href="noten?fach=<?php echo $fach_id; ?>&v=<?php echo(strtolower($vorlesung['name'])); ?>">
				  <h4 class="card-title"><?php echo $vorlesung['name']; ?></h4>
				  </a>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Noten sehen...
                  </div>
                </div>
              </div>
            </div>	
		<?php } ?>
          </div>
          
        </div>
      </div>