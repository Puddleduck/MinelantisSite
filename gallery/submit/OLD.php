<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="http://www.minelantis.com/images/favicon.ico">
<title>Minelantis Community Minecraft Server</title>
</head>
<body link="white" vlink="white" alink="white" bgcolor="7FCBDA">
<center>
<a href="http://www.minelantis.com"><img src="http://www.minelantis.com/images/logo.png" alt="logo.png"></a></p>
<font face="calibri" color="white">
<a href="http://www.minelantis.com/"><img src="http://www.minelantis.com/images/home_button.png" alt="home_button.png"></a>
<a href="http://www.minelantis.com/about/"><img src="http://www.minelantis.com/images/about_button.png" alt="about_button.png"></a>
<a href="http://www.minelantis.com/members/"><img src="http://www.minelantis.com/images/members_button.png" alt="members_button.png"></a>
<a href="http://www.minelantis.com/apply/"><img src="http://www.minelantis.com/images/apply_button.png" alt="apply_button.png"></a>
<a href="http://www.minelantis.com/gallery/"><img src="http://www.minelantis.com/images/gallery_button.png" alt="gallery_button.png"></a>
<a href="http://www.minelantis.com/contact/"><img src="http://www.minelantis.com/images/contact_button.png" alt="contact_button.png"></a>
<a href="http://www.minelantis.com/changelog/"><img src="http://www.minelantis.com/images/changelog_button.png" alt="changelog_button.png"></a>
<br><br>
<?php
$target = "submitted/";
$target = $target . basename( $_FILES['uploaded']['name']) ;
$ok=1;
$types = array('image/jpeg'||'image/png');
if (in_array($_FILES['uploaded']['type'], $types)) {
// file is okay continue
} else {
$ok=0;
} 
//Here we check that $ok was not set to 0 by an error
if ($ok==0){
Echo "Sorry your file was not uploaded. It may be the wrong filetype. We only allow JPG and PNG filetypes.";
}
//If everything is ok we try to upload it
else{
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)){
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded";
}
else{
echo "Sorry, there was a problem uploading your file. Please contact Puddleduck or try again later.";
}
}
?>
<br><br>
<a href="http://www.minelantis.com/gallery/submit/"><img src="http://www.minelantis.com/images/return_button.png" alt="return_button.png"></a>
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
