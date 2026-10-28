<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>KAWAMI - Dashboard Teman</title>
    
    <!-- Google Fonts & Tailwind CSS CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    colors: {
                        'kawami-bg': '#E9E0E6',
                        'kawami-softblue': '#B2CEDE',
                        'kawami-mint': '#8CDFD6',
                        'kawami-cyan': '#6DC0D5',
                        'kawami-dark': '#5A716A',
                    },
                    animation: {
                        'float-gentle': 'floatGentle 5s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
                    },
                    keyframes: {
                        floatGentle: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-8px)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { boxShadow: '0 10px 30px rgba(109, 192, 213, 0.25)' },
                            '50%': { boxShadow: '0 20px 40px rgba(140, 223, 214, 0.45)' },
                        }
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer utilities {
            .app-transition {
                transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            }
            .kawami-glass {
                background: rgba(233, 224, 230, 0.75);
                -webkit-backdrop-filter: blur(14px);
                backdrop-filter: blur(14px);
                border: 1px solid rgba(255, 255, 255, 0.8);
            }
            .kawami-card-shadow {
                box-shadow: 0 12px 30px -10px rgba(90, 113, 106, 0.15);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#E9E0E6] via-[#B2CEDE] to-[#8CDFD6] min-h-screen font-sans text-kawami-dark p-3 sm:p-6 lg:p-10 flex justify-center items-center selection:bg-kawami-cyan selection:text-white relative overflow-x-hidden">

    <!-- Latar Belakang Ambient Glowing Blobs -->
    <div class="fixed -top-24 -left-24 w-96 h-96 bg-[#8CDFD6]/40 rounded-full blur-3xl pointer-events-none animate-pulse-glow"></div>
    <div class="fixed -bottom-24 -right-24 w-96 h-96 bg-[#6DC0D5]/30 rounded-full blur-3xl pointer-events-none animate-pulse-glow" style="animation-delay: 1.5s;"></div>

    <!-- MAIN CONTAINER DASHBOARD TEMAN -->
    <div class="w-full max-w-6xl kawami-glass rounded-3xl p-4 sm:p-8 lg:p-10 shadow-2xl animate-float-gentle relative z-10 border border-white">
        
        <!-- DASHBOARD 1: WELCOME BANNER & NAVIGATION HEADER -->
        <header class="bg-gradient-to-r from-kawami-dark to-[#3E514B] text-white rounded-2xl p-6 sm:p-8 mb-6 shadow-xl relative overflow-hidden flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            
            <!-- Ornamen Pola Latar Belakang Header -->
            <div class="absolute right-0 top-0 w-64 h-64 bg-kawami-cyan/10 rounded-full blur-2xl pointer-events-none"></div>

            <div class="relative z-10 max-w-xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-kawami-mint/20 border border-kawami-mint/40 text-kawami-mint text-xs font-bold uppercase tracking-wider mb-3">
                    <span class="w-2 h-2 rounded-full bg-kawami-mint animate-ping"></span>
                    KAWAMI Dashboard System
                </div>
                <h1 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight">
                    Welcome to KAWAMI
                </h1>
                <p class="text-xs sm:text-sm text-kawami-softblue/90 mt-1 font-medium leading-relaxed">
                    Sistem Manajemen Data Teman Terpadu — Kelola informasi kontak, tempat duduk, dan identitas teman Anda dalam satu tampilan ringkas.
                </p>
            </div>

            <!-- TOMBOL TAMBAH (Original Route Link Saved) -->
            <div class="relative z-10 w-full md:w-auto flex justify-end">
                <a href="/tambah" class="w-full md:w-auto px-6 py-3.5 rounded-xl bg-gradient-to-r from-kawami-cyan to-kawami-mint text-kawami-dark font-extrabold text-xs sm:text-sm hover:brightness-105 shadow-lg hover:shadow-cyan-500/30 flex items-center justify-center gap-2 app-transition transform hover:-translate-y-1 active:scale-95">
                    <svg class="w-5 h-5 text-kawami-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>+ Tambah Teman</span>
                </a>
            </div>
        </header>

        <!-- DASHBOARD 2: QUICK METRICS & REKAP KARTU (Ringkasan Data) -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            
            <!-- Widget 1: Total Teman -->
            <div class="bg-white/80 border border-white rounded-2xl p-5 flex items-center justify-between shadow-sm hover:shadow-md app-transition">
                <div>
                    <span class="text-[11px] font-bold text-kawami-dark/60 uppercase tracking-wider">Total Terdata</span>
                    <h2 class="text-2xl font-extrabold text-kawami-dark mt-0.5">
                        {{ count($all_friend) }} <span class="text-xs font-semibold text-kawami-dark/70">Orang</span>
                    </h2>
                </div>
                <div class="w-12 h-12 rounded-xl bg-kawami-mint/40 flex items-center justify-center text-kawami-dark">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Widget 2: Status Direktori -->
            <div class="bg-white/80 border border-white rounded-2xl p-5 flex items-center justify-between shadow-sm hover:shadow-md app-transition">
                <div>
                    <span class="text-[11px] font-bold text-kawami-dark/60 uppercase tracking-wider">Status Direktori</span>
                    <h2 class="text-base font-extrabold text-kawami-dark mt-1">Aktif & Terorganisir</h2>
                </div>
                <div class="w-12 h-12 rounded-xl bg-kawami-cyan/30 flex items-center justify-center text-kawami-dark">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Widget 3: Quick Action Card -->
            <div class="col-span-1 sm:col-span-2 lg:col-span-1 bg-gradient-to-r from-kawami-softblue to-kawami-mint rounded-2xl p-5 flex items-center justify-between shadow-sm hover:shadow-md app-transition">
                <div>
                    <span class="text-[11px] font-bold text-kawami-dark uppercase tracking-wider">Kelola Kontak</span>
                    <p class="text-xs font-bold text-kawami-dark/80 mt-0.5">Tambah relasi baru kapan saja</p>
                </div>
                <a href="/tambah" class="p-2.5 rounded-xl bg-white text-kawami-dark shadow-sm hover:scale-105 app-transition">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </a>
            </div>

        </section>

        <!-- DASHBOARD 3: HASIL DATA TEMAN (GRID CARD LIST) -->
        <section>
            
            <!-- Judul Seksi -->
            <div class="flex items-center justify-between pb-3 mb-6 border-b border-kawami-dark/15">
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-kawami-cyan"></span>
                    <h2 class="text-base sm:text-lg font-extrabold text-kawami-dark tracking-wide uppercase">
                        Daftar Nama Teman Anda
                    </h2>
                </div>
                <span class="text-xs font-semibold px-3 py-1 rounded-full bg-white/70 text-kawami-dark border border-white">
                    KAWAMI Directory
                </span>
            </div>

            <!-- Grid Card Koleksi Hasil Ditambahkan -->
            <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 list-none p-0">
                @foreach ($all_friend as $teman)
                    <li class="bg-white/85 border border-white rounded-2xl p-5 shadow-sm hover:shadow-xl hover:border-kawami-mint transition-all duration-300 flex flex-col justify-between hover:-translate-y-1 group">
                        
                        <!-- Header Card Info Nama & Nomor Kursi -->
                        <div class="flex items-center justify-between pb-3 border-b border-kawami-dark/10 mb-4">
                            <div class="flex items-center gap-2.5">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-kawami-cyan to-kawami-mint flex items-center justify-center text-kawami-dark font-black text-sm shadow-xs group-hover:scale-105 app-transition">
                                    {{ substr($teman->nama_teman, 0, 1) }}
                                </div>
                                <span class="font-extrabold text-base text-kawami-dark tracking-tight leading-snug">
                                    {{ $teman->nama_teman }}
                                </span>
                            </div>
                            <span class="px-2.5 py-1 rounded-lg bg-kawami-dark text-kawami-mint font-bold text-[11px] shadow-xs">
                                Kursi #{{ $teman->nomor_kursi }}
                            </span>
                        </div>

                        <!-- Body Card Info Rincian Data -->
                        <div class="flex flex-col gap-2.5 text-xs">
                            
                            <!-- Row 1: Tanggal Lahir -->
                            <div class="flex items-center justify-between p-2 rounded-xl bg-kawami-bg/40 border border-white/60">
                                <span class="text-kawami-dark/70 font-semibold flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-kawami-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    Tanggal Lahir:
                                </span>
                                <span class="font-bold text-kawami-dark">{{ $teman->tanggal_lahir }}</span>
                            </div>

                            <!-- Row 2: Alamat -->
                            <div class="flex items-center justify-between p-2 rounded-xl bg-kawami-bg/40 border border-white/60">
                                <span class="text-kawami-dark/70 font-semibold flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-kawami-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    Alamat:
                                </span>
                                <span class="font-bold text-kawami-dark text-right truncate max-w-[140px]">{{ $teman->alamat }}</span>
                            </div>

                            <!-- Row 3: Nomor Telepon -->
                            <div class="flex items-center justify-between p-2 rounded-xl bg-kawami-bg/40 border border-white/60">
                                <span class="text-kawami-dark/70 font-semibold flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-kawami-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    Telepon:
                                </span>
                                <span class="font-bold text-kawami-dark">{{ $teman->nomor_telepon }}</span>
                            </div>

                        </div>

                    </li>
                @endforeach
            </ul>

        </section>

        <!-- FOOTER KECIL -->
        <footer class="mt-10 pt-4 border-t border-kawami-dark/15 text-center text-xs text-kawami-dark/60 flex flex-col sm:flex-row justify-between items-center gap-2 font-medium">
            <span>&copy; 2026 KAWAMI Application System</span>
            <span class="font-semibold text-kawami-dark">Sistem Pengelolaan Data Teman Terpadu</span>
        </footer>

    </div>

</body>
</html>