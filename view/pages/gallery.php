<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UCSC | Gallery</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include('../layout/styles/header.php');?>
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>

</head>
<body id="top">

<hr>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear" width="100%"> 
    <!-- ####################################################################################################### -->
    <div id="gallery"> 
      <!-- ########### -->
      <div class="gallerycontainer clear">
        <div>
         <!-- <ul>
            <li><a href="../images/demo/trip.png" title="Image 1"><img src="../images/demo/trip.png" alt="Title Here" /></a></li>
            <li><a href="../images/demo/blood.png" title="Image 2"><img src="../images/demo/blood.png" alt="Title Here" /></a></li>
            <li><a href="../images/demo/poson.png"  title="Image 3"><img src="../images/demo/poson.png" alt="Title Here" /></a></li>
            <li class="last"><a href="../images/demo/athletic.png"  title="Image 4"><img src="../images/demo/athletic.png" alt="Title Here" /></a></li>
            <li><a href="../images/demo/swimming.png"  title="Image 5"><img src="../images/demo/swimming.png" alt="Title Here" /></a></li>
            <li><a href="../images/demo/ieee.png"  title="Image 6"><img src="../images/demo/ieee.png" alt="Title Here" /></a></li>
            <li><a href="../images/demo/awurudu.png"  title="Image 7"><img src="../images/demo/awurudu.png" alt="Title Here" /></a></li>
            <li class="last"><a href="../images/demo/pahasara.png"  title="Image 8"><img src="../images/demo/pahasara.png" alt="Title Here" /></a></li>
          </ul>
		  -->
		  <?php
$folder_path = '../images/gallery/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="200" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
        </div>
      </div>
      <!-- ########### --> 
    </div>
    <!-- ####################################################################################################### -->
    <div class="pagination">
      <ul>
        <li class="prev"><a href="#">&laquo; Previous</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li><a href="#">10</a></li>
        <li><a href="#">11</a></li>
        <li><a href="#">12</a></li>
        <li><a href="#">13</a></li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#">Next &raquo;</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear"> 
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="../images/demo/google.png" alt="" /><br />
        <a href="#">Find Us With Google Maps &raquo;</a></div>
      <address>
      University of Colombo School of Computing<br />
      UCSC Building Complex<br />
      35,Reid Avenue,Colombo 07<br />
      SRI LANKA<br />
      <br />
      Tel: +94 -11- 2581245/ 7<br />
      Email: <a href="#">info@ucsc.cmb.ac.lk</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social" class="clear">
        <p>Stay Up to Date With Whats Happening</p>
        <ul>
          <li><a style="background-position:0 0;" href="#">Twitter</a></li>
          <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
          <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
          <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
          <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
        </ul>
      </div>
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
    <div id="copyright" class="clear">
      <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">University of Colombo School Of Computing</a></p>
      <p class="fl_right"><a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
</body>
</html>