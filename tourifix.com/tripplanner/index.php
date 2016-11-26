<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="theme-color" content="#ffe439"> -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/favicon.ico">

    <title>SAMPLE</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../assets/css/carousel.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

<?php
include('../nav.php');
?>

<!-- <div class="row" style="position:absolute;top:100px;">
  <div style="background-color:#d9d9d9">
    <div class="container marketing">
    <div class="col-lg-2"><h4 class="tag-about-main"><span class="adesc">What's so great about Tourifix <span class="glyphicon glyphicon-chevron-right"></span></span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Handpicked</span><br /><span class="adesc">Tourist &amp; Activities</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Verified</span><br /><span class="adesc">Reviews &amp; Photos</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">VIP</span><br /><span class="adesc">Access</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Low Prices</span><br /><span class="adesc">Guaranteed</span></h4></div>
    <div class="col-lg-2"><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></div>
  </div>
</div></div> -->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="visibility:visible;">
      <!-- Indicators -->
      <ol class="carousel-indicators" style="visibility:hidden">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="700px">
		  <img class="first-slide" src="../files/kuala-lumpur.jpg" alt="First slide" style="700px">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>Full Day: Heritage Tour of Malacca from Kuala Lumpur</h1> -->
            </div>
          </div>
        </div>
        <div class="item" style="700px">
		  <img class="second-slide" src="../files/kl-skyline_night.jpg" alt="Second slide" style="700px">
          <div class="container">
            <div class="carousel-caption">
              <!-- <h1>Kuala Lumpur Cultural and Heritage Tour</h1> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="visibility:hidden">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="visibility:hidden">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <div id="index-search-form" class="row" style="top:50px;">
    <div class="container marketing">
              <div class="panel-group">
                  <div class="panel panel-transparent-black"><!-- TRIP PLANNER -->
                  <!-- <div class="panel-heading">Please enter username and password.</div> -->
                  <div class="panel-body" style="text-align:left;">
                      <!-- <div class="row">
                      <form class="form" role="form">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <div class="col-sm-10">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input style="border:solid 2px white;background: rgba(0, 0, 0, 0.3);color:white;" type="email" id="inputEmail" class="form-control" placeholder="Search destinations, attaractions and tours" required autofocus>
                        </div>
                        <div class="col-sm-2">
                        <button class="btn btn-md btn-primary btn-block" type="submit">Let's go</button>
                        </div>
                      </form>
                      </div> -->

                      <div class="row">
                        <div class="col-sm-4">
                          <!-- <button class="btn btn-md btn-primary btn-block" type="submit">Let's go</button> -->
                        </div>
                        <div class="col-sm-4">&nbsp;
                          <!-- <button class="btn btn-md btn-primary btn-block" type="submit">Let's go</button> -->
                        </div>
                        <div class="col-sm-4">
                        <!-- <button class="btn btn-md btn-primary btn-block" type="submit">Let's go</button> -->
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-sm-4">

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#recomend"><span class="glyphicon glyphicon-star"></span> Recomended</a></li>
  <li><a data-toggle="tab" href="#mine"><span class="glyphicon glyphicon-bookmark"></span> My Items</a></li>  
</ul>

<div class="tab-content" style="background:white;">
  <div id="recomend" class="tab-pane fade in active" style="height:310px;overflow-h:hidden;overflow-y:auto;">
