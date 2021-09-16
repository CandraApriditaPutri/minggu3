@extends('layout.home')
@section('title', 'Home')

@section('header')
       <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="template/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="http://127.0.0.1:8000/Home" class="active">Home</a></li>
                <li><a href="#">Today Special</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="http://127.0.0.1:8000/Profile">Profile</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
@endsection    

@section('content')
@parent
        <div class="tm-lights-container">
          <img src="template/img/light.png" alt="Light" class="light light-1">
          <img src="template/img/light.png" alt="Light" class="light light-2">
          <img src="template/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="template/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="template/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
          <p class="gray-text tm-welcome-description">It is a cozy place to hang out or chat with friends/friends/family while enjoying drinks and food that has been provided on the menu list.
            Cafe House is designed to be <span class="gold-text">very attractive and instagramable</span> so that it makes guests feel at home to linger there. </p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>
        <img src="template/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">The Best Coffee for you</h2>
            <h2>Cafe House</h2>
            <p class="tm-welcome-description">To add to the appeal of young people, </span><span class="green-text">we provide entertainment such as live music</span> on Sunday nights or special days to accompany visitors to talk casually with music.</p>
            <a href="#" class="tm-more-button margin-top-30">Read More</a> 
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="template/img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>            
        </section>          
        <section class="tm-section tm-section-margin-bottom-0 row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="template/img/logo.png" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
            <div class="tm-popular-item">
              <img src="template/img/popular-1.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">a</span>mericano</h3><hr class="tm-popular-item-hr">
                <p>Americano is made by mixing a shot of espresso (coffee bean extraction) with hot water. It's very nice.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="template/img/popular-2.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">c</span>appuccino</h3><hr class="tm-popular-item-hr">
                <p>Cappuccino is synonymous with milk foam and cocoa powder sprinkled on top of the foam. Cappuccino has a stronger coffee taste.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
            <div class="tm-popular-item">
              <img src="template/img/popular-3.jpg" alt="Popular" class="tm-popular-item-img">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title"><span class="tm-handwriting-font bigger-first-letter">m</span>ocha</h3><hr class="tm-popular-item-hr">
                <p>Mocha is a mixture of espresso with chocolate, so mocha has a sweet taste when compared to other types of coffee drinks.</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
          </div>          
        </section>
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="template/img/logo.png" alt="Logo" class="tm-site-logo"> Today's Special</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
          <div class="col-lg-12 tm-special-container margin-top-60">
            <div class="tm-special-container-left"> <!-- left -->
              <div class="tm-special-item">
                <div class="tm-special-img-container">
                  <img src="template/img/special-1.jpg" alt="Special" class="tm-special-img img-responsive">  
                  <a href="#">
                    <div class="tm-special-description">
                      <h3 class="tm-special-title">Latte</h3>
                      <p>Is a type of coffee that tastes more milky when compared to cappuccino. Famous for its latte art.</p>  
                    </div>            
                  </a>
                </div>
              </div>
            </div>
            <div class="tm-special-container-right"> <!-- right -->
              <div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="template/img/special-2.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <h3 class="tm-special-title">Pastry</h3>
                        <p>Delicious and appetizing</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>
              <div class="tm-special-container-lower">
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="template/img/special-3.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Fresh Fruits</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="tm-special-item">
                  <div class="tm-special-img-container">
                    <img src="template/img/special-4.jpg" alt="Special" class="img-responsive">  
                    <a href="#">
                      <div class="tm-special-description">
                        <p>Various Noodles</p>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>              
            </div>
          </div>
        </section>
        <section class="tm-section">
          <div class="row">
            <div class="col-lg-12 tm-section-header-container">
              <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="template/img/logo.png" alt="Logo" class="tm-site-logo"> Daily Menu</h2> 
              <div class="tm-hr-container"><hr class="tm-hr"></div> 
            </div>  
          </div>          
          <div class="row">
            <div class="tm-daily-menu-container margin-top-60">
              <div class="col-lg-4 col-md-4">
                <img src="template/img/menu-board.png" alt="Menu board" class="tm-daily-menu-img">      
              </div>            
              <div class="col-lg-8 col-md-8">
                <p>Various kinds of drinks and halal food are available at our Cafe House.</p>
                <ol class="margin-top-30">
                  <li>Americano</li> 
                  <li>Cappucino</li>
                  <li>Mocha</li> 
                  <li>Latte</li> 
                  <li>Pastry</li> 
                  <li>Fresh Fruits</li> 
                  <li>Various Noodles</li>
                </ol>
                <a href="#" class="tm-more-button margin-top-30">Read More</a>    
              </div>
            </div>
          </div>  
          </section> 
@endsection 

@section('footer')
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="http://127.0.0.1:8000/Home">Home</a></li>
                <li><a href="http://127.0.0.1:8000/Profile">Profile</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">We provide a wide variety of halal food and drinks, plus a strategic location that will make you feel at home for long in our cafe.</p>
              <p class="margin-top-15">Come on, visit our cafe house.. Guaranteed you will be addicted to the menu in our cafe..</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Follow our social media accounts, to find out the latest info about Cafe House !!</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/candraapridita" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/candra-apridita-putri-986a3a1b6" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/UCUA9F52wYjpokjz1-M8M93w" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>              
      <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2021 Owner Cafe House-Candra Apridita Putri</p>
         </div>  
      </div>
@endsection