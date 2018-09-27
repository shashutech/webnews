<?php include 'includes/header.php';
      require 'config/db.php';
?>
<?php

    $sql = "SELECT * FROM news ORDER BY created_at DESC";
    $results = mysqli_query($conn, $sql);
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    
    //mysqli_free_results($results);
    mysqli_close($conn);



?>
<div class="container">
    <?php foreach($articles as $article): ?>
        <div class="card card-body my-3">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <img src="<?php echo $article['image']; ?>" class="img-responsive article-img" alt="">
                    <span class="badge badge-success"><?php echo strtoupper($article['category']); ?></span>
                </div>
                <div class="col-sm-12 col-md-8">
                    <h3><?php echo $article['title']; ?></h3>
                    <small class="text-muted"><i class="far fa-clock"></i> <?php echo date('d-M-Y', strtotime($article['created_at'])); ?> </small>
                    <small class="text-muted">
                     <i class="fas fa-user"></i> <?php echo ucwords($article['author']); ?></small>
                     <p><?php echo substr($article['article'], 0, 200); ?></p>
                     <a href="article.php?id=<?php echo $article['id']; ?>" class="btn btn-outline-primary">Read More</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php' ?>