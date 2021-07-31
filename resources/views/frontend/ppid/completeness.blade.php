@extends('layouts.app')

@section('content')

<style>
      .no-underline {
            text-decoration: none !important
      }

      tr>td:nth-child(3),tr>td:nth-child(1), tr>th:nth-child(1) {
            text-align: center;
      }

      tr>th:nth-child(1){
            width: 50px;
      }
</style>

<main>
      <section style="background-color: #ffffff; margin: 30px;">
            <div class="d-flex container card shadow p-5 mt-10 mb-3">
                  <div class="row">
                        <div class="col-md-12">

                              <div class="mb-5">
                                    <p class="h3"><b>Kelengkapan</b></p>
                              </div>

                              <table class="table table-bordered table-hover">
                                          <tr>
                                                <th>No</th>
                                                <th>Nama File</th>
                                                <th></th>
                                          </tr>
                                    <tbody>
                                          <tr>
                                                <td>1</td>
                                                <td>Sarana dan prasarana layanan informasi</td>
                                                <td>
                                                      <a href="" class="no-underline text-dark">View</a>
                                                </td>
                                          </tr>
                                          <tr>
                                                <td>2</td>
                                                <td>Papan pengumuman layanan informasi</td>
                                                <td>
                                                      <a href="" class="no-underline text-dark">View</a>
                                                </td>
                                          </tr>
                                    </tbody>
                              </table>

                        </div>
                  </div>
            </div>
      </section>
</main>

@endsection