<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins&display=swap" rel="stylesheet">
    <style type="text/tailwindcss">
        @layer utilities {

            * {
                padding: 0;
                margin: 0;
                font-family: 'Poppins', sans-serif;
                list-style: none;
                text-decoration: none;
            }

            html,
            body {
                overflow-x: hidden;
                scroll-behavior: smooth;
                margin: 0 auto;
            }

            .header {
                position: fixed !important;
                width: 100vw;
                height: 10vh;
                left: 0;
                top: 0;
                z-index: 2;
            }

            .header.scroll {
                background-color: #5E8B7E;
            }

            .side-bar {
                display: none;
                position: fixed;
                z-index: 1;
                width: 100%;
                height: 100%;
                padding: 3rem 2rem;
                background-color: #5A5A5A;
                color: #fff;
            }

            .side-bar.active {
                display: block;
            }

            button {
                font-size: 14px;
                padding: 1rem 2rem;
                border-radius: 25px;
                background-color: #5E8B7E;
                color: #fff;
            }

            div {
                width: .5rem;
                height: .5rem;
                background-color: #fff;
                opacity: 0.7;
                border-radius: 25px;
            }

            .btn-back i {
                color: #5E8B7E;
                font-size: 2.5rem;
                position: fixed;
                bottom: 2rem;
                right: 2rem;
            }

            .bg-green {
                background-color: #F7FBFA;
            }

            .content-gallery {
                width: 100%;
                display: grid;
                grid-template-columns: auto auto auto auto auto;
                gap: 42px;
                margin-bottom: 40px;
                transform: translateX(-235px);
            }

            .content-gallery img {
                max-width: 363px;
            }

            footer {
                background-color: #0E2123;
            }

            h1 {
                font-size: 3.75rem;
                font-weight: bold;
                line-height: 4.5rem;
            }

            h2 {
                font-size: 32px;
            }

            h3 {
                font-size: 24px;
            }

            h4 {
                font-size: 18px;
            }

            p {
                font-size: 14px;
            }

            a {
                color: #5E8B7E;
            }

        }
    </style>
    <title>Reza | Tugas UTS</title>
</head>