<!-- ================================================================================================= -->
                            <div class="row" style="padding:2px 3px 2px 3px;">
                              
                              <div class="col-xs-6">
                              <a href="#"><div class="thumbnail">
                                    <?php 
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://kedah.attractionsinmalaysia.com/img/photoState/kedah/PulauPayarMarinePark/1.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                <!-- <div class="caption"> --><div>
                                    Pulau Payar
                                  <!-- <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p> -->
                                </div>
                              </div></a>
                              </div>

                              <div class="col-xs-6">
                              <div class="thumbnail">
                                    <?php 
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://images.fanpop.com/images/image_uploads/KL-Tower-malaysia-567872_350_321.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                  <!-- <div class="caption"> --><div>
                                    KL Tower
                                    <!-- <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p> -->
                                    </div>
                                  </div>
                                </div>

                            </div>

                            <div class="row" style="padding:2px 3px 2px 3px;">
                              
                              <div class="col-xs-6">
                              <div class="thumbnail">
                                    <?php 
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://www.chiantiviaggi.it/viaggi-su-misura/dati/viaggi_foto_1_46.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" >';
                                    ?>
                                <!-- <div class="caption"> --><div>
                                    Taman Negara
                                  <!-- <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p> -->
                                </div>
                              </div>
                              </div>

                              <div class="col-xs-6">
                              <div class="thumbnail">
                                    <?php 
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://anekatempatwisata.com/wp-content/uploads/2014/07/Legoland.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                  <!-- <div class="caption"> --><div>
                                    Legoland
                                    <!-- <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p> -->
                                    </div>
                                  </div>
                                </div>

                            </div>

                            <div class="row" style="padding:2px 3px 2px 3px;">
                              
                              <div class="col-xs-6">
                              <div class="thumbnail">
                                    <?php 
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://www.chiantiviaggi.it/viaggi-su-misura/dati/viaggi_foto_1_46.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" >';
                                    ?>
                                <!-- <div class="caption"> --><div>
                                    Taman Negara
                                  <!-- <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p> -->
                                </div>
                              </div>
                              </div>

                              <div class="col-xs-6">
                              <div class="thumbnail">
                                    <?php 
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://anekatempatwisata.com/wp-content/uploads/2014/07/Legoland.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                  <!-- <div class="caption"> --><div>
                                    Legoland
                                    <!-- <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p> -->
                                    </div>
                                  </div>
                                </div>

                            </div>
<!-- ================================================================================================= -->

  </div>
    <div id="mine" class="tab-pane fade" style="overflow-x:auto;">
  </div>
</div>


                        </div>
                        <div class="col-sm-4">
                            <div class="list-group">
                              <a href="#" class="list-group-item disabled">First item</a>
                              <a href="#" class="list-group-item">Second item</a>
                              <a href="#" class="list-group-item">Third item</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <div id="googleMap" style="width:100%;height:350px"></div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-4">
                          <button class="btn btn-md btn-primary btn-block" type="submit"><i class="fa fa-arrow-circle-down fa-1x" aria-hidden="true"></i> Retrive saved guides</button>
                        </div>
                        <div class="col-sm-4">&nbsp;</div>
                        <div class="col-sm-4">
                          <div class="btn-group btn-group-justified">
                            <div class="btn-group"><button class="btn btn-md btn-primary" type="submit">Save</button></div>
                            <div class="btn-group"><button class="btn btn-md btn-primary" type="submit">Download PDF</button></div>
                            <div class="btn-group"><button class="btn btn-md btn-primary" type="submit"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></button></div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- <div class="panel-footer">&copy; 2015 CanShow</div> -->
                  </div>
              </div>
    </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


<!-- <div class="row" style="margin-top:-60px;margin-right:0px">
  <div style="background-color:#d9d9d9">
    <div class="container marketing">
    <div class="col-lg-2"><h4 class="tag-about-main"><span class="adesc">What's so great about Tourifix <span class="glyphicon glyphicon-chevron-right"></span></span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Handpicked</span><br /><span class="adesc">Tourist &amp; Activities</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Verified</span><br /><span class="adesc">Reviews &amp; Photos</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">VIP</span><br /><span class="adesc">Access</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Low Prices</span><br /><span class="adesc">Guaranteed</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">24/7 Support</span><br /><span class="adesc">With a live Person</span></h4></div>
  </div>
