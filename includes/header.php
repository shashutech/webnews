<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebNews</title>
    <meta name="description" content="WebNEWS is an open source website where you can easily share news with a large community of people. It also provides you a platform where you can show your amazing blog writing skills to the world.">
    <meta name="keywords" content="WebNEWS, blogging, news, open source">
    <meta name="author" content="Kumar Shashwat">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab" rel="stylesheet">
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            
        }
        p{
            font-size: 15px;
        }
        h1,h2,h3,h4,h5,h6, .navbar-brand span{
            font-family:'Roboto Slab', serif;
        }
        .navbar-brand span{
            color: #0ac1d6;
        }
        nav{
            
            box-shadow: 5px 0px 8px #0ac1d6;
        }
        .nav-link:hover{
            color: #0ac1d6 !important;
        }

        .article-img{
            height: 200px;
            width: 100%;
        }
        #newsarticle{
            padding: 30px 0;
        }
        
        #newsarticle .article-img{
            height: 400px;
            width: auto;
            display: block;
            margin: auto ;
        }
        .badge{
            font-size:14px;
            padding:10px;
            position: absolute;
            
            top: 0;
        }
        .card {
            box-shadow: 5px 5px 8px #bcbcbc;
        }
        .card small{
            padding-right: 15px;
        }
        #newsarticle small{
            padding-right: 10px !important;
            display: inline-block;
            margin-bottom:10px;
        }
        #newsarticle .badge{
            display: inline;
            position: relative;
            font-size:10px;
            padding: 5px;
            border-radius: 10px;
            background-color: #0ac1d6;

        }
        .about-content{
            display: flex;
        }
        .author-img{
            height: 200px;
            width: 200px;
            border-radius: 50%;
            display: inline-block;
            margin: 20px;
            
            shape-outside: circle();
        }
        .download-btn{
            background-color: #0ac1d6;
        }
        footer a{
            color: #0ac1d6;
        }
        @media(max-width: 768px){
            .about-content{
            display: flex;
            flex-direction: column;
        }
        .author-img{
            height: 200px;
            width: 200px;
            border-radius: 50%;
            display: block;
            margin: auto;
            
        }
        }
    </style>
</head>
<body>

    <?php include 'navbar.php' ?>
    
