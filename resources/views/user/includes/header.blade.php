











<br>
<br>
<br>


<style>
  
  .featured-block {
    background-color: #001180;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    display: inline-block;
    margin-bottom: 20px;
    width: 100%;
    box-sizing: border-box;
  }

  .featured-block a {
    text-decoration: none;
    display: inline-block;
    position: relative;
    color: #007bff;
    transition: color 0.3s ease-in-out;
    font-family: Arial, sans-serif;
  }

  .featured-block a:hover {
    color: #0056b3;
  }

  .featured-block a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -5px;
    left: 0;
    background-color: black;
    visibility: hidden;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out;
  }

  .featured-block a:hover:before {
    visibility: visible;
    transform: scaleX(1);
  }

  .featured-block h3 {
    font-size: 24px;
    margin-top: 0;
    margin-bottom: 10px;
    color: white;
    font-weight: bold;
    font-family: 'Arial Black', sans-serif;
  }

  .featured-block p {
    font-size: 16px;
    color: white;
    font-family: Georgia, serif;
  }

  .featured-block p.italic {
    font-style: italic;
  }

  .featured-block:hover {
    background-color: #556B2F;
  }

  /* Responsive styles */
  @media (min-width: 768px) {
    .featured-block {
      width: calc(33.33% - 20px);
      margin-right: 20px;
    }
    .featured-block:last-child {
      margin-right: 0;
    }
  }
</style>

<div class="container">
  <div class="row">
    <div class="featured-block">
      <a href="/addjournal" class="text-primary">
        <h3>Add Journal / Conference</h3>
      </a>
      <p class="italic">Add a Journal/Conference to the World Journals Alert database. It's quick and free!</p>
    </div>
    
    <div class="featured-block">
      <a href="user/promote">
        <h3>Promote Your Journal / Conference</h3>
      </a>
      <p>Promote your Journal/Conference via targeted e-mails, WJA Alerts Monthly and on the WJA website.</p>
    </div>
    
    <div class="featured-block">
      <a href="#subscribe">
        <h3>Subscribe</h3>
      </a>
      <p>Receive free email updates of events matching your interests. Subscribe to stay up to date with what's happening in your field.</p>
    </div>
  </div>
</div>







<!DOCTYPE html>
<html>
<head>
    <title>Call for Papers</title>
    <style>
       
        .body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .search-container {
            text-align: center;
            margin: 0 90px;
        }

        .search-container h6 {
            margin-top: 0;
        }

        .search-input {
            width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        #search-button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 700px; 
        }

        #search-button:hover {
            background-color: #0056b3;
        }

       
        #search-container-wrapper {
            display: flex;
        }

        #cfp-container {
            position: relative;
            text-align: center;
            padding: 50px 0;
        }

        #background-curve {
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            height: 70px;
            width: 400px;
            background: lightseagreen;
            border-radius: 0 0 50% 50%;
            z-index: -1;
        }

        .call {
            color: white;
            font-family: Georgia, serif;
            font-size: 24px;
            text-transform: uppercase;
        } 

        #search-bar {
            margin-left: 600px; 
            width: 300px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
        }

        @media (max-width: 1199px) {
           
            #search-button {
                margin-left: 500px; 
            }
            #search-bar {
                margin-left: 400px; 
            }
        }

        @media (max-width: 767px) {
            .search-container {
                margin-top: 20px;  
            }
            
            .search-container h6 {
                margin-top: 20px; 
            }

            #search-container-wrapper {
                flex-direction: column; 
                align-items: center; 
            }

            .search-container:not(:last-child) {
                margin-bottom: 20px; 
            }

            #search-bar {
                margin-left: 0; 
            }
    #search-button {
             margin-left: 130px;
        margin-top: -60px;
        }
      }
    </style>
</head>
<body>
    <div id="cfp-container">
        <div id="background-curve"></div>
        <div class="call">CALL  FOR  PAPERS</div>
    </div>

    <form action="/searchcfp" method="post">
        @csrf
        <div id="search-container-wrapper">
            <div class="search-container">
                <h6>Search by category</h6>
                <select class="search-input" name="category" onchange="checkCustomCategory(this)">
                    <option value="Engineering">Engineering & Technology</option>
                    <option value="Humanities">Humanities</option>
                    <option value="physical science">Physical Science</option>
                    <option value="custom">Other</option>
                </select>
                <input type="text" class="search-input" name="category" id="custom-category-input" style="display: none;" placeholder="Type your custom category...">
            </div>
            <div class="search-container">
                <h6>Search by journal</h6>
                <select class="search-input" name="journal" onchange="checkCustomJournal(this)">
                    <option value="category1">isjrc</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                    <option value="custom">Other</option>
                </select>
                <input type="text" class="search-input" name="journal" id="custom-journal-input" style="display: none;" placeholder="Type your custom journal...">
            </div>
            <div class="search-container">
                <h6>Search by ISSN</h6>
                <input type="text" class="search-input" name="issn" placeholder="Enter ISSN ">
            </div>
        </div>
    
      <button id="search-button" type="submit">Search</button>
    </form>
      <script>
        function checkCustomCategory(selectElement) {
            var customCategoryInput = document.getElementById('custom-category-input');
            if (selectElement.value === 'custom') {
                customCategoryInput.style.display = 'block';
                customCategoryInput.setAttribute('placeholder', 'Type your category');
            } else {
                customCategoryInput.style.display = 'none';
            }
        }

        function checkCustomJournal(selectElement) {
            var customJournalInput = document.getElementById('custom-journal-input');
            if (selectElement.value === 'custom') {
                customJournalInput.style.display = 'block';
                customJournalInput.setAttribute('placeholder', 'Type your journal');
            } else {
                customJournalInput.style.display = 'none';
            }
        }
    </script>
  </body>
  </html>


