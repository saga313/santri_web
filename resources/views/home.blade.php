<!-- Menghubungkan view dengan template utama  -->
@extends('main')

<!-- cara penulisan isi section yang pendek -->
<!-- @section('title', 'Halaman Home') -->

<!-- cara penulisan isi section yang panjang -->
@section('content')

<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>أُطْلُبِ الْعِلْمَ مِنَ الْمَهْدِ إِلَى اللَّحْدِ</h6>
                                    <p class="mt-4 pr-lg-4">Artinya: “Tuntutlah ilmu dari buaian (bayi) hingga liang lahat.”</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="{{ route('santri-registration') }}"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>وَمَنْ سَلَكَ طَرِيقًا يَلْتَمِسُ فِيهِ عِلْمًا سَهَّلَ اللَّهُ لَهُ بِهِ طَرِيقًا إِلَى الْجَنَّةِ </h6>
                                    <p class="mt-4 pr-lg-4">Artinya: “Siapa yang menempuh jalan untuk mencari ilmu, maka Allah akan mudahkan baginya jalan menuju surga.” (HR. Muslim, no. 2699) </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="{{ route('santri-registration') }}"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>طَلَبُ اْلعِلْمْ فَرِثْضَةٌ عَلَى كُلِّ مُسْلِمٍ</h6>
                                    <p class="mt-4 pr-lg-4">Artinya: "Menuntut ilmu adalah kewajiban bagi setiap individu muslim."</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="{{ route('santri-registration') }}"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>مَنْ أَرَادَ الدُّنْيَا فَعَلَيْهِ بِالْعِلْمِ, وَمَنْ أَرَادَ الأَخِرَةَ فَعَلَيْهِ بِالْعِلْمِ, وَمَنْ أَرَادَهُمَا فَعَلَيْهِ بِالْعِلْمِ</h6>
                                    <p class="mt-4 pr-lg-4">“Barang siapa menginginkan kebahagian dunia, maka tuntutlah ilmu dan barang siapa yang ingin kebahagian akhirat, tuntulah ilmu dan barangsiapa yang menginginkan keduanya, tuntutlah ilmu pengetahuan.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="{{ route('santri-registration') }}"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>

    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- /main-slider -->
<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center mb-1">Join and learn with us</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Gallery</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset ('img/b2.jpeg') }}"
                                    alt="Card image cap">
                            </a>
                            
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                
                            </div>
                            <a href="#course-single" class="course-desc">Acara Perlombaan Bulan Muharram Santri Putri
                            </a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"> 4 hrs </span>
                                </div>
                                <div class="meta-item course-">
                                    <span class="fa fa-user-o"></span>
                                    <span class="meta-value"> 36 </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-md-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset ('img/b3.jpeg') }}"
                                    alt="Card image cap">
                            </a>
                            
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                
                            </div>
                            <a href="#course-single" class="course-desc">Ziarah & Studi Banding Pondok</a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"> 12 hrs </span>
                                </div>
                                <div class="meta-item course-">
                                    <span class="fa fa-user-o"></span>
                                    <span class="meta-value"> 19 </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="{{ asset ('img/b1.jpeg') }}"
                                    alt="Card image cap">
                            </a>
                            <div class="course-price-badge-new"> New</div>
                        </div>
                        <div class="card-body course-details">
                            
                            </div>
                            <a href="#course-single" class="course-desc">Acara Perlombaan Bulan Muharram Santri Putra</a>
                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"> 4 hrs </span>
                                </div>
                                <div class="meta-item course-">
                                    <span class="fa fa-user-o"></span>
                                    <span class="meta-value"> 39 </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="author align-items-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="w3l-homeblock3 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <h5 class="title-small text-center mb-1">From the news</h5>
        <h3 class="title-big text-center mb-sm-5 mb-4">Latest <span>News</span></h3>
        <div class="row top-pics">
            <div class="col-md-6">
                <div class="top-pic1">
                    <div class="card-body blog-details">
                        <a href="#blog-single" class="blog-desc">Pondok Pesantren AL Husen 
                        </a>
                        <div class="author align-items-center">
                            <img src="{{ asset ('img/a.png') }}" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="#author">Logo Ponpes</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Nov 19, 2020 </span>. <span class="meta-value ml-2"><span
                                            class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4">
                <div class="top-pic2">
                    <div class="card-body blog-details">
                        <a href="#blog-single" class="blog-desc">Al Husen Gaitsan Nada Grup
                        </a>
                        <div class="author align-items-center">
                            <img src="{{ asset ('img/yt1.jpeg') }}" alt="" class="img-fluid rounded-circle" />
                            <ul class="blog-meta">
                                <li>
                                    <a href="https://www.youtube.com/channel/UC_96VR7VF6cCHfP4efmwbJg">Channel Youtube</a> </a>
                                </li>
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> Maret 2017 </span>. <span class="meta-value ml-2"><span
                                            class="fa fa-clock-o"></span> 1 min</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="top-pic3">
                        <div class="card-body blog-details">
                            <a href="#blog-single" class="blog-desc"> مَنْ أَنَا مَنْ أَنَا لَوْلَاكُم
                            </a>
                            <div class="author align-items-center">
                                <img src="{{ asset ('img/yt2.jpeg') }}" alt="" class="img-fluid rounded-circle" />
                                <ul class="blog-meta">
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=3slHSewIuC0">Al Husen Gaitsan Nada Grup</a> </a>
                                    </li>
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> Oktober 2019 </span>. <span
                                            class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-md-5 mt-4 text-more text-center">
            <a href="https://api2.enscape3d.com/v3/view/933ee71f-e501-4035-a797-b234f7685fcf">Drone View <span class="pl-2 fa fa-long-arrow-right"></span></a>
        </div>
    </div>
