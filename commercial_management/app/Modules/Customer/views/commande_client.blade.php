<!DOCTYPE html>
<html lang="en">
@include('customer::layouts.head')

<body>

  <!-- ======= Header ======= -->
  @include('customer::layouts.navbar')
<!-- End Header -->




    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card">
                <div class="card-body p-4">
      
                  <div class="row">
      
                    <div class="col-lg-7">
                      <h5 class="mb-3"><a href="#!" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Continuez la commande</a></h5>
                      <hr>
      
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                      
                          <p class="mb-0">vous avez 4 produits dans le panier</p>
                        </div>
                        <div>
                          <p class="mb-0"><span class="text-muted"></span> <a href="#!"
                              class="text-body"> <i class="fas fa-angle-down mt-1"></i></a></p>
                        </div>
                      </div>
                      
                      @foreach ($orders as $order)
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                              <div>
                                <img
                                  src="{{$order->product->picture}}"
                                  class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                              </div>
                              <div class="ms-3">
                                <h5>{{$order->product->name_product}}</h5>
                                <p class="small mb-0">Ref:{{$order->product->ref}}, {{$order->status}}</p>
                              </div>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                              <div style="width: 50px;">
                                <h5 class="fw-normal mb-0">{{$order->total_quantity}}</h5>
                              </div>
                              <div style="width: 220px;">
                                <h5 class="mb-0">{{$order->total_price}} FCFA</h5>
                              </div>
                              <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
      
                    </div>
                    <div class="col-lg-5">
      
                      <div class="card bg-primary text-white rounded-3">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Imformatien de paiement </h5>
                            
                          </div>
      
                          <p class="small mb-2"> Type</p>
                          <a href="#!" type="submit" class="text-white">
                            <i class="fab fa-cc-mastercard fa-lg me-2"></i>
                        </a>
                        <a href="#!" type="submit" class="text-white">
                            <i class="fab fa-cc-visa fa-lg me-2"></i>
                        </a>
                        <a href="#!" type="submit" class="text-white">
                            <i class="fab fa-cc-amex fa-lg me-2"></i>
                        </a>
                        <a href="#!" type="submit" class="text-white">
                            <i class="fab fa-cc-paypal fa-lg"></i>
                        </a>
                        
      
                          <form class="mt-4">
                            <div data-mdb-input-init class="form-outline form-white mb-4">
                              <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                                placeholder="Cardholder's Name" />
                              <label class="form-label" for="typeName">Cardholder's Name</label>
                            </div>
      
                            <div data-mdb-input-init class="form-outline form-white mb-4">
                              <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                                placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                              <label class="form-label" for="typeText">Card Number</label>
                            </div>
      
                            <div class="row mb-4">
                              <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline form-white">
                                  <input type="text" id="typeExp" class="form-control form-control-lg"
                                    placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                  <label class="form-label" for="typeExp">Expiration</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline form-white">
                                  <input type="password" id="typeText" class="form-control form-control-lg"
                                    placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                  <label class="form-label" for="typeText">Cvv</label>
                                </div>
                              </div>
                            </div>
      
                          </form>
      
                          <hr class="my-4">
      
      
      
                          <div class="d-flex justify-content-between mb-4">
                            <p class="mb-2">Total</p>
                            <p class="mb-2"></p>
                          </div>
      
                          <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-block btn-lg">
                            <div class="d-flex justify-content-between">
                              
                              <span>Payer <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                            </div>
                          </button>
      
                        </div>
                      </div>
      
                    </div>
      
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



  </main><!-- End #main -->





  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
