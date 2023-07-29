<?php
include './header/session.php';


//declearing the variable to assing the data from the database
$db_tittle="";
$db_cnum="";
$db_price="";
$db_address="";
$db_ge="";
$db_nr="";
$db_fac="";
$db_img="";


//exhicuting the quary
$result=mysqli_query($connection,$sql);


//rectrivee the data to search that the users with the same user name 
while ($row=mysqli_fetch_array($result)) {
	$db_tittle=$row[''];
    $db_cnum = $row[''];
    $db_price = $row[''];
    $db_address = $row[''];
    $db_ge = $row[''];
    $db_nr= $row[''];
    $db_fac= $row[''];
    $db_img=$row[''];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script type="module" src="./js/reg.js"></script>
  <!--<script src="https://cdn.tailwindcss.com"></script>!-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="./css/more details.css">
  <title><?php echo $db_tittle ; ?></title>
</head>
<body>
    <header>

  <div class="container nav">
    <nav class="navbar sticky-top navbar-expand-md bg-light navbar-light">
      
       <a class="navbar-brand" href="#">
         <img src="./img/nav_bar_logo.png" alt="navbar logo" width="15%">
       </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="./index.html">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="./about.html">About</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Contact</a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="./login.html">Login</a>
           </li>
         </ul>
       </div>
    </nav>
  </div>
  

<div class="container ">
  <div class="box">


    <div class="card1">
      <div class="card-body">
      <h5><b><?php echo $db_tittle ;?></b></h5>
      </div>
    </div>


    <div class="row" style="border-radius: 20px;">
      <div class="col-8" >
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo $db_img ; ?>" class="car-img" alt="No Image">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $db_img ; ?>" class="car-img" alt="No Image">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $db_img ; ?>" class="car-img" alt="No Image">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $db_img ; ?>" class="car-img" alt="No Image">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      
      <div class="card mt-3" style="width: 20rem; height: 487px;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $db_cnum ; ?></li>
          
          <div id="map"  class=" map1"  >
          </div>
          
      </div>
          <!-- IIFE Below (only API KEy) -->
          <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
              ({key: "AIzaSyB00xJTicICPDFwtoGDS8BtktScvXiznCI", v: "beta"});</script>
        </ul>
      
      </div>
    

    <div class="card-showprice">
      <div class="card-body">
        <h4 style="color: rgba(121, 68, 0)"><?php echo $db_price ; ?></h4>
      </div>
    </div>


    <div class="card-pr-ad-ge-nr-fa">
      <div class="card-body">
        <label class="ad-ge-nr-fa">Address:</label>
        <p class="details"><?php echo $db_address ; ?></p>
      </div>
    </div>

    <div class="card-pr-ad-ge-nr-fa">
      <div class="card-body">
        <label class="ad-ge-nr-fa">Gender:</label>
        <p class="details"><?php echo $db_ge ; ?></p>
      </div>
    </div>

    <div class="card-pr-ad-ge-nr-fa">
      <div class="card-body">
        <label class="ad-ge-nr-fa">Number Of Rooms:</label>
        <p class="details"><?php echo $db_nr ; ?></p>
      </div>
    </div>


    <div class="card-pr-ad-ge-nr-fa">
      <div class="card-body">
        <label class="ad-ge-nr-fa">Facilities:</label>
        <ul>
          <div class="details">
            <p> <?php echo $db_fac ; ?></p>
        </div>
       </ul>
      </div>
    </div>

  </div>
</div>
  

  <footer>
    <div class="row">
      <div class="col f-left">
        <p>Copyright © NSBM Students</p>
      </div>
      <div class="col f-right">
        <p>Brewed with ❤️ by NSBM Undergraduates for Fellow Undergraduates</p>
      </div>
    </div> 
  </footer>
    </div>
  </div>
</div>  
    </header>
    
</body>
</html>
  



