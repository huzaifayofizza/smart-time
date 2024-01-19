<?php
require("shared/connection.php");
include("shared/_navbar.php");
?>
      <!-- inner page section -->
      <section class="inner_page_head ">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Contact us</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="index.php">
                        <fieldset>
                           <input type="text" placeholder="Enter your full name" name="name" required />
                           <input type="email" placeholder="Enter your email address" name="email" required />
                           <input type="text" placeholder="Enter subject" name="subject" required />
                           <textarea placeholder="Enter your message" required></textarea>
                           <input type="submit" value="Submit" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->
       <!-- arrival section -->
       <section class="arrival_section">
         <div class="container">
            <div class="box">
               <div class="arrival_bg_box">
                  <img src="images/arrival-bg.png" alt="">
               </div>
               <div class="row">
                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           #NewArrivals
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                     Introducing our latest arrivals in the world of horology—an exquisite collection of timepieces that seamlessly blend innovation with timeless elegance. Our new watch products are a testament to precision craftsmanship and contemporary design, each piece a harmonious fusion of style and functionality. From classic analog sophistication to cutting-edge smartwatch technology, our curated selection caters to diverse tastes. Elevate your wrist game with these meticulously crafted watches that not only keep you punctual but also make a bold statement about your refined taste </p>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end arrival section -->
      <?php
include("shared/_footer.php");
?>