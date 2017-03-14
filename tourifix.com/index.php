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
    <link rel="icon" href="assets/favicon.ico">

    <title>SAMPLE</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

  </head>
<!-- NAVBAR
================================================== -->
  <body>

<?php
include('nav.php');
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
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <!-- <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide"> -->
		  <img class="first-slide" src="files/bigstock_Tourist.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Full Day: Heritage Tour of Malacca from Kuala Lumpur</h1>
              <!-- <p>Come and experience the charms of old Malacca. This UNESCO World Heritage site preserves the rich multi-layered history of the city, from the Portuguese, Dutch and British traders to the Malays who mixed with Indian and Chinese immigrants forming the unique cultures and communities. Architecture of many traditions mixes with lively living heritage and local delicacies, making a visit to Malacca truly unforgettable.</p> -->
              <p><a class="btn btn-primary btn-md" href="card.php?p=MLK3" role="button">Explore Malacca</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"> -->
		  <img class="second-slide" src="files/home_03.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Kuala Lumpur Cultural and Heritage Tour</h1>
              <!-- <p>This tour will take you through the Heritage Trails of the early cultures in Malaysia and give you a great insight into Malaysia’s multi–cultural society. Note: Not available on Chinese New Year Festival.</p> -->
              <p><a class="btn btn-md btn-primary" href="card.php?p=KLP21" role="button">Discover it</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide"> -->
		  <img class="third-slide" src="files/img_1295.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Experience Malaysia: Authentic Malaysia Cooking Tour</h1>
              <!-- <p>Experience the best of Malaysian cuisine on this 6-hour Malaysian cooking tour in Penang. Browse the stalls at a food market in the fishing village of TelukBahang with your guide. As you explore, admire the fresh fruit, seafood and vegetables on display and learn how different ingredients are used in Malaysian cooking. Discover tropical spices and herbs at Penang’s Tropical Spice Garden, and gain insight into Malaysia’s spice-trading history. Afterward, roll up your sleeves and prepare some of the country’s favourite dishes yourself during a hands-on cooking lesson.</p> -->
              <p><a class="btn btn-md btn-primary" href="card.php?p=KLP8" role="button">Experience it</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <div id="index-search-form" class="row">
    <div class="container marketing">
              <div class="panel-group">
                  <div class="panel panel-transparent">
                  <!-- <div class="panel-heading">Please enter username and password.</div> -->
                  <div class="panel-body" style="text-align:left;">
                    <div class="row">
                     <form class="form" role="form">
                        <!-- <h2 class="form-signin-heading">Please sign in</h2> -->
                        <div class="col-sm-10">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input onclick="Show();" style="border:solid 2px white;background: rgba(0, 0, 0, 0.3);color:white;" type="email" id="inputEmail" class="form-control" placeholder="Search destinations, attaractions and tours" required autofocus>
                        </div>
                        <div class="col-sm-2">
                        <button class="btn btn-md btn-primary btn-block" type="submit">Let's go</button>
                        </div>
                      </form>
                      </div>
                  </div>
                  <!-- <div class="panel-footer">&copy; 2015 CanShow</div> -->
                  </div>

                   <div id="hidden-destinations" class="panel panel-default">
                    <div class="panel-body" style="text-align:left;padding:0px;"></div>
                  </div>
              </div>
    </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


<div class="row" style="margin-top:-60px;margin-right:0px;">
  <div style="background-color:#d9d9d9">
    <div class="container marketing">
    <div class="col-lg-2"><h4 class="tag-about-main"><span class="adesc">What's so great about Tourifix <span class="glyphicon glyphicon-chevron-right"></span></span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Handpicked</span><br /><span class="adesc">Tourist &amp; Activities</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Verified</span><br /><span class="adesc">Reviews &amp; Photos</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">VIP</span><br /><span class="adesc">Access</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">Low Prices</span><br /><span class="adesc">Guaranteed</span></h4></div>
    <div class="col-lg-2"><h4 class="tag-about"><span class="atitle">24/7 Support</span><br /><span class="adesc">With a live Person</span></h4></div>
  </div>
