@extends('layouts.app')

@section('title', 'Sistem Informasi Perizinan Kapal')

@section('content')
<style>
    /* ===== Hero Section ===== */
    .hero {
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                    url({{ asset('assets/images/foto_pelabuhan_modern.png') }}) no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        display: flex;
        align-items: center;
        text-align: center;
        color: white;
        padding: 0 20px;
    }

    .hero h2 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 2.8rem;
        line-height: 1.3;
    }

    .hero p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1rem;
        max-width: 750px;
        margin: 0 auto 30px;
    }

    .hero-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .hero .btn {
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        min-width: 180px;
    }

    .hero .btn:hover {
        transform: translateY(-3px);
    }

    /* ===== Responsive Breakpoints ===== */
    @media (max-width: 992px) {
        .hero h2 {
            font-size: 2.3rem;
        }
        .hero p {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .hero {
            padding: 100px 25px 70px;
        }
        .hero h2 {
            font-size: 2rem;
        }
        .hero p {
            font-size: 0.95rem;
        }
        .hero-buttons {
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }
        .hero .btn {
            width: 80%;
        }
    }

    /* ===== About Section ===== */
    #about img {
        max-width: 100%;
        border: 4px solid #003366;
    }

    @media (max-width: 768px) {
        #about .row {
            flex-direction: column-reverse;
        }
    }

    /* ===== Features Section ===== */
    #features .p-4 {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #features .p-4:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    /* ===== Contact Section ===== */
    #contact a.btn:hover {
        background: #f1f1f1;
        color: #003366 !important;
    }
</style>

<!-- ===== Hero Section ===== -->
<section id="hero" class="hero">
    <div class="container">
        <h2 class="fw-bold mb-3">Selamat Datang di Sistem Informasi Perizinan Kapal</h2>
        <p>
            Mempermudah proses perizinan perjalanan kapal dengan sistem digital modern dan aman.
        </p>
        <div class="hero-buttons">
            <a href="{{ url('/login') }}" class="btn btn-light btn-lg px-4 py-2">Masuk Sekarang</a>
            <a href="{{ url('/register') }}" class="btn btn-outline-light btn-lg px-4 py-2">Daftar Akun</a>
        </div>
    </div>
</section>

<!-- ===== About Section ===== -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="font-family: 'Montserrat', sans-serif; color:#003366;">About</h2>
            <div style="width: 80px; height: 3px; background-color: #0055a5; margin: 10px auto; border-radius: 2px;"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <p style="font-family: 'Poppins', sans-serif; text-align: justify;">
                    Sistem ini dirancang untuk mempermudah proses perizinan perjalanan kapal, mulai dari registrasi, pengajuan dokumen,
                    hingga verifikasi, dengan cepat, transparan, dan aman.
                </p>
            </div>
            <div class="col-md-6 text-center mb-4">
                <img src="{{ asset('assets/images/foto_pelabuhan.png') }}" alt="Tentang Sistem"
                    class="img-fluid rounded shadow" style="max-width: 70%; border: 4px solid #003366;">
            </div>
        </div>
    </div>
</section>

<!-- ===== Features Section ===== -->
<section id="features" class="py-5" style="background-color:#f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="font-family: 'Montserrat', sans-serif; color:#003366;">Fitur</h2>
            <div style="width: 80px; height: 3px; background-color: #0055a5; margin: 10px auto; border-radius: 2px;"></div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white h-100">
                    <i class="bi bi-clipboard-check display-4 mb-3 text-primary"></i>
                    <h5 class="fw-bold">Registrasi Kapal</h5>
                    <p style="font-family: 'Poppins', sans-serif;">Proses pendaftaran kapal menjadi lebih cepat dan mudah.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white h-100">
                    <i class="bi bi-file-earmark-text display-4 mb-3 text-primary"></i>
                    <h5 class="fw-bold">Pengajuan Dokumen</h5>
                    <p style="font-family: 'Poppins', sans-serif;">Ajukan dokumen perizinan secara digital tanpa antre.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded bg-white h-100">
                    <i class="bi bi-check2-square display-4 mb-3 text-primary"></i>
                    <h5 class="fw-bold">Verifikasi Cepat</h5>
                    <p style="font-family: 'Poppins', sans-serif;">Verifikasi dokumen dilakukan dengan cepat dan transparan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ Section ===== -->
<section id="faq" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="font-family: 'Montserrat', sans-serif; color:#003366;">FAQ</h2>
            <div style="width: 80px; height: 3px; background-color: #0055a5; margin: 10px auto; border-radius: 2px;"></div>
        </div>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                        Bagaimana cara mendaftar akun di sistem ini?
                    </button>
                </h2>
                <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" style="font-family: 'Poppins', sans-serif;">
                        Untuk mendaftar akun, klik tombol "Daftar Akun" pada halaman depan, lengkapi form registrasi, lalu konfirmasi melalui email yang dikirim.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                        Apakah dokumen kapal bisa diajukan secara online?
                    </button>
                </h2>
                <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" style="font-family: 'Poppins', sans-serif;">
                        Ya, semua dokumen perizinan kapal dapat diajukan secara digital melalui dashboard akun Anda tanpa perlu datang ke kantor.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                        Berapa lama proses verifikasi dokumen biasanya?
                    </button>
                </h2>
                <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" style="font-family: 'Poppins', sans-serif;">
                        Proses verifikasi dokumen biasanya memakan waktu 1–3 hari kerja, tergantung kelengkapan dokumen yang diajukan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeadingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                        Apakah sistem ini aman digunakan?
                    </button>
                </h2>
                <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" style="font-family: 'Poppins', sans-serif;">
                        Sistem menggunakan protokol keamanan modern dan enkripsi data untuk memastikan semua informasi pengguna aman.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== Contact Section ===== -->
<section id="contact" class="py-5 text-white" style="background: linear-gradient(90deg, #003366, #004080);">
    <div class="container text-center">
        <h2 class="fw-bold mb-4" style="font-family: 'Montserrat', sans-serif;">Hubungi Kami</h2>
        <p style="font-family: 'Poppins', sans-serif;">Untuk informasi lebih lanjut, silakan hubungi kami melalui:</p>
        <div class="mt-3">
            <p><strong>Email:</strong> info@perkapalan.id</p>
            <p><strong>Telepon:</strong> +62 812 3456 7890</p>
        </div>
        <a href="mailto:info@perkapalan.id" class="btn btn-light btn-lg mt-3 fw-bold">Kirim Email</a>
    </div>
</section>

<!-- ===== Footer ===== -->
<footer class="py-3 bg-dark text-center text-white">
    <div class="container">
        <small>&copy; {{ date('Y') }} Sistem Informasi Perizinan Kapal. All rights reserved.</small>
    </div>
</footer>
@endsection
