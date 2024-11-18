@extends('layout.mainheader')
@section('theme')

<aside id="ftco-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/hero_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                           <div class="slider-text-inner">
                               <h1><strong>Book Appointment</strong></h1>
                                <h2>Visit <a href="#" target="_blank">Colorlib</a> for more free templates</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="#" target="_blank">Colorlib</a></p>
                           </div>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>

<div id="ftco-contact">
    <div class="container">
        <div class="row">

            <div class="col-md-10 animate-box">
                <h2>Appointment Form</h2>
                <form action="#">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <!-- <label for="fname">First Name</label> -->
                            <input type="text" id="fname" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <!-- <label for="lname">Last Name</label> -->
                            <input type="text" id="lname" class="form-control" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="date" class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <!-- <label for="message">Message</label> -->
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your subject of this message"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Book Appointment" class="btn btn-primary">
                    </div>

                </form>		
            </div>
        </div>
        
    </div>
</div>
<div id="map" class="colorlib-map"></div>


@endsection