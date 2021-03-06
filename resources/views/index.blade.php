@extends('header')


@section('contenu')

<div class="">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

   <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/slider/1.jpg" style="width:100%" data-src="" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption ">
                                <div class="row">
                                <div class="col-lg-4">                              
                                <h2>Vous recherchez une location ?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                                <p><span class='glyphicon glyphicon-map-marker' style='font-size:24px'></span>Au BENIN</p>
                                <p><a class="btn btn-primary" href="#" role="button">Rechercher</a></p>
                                  </div>
                                  <div class="col-lg-8">
                                    
                                  </div> 
                                  </div>                               
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider/2.jpg" style="width:100%" data-src="" alt="Second    slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <h2>L'appartement fait pour vous?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                    <p><span class='glyphicon glyphicon-map-marker' style='font-size:24px'></span>Au BENIN</p>
                                    <p><a class="btn btn-primary" href="#" role="button">Rechercher</a></p>
                                  </div>
                                  <div class="col-lg-8">
                                    
                                  </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider/3.jpg" style="width:100%" data-src="" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                              <div class="row">
                              <div class="col-lg-4">
                                <h2>Besoin d'un appartement partout sur le territoire?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                <p><a class="btn btn-primary" href="#" role="button">Rechercher</a></p>
                              </div>
                              <div class="col-lg-8">
                                
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
               <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /.carousel -->    
    </div><!-- /slider-wrapper -->


<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Achat, vente et location</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Recherche de propriétés">
          
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Acheter</option>
                <option>Louer</option>
                <option>Vendre</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Prix</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Propriété</option>
                <option>Aparttement</option>
                <option>Bâtiment</option>
                <option>Espace bureau</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success "  onclick="window.location.href='{{ url('/property-detail') }}'">Rechercher </button>
              </div>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Inscrivez-vous maintenant et soyez mis à jour avec toutes les offres immobilières.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Se connecter</button>        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="{{ url('/buysalerent') }}" class="pull-right viewall">Voir les listes</a>
    <h2>Locations disponibles</h2>
    <div id="owl-example" class="owl-carousel">
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/1.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/2.jpg" class="img-responsive" alt="properties"/>
          <div class="status sold">Sold</div>
        </div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/3.jpg" class="img-responsive" alt="properties"/>
          <div class="status new">New</div>
        </div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>     
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/4.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/2.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir les détails</a>
      </div>
      <div class="properties">
        <div class="image-holder"><img src="/images/properties/3.jpg" class="img-responsive" alt="properties"/></div>
        <h4><a href="#">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-success" href="{{ url('/property-detail') }}">Voir détails</a>
      </div>
      
    </div>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">
        <h3>A propos</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><a href="{{ url('/about') }}">En savoir plus</a></p>
      
      </div>
      <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
        <h3>Propriétés recommendées </h3>
              <div class="row">
                <div class="col-lg-4"><img src="images/properties/1.jpg" class="img-responsive" alt="properties"/></div>
                <div class="col-lg-8">
                  <h5><a href="property-detail.php">Appartement de luxe</a></h5>
                  <p class="price">300,000</p>
                  <a href="{{ url('/property-detail') }}" class="more">Plus de détails</a> </div>
              </div>
      </div>
    </div>
  </div>
</div>

@endsection




