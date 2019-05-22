@extends('header')


@section('contenu')<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Acheter, Vendre & Louer</span>
    <h2>Acheter, Vendre & Louer</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Recherche</h4>
    <input type="text" class="form-control" placeholder="Chercher les propriétés">
    <div class="row">
            <div class="col-lg-5">
              <select class="form-control">
                <option>Acheter</option>
                <option>Vendre</option>
                <option>Louer</option>
              </select>
            </div>
            <div class="col-lg-7">
              <select class="form-control">
                <option>Prix</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
          </div>

          <div class="row">
          <div class="col-lg-12">
              <select class="form-control">
                <option>Type de propriété</option>
                <option>Aparttement</option>
                <option>Bâtiment</option>
                <option>Espace bureau</option>
              </select>
              </div>
          </div>
          <button class="btn btn-primary">Rechercher</button>

  </div>



<div class="hot-properties hidden-xs">
<h4>Bonnes occasions</h4>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">300,000</p> </div>
              </div>
<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">300,000</p> </div>
              </div>

<div class="row">
                <div class="col-lg-4 col-sm-5"><img src="images/properties/1.jpg" class="img-responsive img-circle" alt="properties"></div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="property-detail.php">Integer sed porta quam</a></h5>
                  <p class="price">300,000</p> </div>
              </div>

</div>


</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Voir: 12 sur 100 </div>
  <div class="pull-right">
  <select class="form-control">
  <option>Trié par</option>
  <option>Prix: Moins au plus cher</option>
  <option>Pri: Plus au moins cher</option>
</select></div>

</div>
<div class="row">

     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Price: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->


      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/2.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/3.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Vendu</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/4.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Vendu</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Vendu</div>
        </div>
        <h4><a href="property-detail.php">Royal Inn</a></h4>
        <p class="price">Prix: $234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/4.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/3.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/2.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->
      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/1.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/4.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->

      <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="images/properties/3.jpg" class="img-responsive" alt="properties">
          <div class="status sold">Disponible</div>
        </div>
        <h4><a href="property-detail.php">Appartement</a></h4>
        <p class="price">Prix: 234,900</p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>
        <a class="btn btn-primary" href="property-detail.php">Voir les détails</a>
      </div>
      </div>
      <!-- properties -->
      <div class="center">
<ul class="pagination">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">»</a></li>
        </ul>
</div>

</div>
</div>
</div>
</div>
</div>

@endsection