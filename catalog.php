<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])){
  if ($_Get['cat']== "books"){
    $pageTitle = "Books";
    $section = 'books';
  } elseif ($_GET["cat"]== 'movies'){
    $pageTitle = "Movies";
    $section = "movies";
  } elseif ($_GET["cat"]== "music"){
    $pageTitle = "Music";
    $section = "music";
  }
}
include("inc/header.php");
?>

<div class ="section catalog page">
  <div class = "wrapper">

    <h1> <?php
    if ($section !=null){
      echo "<a href= 'catalog.php'>Full Catalog</a> &gt; ";
    }

    echo $pageTitle; ?> </h1>

    <ul class = "items">
      <?php foreach($catalog as $id => $item){
        echo get_item_html($id, $item);
      }
      ?>
    </ul>
  </div>


<?php include("inc/footer.php"); ?>
