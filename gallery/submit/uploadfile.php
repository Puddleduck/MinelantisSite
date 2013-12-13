<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="/rsc/favicon.ico">
<title>Minelantis Community Minecraft Server</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-40951327-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body link="white" vlink="white" alink="white" bgcolor="7FCBDA">
<center>
<a href="/"><img src="/rsc/logo.png" alt="logo.png"></a></p>
<font face="calibri" color="white">
<a href="/"><img src="/rsc/home_button.png" alt="home_button.png"></a>
<a href="/about/"><img src="/rsc/about_button.png" alt="about_button.png"></a>
<a href="/members/"><img src="/rsc/members_button.png" alt="members_button.png"></a>
<a href="/apply/"><img src="/rsc/apply_button.png" alt="apply_button.png"></a>
<a href="/gallery/"><img src="/rsc/gallery_button.png" alt="gallery_button.png"></a>
<a href="/contact/"><img src="/rsc/contact_button.png" alt="contact_button.png"></a>
<a href="/changelog/"><img src="/rsc/changelog_button.png" alt="changelog_button.png"></a>
<br><br>
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 2000000000000000000000000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1000000000000000000000000024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("submitted/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "submitted/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "submitted/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
<br><br>
<a href="/gallery/submit/"><img src="/rsc/return_button.png" alt="return_button.png"></a>
<br><br>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4017131640536332";
/* zimmby.com */
google_ad_slot = "7291867028";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<br>&copy Copyright <a href="http://www.tdpstudios.co.uk">TDP Studios</a> 2013, All Rights Reserved.</font>
</center>
</body>
</html>