@extends('layouts.app')

@section('content')

<div class="container my-lg-5">
      <div class="py-lg-5">
            <div class="p-3 my-4 d-flex justify-content-center">
                  <h4>
                        <b>Kotak Publik DISPUSIP Kota Bandung</b>
                  </h4>
            </div>
            <div class="row">
                  <div class="col-lg-6 mb-5">
                        <div class="card rounded shadow p-5">
                              <h4 class="px-4 pb-4 text-center">Hubungi Kami</h4>
                              <form>
                                    <div class="mb-3">
                                          <label class="form-label">Nama Anda</label>
                                          <input type="email" class="form-control" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                          <label class="form-label">Email Anda</label>
                                          <input type="email" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="mb-3">
                                          <label class="form-label">Komentar Anda</label>
                                          <input type="email" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button class="btn btn-md rounded-lg" style="color: #ffffff; background-color: #1c8dcf;" type="button">
                                          <b>SUBMIT</b>
                                    </button>
                              </form>
                        </div>
                  </div>
                  <div class="col-lg-6">
                        <div class="card rounded shadow p-5">
                              <h4 class="px-4 pb-4 text-center">Lokasi Kami</h4>
                              <div>
                                    <div class="mapouter">
                                          <div class="gmap_canvas">
                                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=jl%20serem%20no%209&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                                <a href="https://www.fridaynightfunkin.net/friday-night-funkin-mods-fnf-play-online/">Friday Night Funkin Mods</a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>
@endsection