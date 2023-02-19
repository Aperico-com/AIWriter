<!DOCTYPE html>
<html lang="en">
<?php
  include '../includes/globals.php';

  // set up mysql connection
  include '../includes/mysqlcon.php';
  include '../includes/class_lib.php';

  $_MAX_COL = 3;

  $results = mysqli_query($con, "SELECT idposts, excerpt, name, prime, freeshipping, fullfilled, itemclass, title, price, brand, availmsg, headline, produrl, prodspec, imgurl, slug, prodtitle, DATE_FORMAT(datein,'%b %D %Y') as dateofpub FROM `reviewposts` ORDER BY datein DESC");
  // echo "SELECT idposts, excerpt, name, prime, freeshipping, fullfilled, itemclass, title, price, brand, availmsg, headline, produrl, prodspec, imgurl, slug, prodtitle, DATE_FORMAT(datein,'%b %D %Y') as dateofpub FROM `posts` ORDER BY datein DESC";
  if (!$results) {
    printf("Error: %s\n", mysqli_error($con));
      exit();
  }
  $mainImg = "https://junglesentry.com/images/blavor-solar-power-bank-review.jpg";
  $imgSize = getimagesize($mainImg);
  $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122457273-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-122457273-1');
  </script>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?php echo $siteTitle ?></title>
    <meta name="description" content="<?php echo $siteContent ?>">
    <meta name="author" content="<?php echo $rootDomain ?>">
    <meta name="theme-color" content="#000000"/>
    <link rel="canonical" href="https://<?php echo $rootDomain ?>/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $siteTitle ?>">
    <meta property="og:description" content="<?php echo $siteContent ?>">
    <meta property="og:url" content="<?php echo $rootURL ?>">
    <meta property="og:site_name" content="<?php echo $sitename ?>">
    <meta property="article:publisher" content="https://www.facebook.com/junglesentry/">
    <meta property="article:section" content="Technology">
    <meta property="article:published_time" content="<?php echo date_format(new DateTime($date), 'c'); ?>">
    <meta property="article:modified_time" content="<?php echo date_format(new DateTime($date), 'c'); ?>">
    <meta property="og:updated_time" content="<?php echo date_format(new DateTime($date), 'c'); ?>">
    <meta property="og:image" content="<?php echo $rootURL ?><?php echo $mainImg ?>">
    <meta property="og:image:width" content="<?php echo $imgSize[0] ?>">
    <meta property="og:image:height" content="<?php echo $imgSize[1] ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?php echo $siteContent ?>">
    <meta name="twitter:title" content="<?php echo $siteTitle ?>">
    <meta name="twitter:image" content="<?php echo $rootURL ?><?php echo $mainImg ?>">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

    <!-- CSS
    ================================================== -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="preload" href="/css/extra.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preconnect" href="https://s3.amazonaws.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://www.pagespeed-mod.com">

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->


    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://<?php echo $domain ?>.<?php echo $rootDomain ?>/"
      },
      "headline": "<?php echo $siteTitle ?>",
      "image": [
        "<?php echo $rootURL ?><?php echo $titleImg ?>"
       ],
      "datePublished": "<?php echo date_format(new DateTime($date), 'c'); ?>",
      "dateModified": "<?php echo date_format(new DateTime($date), 'c'); ?>",
      "author": {
        "@type": "Person",
        "name": "Andrew E Toresater"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Junle Sentry",
        "logo": {
          "@type": "ImageObject",
          "url": "https://junglesentry.com/images/icons-512.png"
        }
      },
      "description": "<?php echo $siteContent ?>"
    }
    </script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

</head>

<body>



  <div class="container pt-3">

    <?php include '../includes/header0.php'; ?>

    <h1 class="mb-1">
        <?php echo $siteTitle ?>
    </h1>
    <?php echo $siteContent ?>

    <div class="d-flex pb-3">
      <div class="pl-0">Share this site</div>
      <div class="pl-3"><a name="FB" aria-label="FB" rel="noopener" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link ?>"><img width="16px" height="16px" src="/images/32x32-Square-57-FB.png"/ alt="share-on-facebook"></a></div>
      <div class="pl-3"><a name="Twitter" aria-label="Twitter" rel="noopener" target="_blank" href="https://twitter.com/home?status=<?php echo $actual_link ?>"><img width="16px" height="16px" src="/images/32x32-Square-57-TW.png"/ alt="share-on-facebook"></a></div>
      <div class="pl-3"><a name="Gplus" aria-label="Gplus" rel="noopener" target="_blank" href="https://plus.google.com/share?url=<?php echo $actual_link ?>"><img width="16px" height="16px" src="/images/32x32-Square-57-GP.png"/ alt="share-on-facebook"></a></div>
      <div class="pl-3"><a name="LIn" aria-label="Lin" rel="noopener" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link ?>&title=&summary=&source=<?php echo $actual_link ?>"><img width="16px" height="16px" src="/images/32x32-Square-57-LI.png"/ alt="share-on-facebook"></a></div>
    </div>

    <?php
      $colCnt = 0;
      while($row = mysqli_fetch_array($results, MYSQLI_ASSOC)){
        $excerpt = $row['excerpt'];
        $idposts =  $row['idposts'];//preg_split("/[#]/", $row['summary']);
        $title = $row['title'];
        $name = $row['name'];
        $prodtitle = $row['prodtitle'];
        $prodspec = $row['prodspec'];
        $headline = $row['headline'];
        $date = $row['dateofpub'];
        $titleImg = $row['imgurl'];
        $produrl = $row['produrl'];
        $price = $row['price'];
        $prime = $row['prime'];
        $freeshipping = $row['freeshipping'];
        $fullfilled = $row['fullfilled'];
        $itemclass = $row['itemclass'];
        $brand = $row['brand'];
        $avail = $row['availmsg'];
        $slug = $row['slug'];

        // echo $colCnt;

        if($colCnt == 0){
          echo "<div class='row py-4 pr-3'>";
        }
        echo "<div class='col-sm-". (12/$_MAX_COL) ."'>";

        echo "<div class='card p-3' style='width:300px;height:460px'>";
        echo "<div class='d-flex flex-wrap align-content-center' style='width:266px;height:266px'>";
        echo "<a href='" . $rootURL . "review/" . $slug . "'>";
        echo "<img style='max-height:266px;max-width:266px' class='card-img-top' src='" . $rootURL . $titleImg . "' alt='" . substr($titleImg, strrpos($titleImg, "/") + 1, strrpos($titleImg, ".") - (strrpos($titleImg, "/") +1) ) . "'/>";
        echo "</a>";
        echo "</div>";
        echo "<div class='card-body'>";
        echo "<a class='black-link' href='" . $rootURL . "review/" . $slug . "'>";
        echo "<h6 class='card-title mb-1 max-1-lines'>" . $name . "</h6>";
        echo "<p class='card-text small mb-1 max-2-lines'>" . $prodtitle . "</p>";
        echo "</a>";
        echo "<a href='" . $rootURL . "review/" . $slug . "' class='mt-4 btn btn-warning btn-block'>Read our Review</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";

        $colCnt++;
        if($colCnt >= $_MAX_COL){
          echo "</div>";
          $colCnt = 0;
        }
      }
    ?>



  </div> <!-- end s-content__main -->

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

  </div>

  <?php include '../includes/footer0.php'; ?>

  <script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=b4d765ff-aee8-4c43-ba50-914e45a62fcf"></script>

</body>

</html>
