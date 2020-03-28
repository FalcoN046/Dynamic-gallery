<?php
// Include and initialize DB class
require_once 'DB.class.php';
$db = new DB();

// Fetch the images data
$condition = array('where' => array('status' => 1));
$images = $db->getRows('images', $condition);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/jquery.min.js"></script>

<!-- Fancybox JS library -->
<script src="fancybox/jquery.fancybox.js"></script>
<!-- Initialize fancybox -->
<script>
  $("[data-fancybox]").fancybox();
</script>
</head>
<body>
    <br>
    <h style="margin-left: 700px;font-size: 30px">GALLERY</h><br><br>
    <div class="head" style="margin-left: 1300px">
        <a href="manage.php" class="glink">Manage</a>
    </div>
<div class="container">
        <br>
    
<div class="gallery">
    <?php
    if(!empty($images)){
        foreach($images as $row){
            $uploadDir = 'uploads/images/';
            $imageURL = $uploadDir.$row["file_name"];
    ?>
    <!--  col-md-4 -->
    <div class="col-lg-3 "style="column-gap: 10px;column-width: 100px;">
        <img src="<?php echo $imageURL; ?>"   style="width: 200%" /><hr><hr><br><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr>
        <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>" >
           
            
            <p style="color: black;margin-left: -30px"><?php echo $row["title"]; ?>
        
    </a>
    </div>
    <?php }
    } ?>
</div>
<!-- Fancybox CSS library -->
</div>

</body>
</html>
