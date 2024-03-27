<?php include '../header.php'; 
      if(!isset($_GET['i'])){
        header("Location: /content");
      };
?>
<div class="content-wrapper">
    <h1><?php echo $_GET['i'] ?> a bien été effectué</h1>

</div>
<?php include '../footer.php'; ?>