</div></div>
<!-- =============================================================================================================================================================== -->
<div class="container marketing" style="margin-top:25px;">
              <div class="panel-group">
                  <div class="panel panel-KL"><!-- TRIP PLANNER -->
                  <div class="panel-heading">Trip Planner</div>
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

                      <div class="row" style="padding-bottom:10px;">
                        <div class="col-sm-4">
                          <input style="border:solid 2px white;background: rgba(0, 0, 0, 0.3);color:white;" id="inputTripname" class="form-control" placeholder="Trip Name" autofocus>
                        </div>
                        <div class="col-sm-4">
                          <div class="row">
                          <div class="col-xs-12"><div class="input-group"><input style="border:solid 2px white;background: rgba(0, 0, 0, 0.3);color:white;" id="inputTripdays" class="form-control" placeholder="Days" value="1 day">
                          <span class="input-group-addon" id="addon-up"><i class="fa fa-chevron-up fa-1x" aria-hidden="true"></i></span><span class="input-group-addon" id="addon-down"><i class="fa fa-chevron-down fa-1x" aria-hidden="true"></i></span></div>
                          </div>
                          <!-- <div class="col-xs-4">
                            <div class="btn-group btn-group-justified">
                              <div class="btn-group"><button class="btn btn-md btn-primary" type="submit"><i class="fa fa-chevron-up fa-1x" aria-hidden="true"></i></button></div>
                              <div class="btn-group"><button class="btn btn-md btn-primary" type="submit"><i class="fa fa-chevron-down fa-1x" aria-hidden="true"></i></button></div>
                            </div>
                          </div> -->
                          </div>
                        </div>
                        <div class="col-sm-4"><div class="input-group">
                        <input style="border:solid 2px white;background: rgba(0, 0, 0, 0.3);color:white;" id="inputCalendar" class="form-control" placeholder="Arriving On" data-date-format="dd-mm-yyyy">
                        <span class="input-group-addon" id="addon-cal"><i class="fa fa-calendar fa-1x" aria-hidden="true"></i></span>
                        </div></div>
                      </div>


                      <div class="row">
                        <div class="col-sm-4">

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#recomend"><span class="glyphicon glyphicon-star"></span> Recomended</a></li>
  <li><a data-toggle="tab" href="#mine"><span class="glyphicon glyphicon-bookmark"></span> My Items</a></li>
</ul>

<div class="tab-content" style="background:white;">
  <div id="recomend" class="tab-pane fade in active">
