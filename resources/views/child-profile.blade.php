@extends('layout.profile')
@section('title', 'Profile')

@section('header')
@parent
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
                <li><a href="http://127.0.0.1:8000/Home">Home</a></li>
                <li><a href="#">Today Special</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="http://127.0.0.1:8000/Profile" class="active">Profile</a></li>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="template/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Profile Owner&nbsp;&nbsp;<img src="template/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
          <p class="gray-text tm-welcome-description">Our owner name is <span class="gold-text">CANDRA APRIDITA PUTRI.</span> She was Born in Bojonegoro, 14 April 2002. Her current age is 19 years old. Now, studying at the Malang State Polytechnic. Department of Information Technology D3 Informatics Management study program.
          After graduating, hopefully our owner can further develop this cafe business, and open branches in big cities..</p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Message Now</a>      
        </div>
        <img src="template/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Send our owner a message to provide suggestions, so that the cafe service is even better.</h2>
          <form action="#" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
              </div>
              <div class="form-group">
                <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
              </div>
              <div class="form-group">
                <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
              </div>
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">Send message</button> 
              </div>               
            </div>
          </form>
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