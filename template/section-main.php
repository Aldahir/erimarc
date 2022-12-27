<div id="slide-menu" class="carousel slide" data-bs-ride="carousel">
  <!--<div class="carousel-indicators">
    <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#slide-menu" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>-->
  <div class="carousel-inner carousel-fade">
    <div class="carousel-item active">
      <div class="carousel-caption d-md-block d-none text-start" style="bottom: 190px;">
        <h3 class="display-3 heading-title">Visit Lagos for 3 days</h3>
        <p>First Slide Image</p>
      </div>
      <!-- <img src="http://127.0.0.1/aldair/image-exemplo/?s=1920x1080&c=00db1e" class="d-block w-100" alt="dummyimage 1080p f8db1e"> -->
      <img src="https://www.secis.pt/public/uploads/a3e3dbb4-a54c-4645-a6a1-660872a35a1d.png" class="d-block w-100" alt="dummyimage 1080p ff0000">
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-md-block d-none text-start" style="bottom: 190px;">
        <h3 class="display-3 heading-title">What about Luanda? Uhm...</h3>
        <p>Luanda my city, my love!</p>
      </div>
      <img src="https://raynov.ma/wp-content/uploads/2020/09/3395677-scaled.jpg" class="d-block w-100" alt="dummyimage 1080p ff0000">
      <!-- <img src="http://127.0.0.1/aldair/image-exemplo/?s=1920x1080&c=ff0000" class="d-block w-100" alt="dummyimage 1080p ff0000"> -->
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-md-block d-none text-start" style="bottom: 190px;">
        <h3 class="display-3 heading-title">Los Angeles</h3>
        <p>Great one, always so much fun!</p>
      </div>
      <img src="https://www.3gnt.net/sites/default/files/2_6.jpg" class="d-block w-100" alt="dummyimage 1080p 00c8fa">
      <!-- <img src="http://127.0.0.1/aldair/image-exemplo/?s=1920x1080&c=00c8fa" class="d-block w-100" alt="dummyimage 1080p 00c8fa"> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slide-menu" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">
      <svg id="previous" data-name="Layer previous" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.26 107.25">
        <defs>
          <style>
            .arrow-long {
              fill: none;
              stroke: #ffffff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 5px;
            }
          </style>
        </defs>
        <g id="previous_2" data-name="Layer previous 2">
          <line class="arrow-long" x1="2.5" y1="53.36" x2="172.76" y2="53.36" />
          <polyline class="arrow-long" points="54.31 104.75 2.5 53.36 54.31 2.5" />
        </g>
      </svg>
    </span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slide-menu" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">
      <svg id="next" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.26 107.25">
        <defs>
          <style>
            .arrow-long {
              fill: none;
              stroke: #ffffff;
              stroke-linecap: round;
              stroke-linejoin: round;
              stroke-width: 5px;
            }
          </style>
        </defs>
        <g id="next_2" data-name="Layer 2">
          <line class="arrow-long" x1="172.76" y1="53.89" x2="2.5" y2="53.89" />
          <polyline class="arrow-long" points="120.95 2.5 172.76 53.89 120.95 104.75" />
        </g>
      </svg>
    </span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<style>
  .bg-slide {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    /* opacity: 0.5; */
    z-index: -1
  }

  .carousel-control-next,
  .carousel-control-prev {
    bottom: 170px !important;
    top: unset !important;
  }

  .carousel-control-prev {
    left: 9.4% !important;
  }

  .carousel-control-next {
    right: unset !important;
    left: 15% !important;
  }

  .carousel-control-next .carousel-control-next-icon,
  .carousel-control-prev .carousel-control-prev-icon {
    background-image: unset !important;
  }
</style>