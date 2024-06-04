<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
<style>
    body{
    baackground:#f5f5f5;
    margin-top:20px;}

.events-date {
    text-align: center;
    position: absolute;
    right: 30px;
    top: 30px;
    background-color: rgba(25, 47, 89, 0.9);
    color: #fff;
    padding: 12px 20px 8px 20px;
    text-transform: uppercase
}

.event-time li {
    display: inline-block;
    margin-right: 20px
}

.event-time li:last-child {
    margin-right: 0
}

.event-time li i {
    color: #59c17a
}

.event-block {
    box-shadow: 0px 0px 16px 0px rgba(187, 187, 187, 0.48)
}

.event-block ul li i {
    color: #59c17a
}

@media screen and (max-width: 1199px) {
    .event-date {
        padding: 10px 18px 6px 18px
    }
}

@media screen and (max-width: 575px) {
    .event-date {
        padding: 8px 15px 4px 15px
    }
    .events-date {
        padding: 10px 15px 6px 15px
    }
}

.position-relative {
    position: relative !important;
}

.margin-40px-bottom {
    margin-bottom: 40px;
}
.padding-60px-lr {
    padding-left: 60px;
    padding-right: 60px;
}

.margin-15px-bottom {
    margin-bottom: 15px;
}
.font-weight-500 {
    font-weight: 500;
}
.font-size22 {
    font-size: 22px;
}
.text-theme-color {
    color: #192f59;
}
.margin-10px-bottom {
    margin-bottom: 10px;
}
.margin-10px-right {
    margin-right: 10px;
}


.product-card {
  background: #ffffff;
  border: 0;
  box-shadow: none;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  margin-bottom: 24px;
  box-shadow: 0 3px 5px rgba(0, 10, 10, 0.05);
}
.product-card .product-card-body {
  padding: 1rem 1rem;
  position: relative;
}
.product-card .product-card-body .product-title {
  margin-bottom: 0.7rem;
  font-size: 1rem;
  font-weight: 700;
  line-height: 100%;
}
.product-card .product-card-body .product-price {
  display: flex;
  flex-direction: row;
  font-size: 0.9rem;
}
.product-card .product-card-body .product-price .disount-price {
  color: #13181e;
  margin-right: 7px;
}
.product-card .product-card-body .product-price .actucal-price {
  color: #6c7788;
  margin-right: 7px;
  text-decoration: line-through;
}
.product-card .product-card-body .product-price .off-price {
  color: #26ba4f;
}
.product-card .product-card-body .product-rating {
  margin: 8px 0;
  display: flex;
  align-items: center;
  flex-direction: row;
}
.product-card .product-card-body .product-rating .rating-stars {
  width: 120px !important;
  line-height: 100%;
}
.product-card .product-card-body .product-rating .rating-stars img {
  width: 18px;
  height: 18px;
}
.product-card .product-card-body .product-rating .total-ratings {
  font-size: 0.9rem;
  color: #6c7788;
}
.product-card .product-card-body .product-description {
  min-height: 50px;
  font-size: 0.9rem;
  margin: 0 0 10px 0;
  color: #6c7788;
  line-height: 150%;
}
.product-card .product-card-body .product-actions {
  display: flex;
  flex-direction: row;
}
.product-card .product-card-body .product-actions .btn {
  margin-right: 5px;
}
.product-card .product-card-img-top {
  border-top-right-radius: 4px;
  border-top-left-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  flex-shrink: 0;
  width: 100%;
}
.product-rating {
    display: flex;
    align-items: center;
}

.rating-stars {
    font-size: 20px; /* Adjust the size of the stars */
}

.rating-stars::before {
    content: "\2605"; /* Unicode character for a filled star */
    color: gold; /* Color of the filled star */
}

.rating-stars[data-rating="0"]::before { content: "\2606\2606\2606\2606\2606"; }
.rating-stars[data-rating="1"]::before { content: "\2605\2606\2606\2606\2606"; }
.rating-stars[data-rating="2"]::before { content: "\2605\2605\2606\2606\2606"; }
.rating-stars[data-rating="3"]::before { content: "\2605\2605\2605\2606\2606"; }
.rating-stars[data-rating="4"]::before { content: "\2605\2605\2605\2605\2606"; }
.rating-stars[data-rating="5"]::before { content: "\2605\2605\2605\2605\2605"; }


    </style>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 
                   
<div
  id="carouselVideoExample"
  data-mdb-carousel-init class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  
  
  </div>

  
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <iframe width="100%" height="700px" src="https://www.youtube.com/embed/lR_mf7t_WkQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- Add more carousel items with embedded YouTube videos -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<br>
<br>
<br>

<h1 class="display-6">NEW ARRIVALS</h1>
<div class="row">

