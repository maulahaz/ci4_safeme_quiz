<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $title; ?></title>
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link href="<?= base_url(); ?>/t_sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<style>
.app-bar{
  display: flex;
  justify-content: center;
  /* border: 1px solid red; */
  align-items: center;
  /* height: 40px; */
}
/* .app-bar-item{ } */
.app-bar-item.leading{
  flex: 1;
  text-align: center;   
  /* height: 40px; */
  /* border: 1px solid yellow; */
}
.app-bar-item.title {
  flex: 9;
  text-align: left; 
  /* border: 1px solid green; */
  padding: 0 10px;
  /* height: 40px; */
}
</style>

</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    
    <div class="app-bar">
      <div class="app-bar-item leading"><i class="fa fa-arrow-left"></i></div>
      <div class="app-bar-item title"><h3><?= $pageTitle;?></h3></div>
    </div>
    <div data-role="navbar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Page Two</a></li>
        <li><a href="#">Search</a></li>
      </ul>
    </div>
  </div>

  <?php if(isset($view_file)){ echo view($view_file);} ?>

  <div data-role="footer">
    <h1>My Footer</h1>
  </div>
</div> 

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<?php if(isset($js_file)){ echo view($js_file);} ?>

</body>
</html>
