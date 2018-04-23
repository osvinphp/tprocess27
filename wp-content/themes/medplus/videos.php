<?php
/*
* 	Template Name: Videos
*/
get_header(); ?>
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
<?php 
global $wpdb;

$CurrentDate = date('Y-m-d H:i:s');
$user= wp_get_current_user();
$UserRegDate=$user->user_registered;
$nxtdate=date('Y-m-d H:i:s', strtotime($UserRegDate. ' + 5 days'));
$nxtdate2=date('Y-m-d H:i:s', strtotime($nxtdate. ' + 5 days'));
$nxtdate3=date('Y-m-d H:i:s', strtotime($nxtdate2. ' + 5 days'));
// echo "<pre>";
// print_r($CurrentDate); echo "<br>";
// die;



?>
<div class='embed-container'>
	<?php if($CurrentDate == $UserRegDate) {?>
	<iframe src='https://www.youtube.com/embed//QZ4pbTWBvUc' frameborder='0' allowfullscreen></iframe>
	<?php } elseif($CurrentDate == $nxtdate) {?>
	<iframe src='https://www.youtube.com/embed//r8cexmYOknI' frameborder='0' allowfullscreen></iframe>
	<?php } elseif($CurrentDate == $nxtdate2) {?>
	<iframe src='https://www.youtube.com/embed//1KrP-6w5G2Q' frameborder='0' allowfullscreen></iframe>
	<?php } elseif($CurrentDate == $nxtdate3) {?>
	<iframe src='https://www.youtube.com/embed//YdB1HMCldJY' frameborder='0' allowfullscreen></iframe>
	<?php  } else { ?>
	<iframe src='https://www.youtube.com/embed//QZ4pbTWBvUc' frameborder='0' allowfullscreen></iframe>
	<?php  }  ?>
</div>



<?php get_footer(); ?>