<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/death.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">Deathly Hallows</h5>
      <div class="product-price">
        <span class="off-price">Reserve Now!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">2024</div>
      </div>
      <div class="product-description">
      Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel in the Harry Potter series.
      </div>
      <div class="product-actions">
      </div>
    </div>
  </div>
</div>  
    

    <div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/minds.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">Curious Minds</h5>
      <div class="product-price">
        <span class="off-price">Reserve Now!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">2024</div>
      </div>
      <div class="product-description">
      Interesting Facts For Curious Minds gives you the answer to all these and many, many more questions that I know have crossed your mind from time to time. crossed your mind from time to time.
      </div>
      <div class="product-actions">
      </div>
    </div>
  </div>
</div>  

<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/life.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">Life After Loss</h5>
      <div class="product-price">
        <span class="off-price">Reserve Now!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">2024</div>
      </div>
      <div class="product-description">
      "One of the classics in the field of crisis intervention" (Dr. Earl Grollman), Life after Loss is the go-to resource for anyone who has suffered a significant life change.
      </div>
      <div class="product-actions">
      </div>
    </div>
  </div>
</div>  
   

<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/power.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">The Power Of Stillness</h5>
      <div class="product-price">
        <span class="off-price">Reserve Now!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">2024</div>
      </div>
      <div class="product-description">
      Latter-day Saints are great at getting things done. But for some, an over-emphasis on “doing” can cause us to go through the motions and miss the deep, rich spiritual .
      </div>
      <div class="product-actions">
      </div>
    </div>
  </div>
</div>  

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h1 class="display-6">E V E N T S</h1>
<BR>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="/images/bb.jpg" alt="">
                <div class="events-date">
                    <div class="font-size28">10</div>
                    <div class="font-size14">Mar</div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Summer Book Fest</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 09:30 AM - 04:30 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : John Sminth</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event-details.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>

    <!-- start event block -->
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-7 order-2 order-lg-1">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">2024 Book Fair</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 09:00 AM - 09:30 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : Alexa Zone</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event-details.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
            <div class="position-relative">
                <img src="/images/sd.jpg" alt="">
                <div class="events-date">
                    <div class="font-size28">25</div>
                    <div class="font-size14">Feb</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row align-items-center event-block no-gutters margin-40px-bottom">
        <div class="col-lg-5 col-sm-12">
            <div class="position-relative">
                <img src="/images/bb.jpg" alt="">
                <div class="events-date">
                    <div class="font-size28">10</div>
                    <div class="font-size14">Mar</div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="padding-60px-lr md-padding-50px-lr sm-padding-30px-all xs-padding-25px-all">
                <h5 class="margin-15px-bottom md-margin-10px-bottom font-size22 md-font-size20 xs-font-size18 font-weight-500"><a href="event-details.html" class="text-theme-color">Summer Book Fest</a></h5>
                <ul class="event-time margin-10px-bottom md-margin-5px-bottom">
                    <li><i class="far fa-clock margin-10px-right"></i> 09:30 AM - 04:30 PM</li>
                    <li><i class="fas fa-user margin-5px-right"></i> Speaker : John Sminth</li>
                </ul>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore</p>
                <a class="butn small margin-10px-top md-no-margin-top" href="event-details.html">Read More <i class="fas fa-long-arrow-alt-right margin-10px-left"></i></a>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<!-- Footer Block Start -->
<footer id="site-footer">
    <div class=" bg-grey py-5">
        <div class="container py-3">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <h5 class="pb-3"><i class="fa-solid fa-user-group pe-1"></i> About us</h5>
                    <span class="text-secondary">This is a wider card with supporting text below as a natural lead-in to additional content.</span>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <h5 class="pb-3"><i class="fa-solid fa-link pe-1"></i> Important links</h5>
                    <ul>
                        <li><a href="#" class="text-decoration-none link-secondary">About us</a></li>
                        <li><a href="#" class="text-decoration-none link-secondary">Privacy policy</a></li>
                        <li><a href="#" class="text-decoration-none link-secondary">Terms of services</a></li>
                    </ul>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <h5 class="pb-3"><i class="fa-solid fa-location-dot pe-1"></i> Our location</h5>
                    <span class="text-secondary">
                        PANGLAO<br>
                        BOHOL<br>
                        PH<br>
                    </span>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <h5 class="pb-3"><i class="fa-solid fa-paper-plane pe-1"></i> Stay updated</h5>
                    <form>
                        <input type="text" class="w-100 mb-2 form-control" name="" placeholder="Email ID">
                        <button class="w-100 btn btn-dark">Subscribe now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-secondary" href="#"><i class="fa-brands fa-github"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12"><span class="text-secondary pt-1 float-md-end float-sm-start">Copyright &copy; 2023</span></div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Block Start -->