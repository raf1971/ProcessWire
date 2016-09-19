<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo $page->title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--<div class="page-header">
  <h1>Example page header <small>Subtext for header</small></h1>
</div>
-->
<div class="page-header">
  <h1><?php echo $page->title;?></br><small>Subtext for header</small></h1>
    <?php 
        foreach($page->parents() as $item) {
        echo "<span><a href='$item->url'>$item->title</a></span> "; 
      }
    ?>
</div>

<div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="http://sitialessandria.creazionesiti.co/site/assets/files/1/airport_cartoon_3.jpg" alt="...">
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="http://sitialessandria.creazionesiti.co/site/assets/files/1/airport_cartoon_3.jpg" alt="...">
    </a>
  </div>
    <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="http://sitialessandria.creazionesiti.co/site/assets/files/1/airport_cartoon_3.jpg" alt="...">
    </a>
  </div>
</div>



</head>
<body>

<div class="panel panel-default">
  <div class="panel-body">
    Basic panel example
  </div>
</div>


<!-- 
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>
-->

<ul class="nav nav-pills">
    <?php 
        foreach($page->parents() as $item) {
        echo "<span><a href='$item->url'>$item->title</a></span> "; 
      }
    ?>
</ul>

<div class='breadcrumbs'>
    <ul class="nav nav-pills">
        <?php 
            foreach($page->parents() as $item) {
            echo "<li role='presentation' class='active'><a href='$item->url'>$item->title</a></li> "; 
          }
        ?>
    </ul>
    <?php echo "<span>$page->title</span> "; ?>
  </div>



<!--
<div class="jumbotron text-center">
  <h1>My First Bootstrap Page</h1>
  <p>Resize this responsive page to see the effect!</p>
</div>
-->
<div class="jumbotron">
  <h1><?php echo $page->title;?></h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
 
 <!-- 
<div class="container">
<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
  -->


  <div class="row">
    <div class="col-sm-4">
      <h3><strong><?php echo $page->title;?></strong></h3>
      <p><?php echo $page->body;?></p>
    </div>
    <div class="col-sm-4">
      <h3><strong><?php echo $page->Cliente;?></strong></h3>
      <p><?php echo $page->body;?></p>
    </div>
    <div class="col-sm-4">
      <h3><strong><?php echo $page->title;?></strong></h3>
      <p><?php echo $page->body;?></p>
    </div>
  </div>
</div>

<h3><strong><?php echo $page->Cliente;?></strong></h3>


</body>
</html>
