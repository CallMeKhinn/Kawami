<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Tambah Teman - KAWAMI</title>
    
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
                background: rgba(233, 224, 230, 0.85);
                -webkit-backdrop-filter: blur(16px);
                backdrop-filter: blur(16px);
                border: 1px solid rgba(255, 255, 255, 0.85);
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#E9E0E6] via-[#B2CEDE] to-[#8CDFD6] min-h-screen font-sans text-kawami-dark p-3 sm:p-6 lg:p-10 flex justify-center items-center selection:bg-kawami-cyan selection:text-white relative overflow-x-hidden">

    <!-- Latar Belakang Ambient Glowing Blobs -->
    <div class="fixed -top-24 -left-24 w-96 h-96 bg-[#8CDFD6]/40 rounded-full blur-3xl pointer-events-none animate-pulse-glow"></div>
    <div class="fixed -bottom-24 -right-24 w-96 h-96 bg-[#6DC0D5]/30 rounded-full blur-3xl pointer-events-none animate-pulse-glow" style="animation-delay: 1.5s;"></div>

    <!-- MAIN CONTAINER FORM TAMBAH TEMAN -->
    <div class="w-full max-w-4xl kawami-glass rounded-3xl p-4 sm:p-8 lg:p-10 shadow-2xl animate-float-gentle relative z-10 border border-white">
        
        <!-- DASHBOARD HEADER & TOMBOL KEMBALI -->
        <header class="bg-gradient-to-r from-kawami-dark to-[#3E514B] text-white rounded-2xl p-5 sm:p-6 mb-6 shadow-xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 relative overflow-hidden">
            
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-kawami-mint/20 border border-kawami-mint/40 text-kawami-mint text-[11px] font-bold uppercase tracking-wider mb-2">
                    <span class="w-2 h-2 rounded-full bg-kawami-mint animate-ping"></span>
                    KAWAMI Input System
                </div>
                <h1 class="text-xl sm:text-3xl font-extrabold tracking-tight text-white">
                    Isi Data Teman Baru
                </h1>
                <p class="text-xs text-kawami-softblue/90 mt-1 font-medium">
                    Lengkapi formulir di bawah ini untuk memperbarui direktori KAWAMI
                </p>
            </div>

            <!-- TOMBOL KEMBALI (Original Route Tautan Digunakan) -->
            <div class="relative z-10 w-full sm:w-auto flex justify-end">
                <a href="/" class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-white/10 hover:bg-white text-white hover:text-kawami-dark font-extrabold text-xs sm:text-sm border border-white/30 backdrop-blur-md flex items-center justify-center gap-2 app-transition shadow-sm active:scale-95">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span>Kembali ke Utama</span>
                </a>
            </div>
        </header>

        <!-- DASHBOARD HELPER: PETUNJUK INPUT CEPAT -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-6">
            <div class="bg-white/80 border border-white p-3.5 rounded-2xl flex items-center gap-3 shadow-xs">
                <div class="w-8 h-8 rounded-xl bg-kawami-mint/40 flex items-center justify-center font-bold text-kawami-dark text-xs">1</div>
                <span class="text-xs font-bold text-kawami-dark/80">Identitas Valid</span>
            </div>
            <div class="bg-white/80 border border-white p-3.5 rounded-2xl flex items-center gap-3 shadow-xs">
                <div class="w-8 h-8 rounded-xl bg-kawami-cyan/40 flex items-center justify-center font-bold text-kawami-dark text-xs">2</div>
                <span class="text-xs font-bold text-kawami-dark/80">Kursi 1 - 36</span>
            </div>
            <div class="bg-white/80 border border-white p-3.5 rounded-2xl flex items-center gap-3 shadow-xs">
                <div class="w-8 h-8 rounded-xl bg-kawami-softblue flex items-center justify-center font-bold text-kawami-dark text-xs">3</div>
                <span class="text-xs font-bold text-kawami-dark/80">Kontak Aktif</span>
            </div>
        </div>

        <!-- FORM TAMBAH (Original Form Route & Inputs Preserved) -->
        <form action="/tambah" method="POST" class="bg-white/90 border border-white rounded-2xl p-5 sm:p-8 shadow-sm">
            @csrf
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 sm:gap-6">
                
                <!-- Nama Teman -->
                <div class="flex flex-col gap-1.5">
                    <label for="nama_teman" class="text-xs font-extrabold text-kawami-dark uppercase tracking-wider flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-kawami-cyan"></span>
                        Nama Teman Anda:
                    </label>
                    <input 
                        type="text" 
                        id="nama_teman"
                        name="nama_teman" 
                        value="{{ old('nama_teman') }}" 
                        placeholder="Masukkan nama lengkap..." 
                        class="w-full px-4 py-3 rounded-xl bg-kawami-bg/30 border border-kawami-dark/20 text-kawami-dark placeholder-kawami-dark/40 focus:outline-none focus:border-kawami-dark focus:ring-2 focus:ring-kawami-cyan/30 transition-all text-sm font-medium shadow-xs"
                    />
                    @error('nama_teman')
                        <div class="text-xs font-bold mt-1 text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-200 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Tanggal Lahir -->
                <div class="flex flex-col gap-1.5">
                    <label for="tanggal_lahir" class="text-xs font-extrabold text-kawami-dark uppercase tracking-wider flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-kawami-cyan"></span>
                        Tanggal Lahir:
                    </label>
                    <input 
                        type="date" 
                        id="tanggal_lahir"
                        name="tanggal_lahir" 
                        value="{{ old('tanggal_lahir') }}" 
                        class="w-full px-4 py-3 rounded-xl bg-kawami-bg/30 border border-kawami-dark/20 text-kawami-dark focus:outline-none focus:border-kawami-dark focus:ring-2 focus:ring-kawami-cyan/30 transition-all text-sm font-medium shadow-xs"
                    />
                    @error('tanggal_lahir')
                        <div class="text-xs font-bold mt-1 text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-200 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Nomor Kursi -->
                <div class="flex flex-col gap-1.5">
                    <label for="nomor_kursi" class="text-xs font-extrabold text-kawami-dark uppercase tracking-wider flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-kawami-cyan"></span>
                        Nomor Kursi:
                    </label>
                    <input 
                        type="number" 
                        id="nomor_kursi"
                        name="nomor_kursi" 
                        value="{{ old('nomor_kursi') }}" 
                        placeholder="Contoh: 1 - 36" 
                        class="w-full px-4 py-3 rounded-xl bg-kawami-bg/30 border border-kawami-dark/20 text-kawami-dark placeholder-kawami-dark/40 focus:outline-none focus:border-kawami-dark focus:ring-2 focus:ring-kawami-cyan/30 transition-all text-sm font-medium shadow-xs"
                    />
                    @error('nomor_kursi')
                        <div class="text-xs font-bold mt-1 text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-200 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Nomor Telepon -->
                <div class="flex flex-col gap-1.5">
                    <label for="nomor_telepon" class="text-xs font-extrabold text-kawami-dark uppercase tracking-wider flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-kawami-cyan"></span>
                        Nomor Telepon:
                    </label>
                    <input 
                        type="number" 
                        id="nomor_telepon"
                        name="nomor_telepon" 
                        value="{{ old('nomor_telepon') }}" 
                        placeholder="12-13 digit angka" 
                        class="w-full px-4 py-3 rounded-xl bg-kawami-bg/30 border border-kawami-dark/20 text-kawami-dark placeholder-kawami-dark/40 focus:outline-none focus:border-kawami-dark focus:ring-2 focus:ring-kawami-cyan/30 transition-all text-sm font-medium shadow-xs"
                    />
                    @error('nomor_telepon')
                        <div class="text-xs font-bold mt-1 text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-200 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Alamat Teman (Full Lebar 2 Kolom) -->
                <div class="flex flex-col gap-1.5 sm:col-span-2">
                    <label for="alamat" class="text-xs font-extrabold text-kawami-dark uppercase tracking-wider flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-kawami-cyan"></span>
                        Alamat Teman:
                    </label>
                    <input 
                        type="text" 
                        id="alamat"
                        name="alamat" 
                        value="{{ old('alamat') }}" 
                        placeholder="Masukkan alamat lengkap lokasi tinggal..." 
                        class="w-full px-4 py-3 rounded-xl bg-kawami-bg/30 border border-kawami-dark/20 text-kawami-dark placeholder-kawami-dark/40 focus:outline-none focus:border-kawami-dark focus:ring-2 focus:ring-kawami-cyan/30 transition-all text-sm font-medium shadow-xs"
                    />
                    @error('alamat')
                        <div class="text-xs font-bold mt-1 text-rose-700 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-200 inline-block">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Tombol Simpan (Full Lebar 2 Kolom) -->
                <div class="sm:col-span-2 pt-3">
                    <button 
                        type="submit" 
                        class="w-full py-4 rounded-xl bg-gradient-to-r from-kawami-dark to-[#3E514B] hover:brightness-110 text-white font-extrabold text-sm sm:text-base tracking-wide transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2 cursor-pointer active:scale-95 group"
                    >
                        <svg class="w-5 h-5 text-kawami-mint group-hover:scale-110 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span>Simpan Data Teman</span>
                    </button>
                </div>

            </div>
        </form>

        <!-- FOOTER KECIL -->
        <footer class="mt-8 pt-4 border-t border-kawami-dark/15 text-center text-xs text-kawami-dark/60 flex flex-col sm:flex-row justify-between items-center gap-2 font-medium">
            <span>&copy; 2026 KAWAMI Application System</span>
            <span class="font-semibold text-kawami-dark">Formulir Tambah Data Teman</span>
        </footer>

    </div>

</body>
</html>