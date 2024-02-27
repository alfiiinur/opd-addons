<div class="container d-flex align-items-center">
   <div class="container-fluid gap-3">
      <a class="navbar-brand d-flex align-items-center" href="#">
         <img src="assets/img/sidoarjo.png" alt="Logo Dinas Komunikasi dan Informatika" width="30" height="30" class="d-inline-block align-text-top">
         <!-- <h3 class="logo me-auto text-uppercase fs-5"><a href="index.html">diskominfo</a></h3> -->
      </a>
   </div>

   <nav id="navbar" class="navbar order-last order-lg-0 text-capitalize mb-0">
      <ul>
         <?php 
            $result = $mysqli->query('SELECT * from menu');
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            menu($rows);

            function menu($data, $parent_id=0){
               foreach ($data as $key => $value) {
                  if ($value['parent'] == $parent_id) {
                     html($data, $value);
                  }
               }
            }

            function html($data, $menu){
               $count = 0;

               foreach ($data as $key => $value) {
                  if ($value['parent'] == $menu['id']) {
                     $count++;
                  }
               }

               if ($count > 0) {
                  echo '<li class="dropdown">
                        <a href="#" style="text-decoration: none">'.$menu['menu_name'].'<i class="bi bi-chevron-right"></i></a>
                           <ul>';
                              menu($data, $menu['id']);
                     echo '</ul>
                     </li>';
               }

               else{
                  echo '<li><a class="nav-link" href="#">'.$menu['menu_name'].'</a></li>';
                  echo '';
               }
            }
			?>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
   </nav><!-- .navbar -->
</div>