<?php  
  require_once('function/functions.php'); 
  getHeader();
  getThemePart('banner');
  getBreadcrumb();
?> 
<!-- content -->
<section>
      <div class="container">
          <!-- left sidebar nav -->
          <div class="col-sm-3">
              <div class="widget-education">
                  <ul>
                      <li><a href="#">about us</a></li>
                      <li><a href="#">Ascent Group</a></li>
                      <li><a href="#">History</a></li>
                      <li><a href="#">Aims and Vision</a></li>
                      <li><a href="#">Our Campuses</a></li>
                      <li><a href="#">Educational Philosophy</a></li>
                      <li><a href="#">Employment</a></li>
                      <li><a href="#">Scholastica Alumni Association</a></li>
                      <li><a href="#">News and Updates</a></li>
                  </ul>
              </div>
          </div>
          <!-- / left sidebar nav -->
          <?php getThemePart('academic-content'); ?>
      </div>
</section>
<!-- / content -->
<?php 
  getPhotoSlider();
  getFooter();
?>