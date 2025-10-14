


@section('content')
    <div class="min-h-screen">

        <!-- Section: Organisasi OSIS -->
        <section class="organization-section">
            <div class="osis-card">
                <div class="osis-image-container">
                    <img src="{{ asset('assets/osis.png') }}" alt="Foto OSIS" class="osis-image">
                </div>
                <h2 class="organization-title font-bebas text-center">ORGANISASI OSIS</h2>
                <p class="organization-description font-poppins text-center">
                    Organisasi Siswa Intra Sekolah (OSIS) SMK PGRI 3 Malang adalah wadah resmi bagi siswa untuk
                    merealisasikan aspirasi, mengembangkan bakat dan minat, serta melatih kepemimpinan dan tanggung jawab.
                    OSIS aktif mengadakan berbagai program sekolah, baik di bidang akademik, olahraga, seni, maupun sosial
                    kemasyarakatan.
                </p>
            </div>
        </section>

        <!-- Section: Ekstrakurikuler -->
        <section class="ekskul-section">
            <h2 class="ekskul-title font-bebas">EKSTRAKURIKULER</h2>
            
            <!-- Loading State -->
            <div class="ekskul-loading" id="ekskulLoading">
                <p>Memuat ekstrakurikuler...</p>
            </div>

            <!-- Content Wrapper -->
            <div class="ekskul-content-wrapper" id="ekskulContent">
                @php
                    $itemsPerPage = 4;
                    $totalPages = ceil(count($eks) / $itemsPerPage);
                @endphp
                
                @if(count($eks) > 0)
                    @for($i = 0; $i < $totalPages; $i++)
                        <div class="ekskul-page {{ $i === 0 ? 'ekskul-page--active' : '' }}" 
                             data-page="{{ $i + 1 }}"
                             id="ekskulPage{{ $i + 1 }}">
                            <div class="ekskul-grid slide-in">
                                @foreach(array_slice($eks, $i * $itemsPerPage, $itemsPerPage) as $item)
                                    <div class="ekskul-card">
                                        <div class="ekskul-image-container">
                                            <img src="{{ asset('assets/' . $item->folder . '/' . $item->image) }}" 
                                                 alt="{{ $item->title }}" 
                                                 class="ekskul-image">
                                            <div class="ekskul-overlay"></div>
                                        </div>
                                        <div class="ekskul-content">
                                            <h3 class="ekskul-name font-bebas">{{ $item->title }}</h3>
                                            <p class="ekskul-description font-poppins">{{ $item->body }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endfor
                @else
                    <div class="ekskul-page ekskul-page--active">
                        <p class="text-center text-gray-500 font-poppins">Belum ada data ekstrakurikuler.</p>
                    </div>
                @endif
            </div>

            <!-- Navigation - Only show if there are multiple pages -->
            @if($totalPages > 1)
                <div class="ekskul-navigation">
    <button 
    id="prevButton" 
    data-action="prev"
    class="nav-button"
    disabled
    >
        ← Sebelumnya
    </button>

    <div class="page-indicator">
        <div class="page-numbers">
            <span class="current-page" id="currentPage">1</span>
            <span class="page-slash">/</span>
            <span class="total-pages" id="totalPages">{{ $totalPages }}</span>
        </div>
    </div>

    <button 
    id="nextButton" 
    data-action="next"
    class="nav-button"
    >
        Selanjutnya →
    </button>
</div>

            @endif
        </section>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const ekskulContent = document.getElementById('ekskulContent');
        const ekskulLoading = document.getElementById('ekskulLoading');
        const prevButton = document.getElementById('prevButton');
        const nextButton = document.getElementById('nextButton');
        const currentPageEl = document.getElementById('currentPage');
        const totalPagesEl = document.getElementById('totalPages');
        
        // State
        let currentPage = 1;
        const totalPages = {{ $totalPages }};
        let isAnimating = false;

        // Initialize
        function initPagination() {
            if (totalPages <= 1) {
                if (prevButton) prevButton.style.display = 'none';
                if (nextButton) nextButton.style.display = 'none';
                return;
            }

            updateNavigation();
            hideLoading();
        }

        // Navigation functions
        function goToPage(page) {
            if (isAnimating || page < 1 || page > totalPages) return;
            
            showLoading();
            isAnimating = true;

            // Hide current page
            const currentPageElement = document.querySelector('.ekskul-page--active');
            if (currentPageElement) {
                currentPageElement.classList.remove('ekskul-page--active');
            }

            // Update current page
            currentPage = page;

            // Show new page after a short delay for smooth transition
            setTimeout(() => {
                const newPageElement = document.getElementById(`ekskulPage${page}`);
                if (newPageElement) {
                    newPageElement.classList.add('ekskul-page--active');
                }
                
                updateNavigation();
                hideLoading();
                isAnimating = false;
            }, 300);
        }

        function updateNavigation() {
            // Update page indicator
            if (currentPageEl) {
                currentPageEl.textContent = currentPage;
            }

            // Update button states
            if (prevButton) {
                prevButton.classList.toggle('nav-button--disabled', currentPage === 1);
            }
            
            if (nextButton) {
                nextButton.classList.toggle('nav-button--disabled', currentPage === totalPages);
            }

            // Update total pages (in case it changed)
            if (totalPagesEl) {
                totalPagesEl.textContent = totalPages;
            }
        }

        function showLoading() {
            if (ekskulLoading) {
                ekskulLoading.classList.add('ekskul-loading--visible');
            }
            if (ekskulContent) {
                ekskulContent.style.opacity = '0.5';
            }
        }

        function hideLoading() {
            if (ekskulLoading) {
                ekskulLoading.classList.remove('ekskul-loading--visible');
            }
            if (ekskulContent) {
                ekskulContent.style.opacity = '1';
            }
        }

        // Event listeners
        if (prevButton) {
            prevButton.addEventListener('click', function() {
                if (!this.classList.contains('nav-button--disabled')) {
                    goToPage(currentPage - 1);
                }
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', function() {
                if (!this.classList.contains('nav-button--disabled')) {
                    goToPage(currentPage + 1);
                }
            });
        }

        // Keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft' && currentPage > 1) {
                goToPage(currentPage - 1);
            } else if (event.key === 'ArrowRight' && currentPage < totalPages) {
                goToPage(currentPage + 1);
            }
        });

        // Initialize pagination
        initPagination();

        // Add animation to cards when they become visible
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-in');
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.ekskul-card').forEach(card => {
            observer.observe(card);
        });
    });
</script>
@endpush