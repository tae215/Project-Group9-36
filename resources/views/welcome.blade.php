@extends('layouts/font_end/head')

@section('content')



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Jae Orn Thai food cooked to order Restaurant Website</span></h1>
          <h2>เว็บไซต์ร้านอาหารตามสั่งเจ๊อร</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
          <div class="flex-center position-ref full-height">


        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">

        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-6 ">
              <div class="about-img">
                <img src="{{asset('font_end/assets/img/about.jpg')}}" width="100%" height="40%" alt="">
              </div>
            </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3> ร้าน อ.เจ๊อร เปิดดำเนินการครั้งแรกเมื่อวันที่ 05 พฤศจิกายน 2545 </h3>

            <ul>
              <li><i class="bi bi-check-circle"></i> อาหารสดใหม่ทุกวัน</li>
              <li><i class="bi bi-check-circle"></i> ใช้วัตถุดิบคุณภาพดี</li>
              <li><i class="bi bi-check-circle"></i> ร้านอาหารสะอาด</li>
            </ul>
            <p>
            ร้าน อ.เจ๊อร เปิดดำเนินการครั้งแรกเมื่อวันที่ 05 พฤศจิกายน 2545
                    โดยร้านเปิดที่ถนน บางกรวย-ไทรน้อย
                    เป็นร้านที่คุณสรวี ธรรมมะกิจไพโรธิ์ผู้เป็นคนก่อตั้งร้าน
                    ซึ่งร้านนี้นอกจากจะเป็นร้านอาหาร
                    ไทยที่สามารถรองรับลูกค้าได้มากกว่า 10 ท่าน
                    มีเมนูอร่อยให้ลูกค้า เลือกไม่น้อยกว่า 100 รายการ
                    เมนูขายดี ได้แก่ ข้าวกระเพราหมูสับ
                    ข้าวหมูกรอบน้ำมันหอย ข้าวไข้เจียวหมูสับ
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">cooked to order</li>
              <li data-filter=".filter-salads">water</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($menu as $menus )

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('admin/images/'.$menus->image)}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">{{$menus->text}}</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
                {{$menus->status}}


            </div>
          </div>

          @endforeach


    </section><!-- End Menu Section -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('font_end/assets/img/ข้าวสวย.png')}}"  width="200%" height="60%" alt=" alt=">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h1> ข้าวมีประโยชน์อย่างไร </h1>

            <ul>
            <h4> <li><i class="bi bi-check-circle"></i>ช่วยบำรุงร่างกาย เพิ่มพลังงานให้กับร่างกาย ฟื้นฟูกำลัง ป้องกันอาการอ่อนเพลีย (วิตามินบี 2)</li> </h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยเสริมสร้างการเจริญโตของร่างกาย</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ข้าวกล้องมีสารต่อต้านอนุมูลอิสระ ช่วยชะลอความแก่ชรา (ข้าวกล้องงอก)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยบำรุงผิวพรรณให้เปล่งปลั่งสดใส (วิตามินอี)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ข้าวกล้องมีวิตามินบี 3 ซึ่งบำรุงสุขภาพผิวหนังและลิ้นได้</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยเสริมสร้างการทำงานของระบบประสาท (โดยเฉพาะอย่างยิ่งข้าวกล้อง)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ข้าวกล้องงอกช่วยป้องกันและลดโอกาสการเกิดโรคความจำเสื่อมหรือโรคอัลไซเมอร์</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยแก้อาการเบื่ออาหารได้ (วิตามินบี 2)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยเสริมสร้างกระดูกและฟันให้แข็งแรง (ฟอสฟอรัส)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยป้องกันและเสริมสร้างการสึกหรอของร่างกาย (โปรตีน)</li></h4>
            </ul>


          </div>
        </div>

      </div>
      </section><!-- End Menu Section -->

              <!-- ======= About Section3 ======= -->
              <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 ">
            <div class="about-img">
              <img src="{{asset('font_end/assets/img/ผัก2.png')}}" width="100%" height="40%" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h1> ผักมีประโยชน์อย่างไร </h1>

            <ul>
            <h4>  <li><i class="bi bi-check-circle"></i>ช่วยเพิ่มความต้านทานโรคหวัดเจ็บคอ ภูมิแพ้</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ใช้ผลิตคอลลาเจน ช่วยให้เซลล์เกาะกันทำให้ผิวพรรณเต่งตึงสดใส</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยเม็ดเลือดแดงต่อสู้กับเชื้อโรค เป็นแผลหายเร็ว</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยให้การดูดซึมธาตุเหล็กและแคลเซียมของร่างกายเป็นไปด้วยดี</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยบำรุงระบบประสาท สมอง ทำให้มีสมาธิความจำดี</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> เปลี่ยนคาร์โบไฮเดรทให้เป็นพลังงาน</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยต้านอนุมูลอิสระที่เป็นตัวทำลายเซลล์ ในร่างกาย</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยในระบบสายตาและการมองเห็น</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยทำให้เนื้อเยื่ออ่อนของเซลล์ และผิวหนังชุ่มชื้น</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยบำรุงกระดูก และฟัน</li></h4>
            </ul>


          </div>
        </div>

      </div>
      </section><!-- End About Section -->


    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1>Organizer</h1>
          <p>Advisor</p>
          <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/assets/img/chefs/kuy.jpg')}}"width = "50%" height= "50%" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ms. Sirirat Muangthen</h4>
                  <span>Advisor</span>
                </div>

              </div>
            </div>
          </div>
          </div>

          <p>Member</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/assets/img/chefs/tae.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kasidech Prasertsonk</h4>
                  <span>Front-End</span>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/assets/img/chefs/non.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nonthawat Phuetthonglang</h4>
                  <span>Back-End</span>
                </div>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/assets/img/chefs/ji.png')}}" width = "100%" height= "100%" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jirayuth Petchprapun</h4>
                  <span>Tester</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.1800057091211!2d100.41660100000001!3d13.915676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc30657b7451468a3!2z4LmA4LiI4LmK4Lit4Lij4Lit4Liy4Lir4Liy4Lij4LiV4Liy4Lih4Liq4Lix4LmI4LiH!5e0!3m2!1sth!2sth!4v1629182914563!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen=" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>182/19 ม.5 ต.โสนลอย อ.บางบัวทอง จ.นนทบุรี 11110</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  จันทร์-อาทิตย์<br>
                  8.30โมง - 19.00ทุ่ม
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Eamil:</h4>
                <p>Jae191_Orn2510@hotmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>091-806-6475</p>
              </div>

            </div>

          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('font_end/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('font_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('font_end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('font_end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('font_end/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('font_end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('font_end/assets/js/main.js')}}"></script>


  @endsection
