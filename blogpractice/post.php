<?php
    require('config/config.php');
    //connect to the database
    $connect = mysqli_connect(host_name,user_name,password,database_name);
    if(isset($_POST['delete_id'])){
        $delete_id = mysqli_real_escape_string($connect,$_POST['delete_id']); 
        $query = "delete from posts where id={$delete_id}";
        if(mysqli_query($connect,$query)){
            header('Location:'.ROOT_URL.'');
        }
        else{
            echo "error :".mysqli_error($connect);
        }
    }
    if(mysqli_connect_errno()){
        echo 'Failed to connect to the database'.mysqli_connect_errno();
    }
    $id = $_GET['id'];
    //query
    $query='SELECT * FROM posts WHERE id='.$id;
    $result = mysqli_query($connect,$query);
    $post = mysqli_fetch_assoc($result);
    //free the space(result)
    mysqli_free_result($result);
    //close the connection
    mysqli_close($connect);
?>
<?php require('include/header.php'); ?>

<div class="container">
<a href="http://localhost/dashboard/basics/blogpractice" class="btn btn-default">Go Back</a>
   
    <h1 style="position:relative;right:2.3%;"><?php echo $post['title']; ?></h1>
    <small >Created on<?php echo $post['created_at']; ?> by <?php echo $post['author'] ;?></small>
    <p class="center" style="margin-top:1rem;"><?php echo $post['body']; ?></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="float-end">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" value="Delete" class="btn btn-danger" name="delete">
    </form>
    <a href="editpost.php?id=<?php echo $post['id'] ; ?>" class="btn btn-primary">Edit</a>
</div>

<?php require('include/footer.php'); ?>
