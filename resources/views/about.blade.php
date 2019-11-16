@extends('layouts.frontend.app')
@section('content')
<style>
    .intro-section, .intro-section .container > .row {
        height: 50vh;
        min-height: 400px;
    }
</style>
    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('frontend/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <!-- <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>
                  <p data-aos="" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Join Now</a></p>

                </div> -->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <section class="section bg-secondary">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-12">
          <p>Dream Maker is a non-governmental and empowerment Organization borne out of the need to assist talented and gifted youths in Nigeria and other African countries, to be able to actualise their dreams and maximise on the  their potentials in different field of 
            endeavours e.g Education, Vocational training, Entertainment etc, through our various empowerment programmes.</p>
            <p>Dream Maker was incorporated or registered on the 4th of October, 2019 with the Corporate Affairs Commission of Nigeria.</p>
            <p>We have put together different resources e.g financial, manpower, logistics etc, to kick start this laudable and timely intervention empowerment initiative to alleviate poverty, reduce joblessness among our youths. We will also, collaborate with Corporate bodies and well-meaning successful
             Nigerians in the diaspora for sponsorship in order to extend it to youths in other African countries.</p>

             <p>We believe with our dynamic, competent and dedicated team members, touching and improving the lives of so many youths will be achieved.</p>
        </div>
      </div>
    </section>
    <style>
      .center {
        left: 50%;
        transform: translateX(129%);
    }
    </style>
@endsection