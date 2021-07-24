@extends('layouts.app')
@push('custom-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
@endpush

@section('content')

<main>
      <div class="container" style="margin-top: 80px;">
            <div class="py-lg-5 ">
                  <div class="row g-3">
                        <div class="col-lg-6">
                              <div class="card rounded shadow">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                          <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                          </div>
                                          <div class="carousel-inner rounded">
                                                <div class="carousel-item active">
                                                      <img height="357" src="https://www.infobdg.com/v2/wp-content/uploads/2017/07/341-library.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                      <img height="357" src="https://1.bp.blogspot.com/-rT2IMwRyoJY/X3Ge1u-TelI/AAAAAAAAB7I/fUy9dM-nXXAOU2gBjqrXweAB5-Hh97LbgCLcBGAsYHQ/w640-h462/%255BJejakakhi%255DPerpustakaan-Anak-Kota-Bandung1.jpg" class="d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                      <img height="357" src="https://cdn.idntimes.com/content-images/community/2020/07/screenshot-146-8f103979f410e4eb457555f55845b44a.png" class="d-block w-100" alt="...">
                                                </div>
                                          </div>
                                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                          </button>
                                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                          </button>
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-6">
                              <div class="row g-3">
                                    <div class="col-8">
                                          <div class="card rounded shadow border-0" data-toggle="modal" data-target="#modalDetailJadwal">
                                                <img class="rounded shadow border-0" height="200" src="{{ asset('img/jadwal-pelayanan.jpeg') }}" alt="">
                                          </div>
                                    </div>
                                    <div class="col-4">
                                          <img class="rounded shadow border-0 w-100" height="200" src="{{ asset('img/side-image2.png') }}" alt="">
                                    </div>
                              </div>
                              <div class="row mt-3">
                                    <div class="col-12">
                                          <div class="card rounded shadow p-3">
                                                <div class="card-body">
                                                      <div class="row">
                                                            <div class="col-6 pr-4">
                                                                  <h5 class="card-title fs-16 semi-bold">Ikuti berita terkini Perpustakaan Kota Bandung dengan mengikuti kanal sosial media kami.</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                  <div class="d-flex justify-content-center mb-3 mx-3">
                                                                        <img height=30 width=30 src="svg/instagram.svg" alt="">
                                                                  </div>
                                                                  <div class="d-flex justify-content-center mx-3">
                                                                        <img height=30 width=30 src="svg/facebook.svg" alt="">
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- grafik and diagram -->
      <section style="background-color: #ffffff">
            <div class="content-3-2 mx-auto position-relative" style="font-family: 'Poppins', sans-serif; ">
                  <div class="container mb-3">
                        <div>
                              <h2 style="text-align: center;">
                                    <b>Statistik</b>
                              </h2>
                        </div>
                  </div>
                  <div class="container">
                        <div class="row pt-2 pb-4">
                              <div class="col-lg-6 mt-2">
                                    <div class="border-outline-1 shadow rounded overflow-auto">
                                          <canvas id="myChart" style="height:165px; width:400px"></canvas>
                                    </div>
                              </div>
                              <div class="col-lg-6 mt-2">
                                    <div class="row" style="height: 265px;">
                                          <div class="col-lg-6 col-md-6" >
                                                <div class="border-outline-1 shadow rounded h-100" >
                                                      <div class="mt-4 mr-4 ml-4">
                                                            <h5>
                                                                  <b>
                                                                        TOTAL PUSTAKA<br>
                                                                  </b>
                                                            </h5>
                                                            <h6>
                                                                  Kota Bandung
                                                            </h6>
                                                            <hr>
                                                      </div>
                                                      <div class="row d-flex justify-content-rounded">
                                                            <div class="col-12 mr-4 ml-4">
                                                                  <h6>Jumlah</h6>
                                                                  <h4>132.321</h4>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Pria</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Wanita</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6">
                                                <div class="border-outline-1 shadow rounded h-100" >
                                                      <div class="mt-4 mr-4 ml-4">
                                                            <h5>
                                                                  <b>
                                                                        TOTAL BUKU<br>
                                                                  </b>
                                                            </h5>
                                                            <h6>
                                                                  Kota Bandung
                                                            </h6>
                                                            <hr>
                                                      </div>
                                                      <div class="row d-flex justify-content-rounded">
                                                            <div class="col-12 mr-4 ml-4">
                                                                  <h6>Jumlah</h6>
                                                                  <h4>132.321</h4>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Pria</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Wanita</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>

                                    </div>
                              </div>

                              <div class="col-lg-6 mt-4 ">
                                    <div class="border-outline-1 shadow rounded overflow-auto ">
                                          <canvas id="myChartLine" style="height:212px; width:400px"></canvas>
                                    </div>
                              </div>
                              <div class="col-lg-6 mt-4">
                                    <div class="row" >
                                          <div class="col-lg-6 col-md-6 rounded" style="height: 265px;">
                                                <div class="border-outline-1 shadow rounded h-100" >
                                                      <div class="mt-4 mr-4 ml-4" >
                                                            <h5>
                                                                  <b>
                                                                        DATA OPD BINAAN<br>
                                                                  </b>
                                                            </h5>
                                                            <h6>
                                                                  Kota Bandung
                                                            </h6>
                                                            <hr>
                                                      </div>
                                                      <div class="row d-flex justify-content-rounded">
                                                            <div class="col-12 mr-4 ml-4">
                                                                  <h6>Jumlah</h6>
                                                                  <h4>132.321</h4>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Pria</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Wanita</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-lg-6 col-md-6">
                                          <div class="border-outline-1 shadow rounded h-100" >
                                                      <div class="mt-4 mr-4 ml-4" >
                                                            <h5>
                                                                  <b>
                                                                        TOTAL REKAPITULASI<br>
                                                                  </b>
                                                            </h5>
                                                            <h6>
                                                                  Arsip
                                                            </h6>
                                                            <hr>
                                                      </div>
                                                      <div class="row d-flex justify-content-rounded">
                                                            <div class="col-12 mr-4 ml-4">
                                                                  <h6>Jumlah</h6>
                                                                  <h4>132.321</h4>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Pria</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                            <div class="col-4 mr-4 ml-4">
                                                                  <h6>Wanita</h6>
                                                                  <h5>132.321</h5>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                          <div class="col-lg-12 col-md-12 mt-4">
                                                <button class="btn btn-block btn-outline-success btn-lg rounded">
                                                      Lihat Selengkapnya
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
      <!-- social media feed -->
      <section style="background-color: #ffffff">
            <div class="content-3-2 position-relative" style="font-family: 'Poppins', sans-serif; ">
                  <div class="container mb-3 p-4 ">
                        <div>
                              <h2 style="text-align: center;">
                                    <b>Social Media</b>
                              </h2>
                        </div>
                  </div>
                  <div class="container">
                        <div class="row d-flex justify-content-center">
                              <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                                    <div class="overflow-auto social-scroll-hidden  d-flex justify-content-center" style="height: 550px; width: auto;">
                                          <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CPx3U35hcW3/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                                <div style="padding:16px;"> <a href="https://www.instagram.com/p/CPx3U35hcW3/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                                                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                                                  <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                                                  <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                                                        <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                                                  </div>
                                                            </div>
                                                            <div style="padding: 19% 0;"></div>
                                                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                              <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                                                    <g>
                                                                                          <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                                                                    </g>
                                                                              </g>
                                                                        </g>
                                                                  </svg></div>
                                                            <div style="padding-top: 8px;">
                                                                  <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div>
                                                            </div>
                                                            <div style="padding: 12.5% 0;"></div>
                                                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                                                  <div>
                                                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                                                        <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                                                        <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                                                  </div>
                                                                  <div style="margin-left: 8px;">
                                                                        <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                                                        <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                                                  </div>
                                                                  <div style="margin-left: auto;">
                                                                        <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                                                        <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                                                        <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                                                  </div>
                                                            </div>
                                                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                                                  <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                                                  <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                                                            </div>
                                                      </a>
                                                      <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CPx3U35hcW3/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Dispusipda Provinsi Jawa Barat (@dispusipdajabar)</a></p>
                                                </div>
                                          </blockquote>
                                          <script async src="//www.instagram.com/embed.js"></script>
                                    </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <div class="card">
                                          <div class="overflow-auto social-scroll-hidden" style="height: 550px; width: auto;">
                                                <a class="twitter-timeline" href="https://twitter.com/disarpuskotabdg?ref_src=twsrc%5Etfw">Tweets by disarpuskotabdg</a>
                                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>

            </div>
      </section>
      <section>
            <!-- Alur Peminjaman Buku -->
            <div class="content-3-2 mx-auto position-relative" style="font-family: 'Poppins', sans-serif;">
                  <div class="d-flex container shadow flex-lg-row flex-column align-items-center card " style="background-color: #1C8DCF;">
                        <!-- Left Column -->
                        <div class="img-hero text-center justify-content-center d-flex">
                              <img id="hero" class="img-fluid" src="{{ asset('img/Content-3-1.png') }}" alt="" />
                        </div>
                        <!-- Right Column -->
                        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                              <div class="mt-5">
                                    <h2 style="text-align: center; color:white">
                                          <b>Alur Peminjaman Buku</b>
                                    </h2>
                              </div>
                              <ul style="padding: 0; margin-top: 3rem">
                                    <li class="list-unstyled" style="margin-bottom: 1rem">
                                          <p class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                                <span style="color: #5E1212;" class="circle d-flex align-items-center justify-content-center">
                                                      1
                                                </span>
                                                Menelusuri/mencari buku di komputer<br class="d-sm-inline d-none" />
                                                dengan mengakses OPAC
                                          </p>
                                    </li>
                                    <li class="list-unstyled" style="margin-bottom: 2rem">
                                          <p class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                                <span style="color: #5E1212;" class="circle d-flex align-items-center justify-content-center">
                                                      2
                                                </span>
                                                Mengambil buku yang sudah dipilih
                                          </p>
                                    </li>
                                    <li class="list-unstyled" style="margin-bottom: 2rem">
                                          <p class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                                <span style="color: #5E1212;" class="circle d-flex align-items-center justify-content-center">
                                                      3
                                                </span>
                                                Menyarahkan buku dan kartu anggota <br class="d-sm-inline d-none" />
                                                perpustakaan ke petugas
                                          </p>
                                    </li>
                                    <li class="list-unstyled" style="margin-bottom: 2rem">
                                          <p class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                                <span style="color: #5E1212;" class="circle d-flex align-items-center justify-content-center">
                                                      4
                                                </span>
                                                Transkaksi diproses dengan komputer
                                          </p>
                                    </li>
                                    <li class="list-unstyled" style="margin-bottom: 2rem">
                                          <p class="title-caption text-white d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                                <span style="color: #5E1212;" class="circle d-flex align-items-center justify-content-center">
                                                      5
                                                </span>
                                                Buku dan kartu anggota diserahkan kepada <br class="d-sm-inline d-none" />
                                                peminjam
                                          </p>
                                    </li>
                              </ul>
                        </div>
                  </div>
            </div>
      </section>

      <section class="content-3-2 mx-auto position-relative">
            <div class="d-flex container flex-lg-row flex-column align-items-center card shadow">
                  <div class="col-md-12">
                        <!-- <div class="border rounded overflow-hidden flex-md-row mb-4 p-4 shadow h-md-250 position-relative"> -->
                        <div class="pl-3 py-4 pb-2">
                              <h2>
                                    <b>#informasiterkini
                                          <style>
                                                .fa-bullhorn {
                                                      color: #1C8DCF;
                                                }
                                          </style>
                                    <i class="fas fa-bullhorn"></i>
                                    </b>
                              </h2>
                        </div>
                        <div class="row">
                              <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-2" style="color: #1C8DCF;">
                                          <strong>Persan dan Harapan untuk Jalan Bergerak</strong>
                                    </h3>
                                    <div class="mb-1 text-muted">Kamis, 15 Jul 2021 11.21</div>
                                    <br />
                                    <p class="card-text mb-auto">KOTA BANDUNG --Gubernur Jawa Barat (Jabar) Ridwan Kamil meminta Jabar Bergerak untuk menjadi penyambung donatur dengan orang yang membutuhkan. Oleh karena itu, ia mendorong Jabar Bergerak untuk terus memperbaiki sistem data. Hal tersebut disampaikan...</p>
                              </div>
                              <div class="col-auto d-none d-lg-block m-4">
                                    <img class="rounded" src="https://www.infobdg.com/v2/wp-content/uploads/2017/07/341-library.jpg" height="250" width="350" alt="" />
                              </div>
                              <div class="hr-space">
                                    <hr class="line">
                              </div>
                        </div>
                        <div class="row">
                              <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-2" style="color: #1C8DCF;">
                                          <strong>Persan dan Harapan untuk Jalan Bergerak 2</strong>
                                    </h3>
                                    <div class="mb-1 text-muted">Kamis, 15 Jul 2021 11.21</div>
                                    <br />
                                    <p class="card-text mb-auto">KOTA BANDUNG --Gubernur Jawa Barat (Jabar) Ridwan Kamil meminta Jabar Bergerak untuk menjadi penyambung donatur dengan orang yang membutuhkan. Oleh karena itu, ia mendorong Jabar Bergerak untuk terus memperbaiki sistem data. Hal tersebut disampaikan...</p>
                              </div>
                              <div class="col-auto d-none d-lg-block m-4">
                                    <img class="rounded" src="https://1.bp.blogspot.com/-rT2IMwRyoJY/X3Ge1u-TelI/AAAAAAAAB7I/fUy9dM-nXXAOU2gBjqrXweAB5-Hh97LbgCLcBGAsYHQ/w640-h462/%255BJejakakhi%255DPerpustakaan-Anak-Kota-Bandung1.jpg" height="250" width="350" alt="" />
                              </div>
                              <div class="hr-space">
                                    <hr class="line">
                              </div>
                        </div>
                        <div class="row">
                              <div class="col p-4 d-flex flex-column position-static">
                                    <h3 class="mb-2" style="color: #1C8DCF;">
                                          <strong>Persan dan Harapan untuk Jalan Bergerak</strong>
                                    </h3>
                                    <div class="mb-1 text-muted">Kamis, 15 Jul 2021 11.21</div>
                                    <br />
                                    <p class="card-text mb-auto">KOTA BANDUNG --Gubernur Jawa Barat (Jabar) Ridwan Kamil meminta Jabar Bergerak untuk menjadi penyambung donatur dengan orang yang membutuhkan. Oleh karena itu, ia mendorong Jabar Bergerak untuk terus memperbaiki sistem data. Hal tersebut disampaikan...</p>
                              </div>
                              <div class="col-auto d-none d-lg-block m-4">
                                    <img class="rounded" src="https://cdn.idntimes.com/content-images/community/2020/07/screenshot-146-8f103979f410e4eb457555f55845b44a.png" height="250" width="350" alt="" />
                              </div>
                        </div>
                        <div class="m-4">
                              <button class="btn btn-block btn-outline-success btn-lg rounded">
                                    Lihat Selengkapnya
                              </button>
                        </div>
                  </div>
            </div>
      </section>

      <section class="container border rounded flex-md-row p-4 mb-4 shadow position-relative" style="box-sizing: border-box">
            <div class="content-2-2 mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
                  <div class="text-center title-text">
                        <h1 class="text-title">Video DISPUSIP Kota Bandung</h1>
                        <h4 class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                              Video kegiatan DISPUSIP Kota Bandung
                        </h4>
                  </div>
                  <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 col-m-12 m-4">
                              <iframe class="d-flex w-100" height="350px" src="https://www.youtube.com/embed/watch?v=o5PWIuDTgxg&amp;list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR&amp;ab_channel=AndreMadarang" frameborder="0" allowfullscreen allow="accelerometer" encrypted-media; frameborder="0" gyroscope; picture-in-picture;></iframe>
                              <h3 class="icon-title"></h3>
                              <p class="icon-caption">
                              </p>
                        </div>
                        <div class="col-lg-5 col-m-12 m-4">
                              <iframe class="d-flex w-100" height="350px" src="https://www.youtube.com/embed/watch?v=o5PWIuDTgxg&amp;list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR&amp;ab_channel=AndreMadarang" frameborder="0" allowfullscreen allow="accelerometer" encrypted-media; frameborder="0" gyroscope; picture-in-picture;></iframe>
                              <h3 class="icon-title"></h3>
                              <p class="icon-caption">
                              </p>
                        </div>
                  </div>
                  <div class="m-4">
                        <button class="btn btn-block btn-outline-success btn-lg rounded">
                              Lihat Selengkapnya
                        </button>
                  </div>
            </div>
      </section>

      <!-- galeri perpustakaan -->
      <section class="container border rounded flex-md-row shadow position-relative" style="box-sizing: border-box">
            <div class="content-2-2 mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
                  <div class="text-center title-text">
                        <h1 class="text-title">Galeri Kearsipan Kota Bandung</h1>
                  </div>
                  <div class="owl-carousel owl-theme container">
                        <div class="item">
                              <img style="height: 200px;" src="{{ asset('img/galeri-arsip/1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                              <img style="height: 200px;" src="{{ asset('img/galeri-arsip/2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                              <img style="height: 200px;" src="{{ asset('img/galeri-arsip/1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                              <img style="height: 200px;" src="{{ asset('img/galeri-arsip/4.jpg') }}" alt="">
                        </div>
                        <div class="item">
                              <img style="height: 200px;" src="{{ asset('img/galeri-arsip/1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                              <img style="height: 200px;" src="{{ asset('img/galeri-arsip/2.jpg') }}" alt="">
                        </div>
                  </div>
                  <div class="m-4">
                        <button class="btn btn-block btn-outline-success btn-lg rounded">
                              Lihat Selengkapnya
                        </button>
                  </div>
            </div>
      </section>

      <!-- galeri kearsipan -->
      <section class="container border rounded flex-md-row shadow position-relative" style="box-sizing: border-box">
            <div class="content-2-2 mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
                  <div class="text-center title-text">
                        <h1 class="text-title">Galeri Kearsipan Kota Bandung</h1>
                  </div>
                  <div class="row ml-4 mr-4">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                              <div class="img-gallery mb-4"> <a href="#">
                                          <div class="img-gallery-overlay"></div> <img class="img-gallery-image" src="{{ asset('img/galeri-arsip/1.jpg') }}">
                                          <div class="img-gallery-details fadeIn-bottom">
                                                <p class="img-gallery-text"></i> Description </p>
                                          </div>
                                    </a>
                              </div>
                              <div class="img-gallery mb-4"> <a href="#">
                                          <div class="img-gallery-overlay"></div> <img class="img-gallery-image" src="{{ asset('img/galeri-arsip/2.jpg') }}">
                                          <div class="img-gallery-details fadeIn-bottom">
                                                <p class="img-gallery-text"> Description </p>
                                          </div>
                                    </a>
                              </div>
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                              <div class="img-gallery mb-4"> <a href="#">
                                          <div class="img-gallery-overlay"></div> <img height="420" class="img-gallery-image" src="{{ asset('img/galeri-arsip/3.jpg') }}">
                                          <div class="img-gallery-details fadeIn-bottom">
                                                <p class="img-gallery-text"> Description </p>
                                          </div>
                                    </a>
                              </div>
                              <div class="img-gallery mb-4"> <a href="#">
                                          <div class="img-gallery-overlay"></div> <img class="img-gallery-image" src="{{ asset('img/galeri-arsip/4.jpg') }}">
                                          <div class="img-gallery-details fadeIn-bottom">
                                                <p class="img-gallery-text"> Description </p>
                                          </div>
                                    </a>
                              </div>
                        </div>

                        <div class="col-lg-4 mb-4 mb-lg-0">
                              <div class="img-gallery mb-4"> <a href="#">
                                          <div class="img-gallery-overlay"></div> <img class="img-gallery-image" src="{{ asset('img/galeri-arsip/5.jpg') }}">
                                          <div class="img-gallery-details fadeIn-bottom">
                                                <p class="img-gallery-text"> Description </p>
                                          </div>
                                    </a>
                              </div>
                              <div class="img-gallery mb-4"> <a href="#">
                                          <div class="img-gallery-overlay"></div> <img class="img-gallery-image" src="{{ asset('img/galeri-arsip/1.jpg') }}">
                                          <div class="img-gallery-details fadeIn-bottom">
                                                <p class="img-gallery-text"> Description </p>
                                          </div>
                                    </a>
                              </div>
                        </div>
                  </div>
                  <div class="m-4">
                        <button class="btn btn-block btn-outline-success btn-lg rounded">
                              Lihat Selengkapnya
                        </button>
                  </div>
            </div>
      </section>

      <!-- Layanan Perpustakaan dan Kearsipan -->
      <section class="content-3-2 mx-auto position-relative">
            <div class="d-flex container align-items-center card shadow">
                  <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-12">
                              <div class="text-center title-text">
                                    <h1 class="text-title">Layanan Kearsipan dan Perpustakaan</h1>
                                    <h4 class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                                          Pihak Terkait Perpustakaan Kota Bandung
                                    </h4>
                              </div>
                        </div>
                  </div>
                  <div class="container">
                        <div id="carouselLayananKearsipanInterval" class="carousel carousel-dark slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                          <div class="row d-flex justify-content-center">
                                                <div class="col-lg-2 col-sm-12 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoDispusipdaProv_5-1-300x285.png" alt="First slide">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoLapor_5-1-300x285.png" alt="First slide">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoPPID_5-1-300x285.png" alt="First slide">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoOnesearch_5-300x285.png" alt="First slide">
                                                </div>
                                          </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                          <div class="row d-flex justify-content-center">
                                                <div class="col-lg-2 col-sm-6 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoAnriNasional_5-1-300x285.png" alt="First slide">
                                                </div>
                                          </div>
                                    </div>
                                    <div class="carousel-item">
                                          <div class="row d-flex justify-content-center">
                                                <div class="col-lg-2 col-sm-12 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoAnriNasional_5-1-300x285.png" alt="First slide">
                                                </div>
                                                <div class="col-lg-2 col-sm-12 center-block mb-4">
                                                      <img width="90px" class="img-responsive center-block d-block mx-auto" src="http://dispusip.bandung.go.id/wp-content/uploads/2017/08/LogoJIKN_5-300x285.png" alt="First slide">
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="d-flex justify-content-between">
                                    <button class="carousel-control-prev" style="margin-left: 0 !important;" type="button" data-bs-target="#carouselLayananKearsipanInterval" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselLayananKearsipanInterval" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                    </button>
                              </div>
                        </div>
                  </div>
            </div>
      </section>

      <!-- Layanan Perpustakaan dan Kearsipan -->

      <!-- Modal Detail Jadwal-->
      <div class="modal fade bd-example-modal-lg" id="modalDetailJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h5 class="modal-title">Pelayanan Dinas Perpustakaan dan Kearsipan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">
                              <div class="overflow-auto">
                                    <img src="{{ asset('img/arsip.jpeg') }}" alt="">
                              </div>
                        </div>

                  </div>
            </div>
      </div>
</main>

@push('custom-scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
      $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
      });

      $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                  0: {
                        items: 1
                  },
                  600: {
                        items: 3
                  },
                  1000: {
                        items: 5
                  }
            }
      })
</script>
<script type="text/javascript" src="{{ asset('js/frontend/index.js') }}"></script>
@endpush
@endsection