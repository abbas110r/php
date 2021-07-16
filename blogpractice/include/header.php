<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogSite</title>
    <style>
        h1{  margin-left:1.5rem;
            padding-bottom:1rem;
            padding-top:0.5rem;
            
        }
        .one{
            margin-left:0.8rem;
        }
        .two{
            margin-left:1rem;
        }
        .bg{
            background-color:#F8F9FA;
            padding:1rem;
            margin-bottom:1rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.0.2/cerulean/bootstrap.min.css" integrity="sha512-yTmD3eVCm6omGDRFz3vcOdjVhZoX6F3kFgyIGno1c4JQ3PWeSRhB5MaKR6TVb9B4TnHRlrYMy+pFMRJiPJ0bLA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body one">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="http://localhost/dashboard/basics/blogpractice">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="http://localhost/dashboard/basics/blogpractice/addpost.php">Add Post</a>
        </li>
        <li class="nav-item">
          <form action="index.php" method="POST">
            <input type="submit" value="Sort by date" class="btn btn-default" name="sort">
          </form>
        </li>
    </div>
    
  </div>
</nav>