<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up"><?= $this->M_dashboard->getTitleById(14)->nama; ?></h1>
        <h2 data-aos="fade-up" data-aos-delay="400"><?= $this->M_dashboard->getTitleById(14)->isi; ?></h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Get Started</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url(); ?>vendor/front-end/assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content card">
            <h3><?= $this->M_dashboard->getTitleById(11)->nama; ?></h3>
            <p>
              <?= $setting->profile; ?>
            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/about.jpg" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(12)->nama; ?></h2>
        <hr>
        <?= $this->M_dashboard->getTitleById(12)->isi; ?>
      </header>

      <div class="row">

        <?php foreach ($values as $key => $value) :

          if ($value->status_values == "Publish") : ?>
            <div class="col-lg-4">
              <div class="box" data-aos="fade-up" data-aos-delay="200">
                <div class="post-img"> <img src="<?= base_url('assets/img/values/') . $value->gambar_values; ?>" alt="" class="img-fluid">
                </div>
                <h3><?= $value->judul_values; ?></h3>
                <p><?= $value->isi_values; ?></p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->client()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->portfolio()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="<?= $this->M_dashboard->staff()->total; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(13)->nama; ?></h2>
        <hr>
        <!-- <p>Laboriosam et omnis fuga quis dolor direda fara</p> -->
        <?= $this->M_dashboard->getTitleById(13)->isi; ?>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/features.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
          <div class="row align-self-center gy-4">

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Eos aspernatur rem</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Facilis neque ipsa</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Volup amet voluptas</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Rerum omnis sint</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Alias possimus</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Repellendus mollitia</h3>
              </div>
            </div>

          </div>
        </div>

      </div> <!-- / row -->

      <!-- Feature Tabs -->
      <div class="row feture-tabs" data-aos="fade-up">
        <div class="col-lg-6">
          <h3>Visi, Misi, & Sejarah Perusahaan</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li>
              <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Visi</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab2">Misi</a>
            </li>
            <li>
              <a class="nav-link" data-bs-toggle="pill" href="#tab3">Sejarah</a>
            </li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="card card-info tab-pane fade show active" id="tab1">
              <p class=""><?= $setting->visi; ?></p>
            </div><!-- End Tab 1 Content -->

            <div class="card card-success tab-pane fade show" id="tab2">
              <p class=""><?= $setting->misi; ?></p>
            </div><!-- End Tab 2 Content -->

            <div class="card card-warning tab-pane fade show" id="tab3">
              <p class=""><?= $setting->sejarah; ?></p>
            </div><!-- End Tab 3 Content -->

          </div>

        </div>

        <div class="col-lg-6">
          <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-2.png" class="img-fluid" alt="">
        </div>

      </div><!-- End Feature Tabs -->

      <!-- Feature Icons -->
      <!-- <div class="row feature-icons" data-aos="fade-up">
        <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

        <div class="row">

          <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url(); ?>vendor/front-end/assets/img/features-3.png" class="img-fluid p-4" alt="">
          </div>

          <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-line-chart-line"></i>
                <div>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-stack-line"></i>
                <div>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-brush-4-line"></i>
                <div>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="ri-magic-line"></i>
                <div>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="ri-command-line"></i>
                <div>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
              </div>

              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="ri-radar-line"></i>
                <div>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div> -->
      <!-- End Feature Icons -->

    </div>

  </section>
  <!-- End Features Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(8)->nama; ?></h2>
        <!-- <p>Veritatis et dolores facere numquam et praesentium</p> -->
        <?= $this->M_dashboard->getTitleById(8)->isi; ?>
      </header> 

      <div class="row gy-4">
        <?php foreach ($layanan as $key => $value) :

          if ($value->status_layanan == "Publish") : ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box blue">
                <div class="post-img"> <img src="<?= base_url('assets/img/layanan/') . $value->gambar_layanan; ?>" alt="" class="img-fluid rounded " style="height: 100px; width:100px;">
                </div>
                <h3><?= $value->judul_layanan; ?></h3>
                <a href="<?= base_url('home/detaillayanan/' . $value->slug_layanan); ?>" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section><!-- End Services Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </header>

      <div class="row">
        <div class="col-lg-6">
          <!-- F.A.Q List 1-->
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  Non consectetur a erat nam at lectus urna duis?
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                </button>
              </h2>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                </button>
              </h2>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6">

          <!-- F.A.Q List 2-->
          <div class="accordion accordion-flush" id="faqlist2">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                  Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                </button>
              </h2>
              <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                  Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                </button>
              </h2>
              <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                  Varius vel pharetra vel turpis nunc eget lorem dolor?
                </button>
              </h2>
              <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                <div class="accordion-body">
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section><!-- End F.A.Q Section -->

  <!--section portfolio -->
  <section id="portfolio" class="portfolio clients recent-blog-posts">
  <div class="container" data-aos="fade-up">
  <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(15)->nama; ?></h2>
        <?= $this->M_dashboard->getTitleById(15)->isi; ?>
      </header>

    <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App Development</li>
          <li data-filter=".filter-card">Web Design</li>
          <li data-filter=".filter-web">Web Development</li>
        </ul>
      </div>
    </div> -->

    <div class="swiper-container clients-slider2">
      <div class="swiper-wrapper">
        <?php foreach ($portfolio as $key => $value) :
          if ($value->nama_layanan == " App Development" && $value->status_portfolio == "Publish") : ?>
            <div class="swiper-slide col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="post-box portfolio-wrap">
                <div class="post-img">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                <h3 class="post-title"><?= $value->judul_portfolio; ?></h3>
                <h4><?= $value->nama_layanan; ?></h4>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          if ($value->nama_layanan == " Web Development" && $value->status_portfolio == "Publish") : ?>
            <div class="swiper-slide col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="post-box portfolio-wrap">
                <div class="post-img">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                <h3 class="post-title"><?= $value->judul_portfolio; ?></h3>
                <h4><?= $value->nama_layanan; ?></h4>

              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          if ($value->nama_layanan == "Web Design" && $value->status_portfolio == "Publish") : ?>
            <div class="swiper-slide col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="post-box portfolio-wrap">
                <div class="post-img">
                  <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                </div>
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                <h3 class="post-title"><?= $value->judul_portfolio; ?></h3>
                <h4><?= $value->nama_layanan; ?></h4>

              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script>
  var swiper = new Swiper('.clients-slider2', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
  });

