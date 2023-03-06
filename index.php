<html>
<head>
 <title></title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="style1.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Prerna</a>
  <h1> WELCOME TO MY WEBSITE </h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
 </nav>

 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/aa1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>London</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/aa2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Orrisa</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/aa3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Channai</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 </div>

 <section class="my-5">
  <div class="py-5">
   <h2 class="text-center"> ABOUT US </h2>
 </div>
 <div class="container-fluids">
 <div class="row">
     <div class="col-lg-6 col-md-6 col-12">
       <img src="image/aa4.jpg"  class="img-fluid">
     </div>
     <div class="col-lg-6 col-md-6 col-12">
       <h2>Welcome!<br><br></h2> <p> Every person has their own unique story.Here is a glimpse into mine.<br><br> My name is Prerna.I come from Muzaffarpur,Bihar. I am completed Bachlore of Computer Application(BCA) in Indera Gandhi National Open University(IGNOU). Am currently admission for Specilization (Cloud Computing and Devlops) in Chandigardh University.<br> So far in just six short months,I have completed some online courses like--- aws Fundamentals: security Risk,Building serverless application , aws cloud , google cloud ,Basic of python. <br> My family is one of the most important things in my life and they have always been there for me. I am very active student who loves listening to music.My strength are I am self motivated, hard working and disciplined girl.<br> My weekness is I will not feel confortable if I'm not completed the work with in given time. My hobbies are Dancing , cooking ,learn somthing new.<br></p>
              <div class="tab-titles">
                  <p class="tab-links active-link" onclick="opentab('skills')"> Skills <p>
                <p class="tab-links"onclick="opentab('education')"> Education <p>
              </div>
              <div class="tab.contents active-link" id="skills">
                   <ul>
                     <li><span> Web Devlopment</span><br>Designing Websites and Some projects.....</li>
                   <li><span> C language</span><br></li>
                   <li><span> C++ language</span><br></li>
                   <li><span> Java</span><br></li>
                   <li><span> basis of Python</span><br></li>
                   <li><span>Ms word </span><br></li>
                   <li><span> Ms Excel</span><br></li>
                   <li><span> Cloud computing</span><br></li>
                 </ul>
              </div>
               <div class="tab.contents active-tab" id="education">
                   <ul>
                   <li><span> 2022-24</span><br> MCA(Cloud computing ad devlops) From Chandigardh University</li>
                             <li><span>2022</span><br>aws cloud, Google cloud, aws Fundamental: Security Risk and Building Serverless Application<li>   
                   <li><span>2018-21</span><br> BCA From IGNOU New Delhi</li>
                 </ul>
                 <a href="about.php" class="btn btn-success"> Check </a>
     </div>
   </div>
 </div>
 </section>
 <section class="my-5">
  <div class="py-5">
   <h2 class="text-center">Our Services</h2>
 </div>
 <div class="container-fluid"> 
  <div class="row">
    <div class="col-lg-4 col-mg-4 col-12">
      <div class="card">
         <img class="card-img-top" src="image/aa5.jpg" alt="Card image">
         <div class="card-body">
             <h4 class="card-title">Beautiful London :)</h4>
             <p class="card-text"></p>
             <a href="#" class="btn btn-primary">See Profile</a>
         </div>
       </div>
     </div>

     <div class="col-lg-4 col-mg-4 col-12">
      <div class="card">
         <img class="card-img-top" src="image/aa6.jpg" alt="Card image">
         <div class="card-body">
             <h4 class="card-title">Beautiful Channai :)</h4>
             <p class="card-text"></p>
             <a href="#" class="btn btn-primary">See Profile</a>
         </div>
       </div>
     </div>

     <div class="col-lg-4 col-mg-4 col-12">
      <div class="card">
         <img class="card-img-top" src="image/aa7.jpg" alt="Card image">
         <div class="card-body">
             <h4 class="card-title">Beautiful Orissa :)</h4>
             <p class="card-text"></p>
             <a href="#" class="btn btn-primary">See Profile</a>
         </div>
       </div>
     </div>
   </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
   <h2 class="text-center">Our Gallery</h2>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa1.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa2.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa5.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa6.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa7.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa1.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa2.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa5.jpg" class="img-fluid pb-3">
     </div>

     <div class="col-lg-4 col-md-4 col-12">
       <img src="image/aa7.jpg" class="img-fluid pb-3">
     </div>

   </div>
 </div>
</section>

<section class="my-5">
  <div class="py-5">
   <h2 class="text-center">Contact Us</h2>
 </div>
 <div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
     <div class="form-group">
       <label>Username</label>
       <input type="text" name="user" autocomplete="off" class="form-control">
     </div>

     <div class="form-group">
       <label>Email Id</label>
       <input type="text" name="email" autocomplete="off" class="form-control">
     </div>

     <div class="form-group">
       <label>Mobile Number</label>
       <input type="text" name="mobile" autocomplete="off" class="form-control">
     </div>

     <div class="form-group">
       <label>Address</label>
       <input type="text" name="address" autocomplete="off" class="form-control">
     </div>

     <div class="form-group">
       <label>Comments</label>
        <textarea class="form-control" name="comment">
        </textarea>
     </div>

     <button type="Submit" class="btn btn-success">Submit</button>
   </form>
 </div>
</section>

<footer>
  <p class="p-3 bg-dark text-whites text-center">@prernaC2000Production</p>
</footer>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>