<br>
<br>
 @php
 $country_records = App\Models\AddJournal::select('country', DB::raw('COUNT(*) as count'))
     ->groupBy('country')
     ->get();
 
 $category_records = App\Models\AddJournal::select('category', DB::raw('COUNT(*) as count'))
     ->groupBy('category')
     ->get();
 @endphp


                      <div class="container">
                          <div class="card">
                            <div class="card-header text-center" style="background-color: #479778; color: white;">Country Records</div>

                              <div class="card-body">
                                  <div class="row">
                                      @foreach ($country_records as $result)
                                      <div class="col-md-3 col-sm-6">
                                          <div class="result">
                                              <h5>{{ $result->country }}</h5>
                                              <p>{{ $result->count }}</p>
                                          </div>
                                      </div>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </div>

                    

     <br>
    <br>
     <div class="container">
      <div class="card">
        <div class="card-header text-center" style="background-color: #479778; color: white;">Category Records</div>

          <div class="card-body">
             <div class="row">
                 @foreach ($category_records as $result)
                 <div class="col-md-3 col-sm-6">
                     <div class="result">
                         <h5>{{$result->category}}</h5>
                         <p>{{$result->count}}</p>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
     </div>
 </div>
 
 
 <style>
 /* .count-box {
     border: 1px solid #000;
     margin-left: 20px;
     width: 900px;
     margin-bottom: 5px;
     position: relative;
     border-radius: 15px;
     display: flex;
     flex-wrap: wrap;
     padding: 20px;
 }
  */
  .featured-block h3 {
    font-family: "Arial", sans-serif;
    font-size: 24px;
    letter-spacing: 1px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
  }


 
  .count-box {
  border: 1px solid #000;
  margin: 20px;
  width: 900px;
  margin-bottom: 5px;
  position: relative;
  border-radius: 15px;
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
  background-color: #f5f5f5;
}

.result {
  width: 140px;
  height: 60px;
  padding: 10px;
  box-sizing: border-box;
  background-color: #4285f4;
  border-radius: 5px;
  margin-bottom: 10px;
  text-align: center;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.result:hover {
  background-color: #1c5c9d;
}

.result h5 {
  margin-top: 0;
  margin-bottom: 5px;
}

 
 @media (max-width: 768px) {
     .count-box {
         width: auto;
     }
 }
 </style>
 



    {{-- <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Lorem Ipsum</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section --> --}}

    <!-- ======= Cta Section ======= -->
    
    <!-- ======= F.A.Q Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    <!-- ======= Contact Section ======= -->

    <br>
    
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <div style="text-align: center;">
            <h3 style="font-size: 24px; color: #007bff; text-transform: uppercase; letter-spacing: 2px;">
              Contact Us
            </h3>
            <hr style="width: 50px; border: 2px solid #007bff; margin: 10px auto;">
            <p style="font-size: 16px; color:white;">Your message is important to us. Get in touch for any inquiries or feedback.</p>
          </div>
          

        <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220.18644260501418!2d73.34259678603189!3d27.994414007983714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1687893595114!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h3>Location:</h3>
                <p style="color: white;">Y-18-A,
                  Sudarshana Nagar
                  Bikaner (Rajasthan)
                  334003</p>
                </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h3>Email:</h3>
                <p style="color:white">info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h3 style="color:white">Call:</h3>
                <p></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="feedback.store" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

          </div>

        </div>
        </section>
      





      <style>
       
        iframe {
          width: 100%;
          height:240px;
        }
     
      
.contact {
  background-image: url('/user/img/bb11.jpg');
      background-size: cover;
      background-position: center;
    }
    .address h3, .email h3, .call h3 {
    color: white;
  }
  .address p, .email p, .call p {
    color: white;
  }

.section-title {
  text-align: center;
  margin-bottom: 30px;
}

.section-title h2 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 10px;
}

.section-title h3 {
  font-size: 24px;
  margin-bottom: 20px;
}

.info {
  margin-bottom: 30px;
  color: white;
}
.adrress{
  color: white;
}
.info i {
  font-size: 32px;
  color: #007bff;
  margin-bottom: 10px;
}

.info h3 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

.info p {
  color: #666;
}

.php-email-form input,
.php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.php-email-form input:focus,
.php-email-form textarea:focus {
  border-color: #007bff;
}

.php-email-form button[type="submit"] {
  background-color: #007bff;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: background-color 0.3s ease-in-out;
}

.php-email-form button[type="submit"]:hover {
  background-color: #0056b3;
}

.loading,
.error-message,
.sent-message {
  display: none;
  text-align: center;
  padding: 10px 0;
  color: #007bff;
  font-weight: bold;
}

.google-maps {
  border: 0;
  width: 100%;
  height: 270px;
  border-radius: 10px;
  overflow: hidden;
}

.google-maps iframe {
  width: 100%;
  height: 100%;
}
</style>



