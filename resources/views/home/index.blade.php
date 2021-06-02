@extends("layouts.bootstrap")

@section("content")
  <div id="html-template" class="scale-down">
    <div id="cv-wrapper" class="model-001">
      <div class="container">
        <section id="header-section-wrapper">
          <div class="row resume-header">
            <div class="col-md-2 resume-picture-wrapper">
              <div class="resume-picture">
                <img src="{{asset('images/avatar.png')}}" alt="Un profile avec un nom plus long encore plus long toujours plus long que le mien">
              </div>
            </div>
            <div class="col-md-10 resume-name-title-wrapper">
              <div class="resume-name-title">
                <h2>Unnom aussi lon ou plus mien</h2>
                <p class="profession-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="resume-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quo, illum consequuntur tenetur neque expedita, ea fugit error consectetur autem optio! Vero vitae quos maxime accusantium sapiente soluta, ut expedita ducimus facilis, fuga debitis necessitatibus. Debitis facilis maiores necessitatibus corporis vero tenetur totam a modi dicta.</div>
            </div>
          </div>
        </section>
        <section id="contact-wrapper">
          <div class="resume-contacts">
            <div class="contact email-address"><i class="demo-icon icon-mail"></i> monsaddresquipeutetrslong@email.com</div>
            <div class="contact email-telephone"><i class="demo-icon icon-phone-circled"></i>(+221) 77 458 885 855</div>
            <div class="contact email-city"><i class="demo-icon icon-location-alt"></i>My sweet sweet city</div>
            <div class="contact email-city"><i class="demo-icon icon-website"></i>hhtps://thebestwbsiteintheworld.com</div>
            <div class="contact email-linkedin"><i class="demo-icon icon-linkedin"></i>/in/findmehereinlinkedin</div>
            <div class="contact email-facebook"><i class="demo-icon icon-git-squared"></i>/depotgit</div>
            <div class="contact email-twitter"><i class="demo-icon icon-twitter-circled"></i>/findmehereintwitter</div>
            <div class="contact email-twitter"><i class="demo-icon icon-facebook-circled"></i>/findmehereinfacebook</div>
          </div>
        </section>
        <section id="resume-body-wrapper">
          <div class="body-wrapper">
            <div id="left-body" class="-">
              <div class="resume-section-wrapper">
                <h3 class="section-title">Experience</h3>
                <div class="experience-wrapper">
                @for($i=0; $i < 15; $i++)
                  <div class="experience" id="experience-{{$i}}">
                    <h5 class="post-title">Lorem ipsum dolor sit amet ipsum dolor sit amet.</h5>
                    <p class="company-name">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <p class="duration">
                      <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span> <span>{{ date('m/Y', strtotime('2015-05-20') ) }}</span>
                    </p>
                    <div class="tasks-wrapper">
                      <h6 class="task-title">Réalisations / tâches</h6>
                      <ul>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti quaerat mollitia!</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Elitia!</li>
                        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti quaerat mollitia!</li>
                        <li>Lorem, ipsum xcepturi corrupti quaerat mollitia! ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti quaerat mollitia!</li>
                      </ul>
                    </div>
                  </div>
                @endfor
                </div>
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
            <div id="right-body" class="-">
              <div class="resume-section-wrapper">
                <h3 class="section-title">Competences</h3>
                <div class="row list-competences">
                  <span>Lorem ipsum dolor sit. </span>
                  <span>Lorem ipsum  </span>
                  <span>Lorem dolor sit. </span>
                  <span>Lorem it. </span>
                  <span>Fsum dolor sit. </span>
                  <span>Llor sit. </span>
                  <span>Lorem ipsum. </span>
                  <span>Lorem ipsum sit. </span>
                  <span>Lorem ipsum dolor sit. </span>
                  <span>Ls dolor sit. </span>
                  <span>Lodolor sit. </span>
                  <span>Loremum dolor sit. </span>
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
  </div>
@endsection