<!-- ================================================================================================= -->
                            <!-- <div class="row" style="padding:2px 3px 2px 3px;"> -->

                              <div class="col-xs-6">
                              <a href="#" data-toggle="tooltip" title="At the south-western tip of Pulau Payar lies a dive site known as the Coral Garden, considered one of the best marine playgrounds for scuba divers. Get up close to multicoloured fish and soft corals while a professional guide accompanies you into the azure waters of Pulau Payar Marine Park. You\'ll enjoy high visibility as you keep company with a variety of fascinating sea creatures. This full-day excursion for certified divers includes round-trip hotel transport, diving equipment and a buffet lunch."><div class="thumbnail">
                                    <?php
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://kedah.attractionsinmalaysia.com/img/photoState/kedah/PulauPayarMarinePark/1.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" >';
                                    ?>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                                <!-- <div class="caption"> --><div>
                                    Pulau Payar
                                  <!-- <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p> -->
                                </div>
                              </div></a>
                              </div>

                              <div class="col-xs-6">
                              <a href="#" data-toggle="tooltip" title="Enjoy sweeping views over Kuala Lumpur from the KL Tower Observation Deck. The enclosed deck provides 360-degree views, and your admission ticket includes a multisensory movie experience at the XD Theater. You can also upgrade your ticket to add a stop at the Open Deck, which perches more than 1,000 feet high at the top of the tower."><div class="thumbnail">
                                    <?php
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://images.fanpop.com/images/image_uploads/KL-Tower-malaysia-567872_350_321.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                                  <!-- <div class="caption"> --><div>
                                    KL Tower
                                    <!-- <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p> -->
                                    </div>
                                  </div></a>
                                </div>

                            <!-- </div> -->

                            <!-- <div class="row" style="padding:2px 3px 2px 3px;"> -->

                              <div class="col-xs-6">
                              <a href="#" data-toggle="tooltip" title="Taman Negara is a 130 million years old rainforest that is home to many threatened mammals such as tigers, elephants, tapirs, rhinoceros, and sun bears. It is also home to 14,000 plants and flowers, 300 bird species and 238 freshwater fish species."><div class="thumbnail">
                                    <?php
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://www.chiantiviaggi.it/viaggi-su-misura/dati/viaggi_foto_1_46.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" >';
                                    ?>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                                <!-- <div class="caption"> --><div>
                                    Taman Negara
                                  <!-- <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p> -->
                                </div>
                              </div></a>
                              </div>

                              <div class="col-xs-6">
                              <a href="#" data-toggle="tooltip" title="Overview Important Info Private transfer from Kuala Lumpur International Airport (KLIA) to Legoland, Johore Bahru at your convenient and comfort. Meet and greet by a professional English speaking driver. Malaysia general information and history will be shared along the ride."><div class="thumbnail">
                                    <?php
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://anekatempatwisata.com/wp-content/uploads/2014/07/Legoland.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                                  <!-- <div class="caption"> --><div>
                                    Legoland
                                    <!-- <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p> -->
                                    </div>
                                  </div></a>
                                </div>

                            <!-- </div> -->

                            <!-- <div class="row" style="padding:2px 3px 2px 3px;"> -->

                              <div class="col-xs-6">
                              <a href="#" data-toggle="tooltip" title="Chill out on beautiful Pangkor Island, sunning you on the postcard-perfect white sand beaches, or enjoying a jetski ride or snorkeling. This Pangkor Island experience also includes round-trip transport from your hotel, ferry to the island, two nights’ accommodations and meals as per the itinerary."><div class="thumbnail">
                                    <?php
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://gowhere.my/wp-content/uploads/2015/07/Pulau-Pangkor-1-e1436773137878.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" title="">';
                                    ?>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                                <!-- <div class="caption"> --><div>
                                    Pulau Pangkor
                                  <!-- <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p> -->
                                </div>
                              </div></a>
                              </div>

                              <div class="col-xs-6">
                              <a href="#" data-toggle="tooltip" title="Get an insight into local life on Langkawi Island with this 3-hour tour, including hotel pick-up. Soak up a scenic panorama of lush rice paddies, rubber plantations and rural villages, and discover the island’s rich craft-making heritage at the Atma Alam Batik Art Gallery. After visiting landmarks like Makam Mahsuri (Mahsuri's tomb) and Eagle Square (Dataran Lang), stop at Kuah Town for some duty-free souvenir shopping."><div class="thumbnail">
                                    <?php
                                      echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://1.bp.blogspot.com/_48ZUpRNZcdE/SwKAF76BdrI/AAAAAAAAC9Y/8-oxDtirDS0/s1600/P1080162.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image">';
                                    ?>
                                    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Add</button>
                                  <!-- <div class="caption"> --><div>
                                    Pulau Langkawi
                                    <!-- <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p> -->
                                    </div>
                                  </div></a>
                                </div>

                            <!-- </div> -->
<!-- ================================================================================================= -->

  </div>
    <div id="mine" class="tab-pane fade">
  </div>
</div>


                        </div>
                        <div class="col-sm-4">
<!-- =============================================== -->
<ul id="tab-days" class="nav nav-tabs">
  <li id="tab-day-1" class="active"><a data-toggle="tab" href="#day-1">Day 1</a></li>
  <li id="tab-day-2" style="display:none;"><a data-toggle="tab" href="#day-2">Day 2</a></li>
  <li id="tab-day-3" style="display:none;"><a data-toggle="tab" href="#day-3">Day 3</a></li>
  <li id="tab-day-4" style="display:none;"><a data-toggle="tab" href="#day-4">Day 4</a></li>
  <li id="tab-day-5" style="display:none;"><a data-toggle="tab" href="#day-5">Day 5</a></li>
</ul>

<div id="tab-days" class="tab-content" style="background:white;height:310px;overflow-y:auto !important;">
  <div id="day-1" class="tab-pane fade in active">
      <div class="list-group">
          <!-- <a href="#" class="list-group-item disabled">1</a>           -->
      </div>
  </div>
  <div id="day-2" class="tab-pane fade">
      <div class="list-group">
          <!-- <a href="#" class="list-group-item disabled">2</a> -->
      </div>
  </div>
  <div id="day-3" class="tab-pane fade">
      <div class="list-group">
          <!-- <a href="#" class="list-group-item disabled">3</a> -->
      </div>
  </div>
  <div id="day-4" class="tab-pane fade">
      <div class="list-group">
          <!-- <a href="#" class="list-group-item disabled">4</a> -->
      </div>
  </div>
  <div id="day-5" class="tab-pane fade">
      <div class="list-group">
          <!-- <a href="#" class="list-group-item disabled">5</a> -->
      </div>
  </div>
</div>

