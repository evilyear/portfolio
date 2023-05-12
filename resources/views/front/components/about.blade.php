
<section class="section section-bg section-parallax-1" id="about-section">
        <div class="container">

          <!-- Section Heading -->
          <div class="m-titles">
            <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
              {{__('About Me')}}
            </h2>
          </div>

          <div class="row row-custom">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vertical-line">

              <!-- Section Profile -->
              <div class="profile-box">
                <div class="text scrolla-element-anim-1 scroll-animate" data-animate="active">
                  <p>
                    {{$current_datas['about_me']}}
                  </p>
                 
                  <a target="_blank" href="https://github.com/evilyear/portfolio" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active"><strong>{{__('Git repository of THIS PAGE')}}</strong></a>
                  <a href="mailto:{{$current_datas['email']}}" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('Contact Me')}}</a>
                  <a target="_blank" href="{{ asset('page/pdf/'.$current_datas['cv_pdf'].'.pdf') }}" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('Download CV')}}</a>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>