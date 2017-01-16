<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<body><div class="wrapper row1">
  <div id="topnav">
    <ul>
      <li class="active"><a href="../../index.php"><strong>Home</strong></a></li>
     <ul>
      <li class="active"><a href="index.php"><strong>Home</strong></a></li>
      <li><a href="view/pages/about_us.php"><strong>About Us</strong></a></li>
      <li><a href="view/pages/education.php"><strong>Education</strong></a></li>
      <li><a href="../pages/academic_staff.php"><strong>People</strong></a></li>
      <li><a href="view/pages/gallery.php"><strong>Gallery</strong></a></li>
	  <li><a href="../pages/centers.php"><strong>Centers</strong></a></li>
	  <li><a href="view/pages/departments.php"><strong>Departments</strong></a></li>
	  <li><a href="view/pages/divisions.php"><strong>Divisions</strong></a></li>
      <li><a href="view/pages/facilities.php"><strong>Facilities</strong></a></li>
      <div class="btn-group show-on-hover">
          <button type="button" class="dropdown-toggle dropdown-button-customize" data-toggle="dropdown" style="border:none;">
            News/Notices<span class="caret"></span>
          </button>
          <ul class="dropdown-menu dropdown-button-customize" id="as" role="menu">
            <li><a href="../pages/news.php">News</a></li>
            <li><a href="../pages/news.php">Memorial Orations</a></li>
            <li><a href="../pages/news.php">Events</a></li>
            <li><a href="../pages/achievements.php">Achievements</a></li>
			<li><a href="../pages/news.php">Competitions</a></li>
            <li><a href="../pages/news.php">Newspaper Articles</a></li>
            <li><a href="../pages/news.php">Procurement</a></li>
            <li><a href="../pages/news.php">Vacancies</a></li>
			
          </ul>
        </div>
      <li class="last"><a href="contact_us.php"><strong>Contact Us</strong></a></li>
    </ul>
  </div>
</div>
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="img">
      <h1><a href="index.html"><img src="../images/general/logo-ucsc-1.png"/></a></h1>
          </div>
    <div class="fl_right">
      <form action="controller/normalSearch.php" method="post" id="sitesearch">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="searchText" />
          <input type="image" src="../images/general/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
      <p><a href="../pages/advanceSearch.php">advance-search</a></p>
      <p><a href="../../pages/sitemap.php">Site Map</a> | <a href="../pages/login_index.php">Login</a></p>
    </div>
  </div>
</div>