<!-- =============================================== -->
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
                            <!-- <div class="btn-group"><button class="btn btn-md btn-primary" type="submit"><i class="fa fa-save fa-1x" aria-hidden="true"></i></button></div>
                            <div class="btn-group"><button class="btn btn-md btn-primary" type="submit"><i class="fa fa-file-pdf-o fa-1x" aria-hidden="true"></i></button></div>
                            <div class="btn-group"><button class="btn btn-md btn-primary" type="submit"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></button></div> -->
                            <div class="btn-group"><button id="nClear" class="btn btn-md btn-primary" type="submit"><!-- <i class="fa fa-save fa-1x" aria-hidden="true"></i> -->Clear All</button></div>
                            <div class="btn-group"><button id="nQuote" class="btn btn-md btn-primary" type="submit"><!-- <i class="fa fa-file-pdf-o fa-1x" aria-hidden="true"></i> -->Please Quoute Me!</button></div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- <div class="panel-footer">&copy; 2015 CanShow</div> -->
                  </div>
              </div>
    </div>

<!-- =============================================================================================================================================================== -->
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <!-- <div class="row">
        <div class="col-lg-4">
          <div class="thumbnail">
                <?php
                  echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode('http://www.chiantiviaggi.it/viaggi-su-misura/dati/viaggi_foto_1_46.jpg').'&w=400&h=300&p=false" alt="Generic placeholder image" >';
                ?>
            <div class="caption">
              <h2>Taman Negara</h2>
              <p>Enjoy an exciting tour to Taman Negara National Park and the Kuala Gandah Elephant Sanctuary. Let your worries wash away as you delight in a range of great outdoor activities.</p>
              <p><a class="btn btn-primary" href="card.php?p=PHG1" role="button">View details &raquo;</a></p>
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
              <p><a class="btn btn-primary" href="card.php?p=KLP49" role="button">View details &raquo;</a></p>
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
              <p><a class="btn btn-primary" href="card.php?p=KDH33" role="button">View details &raquo;</a></p>
            </div>
          </div>
        </div>
      </div> -->

      <?php
      include('toppick.php');
      include('destinations.php');
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
      include('footer.php');
      ?>

      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- <script src="assets/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=<?php echo(GAPI); ?>"></script>
    <script type="text/javascript">

    // http://www.eyecon.ro/bootstrap-datepicker/#
    $('#inputCalendar').datepicker();
    $('#addon-cal').click(function(){$('#inputCalendar').focus()});

    $('#nQuote').click(function(){
      window.location="quote.php";
    });

    var topPick = 1;
    toggleTopPick(topPick);

    $('#recomend').find('button').click(function(event){event.preventDefault();addRecommend($(this).parent())});

    var DAY=0;toggleDays(0);
    $('#myCarousel').click(function(){NoShow()});
    $('#inputEmail').keyup(function( event ) {if ( event.which === 27 ) {NoShow();}});
    $('#addon-up').click(function(){toggleDays(1)});
    $('#addon-down').click(function(){toggleDays(-1)});
    function toggleDays(d){
        var days = ["1 day", "2 days", "3 days","4 days","5 days"];
        var tabs = ["Day 1", "Day 2", "Day 3","Day 4","Day 5"];
        if((DAY+d>=0)&&(DAY+d<days.length)){
          DAY=DAY+d;
          console.log(DAY+1);
          $('#inputTripdays').val(days[DAY]);
          if(d>0){
            // console.log("add");
            $('#tab-day-'+(DAY+1)).show();
            $('#day-'+(DAY+1)+' div').show();
          }else if(d<0){
            // console.log("remove");
            //CHECK ITEMS FIRST
            $('#tab-day-'+(DAY+2)).hide();
            $('#day-'+(DAY+2)+' div').hide();
            $('#tab-day-1 a').trigger( "click" );
          }
        }
    }

    // sleep time expects milliseconds
    function sleep (time) {
      return new Promise((resolve) => setTimeout(resolve, time));
    }

    function toggleTopPick(x){

        sleep(10000).then(() => {

          console.log(x);
          switch(x) {
              case 1:
                  $('#toppick_r1').show();
                  $('#toppick_r2').hide();
                  $('#toppick_r3').hide();
                  break;
              case 2:
                  $('#toppick_r1').hide();
                  $('#toppick_r2').show();
                  $('#toppick_r3').hide();
                  break;
              default:
                  $('#toppick_r1').hide();
                  $('#toppick_r2').hide();
                  $('#toppick_r3').show();
          }
          topPick = topPick + 1;
          if (topPick == 4){topPick=1;};
          setInterval(toggleTopPick(topPick), 10000);

        });

    }

    function Show(){
        $('#hidden-destinations .panel-body').html($('#select-destination').html());
        $('#hidden-destinations .panel-body h2').each(function(){$( this ).replaceWith( '<h4 style="text-align:left">' + $( this ).html() + '</h4>' );});
        $('#hidden-destinations').show();
        $('.carousel-indicators').hide();
    }
    function NoShow(){
        $('#hidden-destinations').hide();
        $('#hidden-destinations .panel-body').html('');
        $('.carousel-indicators').show();
    }
    function addRecommend (a) {
      var aform = ['<div class="row" style="padding-bottom:10px;">',
                        '<div class="col-sm-4">',
                        '<label for="number_of_hour">Time to spent :</label>',
                        '<select name="number_of_hour" class="form-control input-sm">',
                        '<option value="1">1 hour</option>',
                        '<option value="2">2 hours</option>',
                        '<option value="3">3 hours</option>',
                        '<option value="4">4 hours</option>',
                        '<option value="5">5 hours</option>',
                        '<option value="6">6 hours</option>',
                        '<option value="7">7 hours</option>',
                        '<option value="8">8 hours</option>',
                        '</select>',
                                  '</div>',
                                  '<div class="col-sm-4">',
                      '<input class="form-control input-sm" name="thepax" value="1" type="number" min="1" max="1000"placeholder="No of pax">',
                                  '</div>',
                                  '<div class="col-sm-4">',
                       '<select name="transport" class="form-control input-sm">',
                        '<option value="1">car</option>',
                        '<option value="2">mpv</option>',
                        '<option value="3">bus</option>',
                        '</select>',
                        '</div>',
                      '</div>'].join('');

                      // console.log(aform);

      var appstr = '<a href="#" class="list-group-item" onclick="return false;"><button type="button" class="btn btn-xs btn-danger" style="float:right;" title="Remove itinerary" onclick="RemoveItinerary($(this));return false;"><span class="glyphicon glyphicon-remove"></span></button><h4>#TEXT</h4><p>#DESC</p><p>#ITEM</p></a>';
      appstr = appstr.replace('#ITEM','<i class="fa fa-clock-o fa-1x" aria-hidden="true"> 1 hour</i> &nbsp; <i class="fa fa-users fa-1x" aria-hidden="true"> 1 pax</i> &nbsp; <i class="fa fa-bus fa-1x" aria-hidden="true"> car</i> &nbsp; <button type="button" class="btn btn-xs btn-success" style="float:right;" title="Edit itinerary" onclick="return false;"><span class="glyphicon glyphicon-pencil"></span></button><div class="my-popover-content">#FORM</div>');
      a.hide();
      inTxt = a.text().replace('Add','').trim();
      inDesc = a.parent().parent().children().prop("title");
      // console.log(inDesc);
      // $('#day-'+(DAY+1)).find('.list-group').append(appstr.replace('#TEXT',inTxt));

      //alert($("#tab-days .active a[data-toggle^='tab']").text());
      $("#tab-days .active").find('.list-group').append(appstr.replace('#TEXT',inTxt).replace('#DESC',inDesc).replace('#FORM',aform));
      initList();
      // switch(DAY) {
      //   case 0:
      //       // code block
      //       break;
      //   case 1:
      //       // code block
      //       break;
      //   case 2:
      //       // code block
      //       break;
      //   case 3:
      //       // code block
      //       break;
      //   case 4:
      //       // code block
      //       break;
      //   default:
      //       // default code block
      // }
    }
    function RemoveItinerary($d){
      // var dtxt = $d.parent().closest( "h4" ).text().trim();
      var dtxt = $d.parent().children()[1].innerText;
      // console.log(dtxt);
      $d.parent().remove();
      $('#recomend').find('a').each(function(){
        // console.log($(this).text().replace('Add','').trim()+"==="+dtxt);
        // console.log($(this));
        if($(this).text().replace('Add','').trim()===dtxt){$(this).find('.thumbnail').show();return false;}
        // console.log($(this).text().replace('Add','').trim());
      });
    }

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

// $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();



// });

function initList(){
  // $('button[title="Edit itinerary"]').click(function(){console.log('Johore');});
    popoverOptions = {
        content: function () {
            // Get the content from the hidden sibling.
            return $(this).parent().siblings('.my-popover-content').html();
        },
        trigger: 'click',
        animation: false,
        placement: 'left',
        html: true
    };
    $('button[title="Edit itinerary"]').popover(popoverOptions);
}
    </script>
  </body>
</html>
