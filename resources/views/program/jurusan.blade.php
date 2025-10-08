@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-white-100 py-8">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-5xl font-bebas text-gray-800 mb-8">DEPARTEMEN UNGGULAN SKARIGA</h2>

        <!-- Banner Rekomendasi -->
        <div id="recommendationBanner" class="hidden mb-8 bg-gradient-to-r from-orange-50 to-blue-50 border-l-4 border-orange-500 p-6 rounded-lg">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        <i class="fas fa-star text-orange-500 mr-2"></i>
                        Jurusan Rekomendasi untuk Anda
                    </h3>
                    <p class="text-gray-600" id="recommendedMajorText"></p>
                </div>
                <button onclick="closeRecommendationBanner()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <div class="space-y-8">
            @foreach($departments as $deptKey => $dept)
            <div class="relative bg-white rounded-2xl overflow-hidden shadow-2xl min-h-[400px]" id="department-{{ $deptKey }}">

                {{-- COVER DEPARTEMEN --}}
                <div id="cover-{{ $deptKey }}" class="transition-all duration-500 ease-in-out">
                    <div onclick="showFirstMajor('{{ $deptKey }}')" class="cursor-pointer h-full relative">
                        <img src="{{ $dept['cover'] }}" alt="{{ $dept['title'] }}" class="w-full h-[400px] object-cover">
                        <div class="absolute inset-0 bg-black/50 flex flex-col justify-center items-start px-8">
                            <span class="text-white text-lg mb-2 font-medium">Departemen</span>
                            <h3 class="text-white text-4xl font-bold mb-3">{{ strtoupper($dept['title']) }}</h3>
                            <p class="text-white text-base">Klik untuk melihat jurusan →</p>
                        </div>
                    </div>
                </div>

                {{-- DETAIL JURUSAN --}}
                <div id="detail-{{ $deptKey }}" 
                     class="absolute inset-0 bg-white rounded-2xl z-50 opacity-0 pointer-events-none transition-all duration-500">

                    {{-- CARD JURUSAN --}}
                    <div class="department-card h-full" id="department-card-{{ $deptKey }}"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://unpkg.com/lucide@latest"></script>

<script>
const departmentData = @json($departments);
const activeMajors = {};
let isTransitioning = false;

// Check for recommended major on page load
document.addEventListener('DOMContentLoaded', function() {
    checkRecommendedMajor();
});

function checkRecommendedMajor() {
    const selectedMajor = localStorage.getItem('selectedMajor');
    const recommendedMajors = localStorage.getItem('recommendedMajors');
    
    if (selectedMajor && recommendedMajors) {
        const majorsData = JSON.parse(recommendedMajors);
        showRecommendationBanner(selectedMajor, majorsData);
        
        // Auto-scroll dan buka jurusan yang sesuai setelah delay
        setTimeout(() => {
            scrollToRecommendedMajor(selectedMajor);
        }, 1000);
    }
}

function showRecommendationBanner(selectedMajor, majorsData) {
    const banner = document.getElementById('recommendationBanner');
    const bannerText = document.getElementById('recommendedMajorText');
    
    let recommendationText = `Berdasarkan minat Anda, kami merekomendasikan: <strong>${selectedMajor}</strong>`;
    
    if (majorsData.utama && majorsData.utama.description) {
        recommendationText += ` - ${majorsData.utama.description.substring(0, 100)}...`;
    }
    
    bannerText.innerHTML = recommendationText;
    banner.classList.remove('hidden');
}

function closeRecommendationBanner() {
    const banner = document.getElementById('recommendationBanner');
    banner.classList.add('hidden');
    localStorage.removeItem('selectedMajor');
    localStorage.removeItem('recommendedMajors');
}

