<?php

$domain = "";
$rootDomain = "junglesentry.com";
$mainImg = "images/flashlight-news-reviews.jpg";
$siteTitle = "Solar Powered Gear & Gadgets Meta Reviews";
$siteContent = "Solar Powered Gear & Gadgets Meta Reviews - Your prime site for solar powered gear and gadget news. We watch and review all new releases of high quality solar powered gadgets.";

$production = true;

  if($production == true){
    $rootURL = "https://junglesentry.com/";
    $homedir = "/home/jungles1/public_html/posts/";
  }
  else{
    $rootURL = "http://junglesentry.com/";
    $homedir = "Z:\\xampp\\htdocs\\jungelsentry\\posts\\";
  }

  $sitename = "Jungle Sentry";
  $email1 = "info@junglesentry.com";
  $email2 = "contact@junglesentry.com";

  $postPerPage = 9;

function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

function deslugify($text)
{
  // replace - with blank space
  $text = str_replace("-", " ", $text);

  // Make first Letter CAPS
  $text = ucfirst($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}

?>
