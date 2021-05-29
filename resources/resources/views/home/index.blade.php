@extends("layouts.bootstrap")

@section("content")
  <div id="cv-wrapper" class="model-001">
    <div id="container">
      <section id="header-section-wrapper">
        <div class="row resume-header">
          <div class="col-md-2 resume-picture-wrapper">
            <div class="resume-picture">
              <img src="{{asset('images/avatar.png')}}" alt="Un profile avec un nom plus long encore plus long toujours plus long que le mien">
            </div>
          </div>
          <div class="col-me-8 resume-name-title-wrapper">
            <div class="resume-name-title">
              <h2>Unnom aussi lon ou plus long que le mien</h2>
              <p class="profession-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum earum deserunt beatae tenetur quidem, voluptatibus quod.</p>
            </div>
            <div class="resume-desecription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quo, illum consequuntur tenetur neque expedita, ea fugit error consectetur autem optio! Vero vitae quos maxime accusantium sapiente soluta, ut expedita ducimus facilis, fuga debitis necessitatibus. Debitis facilis maiores necessitatibus corporis vero tenetur totam a modi dicta, hic delectus ratione dolores distinctio accusamus iure rerum impedit odit dolorum. Omnis in placeat necessitatibus blanditiis. Dolores optio dicta doloribus voluptatibus assumenda nulla sint illum necessitatibus, non numquam magnam perspiciatis quis ea esse amet, natus laborum suscipit molestias adipisci similique aperiam? Aut voluptatem, quae architecto</div>
          </div>
        </div>
      </section>
      <section id="contact-wrapper">
        <div class="resume-contacts">
          <div class="contact email-address">@ monsaddresquipeutetrslong@email.com</div>
          <div class="contact email-telephone">(+221) 77 458 885 855</div>
          <div class="contact email-city">My sweet sweet city</div>
          <div class="contact email-city">hhtps://thebestwbsiteintheworld.com</div>
          <div class="contact email-linkedin">/in/findmehereinlinkedin</div>
          <div class="contact email-facebook">/findmehereinfacebook</div>
          <div class="contact email-twitter">/findmehereintwitter</div>
        </div>
      </section>
      <section id="resume-body-wrapper">
        <div class="body-wrapper row">
          <div id="left-body" class="col-md-6">
            <div class="resume-section-wrapper">
              <h3 class="section-title">Experience</h3>
              @for($i=0; $i < 5; $i++)
                <div class="experience-wrapper">
                  <div class="experience">
                    <h5 class="post-title">Lorem ipsum dolor sit amet ipsum dolor sit amet.</h5>
                    <p class="company-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ipsum.</p>
                    <p class="duration">
                      <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span> <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span>
                    </p>
                  </div>
                </div>
              @endfor
            </div><!-- end section -->
            <div class="resume-section-wrapper">
              <h3 class="section-title">Educations</h3>
              @for($i=0; $i < 1; $i++)
                <div class="education-wrapper">
                  <div class="education">
                    <h5 class="school-name">Lorem ipsum dolor sit amet ipsum dolor sit amet.</h5>
                    <p class="degree-name">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ipsum.</p>
                    <p class="duration">
                      <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span> <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span>
                    </p>
                  </div>
                </div>
              @endfor
            </div><!-- end section -->
          </div>
          <div id="right-body" class="col-md-6">
            <div class="resume-section-wrapper">
              <h3 class="section-title">Competences</h3>
              <div class="row list-competences">
              @for($i=0; $i < 15; $i++)
                <span>Lorem, ipsum </span>
              @endfor
              </div>
            </div><!-- end section -->
            <div class="resume-section-wrapper">
              <h3 class="section-title">Realisations</h3>
              @for($i=0; $i < 3; $i++)
                <div class="realisation-wrapper">
                  <div class="realisation">
                    <h5 class="project-name">Lorem ipsum dolor sit amet ipsum dolor sit amet.</h5>
                    <p class="project-description">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias animi quis voluptas expedita eius reiciendis. Tenetur ullam enim, ratione ipsum repellendus laudantium! Ut, perferendis veniam.
                    </p>
                    <p class="duration">
                      <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span> 
                    </p>
                  </div>
                </div>
              @endfor
            </div><!-- end section -->
            <div class="resume-section-wrapper">
              <h3 class="section-title">Interests</h3>
              <div class="row list-interests">
              @for($i=0; $i < 6; $i++)
                <span>Lorem, ipsum </span>
              @endfor
              </div>
            </div><!-- end section -->
          </div>
        </div>
      </section>
      <section id="footer-wrapper"></section>
    </div>
  </div>
@endsection