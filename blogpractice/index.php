<?php
    require('config/config.php');
    //connect to the database
    $connect = mysqli_connect(host_name,user_name,password,database_name);
    if(mysqli_connect_errno()){
        echo 'Failed to connect to the database'.mysqli_connect_errno();
    }
    if(isset($_POST['sort'])){
        $query = 'SELECT * FROM posts ORDER BY created_at DESC ';
    }
    else{
        $query='SELECT * FROM posts';
    }
   
    $result = mysqli_query($connect,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    //free the space(result)
    mysqli_free_result($result);
    //close the connection
    mysqli_close($connect);
?>
<?php require('include/header.php'); ?>
<h1>Posts</h1>
<div class="two">
    <?php foreach($posts as $post): ?>
        <div class="well bg">
            <h4><?php echo $post['title']; ?></h4>
            <small>Created on<?php echo $post['created_at']; ?> by <?php echo $post['author'] ;?></small>
            <p><?php echo $post['body']; ?></p>
            <a href="post.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Read more</a>
        </div>
    <?php endforeach;?>
    
</div>
<?php require('include/footer.php'); ?>