</script>



  <!-- ======= Portfolio Section ======= -->
  <!-- <section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(15)->nama; ?></h2>
        <?= $this->M_dashboard->getTitleById(15)->isi; ?>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App Development</li>
            <li data-filter=".filter-card">Web Design</li>
            <li data-filter=".filter-web">Web Development</li>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == " App Development" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == " Web Development" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($portfolio as $key => $value) :
          // strip tags to avoid breaking any html
          if ($value->nama_layanan == "Web Design" && $value->status_portfolio == "Publish") : ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $value->judul_portfolio; ?></h4>
                  <p><?= $value->nama_layanan; ?></p>
                  <div class="portfolio-links">
                    <a href="<?= base_url('assets/img/portfolio/') . $value->gambar_portfolio; ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $value->judul_portfolio; ?>"><i class="bi bi-plus"></i></a>
                    <a href="<?= base_url('home/portfoliodetail/' . $value->slug_portfolio); ?>" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </div>

  </section> -->
  <!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(16)->nama; ?></h2>
        <?= $this->M_dashboard->getTitleById(16)->isi; ?>
      </header>
      <div class="row gy-4 d-flex justify-content-center">
        <?php foreach ($staff as $key => $value) :
          if ($value->publish == "Publish") : ?>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="<?= base_url('assets/img/staff/') . $value->gambar_staff; ?>" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4><?= $value->nama_staff; ?></h4>
                  <span><?= $value->nama_kategori; ?></span>
                  <p><?= $value->no_telepon; ?></p>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

    </div>

  </section><!-- End Team Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(17)->nama; ?></h2>
        <?= $this->M_dashboard->getTitleById(17)->isi; ?>
      </header>

      <div class="clients-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <?php foreach ($client as $key => $value) :
            if ($value->publish == "Publish") : ?>
              <div class="swiper-slide">
                <img src="<?= base_url('assets/img/client/') . $value->gambar_client; ?>" class="img-fluid" alt="">
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

  </section><!-- End Clients Section -->

  <!-- ======= Recent Blog Posts Section ======= -->
  <!-- <section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(18)->nama; ?></h2>
        <?= $this->M_dashboard->getTitleById(18)->isi; ?>
      </header>
      <div class="row">
        <?php foreach ($berita as $key => $value) :
          // strip tags to avoid breaking any html
          $isi = strip_tags($value->isi_berita);
          if (strlen($isi) > 200) {

            // truncate isi
            $isiCut = substr($isi, 0, 200);
            $endPoint = strrpos($isiCut, ' ');

            //if the isi doesn't contain any space then it will cut without word basis.
            $isi = $endPoint ? substr($isiCut, 0, $endPoint) : substr($isiCut, 0);
          }
          if ($value->status_berita == "Publish") : ?>
            <div class="col-lg-4 mb-2">
              <div class="post-box">
                <div class="post-img"><img src="<?= base_url('assets/img/berita/') . $value->gambar_berita; ?>" class="img-fluid" alt=""></div>
                <span class="post-date"><?= date('d-M-Y', strtotime($value->date_cretated)); ?></span>
                <h3 class="post-title"><?= $value->judul_berita; ?></h3>
                <a href="<?= base_url('home/detail/' . $value->slug_berita); ?>" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section> -->
  <!-- End Recent Blog Posts Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2><?= $this->M_dashboard->getTitleById(19)->nama; ?></h2>
        <?= $this->M_dashboard->getTitleById(19)->isi; ?>
      </header>

      <div class="row gy-4">

        <div class="col-lg-12">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p><?= $setting->alamat; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p><?= $setting->no_telepon; ?><br><?= $setting->no_telepon; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p><?= $setting->email; ?><br><?= $setting->email; ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>08:00AM - 05:30PM</p>
              </div>
            </div>
          </div>

        </div>

        <!-- <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>

        </div> -->

      </div>

    </div>

  </section><!-- End Contact Section -->

</main><!-- End #main -->