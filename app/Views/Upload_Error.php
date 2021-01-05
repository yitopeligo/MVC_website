<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-header card-header-primary">
				  <h4 class="card-title">Fehler aufgetreten!</h4>
				
					<?php foreach ($errors as $error) { ?>
					  <p class="card-category">
					  <?php echo $error; ?>
					  </p>
					<?php } ?>
				</div>
			</div>
		</div> 
		
<a href="noten?fach=<?php echo $fach_id; ?>&v=<?php echo $vorlesung; ?>"><button class="btn btn-primary pull-left" type="button">Zurüch gehen</button></a>
	</div>
</div>