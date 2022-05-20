<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>E-events</title>
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    @livewireStyles
</head>
<body>

  <header  id="nav-placeholder"><nav class="navbar navbar-expand-lg p-0 m-0" aria-label="Tenth navbar example">

    <div class="container-fluid p-0 m-0">

      <a class="navbar-brand" href="web/homepage.html"> <img src="{{ asset('web/assets/homelogo.png') }}" alt=""  title="contrast" class="contrast"></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <i class="custom-toggler-icon">
              <span></span>
            </i>
          </button>

          <div class="collapse navbar-collapse justify-content-lg-end " id="navbarsExample08">
            
            <ul class="navbar-nav">
              <li class="nav-item ">
                  <a class="nav-link"  style="color:#454545" href="web/homepage.html">HOME</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link"  style="color:#454545" href="web/package.html">PACKAGE</a>
            </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color:#454545" href="web/#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  GALLERY
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="m-0 p-0 text-center"><a class="dropdown-item" style="color:#454545" href="web/picture.html">PICTURE</a></li>
                  <li class="m-0 p-0"><hr class="dropdown-divider"></li>
                  <li class="m-0 p-0 text-center"><a class="dropdown-item" style="color:#454545" href="web/video.html">VIDEOS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                  <a class="nav-link" style="color:#454545" href="web/services.html">SERVICES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " style="color:#454545" href="{{ route('booking') }}">BOOKING</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " style="color:#454545" href="web/aboutus.html">ABOUT US</a>
              </li>
      
          </ul>
              
          </div>


    </div>
    
</nav>

<style>  

:root {
  --color1: #F6F6F6;
  --color2: #E3E3E3;
  --color3: #818181;
  --color4: #454545;
  --color5: #202020;
}

.navbar-brand img{
      -webkit-filter: grayscale(5) invert(1);
       filter: grayscale(5) invert(1);
       height: 90px; width: 150px;
      }


      .navbar-brand{
    margin-left: 20px;
  }
  .navbar-nav li{
    margin: 20px;
  }
  .navbar-nav{
    margin-right: 20px;
  }
  
.custom-toggler-icon span {
  display: block;
  float: right;
  width: 40px;
  height: 2px;
  background: var(--color4);
  margin: 8px 0;
}
.custom-toggler-icon::after {
  content: "";
  float: left;
  display: block;
  width: 40px;
  height: 2px;
  background: var(--color4);
}

.navbar{
  position:absolute;
  width:100%;
  z-index:10;
  max-width:100%;
}


.dropdown-menu{
  font-family: 'Montserrat', sans-serif;
}
.dropdown-toggle::after {
    content: none;
}

ul li .nav-link{
  color: #454545;
   font-family: 'Montserrat', sans-serif;
}


.navbar .navbar-nav .nav-item {
  position: relative;
}
.navbar .navbar-nav .nav-item::after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  background-color: var(--color4);
  width: 0%;
  content: "";
  height: 2px;
}
.navbar .navbar-nav .nav-item:hover::after {
  width: 80%;
  transition: all 0.5s;
}



/*start of media qurery*/
@media (max-width: 1399.98px) { 
  nav{
  padding-bottom: 10px;
background-color: var(--color1);
}

 }


@media (max-width: 991.98px) { 

  .navbar-brand img{
      -webkit-filter: grayscale(5) invert(1);
       filter: grayscale(5) invert(1);
       height: 90px; width: 150px;
      }



.custom-toggler-icon span {
background: #454545;
}
.custom-toggler-icon::after {
background: #454545;
}



.navbar .navbar-nav .nav-item {
  position: relative;
}

nav{
  text-align: center;
background-color: var(--color1);
}

ul li .nav-link{
  color: var(--color4);
   font-family: 'Montserrat', sans-serif;
}

.dropdown-item{
  text-align: center;
}

}




@media (max-width: 576px) { 



.custom-toggler-icon span {
 background: var(--color4);
}
.custom-toggler-icon::after {
 background: var(--color4);
}




}
</style></header>

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 
<div class="main-booking">  

      <div class="section-booking-1">

    
                 

                        
                        <section class="wrap-banner-booking">
                              
                                <h1>Booking</h1>
                            
                        </section>


      </div>

      <!--end 0f section-1 -->

      <div class="section-booking-2"> 

                  <h6 class="text-center">READY TO GET IN TOUCH?</h6>
                <h1 class="text-center">Make an Event Request</h1>

                @livewire('reservations')

<!--end of main-->

<footer  id="footer-placeholder">
    <div class="container-fluid p-0 m-0">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-dark" style="background-color: #f6f6f6">
      
      
          <!-- Section: Links  -->
          <section class="pt-1">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold">E-event</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px;  height: 2px"
                      />
                  <p>
                    Our ceremony styling  knows no boundaries Like the elegance of simplicity of this ceremony set-up. 
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Social Media</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px;  height: 2px;"
                      />
                  <p>
                    <a href="https://www.facebook.com/eevents30" class="text-dark text-decoration-none">Facebook</a>
                  </p>
                  <p>
                    <a href="https://www.tiktok.com/@itsmeelmer33" class="text-dark text-decoration-none">Tiktok</a>
                  </p>
              
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">PARTNERS</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px; height: 2px"
                      />
                  <p>
                    <a href="https://www.facebook.com/inmotionph" class="text-dark text-decoration-none">InMotion Studio</a>
                  </p>
                  <p>
                    <a href="https://www.facebook.com/DonAloysiusAtelier" class="text-dark text-decoration-none">Don Aloysius Atelier</a>
                  </p>
                  <p>
                    <a href="https://www.facebook.com/biancrafts" class="text-dark text-decoration-none">Biancrafts</a>
                  </p>
                </div>
                <!-- Grid column -->
      
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr
                      class="mb-4 mt-0 d-inline-block mx-auto"
                      style="width: 60px;  height: 2px"
                      />
                  <p><i class="fas fa-home mr-3"></i>Pan-Philippine Hwy, Daet, Camarines Norte</p>
                  <p><i class="fas fa-envelope mr-3"></i> cool_djluis@yahoo.com</p>
                  <p><i class="fas fa-phone mr-3"></i>09773291050</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->
      
          <!-- Copyright -->
          <div
               class="text-center p-3"
               style="background-color: #E3E3E3"
               >
               © 2022 E-EVENTS, ALL RIGHTS RESERVED
      
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->
      
      <style>
      
        footer{
          font-family: 'Montserrat', sans-serif;
        }
      </style>
</footer>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    @livewireScripts
</body>



<script type="text/javascript">
   
    $('.datepicker').datepicker({ 
        startDate: '+9d',
        changeMonth: true,
        todayHighlight : true
    });
  
  
</script>

</html>