</div>
<!-- middle -->
<div class="middle py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="welcome-left text-center py-lg-4">
            <h5 class="title-small mb-1">Start learning religion</h5>
            <h3 class="title-big">Ayok Mondok !!</h3>
            <a href="{{ route('santri-registration') }}" class="btn btn-style btn-outline-light mt-sm-5 mt-4 mr-2">Daftar Sekarang</a>
            <a href="#contact" class="btn btn-style btn-primary mt-sm-5 mt-4">Hubungi Kami</a>
        </div>
    </div>
</div>
<!-- //middle -->
<section class="w3l-team py-5" id="team">
    <div class="call-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h5 class="title-small mb-1">Pondok Pesantren</h5>
                    <h3 class="title-big mb-4">AL - HUSEN</h3>
                    <p class="text-para">Menyelenggarakan pendidikan berbasis ajaran Ulama Salafus Shalih Ahlussunnah Wal Jama'ah An-Nahdliyyah yang menjaga tradisi lama yang baik dan mengambil tradisi baru yang lebih baik tanpa meninggalkan warisan dan metode pendidikan ulama terdahulu yang mu'tabaroh. </p>
                    <p class="mt-3">
                    </p>
                    <a href="{{ route('santri-registration') }}" class="btn btn-primary btn-style mt-md-5 mt-4">Daftar Sekarang</a>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box16">
                                <a href="#url"><img src="{{ asset ('img/t2.jpeg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">KH. Ja'far Sidiq</a></h3>
                                    <span class="post">Pimpinan Ponpes Al-Husen</span>
                                     <ul class="social">
                                        <li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-3">
                            <div class="box16">
                                <a href="#url"><img src="{{ asset ('img/kang.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Kang Andi</a></h3>
                                    <span class="post">Pengajar</span>
                                    <ul class="social">
                                        <li>
                                            <!-- <a href="#" class="facebook"> 
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box16">
                                <a href="#url"><img src="{{ asset ('img/t4.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ahmad Fauzani</a></h3>
                                    <span class="post">Pengurus</a></span>
                                    <ul class="social">
                                        <li>
                                            <!-- <a href="#" class="facebook"> 
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box16">
                                <a href="#url"><img src="{{ asset ('img/t3.jpeg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Fariz Fadilah Ja'far</a></h3>
                                    <span class="post">Pengurus</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- testimonials -->
<section class="w3l-testimonials" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
        <div class="container py-lg-4 py-md-3 pb-lg-0">

            <h5 class="title-small text-center mb-1">Testimonials</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Happy Alumni & Feedbacks</h3>
            <!-- /grids -->
            <div class="testimonial-width">
                <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Kesan saya mengenai PP alhusen , saya ucapkan terimakasih kepada akang haji yang telah membina dan membimbing saya dalam Hal syariah islamiyah . Di alhusen juga saya jadi mengenal para habaib dan lingkungan yang cinta sholawat dan akhirnya saya bisa bermain Hadroh terima kasih untuk Fariz Dkk . Dan seluruh Kerabat akang haji yang selalu mensupport kegiatan santriwan santriwati.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar3.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Alip Gamiarta Pratama</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Kesan saya mesantren di alhusen sangat merasa bhgia krna akang telah memupuk jiwa rohani saya menjdi lebih baik, entah apa yg trjadi jika saat itu saya tidak mesantren. Ditambah keadaan akhir zaman yg sungguh2 banyak fitnah.

