<script src="JS/jquery.js"></script>
<script>
$(document).ready(function(){
    // Autocomplete Textbox
    $("#search").keyup(function(){
      var search = $(this).val();

      if(search != ''){
         $.ajax({
            url: "recomed.php",
            method: "POST",
            data: { search: search},
            success: function(data){
              $("#cityList").fadeIn("fast").css({"z-index":"1"}).html(data);
            }
         }); 
      }else{
        $("#cityList").fadeOut();
      }
    });

    // Autocomplete List Click Code
    $(document).on('click','#cityList li',function(){
      $('#search').val($(this).text());
      $("#cityList").fadeOut();
    });
});
</script>

  <!-- Site footer -->
  <link rel="stylesheet" href="CSS/footer.css">
  <footer class="site-footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-5">
            <h6 style="font-size:14px">About Us</h6>
            <p class="text-justify small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non quas consequuntur similique excepturi porro natus recusandae ab commodi amet assumenda iusto optio quod adipisci delectus perferendis at, eos quidem, corporis cum maiores placeat! Et at debitis in quaerat officia, necessitatibus illo. Hic omnis itaque veritatis? Totam odio sit omnis laboriosam!</p>
          </div>

          <div class="col-xs-6 col-md-4">
            <h6 style="font-size:14px">Contact</h6>
            <hr>
            <ul class="footer-links">
              <li style="font-size:18px">(+91) <a href="#">8318770766</a> (Customer Care)</li>
              <li style="font-size:14px">Email: <a href="#">coustomerservice@bookself.com</a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6 style="font-size:14px">Company</h6>
            <hr>
            <ul class="footer-links">
              <li style="font-size:12px"><a href="aboutus.php">About Us</a></li>
              <li style="font-size:12px"><a href="">Contact Us</a></li>
              <li style="font-size:12px"><a href="">Privacy Policy</a></li>
              <li style="font-size:12px"><a href="terms&condition.php">Terms and Condition</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="index.php">Book<snap onMouseOut="this.style.color='#737373'" onMouseOver="this.style.color='#ff3054'">Self<span></a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" target="_blank" href="https://www.facebook.com/navneetpal25/"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" target="_blank" href="https://www.instagram.com/navneetpal.25"><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
<script src="JS/jquery.min.js"></script>
<script src="JS/owl.carousel.min.js"></script>
</body>
</html>