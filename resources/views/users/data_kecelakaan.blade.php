@extends('users/layouts.template')

@section('content')

<section class="wrapper bg-gray">
    <div class="container py-12 py-md-16 text-center">
        <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
                <h1 class="display-1 mb-3">Data Kecelakaan</h1>
                <p class="lead mb-1">Data kecelakaan yang di gunakan adalah data kecelakaan di Kabupaten Tuban tahun 2018 - 2019 dan sudah di kelompokkan berdasarkan jalan nasional</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section class="wrapper bg-light ">
    <div class="container pb-11 pt-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-xl-10 offset-xl-1">
                <section id="snippet-3" class="wrapper pt-10">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/.card-body -->

                    </div>
                    <!--/.card-footer -->
            </div>
            <!--/.card -->
</section>
</div>
<!-- /.row -->
</div>
<!-- /.container -->
</section>

@endsection