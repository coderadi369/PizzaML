<footer class="row-footer">
        <div class="container">
            <div class="row">             
                <div class="col-md-4 col-sm-4">
                    <h5>Links</h5>
                     <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		             <i class="fa fa-phone"></i> Tel.: +852 1234 5678<br>
		             <i class="fa fa-fax"></i> Fax: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>Email: <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div style="padding-left: 40px;">
                       <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i>google+</a>
                        <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                        <a href="http://www.linkedin.com/in/">LinkedIn</a>
                        <a href="http://twitter.com/">Twitter</a>
                        <a href="http://youtube.com/">YouTube</a>
                        <a href="mailto:">Mail</a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                 </div>
                  <div>
                    <p style="padding:10px;"></p>
                    <p align=center>© Copyright 2015 Ristorante Con Fusion</p>
                   </div>
            
        </div>
    </footer>

</body>

<script>

        $(document).ready(function(){
          console.log("Document is ready");
            $("#mycarousel").carousel( { interval: 2000 } );
            $("#carousel-pause").click(function(){
                //console.log("pause button clicked");
                $("#mycarousel").carousel('pause');
            });
            $("#carousel-play").click(function(){
                 console.log("play button clicked");         
                $("#mycarousel").carousel('cycle');
            });
        });
</script>

</html>