</div></div> -->

    <div class="container marketing" style="margin-top:25px">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
                <?php 
                  echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://www.chiantiviaggi.it/viaggi-su-misura/dati/viaggi_foto_1_46.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" >';
                ?>
            <div class="caption">
              <h2>Taman Negara</h2>
              <p>Enjoy an exciting tour to Taman Negara National Park and the Kuala Gandah Elephant Sanctuary. Let your worries wash away as you delight in a range of great outdoor activities.</p>
              <p><a class="btn btn-primary" href="<?php echo(ROOT); ?>card.php?p=PHG1" role="button">View details &raquo;</a></p>
            </div>
          </div>
        </div>

          <div class="col-lg-4">
          <div class="thumbnail">
                <?php 
                  echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://images.fanpop.com/images/image_uploads/KL-Tower-malaysia-567872_350_321.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                ?>
            <div class="caption">
                <h2>KL Tower</h2>
                <p>Head to the observation deck of the KL Tower and enjoy a buffet dinner with a breathtaking, panoramic night view of the city in the tower’s revolving restaurant.</p>
              <p><a class="btn btn-primary" href="<?php echo(ROOT); ?>card.php?p=KLP49" role="button">View details &raquo;</a></p>
            </div>
          </div>
        </div>

          <div class="col-lg-4">
          <div class="thumbnail">
                <?php 
                  echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://kedah.attractionsinmalaysia.com/img/photoState/kedah/PulauPayarMarinePark/1.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                ?>
            <div class="caption">
                <h2>Pulau Payar</h2>
                <p>Set sail on a catamaran cruise through West Malaysia’s only marine park, stationed south of Langkawi Island. Enjoy a closer look at coral, tropical fish and other colourful marine life.</p>
              <p><a class="btn btn-primary" href="<?php echo(ROOT); ?>card.php?p=KDH33" role="button">View details &raquo;</a></p>
            </div>
          </div>
        </div>
      </div>

      
      <?php
      include('../destinations.php');
      ?>
      <!-- START THE FEATURETTES -->
<!-- 	<h2 class="m_featurette">Channels</h2>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <a href="show.php"><img class="featurette-image img-responsive center-block  img-rounded" src="files/Traffic_Jam_Karak2.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <a href="show.php"><img class="featurette-image img-responsive center-block img-rounded" src="files/famemas.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <a href="show.php"><img class="featurette-image img-responsive center-block img-rounded" src="files/cheras-pasar-malam.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider"> -->

      <!-- /END THE FEATURETTES -->

<!--Dream Holiday Content-->
<div class="row featurette">
    
        
            <div class="col-md-12">
<p class="lead">Craft Your Dream Holidays With Tourifix</p>
    Obsessed with the idea of empowering the travelers with best vacation deals, Tourifix is a product of Holiday Tourifix Sdn. Bhd. We are an online market place that connects a traveler to multiple local travel agents. With the help of these 450+ local experts Tourifix has been able to cater to the needs of over 1.5 lakh travelers on international tour holidays as well as domestic Malaysia tours. To provide the best tour and travel experiences, our packages are customizable at the time of booking.</br>
    </br>
<!-- From a backpacker’s needs to a honeymooner’s demands, Tourifix crafts the best vacation deals for holiday destinations in Malaysia as well as abroad. Amongst our best selling packages, our Mauritius honeymoon package guarantees personalized memories for newlyweds and our Mauritius holiday package offers an exceptional family getaway at the most reasonable costs. From the other international travel deals that we offer, Sri Lanka Tour packages, Maldives packages and Singapore packages sell like hot cakes. For tourist destinations in India, our Kerala Tour Packages are as enriching as the land of gods itself. Leh-Ladakh tour packages and Kashmir holiday packages at Tourifix know no limits of customization, as we have got an extremely experienced family of agents residing in the Himalayas.</br></br> -->

Book with us and we show you the world like you have never seen before. From adventures in Ladakh to a crazy vacation in Amsterdam to trips of romances in backwaters of Munnar and Venice, Tourifix is your ideal travel buddy.
</div>

</div>
 <hr class="featurette-divider">
<!--Dream Holiday Content End-->




    </div><!-- /.container -->


      <!-- FOOTER -->
      <div class="footer-fix1">

      <?php
      include('../footer.php');
      ?>

      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="http://maps.googleapis.com/maps/api/js?key=<?php echo(GAPI); ?>"></script>
<script>
function initialize()
{
  var mapProp= {
    center:new google.maps.LatLng(4.1341417,102.225539),
    zoom:6,
    mapTypeControl: false,
    draggable: true,
    scaleControl: false,
    scrollwheel: false,
    navigationControl: false,
    streetViewControl: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP,
    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  </body>
</html>
