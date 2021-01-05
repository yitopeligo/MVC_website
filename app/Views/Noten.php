<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-header card-header-primary">
				  <h4 class="card-title">Noten von <?php echo strtoupper($vorlesung_name);?></h4>
				  
				  <?php if ($doc_exists) { ?>
				  <p class="card-category">Hier sehen Sie alle Notizen der Klasse. 
				  Sie können entweder die gewünschten Dateien herunterladen oder eine neue PDF Datei hochladen.
				  </p>
				  <?php } 
				  else { ?>
				  <p class="card-category">Es wurde noch keine Notiz hochgeladen. 
				  Sie können die erste PDF Datei für diese Klasse hochladen.
				  </p>
				  <?php } ?>
				</div>
			</div>
			<table class="table">
				<tbody>
				
				<?php if ($doc_exists) {
				
				foreach ($files as $file) { ?>
				  <tr>
					<td><?php echo $file;?></td>
					<td class="td-actions text-right">
					  <a href="access?fach=<?php echo $fach_id;?>&v=<?php echo $vorlesung_name;?>&name=<?php echo $file;?>"> <button type="button" rel="tooltip" title="Herunterladen" class="btn btn-white btn-link btn-sm">
						<i class="material-icons">get_app</i>
					  </button></a>
					</td>
				  </tr>
				<?php }
				}
				?>
				</tbody>
		  </table>

		</div> 
		
		<form action="upload?f=<?php echo $fach_id;?>&v=<?php echo $vorlesung_name;?>" method="post" enctype="multipart/form-data">
			<div class="input-group">
				<input type="file" class="form-control" id="document" name="document">
				<button class="btn btn-primary pull-right" type="submit" id="submit">Hochladen</button>
			</div>
		</form>
		
		<script>
		document.forms[0].addEventListener('submit', function( evt ) {
			var file = document.getElementById('document').files[0];

			if(file && file.size < 20485760) { // 10 MB (this size is in bytes)
				//Submit form        
			} else {
				//Prevent default and display error
				evt.preventDefault();
				
				md.showNotification('bottom','right')
			}
		}, false);
		</script>
	</div>
</div>