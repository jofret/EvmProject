@extends('layouts.shopmax')

@section('content')
<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>


    <section class="container mt-5 pt-5" id="tiendas">
      <h3 class="lato">Showroom: </h3>
      <div class="row">
        <table class="table table-bordered"> 
          <thead> 
            <tr> 
              <th>País / Country</th> 
              <th>Tienda / Store</th> 
              <th>Dirección / Address</th> 
              <th>Teléfono</th> 
            </tr> 
          </thead> 
          
          <tbody> 
            <tr> 
            <td>Perú</td> 
            <td>Miraflores 1</td> 
            <td>Av. La Paz 316 Miraflores</td> 
            <td>Teléfono: 01-2417330</td> 
            </tr> <tr> 
            
            <td>Perú</td> 
            <td>Miraflores 2</td> 
            <td> Av. General Suárez 463 .Miraflores.</td> 
            <td>Teléfono: 01-2417330</td> 
            </tr> <tr> 
            
            <td>USA</td>  
            <td>Winsconsin</td> 
            <td>Luxemburg Location N3569 E Townline Rd Luxemburg, WI 54217</td> 
            <td>Teléfono: (920) 536-1394</td> 
            </tr> 

            <td>Chile</td>  
            <td>Valparaíso</td> 
            <td>Av. Del Mar 595, Boulevard Hermansen. Local 3, Maitencillo</td> 
            <td>Teléfono: (+56) 962 188302  </td> 
            </tr> 

          </tbody> 
        </table>
      </div>
    </section>
 @endsection