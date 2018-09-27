<?php include 'includes/header.php';
      require 'config/db.php';
?>
<?php
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM news WHERE id=". $id;
    $results = mysqli_query($conn, $sql);
    $article = mysqli_fetch_assoc($results);
    mysqli_free_result($results);
    
    
    

    
    //mysqli_free_results($results);
    mysqli_close($conn);



?>
<div class="container">
    
        <div id="newsarticle">
            <h3 class="text-center"><?php echo $article['title']; ?></h3>
            <small class="text-muted">
                <i class="far fa-clock"></i> <?php echo date('d-M-Y', strtotime($article['created_at'])); ?> 
            </small>
            <small class="text-muted">
                <i class="fas fa-user"></i> <?php echo ucwords($article['author']); ?>
            </small>
            <span class="badge badge-success"><?php echo strtoupper($article['category']); ?></span>
                    
            <img src="<?php echo $article['image']; ?>" class="img-responsive article-img" alt="">
            
       
            <p><?php echo $article['article']; ?></p>
        </div>
                     
         
</div>

<?php include 'includes/footer.php' ?>