function scrollToRecommendedMajor(majorName) {
    console.log('Mencari jurusan:', majorName);
    
    let foundDepartment = null;
    let foundMajorIndex = -1;

    // Cari jurusan yang cocok di semua department
    for (const [deptKey, dept] of Object.entries(departmentData)) {
        const majors = dept.majors || [];
        
        for (let i = 0; i < majors.length; i++) {
            const major = majors[i];
            // Cek kesamaan nama jurusan (case insensitive, partial match)
            if (major.name.toLowerCase().includes(majorName.toLowerCase()) || 
                majorName.toLowerCase().includes(major.name.toLowerCase())) {
                
                foundDepartment = deptKey;
                foundMajorIndex = i;
                console.log('Jurusan ditemukan:', major.name, 'di department:', deptKey, 'index:', i);
                break;
            }
        }
        
        if (foundDepartment) break;
    }

    if (foundDepartment !== null && foundMajorIndex !== -1) {
        // Scroll ke department yang sesuai
        const departmentElement = document.getElementById(`department-${foundDepartment}`);
        if (departmentElement) {
            departmentElement.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'center'
            });

            // Auto-buka department dan tampilkan jurusan yang sesuai
            setTimeout(() => {
                showSpecificMajor(foundDepartment, foundMajorIndex);
            }, 800);
        }
    } else {
        console.log('Jurusan tidak ditemukan, membuka halaman normal');
    }
}

/* === SHOW SPECIFIC MAJOR === */
function showSpecificMajor(deptId, majorIndex) {
    const cover = document.getElementById(`cover-${deptId}`);
    const detail = document.getElementById(`detail-${deptId}`);
    
    // Sembunyikan cover dan tampilkan detail
    cover.style.opacity = '0';
    cover.style.pointerEvents = 'none';
    detail.classList.remove('opacity-0', 'pointer-events-none');
    detail.classList.add('opacity-100');
    
    // Set state dan render jurusan yang spesifik
    activeMajors[deptId] = majorIndex;
    renderMajorDetail(deptId, majorIndex);

    // Highlight card yang direkomendasikan
    setTimeout(() => {
        highlightRecommendedCard(deptId);
    }, 500);
}

function highlightRecommendedCard(deptId) {
    const card = document.getElementById(`department-card-${deptId}`);
    if (card) {
        card.style.animation = 'pulseHighlight 2s ease-in-out';
        
        // Tambahkan border highlight
        const inner = card.querySelector('.major-inner');
        if (inner) {
            inner.style.boxShadow = '0 0 0 3px rgba(249, 115, 22, 0.5)';
            inner.style.transition = 'box-shadow 0.3s ease';
            
            // Hapus highlight setelah beberapa detik
            setTimeout(() => {
                inner.style.boxShadow = '0 20px 40px rgba(0,0,0,0.1)';
            }, 3000);
        }
    }
}

/* === SHOW / HIDE === */
function showFirstMajor(deptId) {
    const cover = document.getElementById(`cover-${deptId}`);
    const detail = document.getElementById(`detail-${deptId}`);
    cover.style.opacity = '0';
    cover.style.pointerEvents = 'none';
    detail.classList.remove('opacity-0', 'pointer-events-none');
    detail.classList.add('opacity-100');
    activeMajors[deptId] = 0;
    renderMajorDetail(deptId, 0);
}

function returnToCover(deptId) {
    const cover = document.getElementById(`cover-${deptId}`);
    const detail = document.getElementById(`detail-${deptId}`);
    detail.classList.remove('opacity-100');
    detail.classList.add('opacity-0', 'pointer-events-none');
    cover.style.opacity = '1';
    cover.style.pointerEvents = 'auto';
}

/* === NAVIGATION === */
function nextMajor(deptId) {
    if (isTransitioning) return;
    isTransitioning = true;
    const majors = departmentData[deptId]?.majors || [];
    const total = majors.length + 1;
    activeMajors[deptId] = (activeMajors[deptId] + 1) % total;
    renderMajorDetail(deptId, activeMajors[deptId]);
    setTimeout(() => (isTransitioning = false), 500);
}

function prevMajor(deptId) {
    if (isTransitioning) return;
    isTransitioning = true;
    const majors = departmentData[deptId]?.majors || [];
    const total = majors.length + 1;
    activeMajors[deptId] = (activeMajors[deptId] - 1 + total) % total;
    renderMajorDetail(deptId, activeMajors[deptId]);
    setTimeout(() => (isTransitioning = false), 500);
}

