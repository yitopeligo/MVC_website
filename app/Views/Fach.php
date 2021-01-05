      <div class="content">
        <div class="container-fluid">
          <div class="row">
		  
		  <?php foreach ($fachs as $fach) { ?>
		  <!-- Lecture Begin -->
            <div class="col-xl-4 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-<?php echo $card_type ?>">
                  <a href="vorlesung?v=<?php echo $fach['id']?>"><img class="card-img-top" src="../assets/img/board.png" alt="Card image cap"></a>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><a href="#"><?php echo $fach['name']; ?><a></h4>
                  <p class="card-category"><?php echo $fach['lehrer']; ?></p>
                </div>
              </div>
            </div>
			<!-- Lecture End -->
			<?php } ?>
          </div>
        </div>
      </div>