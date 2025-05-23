<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Online Degree Programs Listing Page">
    <meta name="author" content="">

    <title>Persiapan</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-topic-listing.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/degree-programs.css" rel="stylesheet">


    <style>
        section.hero-section {
            padding-bottom: 0 !important;
        }

        /* banner */
        .pagination~.pagination-summary,
        .pagination-info,
        .dataTables_info {
            display: none !important;
        }

        .konsultan-banner {
            background: linear-gradient(90deg, #1ca7c7 0%, #36d1c4 100%);
            min-height: 160px;
            margin-bottom: 8px !important;
            position: relative;
            overflow: hidden;
        }

        .konsultan-img {
            background: transparent;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .konsultan-banner {
                flex-direction: column;
                text-align: center;
                padding: 2rem 1rem;
            }

            .konsultan-img {
                margin-bottom: 1rem !important;
            }
        }

        .bg-warna-warni {
            background: linear-gradient(90deg, #36d1c4 0%, #1ca7c7 55%, #a1c4fd 100%);
            border-radius: 16px;
            padding: 24px;
        }
    </style>

</head>

<body id="top">
    <main>
        <x-navbar></x-navbar>

        <!-- Degree Programs Listing Section -->
        <section class="hero-section d-flex justify-content-center align-items-center" id="degreesList">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto text-center title-container">
                        <h1 class="text-white page-title">Kategori</h1>
                        <h6 class="text-center">Soal Essay Sub-Kategori</h6>
                    </div>
                </div>

                <div class="row g-4 content-section">
                    <!-- CARD UTBK -->
                    <div class="row g-4 content-section">
                        <div class="col-12">
                            <div class="bg-warna-warni mb-3 p-3">
                                Soal<br>
                                1.<br>
                                2.<br>
                                3.<br>
                                4.<br>
                                5.<br>
                            </div>
                            <textarea class="form-control" rows="3" placeholder="Masukkan jawaban Anda di sini"
                                maxlength="1000"></textarea>
                            <button class="btn btn-primary" type="button" id="button-kirim" title="Kirim Jawaban" style="margin-top: 15px;">
                                <i class="bi bi-send-fill"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Banner Konsultan -->
                    <div class="konsultan-banner d-flex align-items-center justify-content-between p-4 mb-4"
                        style="border-radius: 20px;">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/materiutbk/stephena.png') }}" alt="Konsultan 1"
                                class="konsultan-img me-3"
                                style="height: 140px; width: 110px; object-fit: cover; border-radius: 16px;">
                            <img src="{{ asset('images/materiutbk/arya.png') }}" alt="Konsultan 2"
                                class="konsultan-img me-4"
                                style="height: 140px; width: 110px; object-fit: cover; border-radius: 16px;">
                            <div>
                                <div class="text-white fw-semibold mb-1" style="font-size: 1.1rem;">Masih punya
                                    pertanyaan?</div>
                                <div class="text-white fw-bold" style="font-size: 1.6rem; line-height: 1.2;">
                                    Tanyakan via chat ke Konsultan<br>Arya & Stephen
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-success">Email info ke saya</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian bawah -->
        <x-fotter>
            <!-- footer -->
        </x-fotter>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></scsc >
                <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

        <script>
                                               document.addEventListener('DOMContentLoaded', function () {
                // Dropdown functionality for filtering
                const programItems = document.querySelectorAll('#programLevelDropdown + .dropdown-menu .dropdown-item');
                                               const subjectItems = document.querySelectorAll('#subjectDropdown + .dropdown-menu .dropdown-item');

                programItems.forEach(item => {
                                                   item.addEventListener('click', function () {
                                                       document.getElementById('programLevelDropdown').textContent = this.textContent;
                                                   });
                });

                subjectItems.forEach(item => {
                                                   item.addEventListener('click', function () {
                                                       document.getElementById('subjectDropdown').textContent = this.textContent;
                                                   });
                });

                                               // Pagination functionality
                                               const pages = document.querySelectorAll('.pagination .page-link[data-page]');
                                               const prevBtn = document.getElementById('prevPageBtn');
                                               const nextBtn = document.getElementById('nextPageBtn');
                                               let currentPage = 1;
                                               const totalPages = pages.length;

                                               function updatePagination() {
                                                   // Update active page indicator
                                                   pages.forEach(page => {
                                                       const pageNum = parseInt(page.getAttribute('data-page'));
                                                       if (pageNum === currentPage) {
                                                           page.parentElement.classList.add('active');
                                                       } else {
                                                           page.parentElement.classList.remove('active');
                                                       }
                                                   });

                                               // Update prev/next button states
                                               prevBtn.classList.toggle('disabled', currentPage === 1);
                                               nextBtn.classList.toggle('disabled', currentPage === totalPages);

                                               // Scroll to top of the section
                                               window.scrollTo(0, document.getElementById('degreesList').offsetTop - 100);
                }

                pages.forEach(page => {
                                                   page.addEventListener('click', function (e) {
                                                       e.preventDefault();
                                                       currentPage = parseInt(this.getAttribute('data-page'));
                                                       updatePagination();
                                                       console.log(`Loading page ${currentPage}`);
                                                   });
                });

                                               prevBtn.querySelector('a').addEventListener('click', function (e) {
                                                   e.preventDefault();
                    if (currentPage > 1) {
                                                   currentPage--;
                                               updatePagination();
                                               console.log(`Loading page ${currentPage}`);
                    }
                });

                                               nextBtn.querySelector('a').addEventListener('click', function (e) {
                                                   e.preventDefault();
                                               if (currentPage < totalPages) {
                                                   currentPage++;
                                               updatePagination();
                                               console.log(`Loading page ${currentPage}`);
                    }
                });
            });
        </script>


    </main>
</body>

</html>