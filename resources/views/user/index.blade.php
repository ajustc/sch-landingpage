@extends('user.layout.template')
@section('title', 'User Pages')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up">
                <div>
                    <h1>Sekolah? di Generasi mandiri aja</h1>
                    <h2>Generasi mandiri merupakan sekolah dengan sistem pasantren yang mempunyai misi serta visi dalam
                        membangun generasi profesional religius</h2>
                    <a href="#" class="download-btn">Daftar sekarang</a>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                data-aos="fade-up">
                <img src="/user/img/banner.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>Visi dan Misi</h2>
                <p>Menjunjung tinggi sopan santun dan tatakerama dalam mengajar, dan membangun generasi profesional
                    relegius.</p>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4>Fasilitas</h4>
                                <p>Masjid, tempat parkir, lapangan bulu tangkis, lapangan bola, kamar mandi yang bersih,
                                    tempat asrama terpisah.
                                    </ap>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Kegiatan Akademik</h4>
                                <p>Rutinitas bangun malam, mengaji, bersekolah, praktikum, dan olahraga.
                                </p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4>Kegiatan Organisasi</h4>
                                <p>Peramuka, pencak silat, dan tahfidz qur'an</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4>Kegiatan Olahraga</h4>
                                <p>Pencak silat, sepak bola, badminton, voli, dan futsal</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-atom"></i>
                                <h4>Prestasi</h4>
                                <p>Juara umum pencak silat, juara tahfidz qur'an dan sepak bola, tingkat kabupaten</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="bx bx-id-card"></i>
                                <h4>Kesejahteraan</h4>
                                <p>Memberikan pembimbing yang profesional dan sesuai dengan ahlinya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                    data-aos="fade-left" data-aos-delay="100">
                    <img src="/user/img/list.svg" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="/user/img/list1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3>List pendaftaran Sekolah Generus Mandiri</h3>
                    <p class="fst-italic">
                        Berikut list tatacara pendaftaran yang dapat dilakukan:
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i>Pertama klik button daftar atau menu daftar yang disediakan.</li>
                        <li><i class="bi bi-check"></i>Isi form daftar.</li>
                        <li><i class="bi bi-check"></i>Siapkan berkas yang diperlukan seperti scan ijazah dan trasnkrip
                            nilai / surat kelulusan.
                        </li>
                        <li><i class="bi bi-check"></i>Mengikuti tes sleksi masuk, dengan menjawab soal yang diberikan.
                        </li>
                    </ul>
                    <p>
                        Jika semua sudah selesai hasil test akan dikirimkan melalui email yang terdaftar.
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="/user/img/list2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Biografi Sekolah Generus Mandiri</h3>
                    <p class="fst-italic">
                        Sekolah generus mandiri berletak di daerah bogor utara, dengan jumlah murid yang cukup banyak
                        serta pengajar yang profesional dan mempuni.
                    </p>
                    <p>
                        Generasi Mandiri berdiri tahun 2015, hingga sekarang diawali dengan mendirikan sekolah menengah
                        pertama hingga sekarang sampai dengan sekolah menengah atas dan sekolah menengah kejuruan.
                    </p>
                    <p>
                        Sekolah ini tidak hanya berfokus pada pendidikan fomal juga berfokus pada pendidikan agama,
                        yaitu pendidikan pasantren, dan sekolah ini memiliki tujuan untuk membangun manusia profesional
                        religius.
                    </p>
                </div>
            </div>

            <!-- <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="/user/img/details-3.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit
                        aut quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                    <p>
                        Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem.
                        Et nihil magni debitis consequatur est.
                    </p>
                    <p>
                        Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum
                        soluta explicabo vel fugiat eum non.
                    </p>
                </div>
            </div> -->

            <!-- <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="/user/img/details-4.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Et praesentium laboriosam architecto nam .</li>
                        <li><i class="bi bi-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt
                            consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
                        <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                </div>
            </div> -->

        </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Foto Kegiatan Siswa dan siswi Sekolah Generasi Mandiri</h2>
                <p>Kegiatan yang dilakukan mulai dari prestasi hingga kegiatan belajar mengajar.</p>
            </div>

        </div>

        <div class="container-fluid" data-aos="fade-up">
            <div class="gallery-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-1.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-2.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-3.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-4.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-5.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-5.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-6.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-7.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-7.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-8.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-8.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-9.png" class="gallery-lightbox" data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-9.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-10.png" class="gallery-lightbox"
                            data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-10.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-11.png" class="gallery-lightbox"
                            data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-11.png" class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="/user/img/gallery/gallery-12.png" class="gallery-lightbox"
                            data-gall="gallery-carousel">
                            <img src="/user/img/gallery/gallery-12.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pesan dan Kesan lulusan Generasi Mandiri</h2>
                <p>Berikut Pesan dan kesan siswa dan siswi generasi mandiri yang menjadi kebanggaan Sekolah ini.</p>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="/user/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Angkatan 2018 - 2019</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Saya bangga menjadi salah satu murid disekolah ini, karena dari sini saya mendapatkan
                                pengalaman yang menarik mengenai kegiatan yang ada saat sekolah, mulai dari kegiatan
                                organisasi hingga kegiatan belajar mengajar.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="/user/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Angkatan 2018 - 2019</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Saya bangga menjadi salah satu murid disekolah ini, karena dari sini saya mendapatkan
                                pengalaman yang menarik mengenai kegiatan yang ada saat sekolah, mulai dari kegiatan
                                organisasi hingga kegiatan belajar mengajar.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="/user/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Angkatan 2018 - 2019</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Saya bangga menjadi salah satu murid disekolah ini, karena dari sini saya mendapatkan
                                pengalaman yang menarik mengenai kegiatan yang ada saat sekolah, mulai dari kegiatan
                                organisasi hingga kegiatan belajar mengajar.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="/user/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Angkatan 2018 - 2019</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Saya bangga menjadi salah satu murid disekolah ini, karena dari sini saya mendapatkan
                                pengalaman yang menarik mengenai kegiatan yang ada saat sekolah, mulai dari kegiatan
                                organisasi hingga kegiatan belajar mengajar.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="/user/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Angkatan 2018 - 2019</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Saya bangga menjadi salah satu murid disekolah ini, karena dari sini saya mendapatkan
                                pengalaman yang menarik mengenai kegiatan yang ada saat sekolah, mulai dari kegiatan
                                organisasi hingga kegiatan belajar mengajar.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Biaya Pendaftaran</h2>
                <p>Untuk saat ini kami masih membuka pendaftaran bagi siswa dan siswi yang mendaftar dengan ketentuan
                    dan harga sebagai berikut.</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box" data-aos="fade-right">
                    <h3>Sekolah Menengah Pertama (SMP)</h3>
                    <h4>Rp. 700.000,- <span>Sebagai uang daftar masuk</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Baju Olahraga</li>
                        <li><i class="bx bx-check"></i> Buku Pelajaran</li>
                        <li><i class="bx bx-check"></i> Baju Biru putih 2 stell</li>
                        <li><i class="bx bx-check"></i> Buku megaji</li>
                        <li><i class="bx bx-check"></i> Baju Pramuka</li>
                    </ul>
                    <a href="#" class="get-started-btn">Daftar</a>
                </div>

                <div class="col-lg-4 box featured" data-aos="fade-up">
                    <h3>Sekolah Menengah Atas (SMA)</h3>
                    <h4>Rp. 900.000,- <span>Sebagai uang daftar masuk</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Baju Olahraga</li>
                        <li><i class="bx bx-check"></i> Buku Pelajaran</li>
                        <li><i class="bx bx-check"></i> Baju Biru putih 2 stell</li>
                        <li><i class="bx bx-check"></i> Buku megaji</li>
                        <li><i class="bx bx-check"></i> Baju Pramuka</li>
                    </ul>
                    <a href="#" class="get-started-btn">Daftar</a>
                </div>

                <div class="col-lg-4 box" data-aos="fade-left">
                    <h3>Sekolah Menengah Kejuruan</h3>
                    <h4>Rp. 900.000,- <span>Sebagai uang daftar masuk</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Baju Olahraga</li>
                        <li><i class="bx bx-check"></i> Buku Pelajaran</li>
                        <li><i class="bx bx-check"></i> Baju Biru putih 2 stell</li>
                        <li><i class="bx bx-check"></i> Buku megaji</li>
                        <li><i class="bx bx-check"></i> Baju Pramuka</li>
                    </ul>
                    <a href="#" class="get-started-btn">Daftar</a>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak Informasi</h2>
                <p>Hubungi kami melalui telpon atau email yang tertera untuk menanyakan lebih lanjut mengenai
                    pendaftaran dan pertanyaan di form dibawah ini.
                </p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 info">
                            <i class="bx bx-map"></i>
                            <h4>Alamat</h4>
                            <p>Bogor,<br>Indonesia, 16820</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-phone"></i>
                            <h4>Telpon</h4>
                            <p>096783975994<br>+021 975483939</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-envelope"></i>
                            <h4>Email</h4>
                            <p>gmschoolt@gmschool.com</p>
                        </div>
                        <div class="col-lg-6 info">
                            <i class="bx bx-time-five"></i>
                            <h4>Pelayanan</h4>
                            <p>Senin - Jum'at: 09:00 - 14:00<br>Sabtu: 09:00 - 12:00</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                        data-aos="fade-up">
                        <div class="form-group">
                            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea placeholder="Message" class="form-control" name="message" rows="5"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main>
<!-- End #main -->

@endSection