/* === RENDER CARD === */
function renderMajorDetail(deptId, index) {
    const majors = departmentData[deptId]?.majors || [];
    const total = majors.length;
    const container = document.getElementById(`department-card-${deptId}`);
    container.innerHTML = "";

    // Closing card
    if (index === total) {
        container.innerHTML = `
        <div class="major-card closing-card">
            <div class="major-inner relative">
                <img src="${departmentData[deptId].cover}" alt="${departmentData[deptId].title}" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-center items-center text-center px-8">
                    <h3 class="text-white text-4xl font-bold mb-6">Selamat Menjelajahi!</h3>
                    <p class="text-white text-xl mb-8">Anda sudah melihat semua jurusan di ${departmentData[deptId].title}</p>
                    <button onclick="returnToCover('${deptId}')" class="bg-white text-gray-900 px-8 py-4 rounded-xl font-semibold shadow-2xl hover:bg-gray-200 transition-all transform hover:scale-105 active:scale-95">
                        ← Kembali ke Departemen
                    </button>
                </div>
            </div>
        </div>`;
        return;
    }

    const major = majors[index];
    if (!major) return;

    // Cek apakah ini jurusan yang direkomendasikan
    const selectedMajor = localStorage.getItem('selectedMajor');
    const isRecommended = selectedMajor && (
        major.name.toLowerCase().includes(selectedMajor.toLowerCase()) || 
        selectedMajor.toLowerCase().includes(major.name.toLowerCase())
    );

    container.innerHTML = `
    <div class="major-card ${isRecommended ? 'recommended-major' : ''}">
        <div class="major-inner">
            <div class="image-section">
                <img src="${major.image}" alt="${major.name}">
                ${isRecommended ? `
                <div class="absolute top-4 left-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold animate-pulse">
                    ⭐ Rekomendasi
                </div>
                ` : ''}
            </div>
            <div class="content-section">
                <div class="content-header">
                    <h3 class="major-title">${major.name}</h3>
                    <p class="major-description">${major.desc}</p>
                </div>

                <div class="skills-section">
                    <h4 class="section-title">
                        <i data-lucide="lightbulb" class="icon"></i>
                        Keterampilan yang Dibutuhkan
                    </h4>
                    <div class="section-content">
                        ${major.skills ? major.skills.split('\\n').map(s => `<div class="skill-item">${s.trim()}</div>`).join('') : 
                        `<div class="skill-item">Kemampuan dasar teknis</div>
                         <div class="skill-item">Kerjasama tim & komunikasi</div>
                         <div class="skill-item">Kreativitas dan problem solving</div>`}
                    </div>
                </div>

                <div class="career-section">
                    <h4 class="section-title">
                        <i data-lucide="briefcase" class="icon"></i>
                        Pekerjaan Utama
                    </h4>
                    <div class="section-content">
                        ${major.careers ? major.careers.split('\\n').map(s => `<div class="career-item">${s.trim()}</div>`).join('') : 
                        `<div class="career-item">Teknisi profesional</div>
                         <div class="career-item">Konsultan bidang terkait</div>
                         <div class="career-item">Wirausahawan kreatif</div>`}
                    </div>
                </div>

                <div class="decor-icon"><i data-lucide="cpu"></i></div>
            </div>
        </div>
    </div>`;

    // Render Lucide icons
    lucide.createIcons();

    setupDragSwipe(deptId);
}

