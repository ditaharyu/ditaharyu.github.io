<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello, I'm Anindhita</title>

  <?php include('template/css_view.php');?>
</head>
<body>

  <!-- Welcome Page -->
  <section id="section1">
    <div class="container-fluid welcome-page">
      <div class="bg-png box-shadow" style="background-image: url('assets/image/trapesium-2.png');">
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-12 col-12 box-left">
            <div class="text">
              <div class="hello">Hello,</div>
              <div class="title">I am 
                <!-- Anindhita -->
                <a class="typewrite" data-period="3000" data-type='[ "Anin", "Dhita", "Anindhita" ]'>
                  <span class="wrap"></span>
                </a>
              </div>
              <div class="subtitle">Front End Developer</div>
              <div class="description">
                I like to make magical things using code.
              </div>
              <div id="button-next">
                <ul>
                  <li>
                    <a class="animated-arrow" href="#section2">
                      <span class="the-arrow -left">
                        <span class="shaft"></span>
                      </span>
                      <span class="main">
                        <span class="text-btn">
                          Explore More
                        </span>
                        <span class="the-arrow -right">
                          <span class="shaft"></span>
                        </span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 col-sm-12 col-12 box-right">
            <div class="box">
              <div class="image">
                <img src="assets/image/anindhita-linkedin-2.png" >
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </section>

  <!-- <section id="section2">
    <div class="container-fluid about-me">
      
      <div class="title">Fransiska Anindhita Haryuningtyas</div>
      <div class="col-lg-6">
        <div class="description">Also known as Dita. Graduated as bachelor degree of computer science at Dian Nuswantoro University, Semarang. Now, I'm worked at Onero Solutions as Front-End Web Developer on Jakarta, Indonesia.</div>
      </div>
      <div class="col-lg-6">
        <div class="university">Dian Nuswantoro University</div>
        <div class="graduated">Graduated as Bachelor of Information Technology</div>
        <div class="year">2013-2017</div>
        <div class="gpa">GPA : 3.38</div>
      </div>

    </div>
  </section> -->

  <?php include('template/footer_view.php');?>
  <?php include('template/js_view.php');?>
</body>
</html>