<!DOCTYPE html>
<html>
<head>
  
  <title>Life-Changing Foundation</title> 
<?php include 'links.php'; ?>
<?php include 'style.php'; ?>




</head>

<body>
 
<nav class="navbar navbar-expand-lg nav_style p-3">
    <a class="navbar-brand pl-5" href="#">Life-Changing Foundation</a>
    <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <span class="navbar-toggler-icon "><i class="fa fa-bars" style="font-size:24px"></i></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutid">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#globalid">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#istatesid">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact</a>
        </li>
       
      
      </ul>
    
    </div>
  </nav>

<div class="main_header">
   <div class="row w-100 h-100 p-5">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
             <div class="left w-100 h-100 d-flex justify-content-center align-items-center"> 
               <img src="img/a1.png" width="300" hight="600">
             </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
           <div class="right w-100 h-100 d-flex justify-content-center align-items-center">
               <h1>Life-Changing Foundation <a class="btn btn-primary" href="checkout.php" role="button">DONATE</a></h2>
             <div>
               
             </div>
              </div>
      </div>
   </div>

</div>
<!-- *************************about section ********************** -->

<div class="container-fluid sub_saction  pt-5 pb-5 " id="aboutid">
        <div class="section_header text-center mb-5 mt-5">
              <h1>About</h1>
        </div>
        <div class="row pt-5">
             <div class=" col-lg-5 col-md-6 col-12 ml-5 about_res">
               <div class="img ">
             
                        <img src="img\a2.jpeg">
                    </div>
             </div>
             <div class=" col-lg-6 col-md-6 col-12">
                <h2>About Life-Changing Foundation</h2>
                <p>At the Life Change Foundation, anyone ready to start their journey to becoming the person they were meant to be can take advantage of our free peer-to-peer coaching and personal development education. As we grow, we will expand to offer other free and reduced-price services, including free and reduced-price counselling and group training with our qualified coaches, either face to face or through the online meetings.</p>
               
             </div>
        </div>
</div>





<!--*************    donation form       **********-->

<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
</style>

<!-- ******************icons******************8 -->
<div class="container_div pl-5 pr-5 pb-5 pt-5">
    <a href="" target="_blank">
    <i class="fa fa-2x fa-instagram"  ></i>
    </a>
    <a href="" target="_blank">
    <i class="fa fa-2x fa-linkedin-square"  ></i>
    </a>
    <a href="" target="_blank">
    <i class="fa fa-2x fa-whatsapp" ></i>
    </a>
</div>



</body>

</html>