/* === DRAG & SWIPE === */
function setupDragSwipe(deptId) {
    const card = document.getElementById(`department-card-${deptId}`);
    const inner = card?.querySelector('.major-inner');
    if (!inner) return;

    let startX = 0, currentX = 0, velocity = 0;
    let isDragging = false, lastX = 0, lastTime = 0;

    const start = (x) => {
        if (isTransitioning) return;
        isDragging = true;
        startX = x; lastX = x; lastTime = Date.now();
        inner.style.transition = 'none';
    };

    const move = (x) => {
        if (!isDragging) return;
        currentX = x - startX;
        const now = Date.now();
        const deltaTime = now - lastTime;
        if (deltaTime > 0) velocity = (x - lastX) / deltaTime;
        lastX = x; lastTime = now;
        const eased = currentX * 0.7;
        inner.style.transform = `translateX(${eased}px) rotateY(${eased * 0.02}deg)`;
    };

    const end = () => {
        if (!isDragging) return;
        isDragging = false;
        const threshold = 100;
        if (Math.abs(currentX) > threshold) {
            inner.style.transition = 'all 0.4s ease';
            inner.style.transform = `translateX(${currentX < 0 ? -300 : 300}px) rotateY(${currentX < 0 ? -15 : 15}deg)`;
            setTimeout(() => currentX < 0 ? nextMajor(deptId) : prevMajor(deptId), 200);
        } else {
            inner.style.transition = 'all 0.4s ease';
            inner.style.transform = 'translateX(0) rotateY(0)';
        }
    };

    inner.addEventListener('mousedown', e => start(e.clientX));
    window.addEventListener('mousemove', e => move(e.clientX));
    window.addEventListener('mouseup', end);

    inner.addEventListener('touchstart', e => start(e.touches[0].clientX), { passive: true });
    inner.addEventListener('touchmove', e => move(e.touches[0].clientX), { passive: true });
    inner.addEventListener('touchend', end);
}

// Pastikan fungsi tersedia di global scope
window.showSpecificMajor = showSpecificMajor;
window.closeRecommendationBanner = closeRecommendationBanner;

</script>

<style>
.font-bebas {
    font-family: 'Bebas Neue', cursive;
}
.font-poppins {
    font-family: 'Poppins', sans-serif;
}

.department-card {
    width: 100%;
    height: 100%;
    background: white;
    border-radius: 20px;
    display: flex;
    overflow: hidden;
    perspective: 1000px;
}

.major-card {
    width: 100%;
    height: 100%;
    user-select: none;
    cursor: grab;
}

.major-card.recommended-major .major-inner {
    border: 3px solid #f97316;
    box-shadow: 0 0 20px rgba(249, 115, 22, 0.3);
}

.major-inner {
    display: flex;
    flex-direction: row;
    width: 100%;
    height: 100%;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.5s ease;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* Animasi highlight */
@keyframes pulseHighlight {
    0% { transform: scale(1); }
    50% { transform: scale(1.02); }
    100% { transform: scale(1); }
}

/* IMAGE */
.image-section {
    width: 40%;
    position: relative;
}
.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* CONTENT */
.content-section {
    width: 60%;
    padding: 40px 45px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow-y: auto;
}
.major-title {
    font-size: 2.2rem;
    font-weight: 800;
    color: #111;
    margin-bottom: 10px;
}
.major-description {
    color: #555;
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* SECTIONS */
.section-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #222;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.section-title .icon {
    width: 22px;
    height: 22px;
    color: #2563eb;
    stroke-width: 2.2;
    flex-shrink: 0;
}
.section-content { color: #444; }
.skill-item, .career-item {
    padding: 8px 0 8px 14px;
    border-bottom: 1px solid #eee;
    position: relative;
}
.skill-item:before, .career-item:before {
    content: "•";
    color: #3b82f6;
    position: absolute;
    left: 0;
}
.skill-item:last-child, .career-item:last-child { border-bottom: none; }

/* DECOR ICON */
.decor-icon {
    position: absolute;
    bottom: 25px;
    right: 35px;
    opacity: 0.08;
    pointer-events: none;
}
.decor-icon i {
    width: 90px;
    height: 90px;
    stroke-width: 1.5;
    color: #000;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .major-inner { flex-direction: column; }
    .image-section { width: 100%; height: 250px; }
    .content-section { width: 100%; padding: 30px; }
    .major-title { font-size: 1.8rem; }
}
@media (max-width: 768px) {
    .content-section { padding: 25px; }
    .major-title { font-size: 1.5rem; }
    .major-description { font-size: 1rem; }
}
@media (max-width: 480px) {
    .content-section { padding: 20px; }
    .major-title { font-size: 1.3rem; }
    .major-description { font-size: 0.95rem; }
}
</style>
@endsection