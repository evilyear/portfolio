<section class="section section-parallax-2" id="resume-section">
    <div class="container">

      <!-- Section Heading -->
      <div class="m-titles">
        <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
          {{__('My Resume')}} 
        </h2>
      </div>

      <div class="row row-custom">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vertical-line">

            <!-- Description -->
            <div class="text scrolla-element-anim-1 scroll-animate" data-animate="active">
              <p>
              {{$current_datas['resume_description']}}
              </p>
            </div>

              @php
                $i = 0;
              @endphp
        
              @foreach($skill_elements as $skill_element )
                
              @if($skill_element->skill_id == "1")
                @if($i == 0)
                  <div class="skills-items">
                    <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{$skill_element->skill->title}}</div>
                  </div>
                  @php
                    $i++;
                  @endphp
                @endif
              
            
                <div class="skills-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                  <div class="name">{{$skill_element->title}}</div>
                  <div class="dots dots-{{$skill_element->text}}">
                    <div class="dots-row">
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                    </div>
                  </div>
                  <div class="value"><span class="num">{{$skill_element->text}}%</span></div>
                </div>
              @endif
            @endforeach
          
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vertical-line">
          @foreach ($skills as $skill )
            @if($skill->id != 1)
              <div class="p-title scrolla-element-anim-1 scroll-animate mt-2 mb-3" data-animate="active">{{$skill->title}}</div>
                <div class="services-items row">
                  <div class="col-md-12">
                      <div class="services-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                    @foreach ($skill->skill_elements as $skill_element )
                        <div class="title d-inline-block mb-2">{{$skill_element->title}} @if (!$loop->last) , @endif</div>
                    @endforeach
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('EDUCATION')}}</div>
          @foreach ($educations as $education )
            <div class="history-item scrolla-element-anim-1 scroll-animate" data-animate="active">
              <div class="name">{{$education->title}}</div>
              <div class="text">{{$education->text}}</div>  
            
              <div class="date">{{$year = date('Y', strtotime($education->timeFrom))}} - {{$year = date('Y', strtotime($education->timeTill))}}</div>
            </div>
          @endforeach  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('WORK EXPERIENCE')}}</div>

          @foreach ($employment_histories as $employment_history )
            <div class="history-item scrolla-element-anim-1 scroll-animate" data-animate="active">
              <div class="name">{{$employment_history->title}}</div>
              <div class="text">{{$employment_history->text}}</div>  
              <div class="date">{{$year = date('Y', strtotime($employment_history->timeFrom))}} - {{$year = date('Y', strtotime($employment_history->timeTill))}}</div>
            </div>
          @endforeach
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="p-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('LANGUAGES')}}</div>

          @foreach ($languages as $language )
            <div class="history-item scrolla-element-anim-1 scroll-animate" data-animate="active">
              <div class="name d-inline-block">{{$language->title}}</div>
              <div class="text d-inline-block">- {{$language->text}}</div>  
            </div>
          @endforeach
        </div>
            
        <div class="clear"></div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-5 ">
        <a target="_blank" href="https://github.com/evilyear/portfolio" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active"><strong>{{__('Git repository of THIS PAGE')}}</strong></a>
          <a href="mailto:{{$current_datas['email']}}" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('Contact Me')}}</a>
          <a target="_blank" href="{{ asset('page/pdf/'.$current_datas['cv_pdf'].'.pdf') }}" class="btn scrolla-element-anim-1 scroll-animate" data-animate="active">{{__('Download CV')}}</a>
        </div>

        

      </div>
  </div>
</section>