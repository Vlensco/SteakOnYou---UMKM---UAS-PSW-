<!DOCTYPE html>
<html lang="zxx">

@include('Resources.head')

<body>
  @include('Resources.preloader')
  
  @include('Resources.header1')
  
  @include('Resources.header2review')

  <section class="banner" style="background-image: url(assets/img/background.png)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="title-area-data">
            <h2>Leave A Review</h2>
            <p>Don't Forget To Leave Some Review To Us</p>
          </div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/#home"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Review
            </li>
          </ol>
        </div>
        <div class="col-lg-5">
          <div class="row">
            <div class="col-6">
              <div class="title-area-img">
                <img alt="title-area-img" src="assets/img/title-area-img-1.jpg" />
                <img alt="pata" class="pata" src="assets/img/pata.png" />
              </div>
            </div>
            <div class="col-6">
              <div class="title-area-img two">
                <img alt="title-area-img" src="assets/img/title-area-img-2.jpg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="gap">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="get-in-touch">
            <div data-aos="fade-right">
              <h2>Get in Touch</h2>
              <ul class="booking">
                <li class="contact">
                  <i>
                    <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg">
                      <g id="_16-Smartphone" data-name="16-Smartphone">
                        <path
                          d="m23 2h-14a3 3 0 0 0 -3 3v22a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-22a3 3 0 0 0 -3-3zm-5.39 2-.33 1h-2.56l-.33-1zm6.39 23a1 1 0 0 1 -1 1h-14a1 1 0 0 1 -1-1v-22a1 1 0 0 1 1-1h3.28l.54 1.63a2 2 0 0 0 1.9 1.37h2.56a2 2 0 0 0 1.9-1.37l.54-1.63h3.28a1 1 0 0 1 1 1z" />
                        <path d="m17 24h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2z" />
                      </g>
                    </svg>
                  </i>
                  <div>
                    <span>contact us</span>
                    <a href="callto:082124374714"><span>082124374714</span></a>
                  </div>
                </li>
                <li class="contact">
                  <i>
                    <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg">
                      <g id="_01-Email" data-name="01-Email">
                        <path
                          d="m29.61 12.21-13-10a1 1 0 0 0 -1.22 0l-13 10a1 1 0 0 0 -.39.79v14a3 3 0 0 0 3 3h22a3 3 0 0 0 3-3v-14a1 1 0 0 0 -.39-.79zm-13.61-7.95 11.36 8.74-11.36 8.74-11.36-8.74zm11 23.74h-22a1 1 0 0 1 -1-1v-12l11.39 8.76a1 1 0 0 0 1.22 0l11.39-8.76v12a1 1 0 0 1 -1 1z">
                        </path>
                      </g>
                    </svg>
                  </i>
                  <div>
                    <span>contact us</span>
                    <a href="mailto:steakonyou@gmail.com"><span>steakonyou@gmail.com</span></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="mapouter">
            <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0284973642915!2d104.00745861054402!3d1.1400741988442002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9899bf19b69db%3A0x971519f58a35264c!2sSteak%20On%20You%20Windsor%20Nagoya!5e0!3m2!1sid!2sid!4v1716551323390!5m2!1sid!2sid"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="align-items-center d-flex mt-3">
            <div data-aos="fade-down">
              <i class="fa-solid fa-location-dot me-3"></i>
            </div>
            <div data-aos="fade-right">
              <p>
                Blok A Jl. Nagoya Permai No.15, Lubuk Baja Kota, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau 29432
              </p>
            </div>
          </div>
          <div class="mt-2 d-flex align-items-center">
            <div data-aos="fade-down">
              <i class="fa-solid fa-location-dot me-3"></i>
            </div>
            <div data-aos="fade-right">
              <p>Pasar Nasa Centre, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29432</p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div data-aos="fade-left">
            <div class="get-in-touch">
              <h2>Review</h2>
            </div>
            <form role="form" id="review-form" method="post" class="add-review leave-comment mt-4">
              <input type="text" name="complete_name" id="full_name" placeholder="Full Name" required />
              <textarea placeholder="Message" id="message" name="message"></textarea>
              <div data-aos="fade-down">
                <ul class="star mb-4">
                  <li><i class="far fa-star" id="star_1" style="font-size: 20px"></i></li>
                  <li><i class="far fa-star" id="star_2" style="font-size: 20px"></i></li>
                  <li><i class="far fa-star" id="star_3" style="font-size: 20px"></i></li>
                  <li><i class="far fa-star" id="star_4" style="font-size: 20px"></i></li>
                  <li><i class="far fa-star" id="star_5" style="font-size: 20px"></i></li>
                </ul>
              </div>
              <div data-aos="fade-up">
                <button class="button" type="submit" value="submit">
                  <span>send review</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="blog-img-video video mb-0">
      <img alt="video-img" src="assets/img/contact.jpg" />
      <a data-fancybox="" href="https://www.youtube.com/watch?v=bHRKRSJDjNY&ab_channel=RicoMandagi"><i>
          <svg width="15" height="22" viewBox="0 0 11 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 8.5L0.5 0.272758L0.5 16.7272L11 8.5Z" fill="#fff" />
          </svg>
        </i>
      </a>
    </div>
  </div>
  <div class="container">
    <div class="opening-hours">
      <div class="day-time">
        <h6></h6>
        <h4></h4>
        <span></span>
      </div>
      <div class=""></div>
      <div class="day-time">
        <h6>Everyday</h6>
        <h4>11:30am - 11pm</h4>
        <span>Open all day</span>
      </div>
      <div class=""></div>
      <div class="day-time">
        <h6></h6>
        <h4></h4>
        <span></span>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/reserve.js"></script>
  @include('Resources.footer')
  
  @include('Resources.script')

</body>

</html>