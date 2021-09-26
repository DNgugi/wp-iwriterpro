<?php
/**
 * The front page template file
 *  
 * @package iwriter
 */

get_header(); ?>
  <main class="container">
    <div id="welcome">
     <div class="hero-text">
        <h2>Need a pro writer?</h2>
      <h4>Get your project started right now!</h4>
      <a href="https://wa.me/254716585138" target="_blank">
      <button class="btn"><span class="material-icons">
        whatsapp
      </span> <span>WhatsApp Us</span></button>
      </a> 
     </div>
     <div class="form card">
       <div class="form-widget">
         <?php get_sidebar( 'order-form' );
       ?>
       </div>
       <!-- <form action="">
         <h2>Order Form Widget Here </h2>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consectetur sunt deleniti enim, sint illo amet veritatis. Facere eligendi voluptatum repellat ipsum deserunt quia quis.</p>
       </form> -->
     </div>   
    </div>
    <div id="services">
      <h2 class="title center">Our Services</h2>
      <div class="card one">
        <h3 class="card-title">Academic Writing</h3>
        <p class="card-body">We have over 5 years experience writing academic papers that exceed your expectations in quality</p>
      <!-- <button class="btn">Learn More</button> -->
      </div>
      <div class="card two">
        <h3 class="card-title">Research</h3>
        <p class="card-body">Struggling with research and data analysis on your project? We use modern approaches and tools to help you get great results</p>
      <!-- <button class="btn">Learn More</button> -->
      </div>
    
      <div class="card three">
        <h3 class="card-title">Proof Reading</h3>
        <p class="card-body">A fresh pair of eyes goes a long way in producing excellent writing. Our editors are experienced and will help you clarify and improve your work.</p>
      <!-- <button class="btn">Learn More</button> -->
      </div>
    </div>
    <div id="support">
      <h2>Need help?</h2>
      <div class="contacts">
        <p><span class="material-icons">
          phone
        </span> <a href="callto:254716585138">0716585138</a></p>
        <p><span class="material-icons">
          whatsapp
        </span> <a href="https://wa.me/254716585138">0716585138</a></p>
        <p><span class="material-icons">
          email
        </span> <a href="mailto:help@iwriterpro.com">help@iwriterpro.com</a></p>
      </div>
     
    </div>
  </main>
  <?php get_footer(); ?>

