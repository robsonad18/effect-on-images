<?php 

$img = imagecreatefrompng(__DIR__. '/fundomacos.png');

$filter = $_GET['filter'] ?? 0;

switch($filter)
{
   case 1: 
      imagefilter($img, IMG_FILTER_NEGATE);
      break;
   case 2:
      imagefilter($img, IMG_FILTER_GRAYSCALE);
      break;
   case 3:
      imagefilter($img, IMG_FILTER_BRIGHTNESS, 100);
      break;
   case 4:
      imagefilter($img, IMG_FILTER_CONTRAST, -50);
      break;
   case 5:
      imagefilter($img, IMG_FILTER_COLORIZE, 123,0,0,0);
      break;
   case 6:
      imagefilter($img, IMG_FILTER_EDGEDETECT);
      break;
   case 7:
      imagefilter($img, IMG_FILTER_EMBOSS);
      break;
   case 8:
      imagefilter($img, IMG_FILTER_GAUSSIAN_BLUR);
      break;
   case 9:
      imagefilter($img, IMG_FILTER_SELECTIVE_BLUR);
      break;
   case 10:
      imagefilter($img, IMG_FILTER_MEAN_REMOVAL);
      break;
   case 11:
      imagefilter($img, IMG_FILTER_SMOOTH, 10);
      break;
   case 12:
      imagefilter($img, IMG_FILTER_PIXELATE, 10, true);
      break;
   case 13:
      imageflip($img, 3);
      break;
}
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);