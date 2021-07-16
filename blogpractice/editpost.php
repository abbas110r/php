<?php require('include/header.php'); 
        require('config/config.php');
        $connect = mysqli_connect(host_name,user_name,password,database_name);
    if(mysqli_connect_errno()){ //  if true connection failed
        echo 'Failed to connect to mysql'. mysqli_connect_errno();
    }
    if(isset($_POST["submit"])){
        //get data
        $update_id = mysqli_real_escape_string($connect,$_POST['update_id']); 
        $title =mysqli_real_escape_string($connect,$_POST['title']);
        $author =mysqli_real_escape_string($connect,$_POST['author']);
        $body =mysqli_real_escape_string($connect,$_POST['body']);
       $query = "update posts set title = '$title',author = '$author',body ='$body' where id={$update_id}";
       if(mysqli_query($connect,$query)){
           header('Location:'.ROOT_URL.'');
       }
       else{
           echo "error :".mysqli_error($connect);
       }
    }
    $id = mysqli_real_escape_string($connect,$_GET['id']);
    $query = 'SELECT * FROM posts WHERE id='.$id;
    $result = mysqli_query($connect,$query);
    $post=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($connect);


?>
<div style="margin-left:1rem">
    <h1>Add Post</h1>
    <form action="addpost.php" method="POST">
        <div class="form-group">
            <label >Title</label>
            <input type="text" name="title" class=form-control value="<?php echo $post['title']; ?>">
        </div>
        <div class="form-group">
            <label >Author</label>
            <input type="text" name="author" class=form-control value="<?php echo $post['author'];?>">
        </div>
        <div class="form-group">
            <label >Body</label>
            <textarea  name="body"  class=form-control ><?php echo $post['body'];?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
        <input type="submit" value="submit" name="submit" class="btn btn-primary" style="margin-top:1rem">
</form>
</div>
<?php

?>
<?php require('include/footer.php'); ?>