<body>
    <section class="side-bar">
        <section class="d-flex">
            <h3 class="font-bold mb-4">sidebar</h3>
            <nav>
                <ul class="flex flex-col items-start gap-2">
                    <li class="bold">Home</li>
                    <li class="flex items-center">Profile Sekolah &nbsp; <i class="bi bi-chevron-down"></i></li>
                    <li class="flex items-center">Data Akademik &nbsp; <i class="bi bi-chevron-down"></i></li>
                    <li class="flex items-center">Artikel &nbsp; <i class="bi bi-chevron-down"></i></li>
                    <li class="flex items-center">Fasilitas &nbsp; <i class="bi bi-chevron-down"></i></li>
                    <li class="flex items-center">Gallery &nbsp; <i class="bi bi-chevron-down"></i></li>
                    <li class="flex items-center">E-Learning &nbsp; <i class="bi bi-chevron-down"></i></li>
                </ul>
            </nav>
            <button class="font-bold mt-8">Hubungi kami</button>
        </section>
    </section>
    <header class="container" id="header">
        <section
            class="hero container lg:container xl:container w-screen h-screen absolute pt-6 px-8 lg:px-16 xl:px-40 pb-10">
            <section
                class="header container lg:container xl:container flex items-center text-white justify-between fixed px-8 lg:px-16 xl:px-40">
                <section class="navbar flex items-center text-sm gap-11 mr-6">
                    <section class="brand flex items-center">
                        <img src="{{ asset('assets/img/Project logo.svg') }}" alt="" class="mr-4">
                        <p class="font-bold">High School</p>
                    </section>
                    <nav class="hidden xl:block">
                        <ul class="flex items-center gap-8">
                            <li class="font-bold">Home</li>
                            <li class="flex items-center">Profile Sekolah &nbsp; <i class="bi bi-chevron-down"></i></li>
                            <li class="flex items-center">Data Akademik &nbsp; <i class="bi bi-chevron-down"></i></li>
                            <li class="flex items-center">Artikel &nbsp; <i class="bi bi-chevron-down"></i></li>
                            <li class="flex items-center">Fasilitas &nbsp; <i class="bi bi-chevron-down"></i></li>
                            <li class="flex items-center">Gallery &nbsp; <i class="bi bi-chevron-down"></i></li>
                            <li class="flex items-center">E-Learning &nbsp; <i class="bi bi-chevron-down"></i></li>
                        </ul>
                    </nav>
                </section>
                <button class="font-bold hidden xl:block">Hubungi kami</button>
                <section id="burger-button" class="xl:hidden">
                    <i class="bi bi-list text-4xl"></i>
                </section>
            </section>
            <section class="w-5/6 text-white mt-4 lg:mt-20 xl:mt-44 mb-4 hidden lg:block">
                <h1 class="mb-6">Buku - Buku yang dapat membuat anda Termotivasi</h2>
                    <p class="mb-6">September 6, 2022</p>
                    <p class="w-9/12  mb-8">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet
                        målagisk. Av euror. Karriärcoach pyjuskap andropatologi. </p>
                    <button>
                        Read more
                    </button>
            </section>
            <section class="justify-center mt-27 hidden lg:flex gap-2">
                <div class="font-bold opacity-100"></div>
                <div></div>
                <div></div>
            </section>
        </section>
        <section class="bg-header">
            <img src="{{ asset('assets/img/unsplash_vSchPA-YA_A.svg') }}" alt="background">
        </section>
        <!-- <section class="btn-back">
            <a href="#header"><i class="bi bi-arrow-up-circle"></i></a>
        </section> -->
    </header>
    <section
        class="container lg:container xl:container flex justify-between flex-col lg:flex-row lg:px-16 py-28 xl:px-40 gap-6">
        <article class="flex flex-col items-center p-6">
            <img src="{{ asset('assets/img/Frame 405.svg') }}" alt="" class="mb-6">
            <h3 class="font-bold mb-6">Identitas Sekolah</h3>
            <p class=" text-slate-300 text-center mb-4">Hight School berdiri sejak tahun 1980 dengan nama Hight School
                1. Sekolah yang akan membimbing muridnya hingga benar</p>
            <a href="#" class="text-sm mb-6">Read more</a>
        </article>
        <article class="flex flex-col items-center p-6">
            <img src="{{ asset('assets/img/Frame 406.svg') }}" alt="" class="mb-6">
            <h3 class="font-bold mb-6">Visi Misi</h3>
            <p class=" text-slate-300 text-center mb-4">Hight School berdiri sejak tahun 1980 dengan nama Hight School
                1. Sekolah yang akan membimbing muridnya hingga benar</p>
            <a href="#" class="text-sm mb-6">Read more</a>
        </article>
        <article class="flex flex-col items-center p-6">
            <img src="{{ asset('assets/img/Frame 407.svg') }}" alt="" class="mb-6">
            <h3 class="font-bold mb-6">Struktur Sekolah</h3>
            <p class=" text-slate-300 text-center mb-4">Hight School berdiri sejak tahun 1980 dengan nama Hight School
                1. Sekolah yang akan membimbing muridnya hingga benar</p>
            <a href="#" class="text-sm mb-6">Read more</a>
        </article>
    </section>
    <section class="container lg:container xl:container flex flex-col lg:flex-row">
        <img src="{{ asset('assets/img/Frame 399.svg') }}" alt="">
        <section class="bg-green py-14 pl-10 pr-36">
            <p class=" mb-4" style="color: #2F5D62;">Pembukaan Kepala Sekolah</p>
            <h2 class="font-bold mb-6">Ucapan Kepala Sekolah HIGHT SCHOOL</h2>
            <p class=" text-slate-500 mb-6">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen
                laskapet målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
            <section class="flex items-center gap-2">
                <img src="{{ asset('assets/img/Frame 410.svg') }}" alt="">
                <section>
                    <p class="font-bold mb-1">Bpk. Robert stent</p>
                    <p>Kepala Sekolah</p>
                </section>
            </section>
        </section>
    </section>
    <section class="container lg:container xl:container px-4 lg:px-16 py-28 xl:px-40">
        <section class="mb-28">
            <h2 class="font-bold mb-6">Jurusan (Program Study)</h2>
            <section class="flex justify-between items-center mb-14">
                <p class="w-1/2 text-slate-500">Terdapat Beberapa Jurusan atau Program Study di SMA PGRI CICURUG yang
                    dapat dipilih sesuai dengan minat Siswa</p>
                <button>Academic Data</button>
            </section>
            <Section class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <article
                    class="flex flex-col items-center border-2 border-solid border-gray-300 rounded-lg py-6 px-14">
                    <img src="{{ asset('assets/img/Frame 405 IPS.svg') }}" alt="">
                    <h3 class="font-bold my-6">IPS</h3>
                    <p class="text-center text-slate-300">Jurusan IPS mempelajari tentang hubungan antar manusia dan
                        hubungan manusia dengan lingkungannya, serta berbagai aspek sosial</p>
                </article>
                <article
                    class="flex flex-col items-center border-2 border-solid border-gray-300 rounded-lg py-6 px-14">
                    <img src="{{ asset('assets/img/Frame 405 IPA.svg') }}" alt="">
                    <h3 class="font-bold my-6">IPA</h3>
                    <p class="text-center text-slate-300">Selain belajar Ilmu Alam, anak SMA belajar matematika juga.
                        Oleh sebab itu selain disebut dengan jurusan IPA (Ilmu Pengetahuan Alam) jurusan ini punya dua
                        nama lain lagi, yaitu: MIPA , MIA</p>
                </article>
            </Section>
        </section>
        <section class="mb-28">
            <h2 class="font-bold">Prestasi Siswa - Siswi</h2>
            <section class="flex justify-between items-center" style="margin-bottom: 40px;">
                <p class="text-slate-500">Prestasi dari Siswa - Siswi SMA PGRI CICURUG</p>
                <button>See all prestation</button>
            </section>
            <section class="grid justify-items-center gap-6 grid-cols-1 lg:grid-cols-3">
                <article>
                    <img src="{{ asset('assets/img/Frame 415.svg') }}" alt="">
                </article>
                <article>
                    <img src="{{ asset('assets/img/Frame 416.svg') }}" alt="">
                </article>
                <article>
                    <img src="{{ asset('assets/img/Frame 417.svg') }}" alt="">
                </article>
            </section>
        </section>
        <section class="flex flex-col justify-center items-center">
            <h2 class="font-bold mb-4">Artikel</h2>
            <p class="text-slate-500 text-center w-1/2 mb-10">Kami menyediakan beberapa artikel dari kegiatan -
                kegiatan pembelajaran maupun lorem ipsum donot saas</p>
            <section class="flex flex-col lg:flex-row justify-between items-center">
                <section>
                    <img src="{{ asset('assets/img/Frame 411.svg') }}" alt="">
                </section>
                <section class="flex sm:mt-10 xl:mt-0 flex-col justify-between gap-6 xl:w-1/2">
                    <section class="flex items-start gap-6">
                        <img src="{{ asset('assets/img/Frame 412 top.svg') }}" alt="">
                        <section>
                            <p class="text-slate-300 mb-4">September 2, 2022</p>
                            <h4 class="font-bold mb-4">Belajar dirumah Ketika Covid-19 Menyebar</h4>
                            <p>Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av
                                euror. </p>
                        </section>
                    </section>
                    <section class="flex items-start gap-6">
                        <img src="{{ asset('assets/img/Frame 412 bottom.svg') }}" alt="">
                        <section>
                            <p class="text-slate-300 mb-4">September 2, 2022</p>
                            <h4 class="font-bold mb-4">Perpaduan antara musik rock dan keroncong</h4>
                            <p>Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet målagisk. Av
                                euror. </p>
                        </section>
                    </section>
                </section>
            </section>
            <button class="mt-10">
                See more
            </button>
        </section>
    </section>
    <section class="container lg:container xl:container bg-green flex flex-col items-center py-14">
        <h2 class="font-bold mb-20">Gallery</h2>
        <p class="text-slate-500 mb-10">Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet</p>
        <section>
            @forelse ($berita as $b)
            <article>
                <a href="http://">
                    <img width="240" height="75" src="{{ asset('gambar/'.$b->gambar) }}">
                </a>
            </article>
            
            @empty
            <article>
        <h3>Data Belum di input</h3>
            </article>
            
            
            @endforelse
            {{-- <article>
                <img src="{{ asset('assets/img/Frame gallery-2.svg') }}">
            </article>
            <article>
                <img src="{{ asset('assets/img/Frame gallery-3.svg') }}">
            </article>
            <article>
                <img src="{{ asset('assets/img/Frame gallery-4.svg') }}">
            </article>
            <article>
                <img src="{{ asset('assets/img/Frame gallery-5.svg') }}">
            </article> --}}
        </section>
    </section>
    <footer class="container lg:container xl:container text-white px-4 lg:px-16 xl:px-36 pt-24 pb-6">
        <section class="flex items-center gap-2 mb-11">
            <img src="{{ asset('assets/img/Project logo.svg') }}" alt="">
            <p class="bold">High School</p>
        </section>
        <section class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-24 xl:gap-0 items-start mb-20">
            <section class="w-72 mr-5">
                <p class="mb-11">“ Lörem ipsum mikrolös dongen infodemi. Terapument anteliga deforen laskapet
                    målagisk. Av euror. Karriärcoach pyjuskap andropatologi. “</p>
                <ul class="flex gap-6">
                    <li>
                        <img src="{{ asset('assets/img/facebook logo.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('assets/img/Twitter logo.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('assets/img/linkedin logo.svg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('assets/img/instagram logo.svg') }}" alt="">
                    </li>
                </ul>
            </section>
            <section class="mr-28">
                <ul class="flex flex-col gap-6">
                    <li class="font-bold">
                        <p>Jelajah</p>
                    </li>
                    <li>
                        <p>Identitas Sekolah</p>
                    </li>
                    <li>
                        <p>Berita</p>
                    </li>
                    <li>
                        <p>Gallery</p>
                    </li>
                    <li>
                        <p>Fasilitas</p>
                    </li>
                    <li>
                        <p>Kontak Kami</p>
                    </li>
                </ul>
            </section>
            <section class="mr-28">
                <ul class="flex flex-col gap-6">
                    <li class="font-bold">
                        <p>Data Akademik</p>
                    </li>
                    <li>
                        <p>Tenaga Pendidik</p>
                    </li>
                    <li>
                        <p>Tenaga Kependidikan</p>
                    </li>
                    <li>
                        <p>Daftar Siswa</p>
                    </li>
                    <li>
                        <p>Absensi Siswa</p>
                    </li>
                    <li>
                        <p>Organisasi Sekolah</p>
                    </li>
                    <li>
                        <p>Jadwal Pelajaran</p>
                    </li>
                    <li>
                        <p>Jadwal Ujian</p>
                    </li>
                </ul>
            </section>
            <section class="w-72">
                <p class="font-bold mb-6">Lokasi</p>
                <section class="flex items-start gap-4 mb-4">
                    <img src="{{ asset('assets/img/entypo_location-pin.svg') }}" alt="">
                    <section class="flex flex-col">
                        <p class="mb-2">Alamat</p>
                        <p>3891 Ranchview Dr. Richardson, California 62639</p>
                    </section>
                </section>
                <section class="flex items-start gap-4 mb-4">
                    <img src="{{ asset('assets/img/dashicons_email.svg') }}" alt="">
                    <section class="flex flex-col">
                        <p class="mb-2">Kontak Kami</p>
                        <p>Telp: (0266) 123456
                            Web : www.higntschool.sch.id
                            email : info@hightschool.sch.id</p>
                    </section>
                </section>
            </section>
        </section>
        <p>&copy; Hight School. All right Reserved. Website By mangcoding</p>
    </footer>
</body>
<script>
    var btn = document.querySelectorAll('button');
    btn.forEach((click) => {
        click.addEventListener('click', () => {
            alert('Button has clicked!');
        })
    })
</script>
<script>
    var btnShow = document.querySelector('#burger-button');
    var sidebar = document.querySelector('.side-bar');
    btnShow.addEventListener('click', function() {
        sidebar.classList.toggle("active");
    })
</script>
<script>
    const checkScroll = () => {
        const header = document.querySelector('.header');
        if (window.innerWidth > 360) {
            if (window.scrollY > 50) {
                header.classList.add('scroll');
            } else {
                header.classList.remove('scroll');
            }
        }
    };
    window.addEventListener('scroll', checkScroll);
    document.addEventListener('DOMContentLoaded', checkScroll);
</script>

</html>
