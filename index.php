<?php
    require('header.php');
?>
    <div id="site_content">
      <div class="gallery">
        <ul class="images">
          <li class="show"><img width="950" height="300" src="images/1.jpg" alt="photo_one" /></li>
          <li><img width="950" height="300" src="images/2.jpg" alt="seascape" /></li>
          <li><img width="950" height="300" src="images/3.jpg" alt="seascape" /></li>
        </ul>
      </div>
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Top Threads</h3>
          <p> A list of top threads will be here</p>
        </div>
      </div>
      <div class="content">
        <h1>Top Comments</h1>
        <p>Top comments will be listed here</p>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; CSS3_seascape | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
