<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kids Coding Camp - Learn to Code in a Fun Way!:: Powered By Proxy Software Systems</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    body {
      background-color: #f8f9fa;
      color: #333;
      font-family: Arial, sans-serif;
    }
    
    .header {
      background-color: #3d73dd;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
    
    .jumbotron {
      background-image: url("images/kidscoding.jpg");
      background-size: cover;
      height: 600px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
    }
    
    .jumbotron h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 30px;
    }
    
    .jumbotron p {
      font-size: 24px;
      margin-bottom: 30px;
    }
    
    .btn-register {
      background-color: #ff5c39;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      padding: 15px 30px;
      border-radius: 30px;
      transition: background-color 0.3s;
    }
    
    .btn-register:hover {
      background-color: #ff4026;
    }
    
    .features {
      background-color: #fff;
      padding: 40px 0;
      text-align: center;
    }
    
    .feature-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 30px;
    }
    
    .feature-item img {
      width: 120px;
      margin-bottom: 20px;
    }
    
    .feature-item h3 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .feature-item p {
      font-size: 18px;
    }
    
    .footer {
      background-color: #3d73dd;
      padding: 20px;
      color: #fff;
      text-align: center;
    }

    #h2{
        color:gold;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Katsina Kids Coding Camp V3.0</h1>
    <h2 id="h2">Powered By Proxy Software Systems</h2>
  </header>
  
  <div class="jumbotron">
    <div class="container">
      <h1>Learn to Code in a Fun Way!</h1>
      <p>Join our coding camp and discover the exciting world of programming!</p>
      <a href="payment.php" class="btn btn-register">Register Now</a>
    </div>
  </div>
  
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-item">
            <img src="https://d1ng1bucl7w66k.cloudfront.net/ghost-blog/2023/02/Screen-Shot-2023-02-15-at-7.33.17-PM.png" alt="Kids Writing Code">
            <h3>Learn Coding</h3>
            <p>Develop problem-solving and logical thinking skills while learning to code.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-item">
            <img src="https://www.create-learn.us/_next/image?url=https%3A%2F%2Fcreate-learn-prod.s3.us-west-2.amazonaws.com%2Fuploads%2Fscratch%2Fthumbnail%2FC4db3Dt1gMWsVAy-3WAsgdgCuva9lqSwVDmvqYIIsU-scratch-ninja-introduction.jpg&w=640&q=75" alt="Kids Coding Workshop">
            <h3>Interactive Workshops</h3>
            <p>Participate in hands-on workshops and collaborate with fellow young coders.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-item">
            <img src="https://th.bing.com/th/id/OIP.1U-qOYmo8WXjsoodev9wlAHaEK?w=333&h=187&c=7&r=0&o=5&dpr=1.1&pid=1.7" alt="Kids Coding Projects">
            <h3>Create Projects</h3>
            <p>Build your own projects and showcase your creativity and coding skills.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> Proxy Software Systems. All rights reserved.</p>
  </footer>

</body>
</html>
