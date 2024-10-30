<?php
/**
* Plugin Name: Browser Fullscreen Button
* Plugin URI: https://wordtune.me
* Description: Use the shortcode [bfb] on any page ore post and you will get to buttons for Fullscreen Mode and esc.
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function browser_fullscreen_button() {
  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
:-webkit-full-screen {
background-color: #fff;
}
:-ms-fullscreen {
background-color: #fff;
}
:fullscreen {
background-color: #fff;
}
p {
font-size: 11px;
}
</style>


<button onclick="openFullscreen();"> Fullscreen
</button>
<button onclick="closeFullscreen();"> X
</button>
<script>
var elem = document.documentElement;
function openFullscreen() {
if (elem.requestFullscreen) {
  elem.requestFullscreen();
} else if (elem.webkitRequestFullscreen) {
  elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) {
  elem.msRequestFullscreen();
}
}

function closeFullscreen() {
if (document.exitFullscreen) {
  document.exitFullscreen();
} else if (document.webkitExitFullscreen) {
  document.webkitExitFullscreen();
} else if (document.msExitFullscreen) {
  document.msExitFullscreen();
}
}
</script>

</html>


  <?php
}
add_shortcode( 'bfb','browser_fullscreen_button' );
?>