Pesan : bagi seluruh alumni tetep jaga silaturahmi. Untuk para santri mukimin smngatlah mnuntut ilmu sebelum datang nya 5 perkara.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar2.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Uud Mahmud</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Saya sangat senang bisa menuntut ilmu agama Di Pondok Pesantren AL Husen, saya mendapatkan banyak sekali ilmu dan pengalaman dari Dewan Pengajar maupun teman-teman Santri.
Lingkungan di Pesantren ini sangatlah nyaman. Selain itu, fasilitasnya pun juga Lumayan lengkap sehingga sangat mendukung dan memudahkan para Santri dalam kegiatan belajar.
</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar5.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Muhammad Arif</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Saya sangat senang bisa berteman dengan kalian. Kita sudah bersama-sama selama beberapa tahun. Banyak hal yang sudah kita lewati bersama, baik senang maupun sedih. Kalian adalah teman-teman yang baik. Selalu mau menemani saya dalam keadaan apapun, serta selalu memberi nasihat yang baik ketika saya salah.
Tak ada lagi kata yang bisa saya ucap, kalian adalah yang terbaik!</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar5.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Gerbin</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Kesan saya mengenai PP alhusen , saya ucapkan terimakasih kepada akang haji yang telah membina dan membimbing saya dalam Hal syariah islamiyah . Di alhusen juga saya jadi mengenal para habaib dan lingkungan yang cinta sholawat dan akhirnya saya bisa bermain Hadroh terima kasih untuk Fariz Dkk . Dan seluruh Kerabat akang haji yang selalu mensupport kegiatan santriwan santriwati.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar4.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Wahid</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Kesan saya mesantren di alhusen sangat merasa bhgia krna akang telah memupuk jiwa rohani saya menjdi lebih baik, entah apa yg trjadi jika saat itu saya tidak mesantren. Ditambah keadaan akhir zaman yg sungguh2 banyak fitnah.

Pesan : bagi seluruh alumni tetep jaga silaturahmi. Untuk para santri mukimin smngatlah mnuntut ilmu sebelum datang nya 5 perkara.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar3.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Huda Fiqri</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Kesan saya mengenai PP alhusen , saya ucapkan terimakasih kepada akang haji yang telah membina dan membimbing saya dalam Hal syariah islamiyah . Di alhusen juga saya jadi mengenal para habaib dan lingkungan yang cinta sholawat dan akhirnya saya bisa bermain Hadroh terima kasih untuk Fariz Dkk . Dan seluruh Kerabat akang haji yang selalu mensupport kegiatan santriwan santriwati.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar2.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Sulaiman Malik</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="testimonial">
                                <blockquote>
                                    <q>Saya sangat senang bisa berteman dengan kalian. Kita sudah bersama-sama selama beberapa tahun. Banyak hal yang sudah kita lewati bersama, baik senang maupun sedih. Kalian adalah teman-teman yang baik. Selalu mau menemani saya dalam keadaan apapun, serta selalu memberi nasihat yang baik ketika saya salah.
Tak ada lagi kata yang bisa saya ucap, kalian adalah yang terbaik!.</q>
                                </blockquote>
                                <div class="testi-des">
                                    <div class="test-img"><img src="{{ asset ('img/avatar.png') }}" class="img-fluid"
                                            alt="client-img">
                                    </div>
                                    <div class="peopl align-self">
                                        <h3>Dede Maulana</h3>
                                        <p class="indentity">Alumni Santri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
<!-- //testimonials -->


<section class="w3l-clients py-5" id="clients">
    <div class="call-w3 py-md-4 py-2">
        <div class="container">
            <div class="company-logos text-center">
                <div class="row logos">
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{ asset ('img/l1.jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{ asset ('img/a.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4">
                        <img src="{{ asset ('img/l1.jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 mt-md-0 mt-4">
                        <img src="{{ asset ('img/a.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 mt-lg-0 mt-4">
                        <img src="{{ asset ('img/l1.jpeg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 mt-lg-0 mt-4">
                        <img src="{{ asset ('img/a.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection