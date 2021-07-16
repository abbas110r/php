<?php require('include/header.php'); 
        require('config/config.php');
        $connect = mysqli_connect(host_name,user_name,password,database_name);
        if(isset($_REQUEST['submit'])){
            $title = htmlspecialchars($_POST['title']);
            $body = htmlspecialchars( $_POST['author']);
            $author = htmlspecialchars($_POST['body']);    
            $query = "INSERT INTO posts(title,body,author) values('$title','$body','$author')";
            if(mysqli_query($connect,$query)){
                header('Location:'.ROOT_URL.'');
            }
            else{
                echo "error :".mysqli_error($connect);
            } 
        }
    
     
        

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>"  style="margin-left:1.6rem;" method="POST">

    <div class="form-group mb-3 col-sm-8">
                <label >Title</label>
                <input type="text" name="title"  class=form-control required >
            </div>
            <div class="form-group mb-3 col-sm-8">
                <label >Author</label>
                <input type="text" name="author"  class=form-control required >
            </div>
            <div class="form-group mb-3 col-sm-8">
                <label >Body</label>
                <textarea  name="body"  class=form-control required>
                </textarea>
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary" style="margin-top:1rem" >
</form>
<?php require('include/footer.php'); ?>