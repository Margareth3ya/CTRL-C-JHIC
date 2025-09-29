<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .footer-link {
        position: relative;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .footer-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 1px;
        background-color: #f97316;
        transition: width 0.3s ease;
    }

    .footer-link:hover::after {
        width: 100%;
    }

    .social-icon {
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .social-icon:hover {
        transform: translateY(-5px) scale(1.1);
    }

    .map-container {
        transition: all 0.3s ease;
        filter: grayscale(0.2);
    }

    .map-container:hover {
        filter: grayscale(0);
        transform: scale(1.02);
    }

    .section-divider {
        position: relative;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(249, 115, 22, 0.5), transparent);
    }

    @keyframes shine {
        0% {
            background-position: -100% 0;
        }

        100% {
            background-position: 200% 0;
        }
    }

    .shine-animate {
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        background-size: 200% 100%;
        animation: shine 8s infinite;
    }
</style>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: "#f97316",
                    primaryhover: "#ea580c",
                },
                animation: {
                    "pulse-slow": "pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                    float: "float 6s ease-in-out infinite",
                },
                keyframes: {
                    float: {
                        "0%, 100%": { transform: "translateY(0)" },
                        "50%": { transform: "translateY(-10px)" },
                    },
                },
            },
        },
    };

    document.addEventListener("DOMContentLoaded", function () {
        const backToTopButton = document.getElementById("back-to-top");

        window.addEventListener("scroll", function () {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove("opacity-0", "invisible");
                backToTopButton.classList.add("opacity-100", "visible");
            } else {
                backToTopButton.classList.remove("opacity-100", "visible");
                backToTopButton.classList.add("opacity-0", "invisible");
            }
        });

        backToTopButton.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });

        const observerOptions = {
            root: null,
            rootMargin: "0px",
            threshold: 0.1,
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animate-fade-in-up");
                }
            });
        }, observerOptions);

        document
            .querySelectorAll(".footer-link, .social-icon, .map-container")
            .forEach((el) => {
                observer.observe(el);
            });
    });

</script>

<footer
    class="container flex mx-auto p-2 rounded-3xl bg-gradient-to-b from-gray-900 to-gray-800 text-gray-300 px-6 md:px-16 py-5 relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-1/4 w-64 h-64 rounded-full bg-primary animate-pulse-slow"></div>
        <div class="absolute bottom-10 right-1/4 w-48 h-48 rounded-full bg-primary animate-float"></div>
    </div>

    <div class="relative z-10 grid md:grid-cols-4 gap-8">
        <div>
            <div class="flex items-center space-x-3 mb-4">
                <div
                    class="w-30 h-30 rounded-full flex items-center justify-center text-white font-bold text-lg shadow-lg">
                    <img src="https://i.ibb.co.com/MkPkNv4c/Logo-Sekolah.png" alt="logo">
                </div>
                <div>
                    <h2 class="text-white font-bold text-xl">SKARIGA</h2>
                    <p class="text-sm text-gray-400">Successful by Discipline</p>
                </div>
            </div>
            <p class="text-sm mb-4">Sekolah unggulan yang berkomitmen untuk mencetak generasi disiplin dan berprestasi.
            </p>

            <div class="mt-6 flex space-x-4">
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-gray-800 hover:bg-gray-700 flex items-center justify-center">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-gray-800 hover:bg-gray-700 flex items-center justify-center">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#"
                    class="social-icon w-10 h-10 rounded-full bg-gray-800 hover:bg-gray-700 flex items-center justify-center">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-4 text-lg relative inline-block">
                <span class="relative z-10">Tentang Sekolah</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-primary rounded-full"></span>
            </h3>
            <ul class="space-y-3">
                <li><a href="#" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Beranda
                    </a></li>
                <li><a href="/profil" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Profil
                    </a></li>
                <li><a href="#" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Jurusan
                    </a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-4 text-lg relative inline-block">
                <span class="relative z-10">Informasi & Layanan</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-primary rounded-full"></span>
            </h3>
            <ul class="space-y-3">
                <li><a href="#" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Berita
                    </a></li>
                <li><a href="#" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Pendaftaran
                    </a></li>
                <li><a href="#" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Kegiatan
                    </a></li>
                <li><a href="#" class="footer-link flex items-center text-sm hover:text-white">
                        <i class="fas fa-chevron-right text-primary mr-2 text-xs"></i>
                        Prestasi
                    </a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-4 text-lg relative inline-block">
                <span class="relative z-10">Kontak</span>
                <span class="absolute bottom-0 left-0 w-full h-1 bg-primary rounded-full"></span>
            </h3>
            <div class="space-y-3 text-sm">
                <p class="flex items-start">
                    <i class="fas fa-map-marker-alt text-primary mr-3 mt-1"></i>
                    <span>Jl. Raya Tlogomas No. 3, Malang<br>Jawa Timur, Indonesia</span>
                </p>
                <p class="flex items-center">
                    <i class="fas fa-phone text-primary mr-3"></i>
                    <span>(0341) 123456</span>
                </p>
                <p class="flex items-center">
                    <i class="fas fa-envelope text-primary mr-3"></i>
                    <span>info@smkpgri3malang.sch.id</span>
                </p>
                <p class="flex items-center">
                    <i class="fas fa-clock text-primary mr-3"></i>
                    <span>Senin - Jumat: 07:00 - 16:00</span>
                </p>
            </div>

            <div class="mt-4 rounded-lg overflow-hidden map-container shadow-lg">
                <div class="bg-gray-800 h-40 flex items-center justify-center">
                    <div class="text-center w-full h-full">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6898708661834!2d112.6019448!3d-7.9274244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78821eaa6b3655%3A0x3cd0ba7cc35c7b6d!2sSMK%20PGRI%203%20Malang!5e0!3m2!1sid!2sid!4v1758358772409!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
</footer>