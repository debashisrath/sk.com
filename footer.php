 <div class="heightfix-footer"></div>
    <!-- footer -->
   <footer>
 
     <div class="container">
      <div class="row">
       <div class="col-md-6">
          <div class="row">
             <div class="col-md-6">
              <h4>Links</h4>
              <ul class="footer-list">
                <li><a href="gem-stones.php">Gem Stones</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="astrology.php">Astrology</a></li>
                <li><a href="rudraksha.php">Rudraksha</a></li>
                <li><a href="chakra.php">Chakra</a></li>
                <li><a href="hypnosis.php">Hypnosis</a></li>
                <li><a href="about-us.php">About</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
              </ul> 
             </div>
             <div class="col-md-6">
              <h4>Get In Touch</h4>
                <p><span class="glyphicon glyphicon glyphicon-phone"></span> +91-9845124158</p>
                <p><span class="glyphicon glyphicon glyphicon-phone"></span> +91-8884197999</p>
                <p><span class="glyphicon glyphicon glyphicon-phone"></span> +91-8884985444</p>
             </div>
          </div>
         
         <div class="row fb-like-bt">
          <div class="col-md-12">
            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSantoshsharmaacom-1671819039756775%2F&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          </div>
      </div>
  </div>
    <div class="col-md-6">
        <p> <span class="glyphicon glyphicon-map-marker"></span> Rudra Centre 6 CMH Road, Near Metro Station, Indira Nagar,<br> &nbsp;&nbsp;&nbsp; Bangalore, India - 560038.</p>
      <div style="width:100%;overflow:hidden;height:300px;max-width:100%;border:10px solid #ffffff;">
        <div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;">
          <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.89952923935!2d77.63774091423267!3d12.978277518244592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a5060967b3%3A0xdb910adf189da24a!2s6%2C+Chinmaya+Mission+Hospital+Rd%2C+Stage+2%2C+Stage+1%2C+Indiranagar%2C+Bengaluru%2C+Karnataka+560038!5e0!3m2!1sen!2sin!4v1449241816497"></iframe>
        </div>
      </div>
   </div>
 </div>
 </div>
  </footer>
<!-- Modal -->
<div class="modal fade" id="myModalbanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enquiry Form</h4>
      </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-12 my-home-form-popup">
                      <form name="contact" id="contact" action="thankyou-inner.php" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                          <label for="name">Full Name:</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="First Name"  maxlength="32" required>
                        </div>
                        <div class="form-group">
                          <label for="mobile">Mobile Number:</label>
                          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number"  maxlength="32" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email"  maxlength="32" required>
                        </div>
                          <input type="submit" value="Submit" class="btn btn-primary btn-lg">
                      </form>       
                   </div>
                </div>  
            </div>
      </div>
    </div>
  </div>
</div>
<!-- Schema code -->

<div style="display:none;">
      <div itemscope itemtype="http://schema.org/Organization">
      <a itemprop="url" href="http://www.santoshsharmaa.com/"><div itemprop="name"><strong>santoshsharmaa</strong></div>
      </a>
      <div itemprop="description">Santosh Sharmaa online astrology prediction free in Bangalore,Vedic astrology (JYOTISH) readings assume the law of karma and past births. That is why, in our horoscopes we find mention of “Dasha Bhukti balance.There are resonance relationships between the planets, colors and other phenomena. Each planet is resonant with specific frequencies of the color spectrum.</div>
      <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <span itemprop="streetAddress">Rudra Centre 6 CMH Road, Near Metro Station, Indira Nagar</span><br>
      <span itemprop="addressLocality">Bangalore</span><br>
      <span itemprop="addressRegion">Karnataka</span><br>
      <span itemprop="postalCode">560038</span><br>
      <span itemprop="addressCountry">India</span><br>
      </div>
      </div>
</div>


<!-- End Schema code -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.slicknav.js"></script>
  </body>
  <script type="text/javascript">
        $(document).ready(function(){
          $('#menu').slicknav();
        });
  </script>
   <script type="text/javascript">
           
           function validateForm() {
            var x = document.forms["contact"]["name"].value;
            if (x == null || x == "") {
                alert("Please Enter Your Name.");
                return false;
            }
            var mobile = $('#mobile').val();  
                if(mobile==null || mobile=="")
                {
                  alert("Please enter a valid 10 digit Mobile No.");  
                  return false;
                }   
                 else if(mobile=="" || mobile.length!=10)
                {
                  alert("Please enter valid Mobile Number. Example 9845124158 \nNo need to add country code or 0 in the beginning");  
                  return false;
                }    
                if(isNaN($('#mobile').val())){
                   alert("Please enter a valid 10 digit Mobile No."); 
                return false;
               }
             var x=document.forms["contact"]["email"].value;
              var atpos=x.indexOf("@");
              var dotpos=x.lastIndexOf(".");
              if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
              {
              alert("Please Enter a Valid Email Address");
              return false;
              }
            }

</script>
</html>
