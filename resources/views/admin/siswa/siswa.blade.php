



<!DOCTYPE html>
<html lang="en">

@include('admin.layout-bek.head')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>


    <!--====== Preloader Start ======-->
    <div class="preloader">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--====== Preloader End ======-->

    <!--====== Cursor Start ======-->
    <div class="cursor">
        <div class="cursor-dot"></div>
    </div>
    <!--====== Cursor End ======-->
    <!--====== Header Start ======-->
    @include('admin.layout-bek.header')
    <!--====== Header End ======-->

    <!--====== Welcome Start ======-->
    <div class="inner-welcome pt85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title">
                        <h1>Data Siswa</h1>
                    </div>
                    {{-- <div class="bread-crumb text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News Feeds</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="inner-1-bg">
            <img src="https://html.fleexstudio.com/bek/assets/img/bg/feature2bg2-2.svg" alt="">
        </div>
        <div class="inner-2-bg">
            <img src="https://html.fleexstudio.com/bek/assets/img/bg/feature2bg2-2.svg" alt="">
        </div>
    </div>
    <div class="border-bottom-gray"></div>
    <!--====== Welcome End ======-->

    <!--====== Blog  Start ======-->
    <div class="blog-area section-padding inner-bg ">
        <div class="container">
            <div class="row mb30">
                <div class="col-lg-12 m-auto">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Siswa</h4>
                                <a href="/formsiswa"><button type="button" class="btn btn-primary btn-rounded btn-fw">
                                        Tambah + </button></a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>NISN</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>No Telpon</th>
                                                <th>ID SPP</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $siswa)
                                                <tr>
                                                    <td>
                                                        {{ $siswa->nisn }}
                                                    </td>
                                                    <td>{{ $siswa->nis }}</td>
                                                    <td>
                                                        {{ $siswa->nama }}
                                                    </td>
                                                    <td>{{ $siswa->kelas->nama_kelas }}</td>
                                                    <td>{{ $siswa->alamat }}</td>
                                                    <td>{{ $siswa->no_telp }}</td>
                                                    <td>{{ $siswa->spp->nominal }}</td>
                                                    <td>
                                                        <a href="/showsiswa/{{$siswa->nisn}}"><button type="button"
                                                                class="btn btn-warning btn-rounded btn-fw"> Edit
                                                            </button></a>
                                                        <a href="#" class="btn btn-danger btn-rounded btn-fw delete"
                                                        data-id="{{ $siswa->nisn }}"
                                                        data-kelas="{{ $siswa->nama }}">Hapus</a>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
            </div>


        </div>
    </div>
    <!--====== Blog  End ======-->




    <!--====== Subscribe Start ======-->
    <div class="subscribe-area gray-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe">
                        <h2>Start 15 days free trial</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="subcribe-form">
                        <input type="email" placeholder="Enter your email..">
                        <button type="submit" class="submit-btn">Started Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Subscribe End ======-->

    <!--====== Footer start ======-->
    <footer>
        <div class="footer-white footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <a href="index.html" class="footer-logo"><img src="../assets/img/logo/logo1.png"
                                alt=""></a>
                        <div class="socials my-4">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="copywrite mt-5">
                            <p>Bek. All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mt-4 mt-lg-0">
                            <h3>Others Link</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Diversity</a></li>
                                <li><a href="#">Carrer</a></li>
                                <li><a href="#">Present</a></li>
                                <li><a href="#">Leadership</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mt-4 mt-lg-0">
                            <h3>Bek. Soluation</h3>
                            <ul>
                                <li><a href="#">Imperdiet</a></li>
                                <li><a href="#">Partueient</a></li>
                                <li><a href="#">Faucibus</a></li>
                                <li><a href="#">Ultricies</a></li>
                                <li><a href="#">Privicy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-widget mt-4 mt-lg-0">
                            <h3>Get in Touch</h3>
                            <ul>
                                <li><a href="#">359 Hill Field Avenue Laurel, MD 20707</a></li>
                                <li><a href="#">+88 967 846 937</a></li>
                                <li><a href="#"> bek.249@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer end ======-->


    <!--====== Bootstrap js ======-->
    @include('admin.layout-bek.script')
</body>
<script>
    $('.delete').click(function() {
        var siswaid = $(this).attr('data-id');
        var siswa = $(this).attr('data-siswa');
        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus siswa dengan nama " + siswa + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletesiswa/" + siswaid + ""
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    });
</script>
<script>
    let table = new DataTable('#myTable');
</script>
<script>
    @if(Session::get('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</html>
