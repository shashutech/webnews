<?php include 'includes/header.php';
      require 'config/db.php';
?>

<?php 
    $msg = '';
    $msgClass = '';
    if(filter_has_var(INPUT_POST, 'submit')){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $article = mysqli_real_escape_string($conn, $_POST['article']);

        // Image input
        $imgFolder = 'uploads/';
        $imgRealName = mysqli_real_escape_string($conn, $_FILES['imgFile']['name']);
        $imgExtension = strtolower(pathinfo($imgRealName, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES['imgFile']['tmp_name']);
        if($check){
            if($imgExtension == 'jpg' || $imgExtension == 'jpeg' || $imgExtension == 'png'){
                $imgNewName = $imgFolder.uniqid('myImg', true). '.' . $imgExtension;
                if(move_uploaded_file($_FILES['imgFile']['tmp_name'], $imgNewName)){
                    echo 'Uploaded';
                }else{
                    $msg = 'Image could not be uploaded';
                    $msgClass= 'alert-danger';
                }
            }else{
                $msg = 'Please upload a jpg, jpeg or png file';
                $msgClass = 'alert-danger';
            }
        }else{
            $msg = 'Please upload an image file.';
            $msgClass = 'alert-danger';
        }

        // Check for any empty feild
        if(empty($title) || empty($author) || empty($category) || empty($article)){
            $msg = 'Please fill in all the feilds';
            $msgClass = 'alert-danger';
        }else{
            $sql = "INSERT INTO news(title, author, category, image, article ) VALUES ('$title', '$author', '$category', '$imgNewName', '$article')";
            if(mysqli_query($conn, $sql)){
                header('Location: index.php');
            }else{
                $msg = 'Data not inserted';
                $msgClass = 'alert-danger';
            }
        }
    }
?>

    <div class="container">
        <div class="card card-body my-3">
            <h3 class="text-center">Add New Article</h3>
            <?php if($msg !== ''): ?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title.." required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="title">Author</label>
                            <input type="text" class="form-control" name="author" placeholder="Enter author's name.." required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label for="title">Category</label>
                            <select name="category"  class="custom-select">
                                <option value="technology" selected>Technology</option>
                                <option value="sports">Sports</option>
                                <option value="entertainment">Entertainment</option>
                                <option value="lifestyle">Lifestyle</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="imgFile">Image</label>
                        <input type="file" class="form-control-file" name="imgFile" required>
                    </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="article">Article</label>
                    <textarea name="article" class="form-control" required></textarea>
                </div>
                
                <button type="submit" name="submit" class="btn btn-block btn-outline-success">Submit..</button>
            </form>
        </div>
    </div>
<?php include 'includes/footer.php' ?>