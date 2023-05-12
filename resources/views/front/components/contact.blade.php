
<section class="section section-bg section-parallax-2" id="contact-section">
        <div class="container">

          <!-- Section Heading -->
          <div class="m-titles">
            <h2 class="m-title splitting-text-anim-1 scroll-animate text-center" data-splitting="chars" data-animate="active">{{__('Contact Me')}}</h2>
          </div>

          <div class="row row-custom ">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">

              <!-- Section numbers -->
              <div class="numbers-items contacts-items">
                <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                  <div class="icon">
                    <i aria-hidden="true" class="fas fa-phone"></i>
                  </div>
                  <div class="num">
                    <a href="tel:{{$current_datas['phone']}}">{{$current_datas['phone']}}</a>
                  </div>
                  
                
                </div>
                <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                  <div class="icon">
                    <i aria-hidden="true" class="fas fa-at"></i>
                  </div>
                  <div class="num">
                  <a href="mailto:{{$current_datas['email']}}">{{$current_datas['email']}}</a>
                  </div>
                </div>
                <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                  <div class="icon">
                    <i aria-hidden="true" class="fas fa-location-arrow"></i>
                  </div>
                  <div class="num">{{$current_datas['adress']}}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>