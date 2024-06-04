<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">List Of Books</h1>
                        
                    </div>
               
                <br>
                <br>
               
                  <style>




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
  
</head>
<body>
<div class="row">

<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/death.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">Deathly Hallows</h5>
      <div class="product-price">
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
        <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">1050</div>
      </div>
      <div class="product-description">
        Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel in the Harry Potter series.
      </div>
      <div class="product-actions">
                    <a href="reservation" class="btn btn-success reserveBtn" data-item-id="1">RESERVE</a>
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
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="4"></div>
        <div class="total-ratings">203</div>
      </div>
      <div class="product-description">
      "One of the classics in the field of crisis intervention" (Dr. Earl Grollman), Life after Loss is the go-to resource for anyone who has suffered a significant life change.
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="2">RESERVE</a>
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
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="4"></div>
        <div class="total-ratings">10,677</div>
      </div>
      <div class="product-description">
      Interesting Facts For Curious Minds gives you the answer to all these and many, many more questions that I know have crossed your mind from time to time. crossed your mind from time to time.
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="3">RESERVE</a>
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
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="4"></div>
        <div class="total-ratings">302</div>
      </div>
      <div class="product-description">
      Latter-day Saints are great at getting things done. But for some, an over-emphasis on “doing” can cause us to go through the motions and miss the deep, rich spiritual .
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="4">RESERVE</a>
      </div>
    </div>
  </div>
</div>
<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/the.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">The Finest Hours</h5>
      <div class="product-price">
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="4"></div>
        <div class="total-ratings">2050</div>
      </div>
      <div class="product-description">
      This adaptation for young readers of The Finest Hours: The True Story of the US Coast Guard's Most Daring Sea Rescue by Michael J. Tougias and Casey Sherman tells the story of the shipwreck of two oil tankers and the harrowing.
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="5">RESERVE</a>
      </div>
    </div>
  </div>
</div>
<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/ufo.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">UFO Of GOD</h5>
      <div class="product-price">
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">1950</div>
      </div>
      <div class="product-description">
      This is the true story of hope, love, lies and deception, involving officials from the U.S. Government, CIA, NASA, a string of professors, and the church. Prepare to go on a spiritual journey of awakening and transformation with a visit
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="6">RESERVE</a>
      </div>
    </div>
  </div>
</div>
<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/ufo.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">UFO Of GOD</h5>
      <div class="product-price">
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">1950</div>
      </div>
      <div class="product-description">
      This is the true story of hope, love, lies and deception, involving officials from the U.S. Government, CIA, NASA, a string of professors, and the church. Prepare to go on a spiritual journey of awakening and transformation with a visit
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="7">RESERVE</a>
      </div>
    </div>
  </div>
</div>
<div class="col-xxl-3 col-md-4 col-sm-6 col-12">
  <div class="product-card">
    <img class="product-card-img-top" src="/images/ufo.jpg" alt="Bootstrap Gallery">
    <div class="product-card-body">
      <h5 class="product-title">UFO Of GOD</h5>
      <div class="product-price">
        <span class="off-price">RESERVE NOW!</span>
      </div>
      <div class="product-rating">
      <div class="rating-stars" data-rating="5"></div>
        <div class="total-ratings">1950</div>
      </div>
      <div class="product-description">
      This is the true story of hope, love, lies and deception, involving officials from the U.S. Government, CIA, NASA, a string of professors, and the church. Prepare to go on a spiritual journey of awakening and transformation with a visit
      </div>
      <div class="product-actions">
      <a href="reservation" class="btn btn-success reserveBtn" data-item-id="8">RESERVE</a>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Gallery -->
<script>
// Function to handle reserve action
function handleReserve(event) {
    event.preventDefault(); // Prevent default action of link click

    // Check if the item is already reserved
    if (sessionStorage.getItem('reservedItem') === this.dataset.itemId) {
        alert("This item is already reserved!");
    } else {
        // Do something when not reserved
        window.location.href = "reservation"; // Navigate to reservation page
    }
}

// Function to clear reservation information
function clearReservation() {
    sessionStorage.removeItem('reservedItem');
}

// Attach click event listener to all reserve buttons
const reserveButtons = document.querySelectorAll('.reserveBtn');
reserveButtons.forEach(button => {
    button.addEventListener('click', handleReserve);
});



// Check sessionStorage on page load and disable buttons if necessary
document.addEventListener('DOMContentLoaded', function () {
    reserveButtons.forEach(button => {
        if (sessionStorage.getItem('reservedItem') === button.dataset.itemId) {
            button.classList.add('reserved');
            button.textContent = "RESERVED";
            button.disabled = true;
        }
    });
});

// Store reservation information in sessionStorage when button is clicked
reserveButtons.forEach(button => {
    button.addEventListener('click', function () {
        sessionStorage.setItem('reservedItem', this.dataset.itemId);
    });
});




</script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

            </div>
        </div>
    </div>
</x-app-layout>


