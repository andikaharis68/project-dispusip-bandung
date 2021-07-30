@extends('layouts.app')

@section('content')
    <main>
        <section style="background-color: #ffffff; margin: 30px;">
            <div class="d-flex container flex-lg-row flex-column align-items-center card shadow mt-10 p-4">
                <div class="row">
                    <div class="pl-3 pb-2">
                        <h2 class="bold">Program/Kegiatan Dinas</h2>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner rounded">
                            <div style="width: 100%" class="carousel-item  active">
                                <img src="https://www.infobdg.com/v2/wp-content/uploads/2017/07/341-library.jpg"
                                    style="width: 100%" alt="...">
                            </div>
                            <div style="width: 100%" class="carousel-item ">
                                <img src="https://1.bp.blogspot.com/-rT2IMwRyoJY/X3Ge1u-TelI/AAAAAAAAB7I/fUy9dM-nXXAOU2gBjqrXweAB5-Hh97LbgCLcBGAsYHQ/w640-h462/%255BJejakakhi%255DPerpustakaan-Anak-Kota-Bandung1.jpg"
                                    style="width: 100%" alt="...">
                            </div>
                            <div style="width: 100%" class="carousel-item ">
                                <img src="https://cdn.idntimes.com/content-images/community/2020/07/screenshot-146-8f103979f410e4eb457555f55845b44a.png"
                                    style="width: 100%" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
