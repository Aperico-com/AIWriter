<?php
  $resultsHeader = mysqli_query($con, "SELECT DISTINCT itemclass FROM reviewposts ORDER BY itemclass ASC");
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-0">
  <!-- Brand -->
    <a class="navbar-brand" href="<?php echo $rootURL ?>">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="2em" height="2em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13 7h2v8a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-1h2v1h2V7m-1-5a10 10 0 0 1 10 10a10 10 0 0 1-10 10A10 10 0 0 1 2 12A10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8a8 8 0 0 0 8 8a8 8 0 0 0 8-8a8 8 0 0 0-8-8z" fill="#F2F2F2"/></svg>
    </a>

    <span class="navbar-text small text-white mr-5">
      <?php echo $siteTitle ?>
    </span>
    <ul class="navbar-nav">
        <li class="nav-item dropdown small text-white">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbardrop" data-toggle="dropdown">
            Categories
          </a>
          <div class="dropdown-menu bg-dark text-white">
            <?php while($row = mysqli_fetch_array($resultsHeader, MYSQLI_ASSOC)){
              echo "<a class='dropdown-item small bg-dark text-white' href='". $rootURL. "reviews/" . "category/". slugify($row["itemclass"]) ."'>". ucwords($row["itemclass"]) ."</a>";
            } ?>
          </div>
        </li>
      </ul>
</nav>
<div style="min-height:70px;">
</div>
