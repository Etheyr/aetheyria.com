@extends('index')

@section('portFolio')
<section class="page-section portfolio" id="portfolio">
  <div class="container">

    <!-- Portfolio Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

    <!-- Portfolio Grid Items -->
    <div class="row">

      <!-- Portfolio Item 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="portfolio/logoPlpo.webp" alt="">
        </div>
      </div>

      <!-- Portfolio Item 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="portfolio/logoAC.webp" alt="">
        </div>
      </div>

      <!-- Portfolio Item 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="portfolio/logoVS.webp" alt="">
        </div>
      </div>

      <!-- Portfolio Item 4 -->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="portfolio/monLogo.webp" alt="">
        </div>
      </div>

      <!-- Portfolio Item 5 -->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="portfolio/logoCN.webp" alt="">
        </div>
      </div>

      <!-- Portfolio Item 6 -->
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="portfolio-item-caption-content text-center text-white">
              <i class="fas fa-plus fa-3x"></i>
            </div>
          </div>
          <img class="img-fluid" src="portfolio/logoN.webp" alt="">
        </div>
      </div>


    </div>
    <!-- /.row -->

  </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>


<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Logo Par la patte de l'ours</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="portfolio/logoPlpo.webp" alt="logowebp">
              <!-- Portfolio Modal - Text -->
              <p class="mb-5"></p>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">logo AC numérique</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="portfolio/logoAC.webp" alt="">
              <!-- Portfolio Modal - Text -->
              <p class="mb-5"></p>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Portfolio Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Veille salon</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="portfolio/logoVS.webp" alt="">
              <!-- Portfolio Modal - Text -->
              <p class="mb-5"></p>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Portfolio Modal 4 -->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Logo Aetheyria Design</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="portfolio/monLogo.webp" alt="">
              <!-- Portfolio Modal - Text -->
              <p class="mb-5"></p>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Portfolio Modal 5 -->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Logo Cap numrique</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="portfolio/logoCN.webp" alt="">
              <!-- Portfolio Modal - Text -->
              <p class="mb-5"></p>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Portfolio Modal 6 -->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
          <i class="fas fa-times"></i>
        </span>
      </button>
      <div class="modal-body text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <!-- Portfolio Modal - Title -->
              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Logo Nexus</h2>
              <!-- Icon Divider -->
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- Portfolio Modal - Image -->
              <img class="img-fluid rounded mb-5" src="portfolio/logoN.webp" alt="">
              <!-- Portfolio Modal - Text -->
              <p class="mb-5"></p>
              <button class="btn btn-primary" href="#" data-dismiss="modal">
                <i class="fas fa-times fa-fw"></i>
                Close Window
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop