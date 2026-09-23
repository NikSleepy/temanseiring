<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="web_standard" name="shell-type">
    <link rel="icon" type="image/png" href="https://lh3.googleusercontent.com/aida-public/AB6AXuBlDgDF3UZJEuAkJy1We6L7TsBztJKORIPw6U2Z8QHh0C61rZaGR-LYpGNO7sY8qZ5N2BvV2TaCu1p6JVLyR0RCpzgIrP7O799PhCwFsrPchAtmJcEOO8qh5BkLkAxFLSpIw5VRdbDov9jhN7FVFWtYoAjOtd32B2zRwYVcrykF7flE2SdKFzDwk_WYz5FGy30-QHWkpRge8DL0_ealXDgkTS9fVL7gvU6m1zz9IuUSjpcMbg8oI5cy5ygynQe1ptCzVg">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#062919",
                        "primary-container": "#1e3f2e",
                        "on-error": "#ffffff",
                        "outline-variant": "#c1c8c1",
                        "inverse-primary": "#aacfb8",
                        "on-primary": "#ffffff",
                        "surface-variant": "#e9e2d5",
                        "on-secondary-fixed": "#3d0600",
                        "on-tertiary-fixed-variant": "#633f00",
                        "tertiary-container": "#503200",
                        "on-surface": "#1e1b14",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "secondary-container": "#fd8367",
                        "surface-container-high": "#eee7da",
                        "surface-container-low": "#faf3e6",
                        "on-secondary-container": "#721c09",
                        "tertiary": "#331f00",
                        "secondary-fixed-dim": "#ffb4a3",
                        "on-secondary-fixed-variant": "#822714",
                        "on-primary-container": "#87aa94",
                        "error": "#ba1a1a",
                        "on-primary-fixed-variant": "#2c4d3c",
                        "on-background": "#1e1b14",
                        "surface": "#fff8ef",
                        "surface-dim": "#e0d9cc",
                        "on-primary-fixed": "#002112",
                        "primary-fixed-dim": "#aacfb8",
                        "secondary": "#a13e28",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#ffddb4",
                        "on-tertiary-container": "#dd9202",
                        "surface-bright": "#fff8ef",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed": "#ffdad2",
                        "outline": "#727973",
                        "inverse-surface": "#333028",
                        "background": "#fff8ef",
                        "inverse-on-surface": "#f7f0e3",
                        "primary-fixed": "#c6ebd3",
                        "surface-tint": "#446652",
                        "surface-container-highest": "#e9e2d5",
                        "on-surface-variant": "#424843",
                        "surface-container": "#f4ede0",
                        "tertiary-fixed-dim": "#ffb955",
                        "on-tertiary-fixed": "#291800",
                        "on-tertiary": "#ffffff"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "space-lg": "1.5rem",
                        "space-md": "1rem",
                        "gutter": "1.5rem",
                        "space-xl": "2.5rem",
                        "margin-mobile": "1.25rem",
                        "space-xs": "0.25rem",
                        "margin": "3rem",
                        "gutter-mobile": "1rem",
                        "space-sm": "0.5rem"
                    },
                    fontFamily: {
                        "label-md": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "title-md": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        "label-lg": ["Plus Jakarta Sans"],
                        "display-lg-mobile": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "title-md": ["18px", {
                            "lineHeight": "26px",
                            "fontWeight": "600"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "display-lg-mobile": ["34px", {
                            "lineHeight": "42px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.03em",
                            "fontWeight": "500"
                        }],
                        "headline-lg-mobile": ["26px", {
                            "lineHeight": "34px",
                            "fontWeight": "700"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-background font-body-md text-on-surface antialiased">
    <header
        class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/85 backdrop-blur-xl shadow-[0_1px_8px_rgba(30,48,38,0.06)]">
        <div class="h-20 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between"><a
                class="flex items-center gap-space-sm group" data-path="beranda" href="#">
                <div
                    class="w-11 h-11 rounded-full overflow-hidden flex items-center justify-center shadow-sm bg-surface-container-lowest">
                    <img alt="Taman Seiring Logo" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlDgDF3UZJEuAkJy1We6L7TsBztJKORIPw6U2Z8QHh0C61rZaGR-LYpGNO7sY8qZ5N2BvV2TaCu1p6JVLyR0RCpzgIrP7O799PhCwFsrPchAtmJcEOO8qh5BkLkAxFLSpIw5VRdbDov9jhN7FVFWtYoAjOtd32B2zRwYVcrykF7flE2SdKFzDwk_WYz5FGy30-QHWkpRge8DL0_ealXDgkTS9fVL7gvU6m1zz9IuUSjpcMbg8oI5cy5ygynQe1ptCzVg">
                </div>
                <div class="flex flex-col"><span
                        class="font-headline-sm text-headline-sm text-primary tracking-tight leading-tight">Taman
                        Seiring</span><span
                        class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline-block">Bertumbuh
                        Bersama, Berdampak Nyata</span></div>
            </a>
            <nav class="hidden lg:flex items-center gap-space-md"
                data-active-classes="text-primary font-bold bg-surface-container rounded-full px-space-md py-space-xs">
                <a aria-current="page"
                    class="transition-all text-primary font-bold bg-surface-container rounded-full px-space-md py-space-xs"
                    data-path="beranda" href="#">Beranda</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-sm py-space-xs rounded-full transition-all"
                    data-path="tentang-kami" href="#">Tentang Kami</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-sm py-space-xs rounded-full transition-all"
                    data-path="program" href="#">Program</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-sm py-space-xs rounded-full transition-all"
                    data-path="kegiatan" href="#">Kegiatan</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-sm py-space-xs rounded-full transition-all"
                    data-path="cerita-kami" href="#">Cerita Kami</a><a
                    class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high px-space-sm py-space-xs rounded-full transition-all"
                    data-path="kontak" href="#">Kontak</a>
            </nav>
            <div class="flex items-center gap-space-sm"><a
                    class="hidden sm:inline-flex items-center justify-center font-label-lg text-label-lg bg-secondary text-on-secondary px-space-lg py-space-sm rounded-full shadow-[0_2px_8px_rgba(161,62,40,0.25)] hover:bg-secondary-container hover:text-on-secondary-container transition-all"
                    data-path="gabung-komunitas" href="#">Gabung Bersama Kami</a>
                <div class="flex items-center gap-space-xs pl-space-xs"><img alt="Profile"
                        class="w-8 h-8 rounded-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlDgDF3UZJEuAkJy1We6L7TsBztJKORIPw6U2Z8QHh0C61rZaGR-LYpGNO7sY8qZ5N2BvV2TaCu1p6JVLyR0RCpzgIrP7O799PhCwFsrPchAtmJcEOO8qh5BkLkAxFLSpIw5VRdbDov9jhN7FVFWtYoAjOtd32B2zRwYVcrykF7flE2SdKFzDwk_WYz5FGy30-QHWkpRge8DL0_ealXDgkTS9fVL7gvU6m1zz9IuUSjpcMbg8oI5cy5ygynQe1ptCzVg"><button
                        aria-label="Buka Menu Navigasi"
                        class="lg:hidden p-space-xs text-on-surface-variant hover:text-on-surface rounded-lg hover:bg-surface-container-high transition-colors"
                        type="button"><span class="material-symbols-outlined text-2xl">menu</span></button></div>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-background min-h-screen">
        <div class="flex flex-col w-full">
            <!-- HERO SECTION -->
            <section
                class="relative w-full overflow-hidden px-margin-mobile lg:px-margin pt-space-md lg:pt-space-xl pb-space-xl lg:pb-32 bg-surface">
                <!-- Ambient Botanic Decorative Gradients -->
                <div
                    class="absolute -top-32 -right-24 w-96 h-96 rounded-full bg-primary-fixed/30 blur-3xl pointer-events-none">
                </div>
                <div
                    class="absolute top-1/2 -left-32 w-80 h-80 rounded-full bg-secondary-container/20 blur-3xl pointer-events-none">
                </div>
                <div
                    class="max-w-[1280px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center relative z-10">
                    <!-- Left Column: Copy & Actions -->
                    <div class="lg:col-span-7 flex flex-col items-start gap-space-md">
                        <!-- Botanical Badge -->
                        <div
                            class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-primary/10 text-primary shadow-sm backdrop-blur-sm">
                            <span class="material-symbols-outlined text-lg text-primary">eco</span>
                            <span class="font-label-md text-label-md tracking-wide">Ruang Bertumbuh Anak Muda</span>
                        </div>
                        <!-- Big Impactful Headline -->
                        <h1
                            class="font-display-lg text-display-lg-mobile lg:text-display-lg text-on-surface tracking-tight leading-[1.15]">
                            Tempat untuk <span class="text-primary italic font-headline-lg font-serif">Bertumbuh</span>,
                            <span class="text-secondary font-headline-lg font-serif">Berani</span>, dan <span
                                class="text-primary-container font-headline-lg font-serif">Berdampak</span>.
                        </h1>
                        <!-- Subheadline -->
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
                            Taman Seiring adalah ruang bagi anak muda untuk belajar, berkembang, menemukan keberanian,
                            membangun relasi positif, dan menciptakan dampak nyata bersama.
                        </p>
                        <!-- CTAs & Trust Badges -->
                        <div class="flex flex-wrap items-center gap-space-md pt-space-xs w-full sm:w-auto">
                            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs font-label-lg text-label-lg bg-secondary text-on-secondary px-space-xl py-space-md rounded-full shadow-lg shadow-secondary/25 hover:bg-secondary-container hover:text-on-secondary-container hover:scale-[1.02] active:scale-[0.98] transition-all duration-200"
                                href="#gabung">
                                <span class="">Gabung Taman Seiring</span>
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </a>
                            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs font-label-lg text-label-lg bg-surface-container-high text-on-surface hover:bg-surface-container-highest px-space-lg py-space-md rounded-full shadow-sm transition-all duration-200"
                                href="#tentang-kami">
                                <span class="material-symbols-outlined text-primary text-xl">play_circle</span>
                                <span class="">Kenali Komunitas Kami</span>
                            </a>
                        </div>
                        <!-- Metric Avatar Stack Social Proof -->
                        <div class="flex items-center gap-space-md pt-space-md">
                            <div class="flex -space-x-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-container text-primary-fixed flex items-center justify-center shadow-md font-label-sm">
                                    TS</div>
                                <div
                                    class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-md font-label-sm">
                                    RP</div>
                                <div
                                    class="w-10 h-10 rounded-full bg-tertiary-container text-tertiary-fixed flex items-center justify-center shadow-md font-label-sm">
                                    DS</div>
                                <div
                                    class="w-10 h-10 rounded-full bg-surface-container-highest text-primary flex items-center justify-center shadow-md font-label-sm">
                                    +500</div>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center text-amber-600">
                                    <span class="material-symbols-outlined text-sm"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-sm"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-sm"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-sm"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-sm"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">98% merasa
                                    lebih percaya diri &amp; punya support circle</span>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Organic Visual Hero Frame -->
                    <div class="lg:col-span-5 relative mt-6 lg:mt-0">
                        <div class="relative mx-auto max-w-lg lg:max-w-none">
                            <!-- Background Organic Pod Glow -->
                            <div
                                class="absolute inset-0 bg-primary/10 rounded-3xl transform rotate-3 scale-105 filter blur-lg">
                            </div>
                            <!-- Main Hero Image Frame -->
                            <div
                                class="relative rounded-3xl overflow-hidden shadow-2xl bg-surface-container-high aspect-[4/3] lg:aspect-[5/4]">
                                <img alt="Anak muda Taman Seiring berdiskusi santai di greenhouse kafe yang hangat dan asri"
                                    class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700 ease-out"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKoYSqJNZ-dOSIEdCgUIFsYowdSocJ1ZXhnzcFtN0tbK0t2jffPjUYXrfwD2HpFUR7LyBQ30S90d_aMzZpIXQRhEtGqKb24pUmVuenLmjXid10TTQl3g49OyeKBWQOfLV5tynxBCN2fc8Or6a1hxcCj8a4h8BvI30ddRBMgcXh1uGFtZDgmJQ7iVVzH3OWpd7ZI2obAWEd9V2WXlFXEc-tFXArTRLaAwWhD_TS95Im3ekYhd0Y6YFp">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent">
                                </div>
                                <div
                                    class="absolute bottom-4 left-4 right-4 p-space-sm rounded-2xl bg-surface/90 backdrop-blur-md shadow-md flex items-center justify-between">
                                    <div class="flex items-center gap-space-xs">
                                        <span
                                            class="material-symbols-outlined text-secondary text-2xl">local_cafe</span>
                                        <span class="font-label-md text-label-md text-on-surface">Community Space
                                            Meetup</span>
                                    </div>
                                    <span
                                        class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-primary-fixed text-primary font-bold">Aktif
                                        Tiap Minggu</span>
                                </div>
                            </div>
                            <!-- Floating Badge 1 (Top Left) -->
                            <div class="absolute -top-4 -left-4 sm:-left-6 bg-surface-container-lowest/95 backdrop-blur-md px-space-md py-space-sm rounded-2xl shadow-xl flex items-center gap-space-xs animate-bounce"
                                style="animation-duration: 4s;">
                                <div
                                    class="w-8 h-8 rounded-full bg-secondary-container/40 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-lg">auto_awesome</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Lingkungan
                                        Nyaman</span>
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">100%
                                        Suportif</span>
                                </div>
                            </div>
                            <!-- Floating Badge 2 (Bottom Right) -->
                            <div
                                class="absolute -bottom-6 -right-4 sm:-right-6 bg-primary text-surface-container-lowest px-space-md py-space-sm rounded-2xl shadow-xl flex items-center gap-space-sm">
                                <div
                                    class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-primary-fixed">
                                    <span class="material-symbols-outlined text-lg">group</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-sm text-label-sm text-primary-fixed-dim">Sahabat Baru</span>
                                    <span class="font-label-md text-label-md font-bold">500+ Pemuda</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- QUICK HIGHLIGHT CARDS -->
            <section class="w-full bg-surface-container-low py-space-xl px-margin-mobile lg:px-margin">
                <div class="max-w-[1280px] mx-auto">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                        <!-- Card 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col gap-space-xs group">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-space-xs group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                <span class="material-symbols-outlined text-2xl">record_voice_over</span>
                            </div>
                            <h2 class="font-title-md text-title-md text-on-surface font-semibold">Belajar Komunikasi
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Latihan bicara santai, public speaking bebas grogi, tanpa rasa takut dihakimi.
                            </p>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col gap-space-xs group">
                            <div
                                class="w-12 h-12 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center mb-space-xs group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                                <span class="material-symbols-outlined text-2xl">psychology_alt</span>
                            </div>
                            <h2 class="font-title-md text-title-md text-on-surface font-semibold">Bertumbuh Karakter
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Mengenal potensi diri, membedah mindset, dan menemukan versi terbaikmu bersama.
                            </p>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col gap-space-xs group">
                            <div
                                class="w-12 h-12 rounded-xl bg-tertiary-fixed-dim/30 text-tertiary flex items-center justify-center mb-space-xs group-hover:bg-tertiary group-hover:text-on-tertiary transition-colors">
                                <span class="material-symbols-outlined text-2xl">verified</span>
                            </div>
                            <h2 class="font-title-md text-title-md text-on-surface font-semibold">Berani Percaya Diri
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Dari ragu dan canggung menjadi berani mengambil inisiatif serta langkah pertama.
                            </p>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 flex flex-col gap-space-xs group">
                            <div
                                class="w-12 h-12 rounded-xl bg-primary-container text-primary-fixed flex items-center justify-center mb-space-xs group-hover:bg-primary-container/80 transition-colors">
                                <span class="material-symbols-outlined text-2xl">diversity_1</span>
                            </div>
                            <h2 class="font-title-md text-title-md text-on-surface font-semibold">Berdampak Nyata</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Mengubah obrolan hangat menjadi aksi sosial dan karya yang membawa kebaikan luas.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- TENTANG TAMAN SEIRING -->
            <section class="w-full py-space-xl lg:py-32 px-margin-mobile lg:px-margin bg-surface" id="tentang-kami">
                <div class="max-w-[1280px] mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
                        <!-- Image with organic shape -->
                        <div class="lg:col-span-6 relative order-2 lg:order-1">
                            <div
                                class="relative rounded-3xl overflow-hidden shadow-xl aspect-[4/3] bg-surface-container-high">
                                <img alt="Anak muda perempuan tersenyum percaya diri berbicara di hadapan teman sebaya di ruangan penuh tanaman"
                                    class="w-full h-full object-cover"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7YS-isiKPVH9aESMCYTwg-oNkKFLpehYqtQ3Kpo1rzrQ-eURxJNfYGVVdDdWq2-qn2qopKtrZ7ziUgBFEfXbXOGky76arzsOS0hQ1PROAWn3VETpfglhURWL4yoHkfIF6U0QGkkCwks06EVpQv6WOIFtuPFSWPQA4UHhSvQkjYgrAFzuaJoi5ZY4jnMe_HemCdii_xCopvsJUzPnXjOXD-YwIamRXX9yC9fn1rhOsuA0Porkepieb">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-primary/50 via-transparent to-transparent">
                                </div>
                            </div>
                            <!-- Corner Milestone Card -->
                            <div
                                class="absolute -bottom-8 -left-4 sm:left-6 bg-surface-container-lowest p-space-md rounded-2xl shadow-lg flex items-center gap-space-md max-w-xs">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-primary font-bold text-headline-sm">
                                    🌱
                                </div>
                                <div>
                                    <p class="font-label-sm text-label-sm text-on-surface-variant">Filosofi Nama</p>
                                    <p class="font-title-md text-title-md text-on-surface leading-snug">Seiring
                                        Melangkah, Tumbuh Bersama</p>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="lg:col-span-6 flex flex-col gap-space-md order-1 lg:order-2">
                            <div class="inline-flex items-center gap-space-xs text-primary font-label-md">
                                <span class="material-symbols-outlined text-base">eco</span>
                                <span class="tracking-widest uppercase">Tentang Kami</span>
                            </div>
                            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">
                                Karena Bertumbuh Lebih Seru Jika Tidak Sendirian.
                            </h2>
                            <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                Taman Seiring hadir sebagai ruang aman dan positif bagi anak muda untuk mengenal potensi
                                dirinya, belajar berkomunikasi, membangun keberanian, dan tumbuh bersama orang-orang
                                yang saling mendukung.
                            </p>
                            <!-- Interactive Stat Counters -->
                            <div class="grid grid-cols-2 gap-space-md pt-space-xs">
                                <div class="bg-surface-container p-space-md rounded-2xl flex flex-col">
                                    <span class="font-display-lg text-headline-lg text-primary font-bold">500+</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Anggota
                                        Aktif</span>
                                </div>
                                <div class="bg-surface-container p-space-md rounded-2xl flex flex-col">
                                    <span class="font-display-lg text-headline-lg text-secondary font-bold">48+</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Kegiatan
                                        Terlaksana</span>
                                </div>
                                <div class="bg-surface-container p-space-md rounded-2xl flex flex-col">
                                    <span
                                        class="font-display-lg text-headline-lg text-tertiary-container font-bold">5</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Program
                                        Unggulan</span>
                                </div>
                                <div class="bg-surface-container p-space-md rounded-2xl flex flex-col">
                                    <span class="font-display-lg text-headline-lg text-primary font-bold">98%</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Lebih Percaya
                                        Diri</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- VISI & MISI SECTION -->
            <section class="w-full py-space-xl lg:py-24 px-margin-mobile lg:px-margin bg-surface-container">
                <div class="max-w-[1280px] mx-auto">
                    <div class="text-center max-w-2xl mx-auto mb-space-xl flex flex-col items-center gap-space-xs">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-primary">Arah Perjalanan
                            Kami</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">Visi
                            &amp; Misi Komunitas</h2>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-stretch">
                        <!-- Left: Visi Card (Botanical Anchor) -->
                        <div
                            class="lg:col-span-5 bg-primary text-surface-container-lowest p-space-xl rounded-3xl flex flex-col justify-between shadow-lg relative overflow-hidden">
                            <div
                                class="absolute -right-8 -bottom-8 w-44 h-44 rounded-full bg-primary-container/40 pointer-events-none">
                            </div>
                            <div class="flex flex-col gap-space-md relative z-10">
                                <div
                                    class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded-full bg-primary-container text-primary-fixed font-label-sm w-max">
                                    <span class="material-symbols-outlined text-sm">visibility</span>
                                    <span class="">Pilar Utama</span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-surface-bright">Visi Kami</h3>
                                <blockquote
                                    class="font-headline-lg text-headline-sm lg:text-headline-md font-serif italic text-primary-fixed leading-snug">
                                    “Menjadi ruang bertumbuh bagi anak muda untuk menjadi pribadi yang unggul, percaya
                                    diri, berani, dan berdampak.”
                                </blockquote>
                            </div>
                            <div class="pt-space-xl flex items-center gap-space-sm relative z-10">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold">
                                    <span class="material-symbols-outlined text-xl">favorite</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-primary-fixed-dim">Setiap langkah
                                    diayunkan bersama dengan cinta &amp; kepedulian.</span>
                            </div>
                        </div>
                        <!-- Right: 5 Misi Nyata -->
                        <div class="lg:col-span-7 flex flex-col gap-space-sm justify-between">
                            <div class="flex items-center justify-between pb-space-xs">
                                <h3
                                    class="font-title-md text-title-md text-on-surface font-bold flex items-center gap-space-xs">
                                    <span class="material-symbols-outlined text-secondary text-2xl">checklist</span>
                                    <span class="">5 Misi Nyata Taman Seiring</span>
                                </h3>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Langkah terukur &amp;
                                    konsisten</span>
                            </div>
                            <!-- Misi 1 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm hover:shadow-md hover:bg-surface-bright transition-all flex items-center gap-space-md">
                                <span
                                    class="font-display-lg text-headline-md text-secondary font-black opacity-80 min-w-[2.5rem]">01</span>
                                <div class="flex items-center gap-space-sm flex-1">
                                    <span
                                        class="material-symbols-outlined text-primary text-xl hidden sm:inline-block">forum</span>
                                    <p class="font-body-md text-body-md text-on-surface">Meningkatkan kemampuan
                                        komunikasi dan public speaking secara praktis dan interaktif.</p>
                                </div>
                            </div>
                            <!-- Misi 2 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm hover:shadow-md hover:bg-surface-bright transition-all flex items-center gap-space-md">
                                <span
                                    class="font-display-lg text-headline-md text-secondary font-black opacity-80 min-w-[2.5rem]">02</span>
                                <div class="flex items-center gap-space-sm flex-1">
                                    <span
                                        class="material-symbols-outlined text-primary text-xl hidden sm:inline-block">rocket_launch</span>
                                    <p class="font-body-md text-body-md text-on-surface">Membangun kepercayaan diri dan
                                        keberanian anak muda mengekspresikan diri.</p>
                                </div>
                            </div>
                            <!-- Misi 3 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm hover:shadow-md hover:bg-surface-bright transition-all flex items-center gap-space-md">
                                <span
                                    class="font-display-lg text-headline-md text-secondary font-black opacity-80 min-w-[2.5rem]">03</span>
                                <div class="flex items-center gap-space-sm flex-1">
                                    <span
                                        class="material-symbols-outlined text-primary text-xl hidden sm:inline-block">workspace_premium</span>
                                    <p class="font-body-md text-body-md text-on-surface">Mengembangkan potensi,
                                        karakter, dan kepemimpinan adaptif bagi anak muda.</p>
                                </div>
                            </div>
                            <!-- Misi 4 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm hover:shadow-md hover:bg-surface-bright transition-all flex items-center gap-space-md">
                                <span
                                    class="font-display-lg text-headline-md text-secondary font-black opacity-80 min-w-[2.5rem]">04</span>
                                <div class="flex items-center gap-space-sm flex-1">
                                    <span
                                        class="material-symbols-outlined text-primary text-xl hidden sm:inline-block">handshake</span>
                                    <p class="font-body-md text-body-md text-on-surface">Menciptakan lingkungan
                                        pertemanan yang positif dan saling mendukung tanpa cela.</p>
                                </div>
                            </div>
                            <!-- Misi 5 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm hover:shadow-md hover:bg-surface-bright transition-all flex items-center gap-space-md">
                                <span
                                    class="font-display-lg text-headline-md text-secondary font-black opacity-80 min-w-[2.5rem]">05</span>
                                <div class="flex items-center gap-space-sm flex-1">
                                    <span
                                        class="material-symbols-outlined text-primary text-xl hidden sm:inline-block">public</span>
                                    <p class="font-body-md text-body-md text-on-surface">Mengajak anak muda untuk
                                        berkarya dan memberikan dampak nyata bagi sekitar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PROGRAM KAMI -->
            <section class="w-full py-space-xl lg:py-32 px-margin-mobile lg:px-margin bg-surface" id="program">
                <div class="max-w-[1280px] mx-auto flex flex-col gap-space-xl">
                    <!-- Section Header -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                        <div class="flex flex-col gap-space-xs max-w-xl">
                            <div
                                class="inline-flex items-center gap-space-xs text-secondary font-label-md uppercase tracking-wider">
                                <span class="material-symbols-outlined text-base">explore</span>
                                <span class="">Program Kami</span>
                            </div>
                            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">
                                Tumbuh Lewat Pengalaman Nyata
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Pilihan program dirancang menyenangkan, aplikatif, dan berfokus pada perkembangan diri
                                yang berkelanjutan.
                            </p>
                        </div>
                        <a class="inline-flex items-center gap-space-xs text-primary font-label-lg hover:underline underline-offset-4"
                            href="#gabung">
                            <span class="">Lihat Jadwal Terdekat</span>
                            <span class="material-symbols-outlined text-base">calendar_month</span>
                        </a>
                    </div>
                    <!-- 5 Comprehensive Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">
                        <!-- Program 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-secondary/15 text-secondary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-2xl">mic</span>
                                    </div>
                                    <span
                                        class="px-space-sm py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm">Fokus
                                        Utama</span>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-secondary transition-colors">
                                        Public Speaking &amp; Komunikasi</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        Latihan berbicara, presentasi, storytelling, dan menyampaikan ide dengan percaya
                                        diri di depan umum tanpa rasa gugup berlebih.
                                    </p>
                                </div>
                                <ul
                                    class="flex flex-col gap-1 font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Vocal drill &amp; olah vokal</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Storytelling framework</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Simulasi panggung langsung</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-space-lg">
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-secondary hover:translate-x-1 transition-transform"
                                    href="#gabung">
                                    <span class="">Pelajari Lebih Lanjut</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Program 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-2xl">self_improvement</span>
                                    </div>
                                    <span
                                        class="px-space-sm py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm">Personal
                                        Growth</span>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-primary transition-colors">
                                        Personal Development</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        Mengenal diri, membangun mindset positif, mengatasi overthinking, meningkatkan
                                        kepercayaan diri, dan mengembangkan potensi sejati.
                                    </p>
                                </div>
                                <ul
                                    class="flex flex-col gap-1 font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Self-awareness mapping</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Emotional regulation</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Habit building tracking</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-space-lg">
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary hover:translate-x-1 transition-transform"
                                    href="#gabung">
                                    <span class="">Pelajari Lebih Lanjut</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Program 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-tertiary-fixed-dim/30 text-tertiary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-2xl">military_tech</span>
                                    </div>
                                    <span
                                        class="px-space-sm py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm">Leadership</span>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-tertiary transition-colors">
                                        Leadership &amp; Collaboration</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        Melatih kemampuan memimpin secara empatik, kerja sama kelompok, manajemen
                                        konflik, dan pengambilan keputusan yang bertanggung jawab.
                                    </p>
                                </div>
                                <ul
                                    class="flex flex-col gap-1 font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Servant leadership</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Team problem solving</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Leadership simulation camp</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-space-lg">
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-tertiary hover:translate-x-1 transition-transform"
                                    href="#gabung">
                                    <span class="">Pelajari Lebih Lanjut</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Program 4 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between group">
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-secondary-container/30 text-on-secondary-container flex items-center justify-center">
                                        <span class="material-symbols-outlined text-2xl">groups_3</span>
                                    </div>
                                    <span
                                        class="px-space-sm py-1 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm">Networking</span>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <h3
                                        class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-secondary transition-colors">
                                        Community Gathering</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        Membangun pertemanan hangat, networking lintas latar belakang, dan menciptakan
                                        lingkungan safe space yang saling menjaga.
                                    </p>
                                </div>
                                <ul
                                    class="flex flex-col gap-1 font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Botanical cafe deep talk</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Boardgame &amp; ice-breaking</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                        <span class="">Circle peer mentoring</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-space-lg">
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-secondary hover:translate-x-1 transition-transform"
                                    href="#gabung">
                                    <span class="">Pelajari Lebih Lanjut</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Program 5 (Spans 2 cols on lg for Bento rhythm) -->
                        <div
                            class="md:col-span-2 bg-gradient-to-br from-primary-container to-primary text-surface-container-lowest p-space-xl rounded-3xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-primary-fixed text-primary flex items-center justify-center">
                                        <span class="material-symbols-outlined text-2xl">volunteer_activism</span>
                                    </div>
                                    <span
                                        class="px-space-sm py-1 rounded-full bg-primary/40 text-primary-fixed-dim font-label-sm">Berdampak
                                        Nyata</span>
                                </div>
                                <div class="flex flex-col gap-space-xs max-w-xl">
                                    <h3 class="font-headline-sm text-headline-sm text-surface-bright font-semibold">
                                        Creative &amp; Social Project</h3>
                                    <p class="font-body-sm text-body-sm text-surface-dim leading-relaxed">
                                        Mengubah ide kreatif menjadi aksi sosial nyata: mulai dari workshop pemberdayaan
                                        adik asuh, aksi hijau lingkungan kota, hingga kampanye kesehatan mental di media
                                        sosial.
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-sm pt-space-xs">
                                    <div class="p-space-sm rounded-xl bg-primary/30">
                                        <span class="font-label-sm text-label-sm text-primary-fixed-dim block">Tahun
                                            Ini</span>
                                        <span class="font-title-md text-title-md font-bold text-surface-bright">12
                                            Project</span>
                                    </div>
                                    <div class="p-space-sm rounded-xl bg-primary/30">
                                        <span class="font-label-sm text-label-sm text-primary-fixed-dim block">Penerima
                                            Manfaat</span>
                                        <span class="font-title-md text-title-md font-bold text-surface-bright">1.400+
                                            Jiwa</span>
                                    </div>
                                    <div class="p-space-sm rounded-xl bg-primary/30">
                                        <span
                                            class="font-label-sm text-label-sm text-primary-fixed-dim block">Kolaborasi
                                            Mitra</span>
                                        <span class="font-title-md text-title-md font-bold text-surface-bright">20+
                                            Komunitas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-space-lg flex items-center justify-between">
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary-fixed hover:text-surface-bright transition-colors"
                                    href="#gabung">
                                    <span class="">Ikut Proyek Sosial Berikutnya</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                                <span
                                    class="material-symbols-outlined text-primary-fixed-dim text-3xl opacity-50">yard</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- KEGIATAN & GALERI FOTO INTERAKTIF -->
            <section class="w-full py-space-xl lg:py-28 px-margin-mobile lg:px-margin bg-surface-container-low"
                id="kegiatan">
                <div class="max-w-[1280px] mx-auto flex flex-col gap-space-lg">
                    <!-- Section Title & Filter Tabs -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md">
                        <div>
                            <span class="font-label-md text-label-md uppercase tracking-wider text-primary">Dokumentasi
                                Moment</span>
                            <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">
                                Cerita yang Kami Tumbuhkan Bersama</h2>
                        </div>
                        <!-- Filter Tabs -->
                        <div class="flex flex-wrap items-center gap-space-xs bg-surface-container-high p-1.5 rounded-full"
                            id="gallery-filters">
                            <button
                                class="gallery-tab active font-label-md text-label-md px-space-md py-space-xs rounded-full bg-primary text-on-primary transition-all"
                                data-filter="all" type="button">Semua</button>
                            <button
                                class="gallery-tab font-label-md text-label-md px-space-md py-space-xs rounded-full text-on-surface-variant hover:text-on-surface transition-all"
                                data-filter="workshop" type="button">Workshop</button>
                            <button
                                class="gallery-tab font-label-md text-label-md px-space-md py-space-xs rounded-full text-on-surface-variant hover:text-on-surface transition-all"
                                data-filter="gathering" type="button">Gathering</button>
                            <button
                                class="gallery-tab font-label-md text-label-md px-space-md py-space-xs rounded-full text-on-surface-variant hover:text-on-surface transition-all"
                                data-filter="social" type="button">Social Project</button>
                            <button
                                class="gallery-tab font-label-md text-label-md px-space-md py-space-xs rounded-full text-on-surface-variant hover:text-on-surface transition-all"
                                data-filter="outdoor" type="button">Outdoor</button>
                        </div>
                    </div>
                    <!-- Masonry Gallery Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-space-md" id="gallery-grid">
                        <!-- Item 1: Workshop (Image 3) -->
                        <div class="gallery-item group relative rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] bg-surface-container-high cursor-pointer"
                            data-category="workshop"
                            onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuA7YS-isiKPVH9aESMCYTwg-oNkKFLpehYqtQ3Kpo1rzrQ-eURxJNfYGVVdDdWq2-qn2qopKtrZ7ziUgBFEfXbXOGky76arzsOS0hQ1PROAWn3VETpfglhURWL4yoHkfIF6U0QGkkCwks06EVpQv6WOIFtuPFSWPQA4UHhSvQkjYgrAFzuaJoi5ZY4jnMe_HemCdii_xCopvsJUzPnXjOXD-YwIamRXX9yC9fn1rhOsuA0Porkepieb', 'Workshop Public Speaking: Find Your Voice', 'Sesi intensif melatih ekspresi dan artikulasi pesan bersama teman sebaya tanpa rasa takut.')">
                            <img alt="Workshop Public Speaking Find Your Voice di Taman Seiring"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7YS-isiKPVH9aESMCYTwg-oNkKFLpehYqtQ3Kpo1rzrQ-eURxJNfYGVVdDdWq2-qn2qopKtrZ7ziUgBFEfXbXOGky76arzsOS0hQ1PROAWn3VETpfglhURWL4yoHkfIF6U0QGkkCwks06EVpQv6WOIFtuPFSWPQA4UHhSvQkjYgrAFzuaJoi5ZY4jnMe_HemCdii_xCopvsJUzPnXjOXD-YwIamRXX9yC9fn1rhOsuA0Porkepieb">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest">
                                <span
                                    class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary text-on-secondary mb-1 inline-block">Workshop</span>
                                <h4 class="font-title-md text-title-md font-bold">Public Speaking: Find Your Voice</h4>
                                <p class="font-body-sm text-body-sm text-surface-dim line-clamp-1">Belajar berbicara
                                    dari hati dengan audiens yang suportif.</p>
                            </div>
                        </div>
                        <!-- Item 2: Gathering (Image 4) -->
                        <div class="gallery-item group relative rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] bg-surface-container-high cursor-pointer"
                            data-category="gathering"
                            onclick="openLightbox('https://lh3.googleusercontent.com/aida-public/AB6AXuCKoYSqJNZ-dOSIEdCgUIFsYowdSocJ1ZXhnzcFtN0tbK0t2jffPjUYXrfwD2HpFUR7LyBQ30S90d_aMzZpIXQRhEtGqKb24pUmVuenLmjXid10TTQl3g49OyeKBWQOfLV5tynxBCN2fc8Or6a1hxcCj8a4h8BvI30ddRBMgcXh1uGFtZDgmJQ7iVVzH3OWpd7ZI2obAWEd9V2WXlFXEc-tFXArTRLaAwWhD_TS95Im3ekYhd0Y6YFp', 'Greenhouse Deep Talk &amp; Connection', 'Obrolan bermakna di kafe asri yang membuka ruang hati untuk saling mendengar dan bertukar pandangan hidup.')">
                            <img alt="Greenhouse Gathering and Deep Talk Taman Seiring"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKoYSqJNZ-dOSIEdCgUIFsYowdSocJ1ZXhnzcFtN0tbK0t2jffPjUYXrfwD2HpFUR7LyBQ30S90d_aMzZpIXQRhEtGqKb24pUmVuenLmjXid10TTQl3g49OyeKBWQOfLV5tynxBCN2fc8Or6a1hxcCj8a4h8BvI30ddRBMgcXh1uGFtZDgmJQ7iVVzH3OWpd7ZI2obAWEd9V2WXlFXEc-tFXArTRLaAwWhD_TS95Im3ekYhd0Y6YFp">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest">
                                <span
                                    class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-primary text-primary-fixed mb-1 inline-block">Gathering</span>
                                <h4 class="font-title-md text-title-md font-bold">Greenhouse Deep Talk</h4>
                                <p class="font-body-sm text-body-sm text-surface-dim line-clamp-1">Membangun koneksi
                                    hangat tanpa sekat formalitas.</p>
                            </div>
                        </div>
                        <!-- Item 3: Social Project -->
                        <div class="gallery-item group relative rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] bg-surface-container-high cursor-pointer"
                            data-category="social"
                            onclick="openLightbox('placeholder', 'Aksi Sebar Literasi &amp; Taman Baca', 'Relawan anak muda Taman Seiring menata rak buku dan mendongeng bersama anak-anak di pinggir kota.')">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="A vibrant photo of Indonesian youth volunteers sitting on the floor with underprivileged children in an urban community library, reading colorful books together with joy and laughter, warm sunlight streaming through open wooden windows, indoor plants in terracotta pots around them, natural warm cream and botanical green aesthetics"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIED_ia8Sese5OAurmq20UeSXp5In0YLLSCWLUg99UEKQfpNXo0heJt1sC4zcGLOdgE6q_ZeUTgatSmJnIX6YGDEId8l9dxKcf7Jg7Viby7f5O3b5vF5uxGXNEy6Qe9K_N5bN8XX0A83GPx1j5nGjS4nR5kS6iyDKF__TXuQNxOkf3sA7_od-DuGX5QaZKwWtIkjpAMFdetX1B4eCR8qe06NsufspMhpTQJR7pZscCn-cldL1o1nJw">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest">
                                <span
                                    class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-tertiary text-tertiary-fixed mb-1 inline-block">Social
                                    Project</span>
                                <h4 class="font-title-md text-title-md font-bold">Aksi Sebar Literasi</h4>
                                <p class="font-body-sm text-body-sm text-surface-dim line-clamp-1">Menyalurkan ratusan
                                    buku dan mendampingi adik binaan.</p>
                            </div>
                        </div>
                        <!-- Item 4: Outdoor / Bootcamp -->
                        <div class="gallery-item group relative rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] bg-surface-container-high cursor-pointer"
                            data-category="outdoor"
                            onclick="openLightbox('placeholder', 'Leadership Camp: Harmoni Alam', 'Kegiatan outdoor leadership di lereng bukit pinus, melatih ketangguhan mental dan kerja tim secara nyata.')">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="Indonesian young men and women in casual outdoor adventure clothing doing a collaborative leadership team building circle exercise under pine trees in a mountain camp in West Java, laughing while solving a rope challenge, warm golden hour ambient lighting, lush green foliage and warm earthy colors"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhnPMZnCD2uhil27vRs4UCbdMMnCpRAeHdnqLBOske_xpI_UCIos3QotaDZcJJU65uwEuBVhMjD8I8Quqh80vFdIiTwQHrVlGBoTAnrtKNXtOkt7uUYLMump5GV1_fFPiLZRZnhkUgsE41fubPm4FfWHi5s608gegVgy7_W0sIIAvslyv6UJ6II4tImD87PO3z_pHM_6bGOD9FLIs2W_aTXJX0p2TY8yzQaTOxaLm_Eb3I3y8tZ-uD">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest">
                                <span
                                    class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-primary-container text-primary-fixed mb-1 inline-block">Outdoor</span>
                                <h4 class="font-title-md text-title-md font-bold">Leadership Camp di Alam</h4>
                                <p class="font-body-sm text-body-sm text-surface-dim line-clamp-1">Menempa kepemimpinan
                                    tangguh di tengah rindangnya alam.</p>
                            </div>
                        </div>
                        <!-- Item 5: Workshop / Storytelling Circle -->
                        <div class="gallery-item group relative rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] bg-surface-container-high cursor-pointer"
                            data-category="workshop"
                            onclick="openLightbox('placeholder', 'Storytelling Night &amp; Peer Circle', 'Malam berbagi cerita personal bertemakan mengatasi kegagalan dan memulai lembaran baru dengan penuh harapan.')">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="An intimate cozy evening circle of university students and young professionals sitting on floor cushions around warm fairy lights, a young man passionately sharing a life reflection while others listen empathetically with warm tea mugs in hand, warm cream aesthetic interior with monstera plants"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBu9yNUTk1EtfqhVbGPSK855kh5EmutdTqZd0Wkg0gI6vRZf-LoJbCtk7nZpRoTRDgO4wBgW0HTSePgOlqw61v5Bv94EGj6d0dvqlWrIU8ehYa_kufolWZzrpMG1Ze2kDLHfpuAxOEolk5tv04K86ImapI61G270BGU9RaoaMNaRaGKQ634wWZnq7D6fURWfTuOn23aQNybdy6u_Kt7Yj2BRm9EWoep_iRfcjykGH1S-GWQb9eKbDUp">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest">
                                <span
                                    class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-secondary text-on-secondary mb-1 inline-block">Workshop</span>
                                <h4 class="font-title-md text-title-md font-bold">Storytelling Night</h4>
                                <p class="font-body-sm text-body-sm text-surface-dim line-clamp-1">Membagikan cerita
                                    jatuh-bangun dalam lingkaran yang aman.</p>
                            </div>
                        </div>
                        <!-- Item 6: Gathering / Fest -->
                        <div class="gallery-item group relative rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 aspect-[4/3] bg-surface-container-high cursor-pointer"
                            data-category="gathering"
                            onclick="openLightbox('placeholder', 'Teman Seiring Fest: Temu Akbar', 'Festival tahunan merayakan karya, musik akustik, talkshow, dan kolaborasi kreatif seluruh anggota se-Jabodetabek.')">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                data-alt="A lively community hall filled with creative young Indonesian creators at a community festival, display booths of creative works, small acoustic music stage with wooden decorations and hanging ferns, people smiling and holding reusable coffee cups, vibrant yet calm earthy warm ambiance"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmxDNzJ21SVgwK7hA7D0LUv_Y4MHc0ClpjYl1gL6Vn--hdwO4dyx61LZkKcakD1TD5trIbLa3tRKiOE_uAJYsaxa7uoZMLH4xe9IHr3ihbKu1R06goQOhsVFgmjMaxbGgfwCGhCEjdrqgM4t66fc4FRvXM22XvAADm6jEgI2rFis6Kcs27dnuShO74RjhMbiPXcW2n9mJ330yERU59xdGL3T38Iyr5fjASIPShAQvroyT2nW7Nw7EG">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-on-surface/80 via-transparent to-transparent opacity-90 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div class="absolute bottom-4 left-4 right-4 text-surface-container-lowest">
                                <span
                                    class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-primary text-primary-fixed mb-1 inline-block">Gathering</span>
                                <h4 class="font-title-md text-title-md font-bold">Teman Seiring Fest</h4>
                                <p class="font-body-sm text-body-sm text-surface-dim line-clamp-1">Merayakan karya, ide,
                                    dan pertemanan yang tumbuh bersama.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- LIGHTBOX MODAL (Interactive) -->
            <div class="fixed inset-0 z-50 bg-on-surface/80 backdrop-blur-md hidden items-center justify-center p-margin-mobile"
                id="gallery-lightbox">
                <div class="bg-surface rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl relative">
                    <button
                        class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center hover:bg-surface-container-highest transition-colors"
                        onclick="closeLightbox()">
                        <span class="material-symbols-outlined text-xl">close</span>
                    </button>
                    <div class="aspect-[16/10] bg-surface-container-high overflow-hidden">
                        <img alt="Detail Kegiatan" class="w-full h-full object-cover" id="lightbox-img" src="">
                    </div>
                    <div class="p-space-lg flex flex-col gap-space-xs">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold" id="lightbox-title">
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant" id="lightbox-desc"></p>
                    </div>
                </div>
            </div>
            <!-- NILAI-NILAI TAMAN SEIRING -->
            <section class="w-full py-space-xl lg:py-32 px-margin-mobile lg:px-margin bg-surface">
                <div class="max-w-[1280px] mx-auto flex flex-col gap-space-xl">
                    <div class="text-center max-w-xl mx-auto flex flex-col gap-space-xs">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-secondary">Fondasi
                            Nilai</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">Apa
                            yang Kami Percayai</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Lima prinsip utama yang menjaga
                            komunitas ini tetap hangat, jujur, dan berenergi positif.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-space-md">
                        <!-- Nilai 1 -->
                        <div
                            class="bg-surface-container p-space-lg rounded-2xl flex flex-col items-center text-center gap-space-sm hover:bg-surface-container-high transition-colors">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center text-3xl">
                                🌱
                            </div>
                            <h3 class="font-headline-sm text-title-md font-bold text-on-surface">Bertumbuh</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Selalu terbuka untuk belajar, refleksi diri, dan berkembang setiap hari secara bertahap.
                            </p>
                        </div>
                        <!-- Nilai 2 -->
                        <div
                            class="bg-surface-container p-space-lg rounded-2xl flex flex-col items-center text-center gap-space-sm hover:bg-surface-container-high transition-colors">
                            <div
                                class="w-14 h-14 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center text-3xl">
                                🗣️
                            </div>
                            <h3 class="font-headline-sm text-title-md font-bold text-on-surface">Berani</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Berani menyampaikan ide, mencoba hal baru, dan melangkah keluar dari zona nyaman.
                            </p>
                        </div>
                        <!-- Nilai 3 -->
                        <div
                            class="bg-surface-container p-space-lg rounded-2xl flex flex-col items-center text-center gap-space-sm hover:bg-surface-container-high transition-colors">
                            <div
                                class="w-14 h-14 rounded-2xl bg-primary-container/20 text-primary-container flex items-center justify-center text-3xl">
                                🤝
                            </div>
                            <h3 class="font-headline-sm text-title-md font-bold text-on-surface">Seiring</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Tumbuh bersama dengan saling mendukung, mendengar tulus, tanpa saling menjatuhkan.
                            </p>
                        </div>
                        <!-- Nilai 4 -->
                        <div
                            class="bg-surface-container p-space-lg rounded-2xl flex flex-col items-center text-center gap-space-sm hover:bg-surface-container-high transition-colors">
                            <div
                                class="w-14 h-14 rounded-2xl bg-tertiary-fixed-dim/30 text-tertiary flex items-center justify-center text-3xl">
                                💡
                            </div>
                            <h3 class="font-headline-sm text-title-md font-bold text-on-surface">Berkarya</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Mengubah gagasan di kepala menjadi karya nyata yang bermanfaat dan bermakna.
                            </p>
                        </div>
                        <!-- Nilai 5 -->
                        <div
                            class="bg-surface-container p-space-lg rounded-2xl flex flex-col items-center text-center gap-space-sm hover:bg-surface-container-high transition-colors">
                            <div
                                class="w-14 h-14 rounded-2xl bg-secondary-container/30 text-secondary flex items-center justify-center text-3xl">
                                🌍
                            </div>
                            <h3 class="font-headline-sm text-title-md font-bold text-on-surface">Berdampak</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Menyebarkan manfaat positif bagi sesama, masyarakat sekitar, dan lingkungan hidup.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- TESTIMONIALS SECTION -->
            <section class="w-full py-space-xl lg:py-28 px-margin-mobile lg:px-margin bg-surface-container-low">
                <div class="max-w-[1280px] mx-auto flex flex-col gap-space-xl">
                    <!-- Title -->
                    <div class="flex flex-col items-center text-center gap-space-xs max-w-xl mx-auto">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-primary">Cerita
                            Sahabat</span>
                        <h2 class="font-headline-lg text-headline-lg-mobile lg:text-headline-lg text-on-surface">Kata
                            Mereka Tentang Taman Seiring</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Kisah nyata dari kawan-kawan yang
                            telah berani mengambil langkah pertama.</p>
                    </div>
                    <!-- 3 Warm Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                        <!-- Quote 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm flex flex-col justify-between gap-space-lg hover:shadow-md transition-shadow">
                            <div class="flex flex-col gap-space-md">
                                <span class="material-symbols-outlined text-secondary text-4xl">format_quote</span>
                                <p class="font-body-md text-body-md text-on-surface leading-relaxed italic">
                                    “Di sini saya bukan cuma belajar public speaking, tapi juga belajar lebih percaya
                                    diri untuk menyampaikan apa yang saya pikirkan tanpa takut dihakimi.”
                                </p>
                            </div>
                            <div class="flex items-center gap-space-sm pt-space-xs border-t-0">
                                <div
                                    class="w-11 h-11 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold font-headline-sm">
                                    RP
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-title-md text-title-md font-bold text-on-surface">Rania P.</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Mahasiswi &amp;
                                        Member Batch 3</span>
                                </div>
                            </div>
                        </div>
                        <!-- Quote 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm flex flex-col justify-between gap-space-lg hover:shadow-md transition-shadow">
                            <div class="flex flex-col gap-space-md">
                                <span class="material-symbols-outlined text-primary text-4xl">format_quote</span>
                                <p class="font-body-md text-body-md text-on-surface leading-relaxed italic">
                                    “Menemukan circle pertemanan yang positif dan saling dukung itu langka banget. Di
                                    Taman Seiring, gue menemukan rumah kedua untuk bertumbuh.”
                                </p>
                            </div>
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <div
                                    class="w-11 h-11 rounded-full bg-primary-fixed text-primary flex items-center justify-center font-bold font-headline-sm">
                                    DS
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-title-md text-title-md font-bold text-on-surface">Dimas S.</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Creative Content
                                        Creator</span>
                                </div>
                            </div>
                        </div>
                        <!-- Quote 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-xl rounded-3xl shadow-sm flex flex-col justify-between gap-space-lg hover:shadow-md transition-shadow">
                            <div class="flex flex-col gap-space-md">
                                <span class="material-symbols-outlined text-tertiary text-4xl">format_quote</span>
                                <p class="font-body-md text-body-md text-on-surface leading-relaxed italic">
                                    “Dari yang awalnya gugup ngomong depan dua orang, sekarang berani pimpin diskusi tim
                                    kerja. Terima kasih mentor dan teman-teman Taman Seiring!”
                                </p>
                            </div>
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <div
                                    class="w-11 h-11 rounded-full bg-tertiary-fixed text-tertiary flex items-center justify-center font-bold font-headline-sm">
                                    SA
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-title-md text-title-md font-bold text-on-surface">Sarah A.</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Junior Product
                                        Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- IMMERSIVE CALL TO ACTION (CTA) -->
            <section class="w-full py-space-xl lg:py-28 px-margin-mobile lg:px-margin bg-surface" id="gabung">
                <div class="max-w-[1280px] mx-auto">
                    <div
                        class="relative bg-gradient-to-br from-primary via-primary-container to-primary text-surface-container-lowest rounded-3xl p-space-xl lg:p-20 overflow-hidden shadow-2xl">
                        <!-- Botanic Accent Circles -->
                        <div
                            class="absolute -top-24 -right-24 w-80 h-80 rounded-full bg-secondary-container/20 blur-2xl pointer-events-none">
                        </div>
                        <div
                            class="absolute -bottom-24 -left-24 w-80 h-80 rounded-full bg-primary-fixed/15 blur-2xl pointer-events-none">
                        </div>
                        <div
                            class="relative z-10 max-w-2xl mx-auto flex flex-col items-center text-center gap-space-md">
                            <div
                                class="w-16 h-16 rounded-full bg-primary-fixed/20 text-primary-fixed flex items-center justify-center">
                                <span class="material-symbols-outlined text-3xl">psychiatry</span>
                            </div>
                            <h2
                                class="font-display-lg text-display-lg-mobile lg:text-display-lg text-surface-bright leading-tight">
                                Siap Tumbuh Bersama?
                            </h2>
                            <p class="font-body-lg text-body-lg text-surface-dim leading-relaxed">
                                Tidak harus sudah percaya diri untuk bergabung. Datang, belajar, temukan keberanianmu,
                                dan tumbuh bersama di Taman Seiring.
                            </p>
                            <!-- Buttons -->
                            <div
                                class="flex flex-col sm:flex-row items-center gap-space-sm pt-space-xs w-full sm:w-auto">
                                <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs font-label-lg text-label-lg bg-secondary text-on-secondary px-space-xl py-space-md rounded-full shadow-lg hover:bg-secondary-container hover:text-on-secondary-container hover:scale-105 active:scale-95 transition-all duration-200"
                                    href="https://wa.me/" rel="noopener noreferrer" target="_blank">
                                    <span class="">Gabung Sekarang</span>
                                    <span class="material-symbols-outlined text-lg">arrow_forward</span>
                                </a>
                                <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs font-label-lg text-label-lg bg-surface/10 hover:bg-surface/20 text-surface-bright px-space-lg py-space-md rounded-full backdrop-blur-sm transition-all duration-200"
                                    href="https://wa.me/" rel="noopener noreferrer" target="_blank">
                                    <span class="material-symbols-outlined text-lg">chat</span>
                                    <span class="">Hubungi Kami via WhatsApp</span>
                                </a>
                            </div>
                            <!-- Perks Checklist -->
                            <div
                                class="flex flex-wrap items-center justify-center gap-space-md pt-space-md text-primary-fixed-dim font-label-sm text-label-sm">
                                <div class="flex items-center gap-1">
                                    <span
                                        class="material-symbols-outlined text-sm text-secondary-fixed">check_circle</span>
                                    <span class="">Tanpa seleksi rumit</span>
                                </div>
                                <span class="opacity-40">•</span>
                                <div class="flex items-center gap-1">
                                    <span
                                        class="material-symbols-outlined text-sm text-secondary-fixed">check_circle</span>
                                    <span class="">Komunitas suportif &amp; aman</span>
                                </div>
                                <span class="opacity-40">•</span>
                                <div class="flex items-center gap-1">
                                    <span
                                        class="material-symbols-outlined text-sm text-secondary-fixed">check_circle</span>
                                    <span class="">Mentor &amp; fasilitator berpengalaman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive JavaScript -->
            <script>
                // Gallery Filtering
                const tabs = document.querySelectorAll('.gallery-tab');
                const items = document.querySelectorAll('.gallery-item');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        tabs.forEach(t => {
                            t.classList.remove('bg-primary', 'text-on-primary', 'active');
                            t.classList.add('text-on-surface-variant');
                        });
                        tab.classList.add('bg-primary', 'text-on-primary', 'active');
                        tab.classList.remove('text-on-surface-variant');

                        const filter = tab.getAttribute('data-filter');
                        items.forEach(item => {
                            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    });
                });

                // Lightbox modal helpers
                function openLightbox(src, title, desc) {
                    const modal = document.getElementById('gallery-lightbox');
                    const img = document.getElementById('lightbox-img');
                    const titleEl = document.getElementById('lightbox-title');
                    const descEl = document.getElementById('lightbox-desc');

                    img.src = src;
                    titleEl.innerText = title;
                    descEl.innerText = desc;
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }

                function closeLightbox() {
                    const modal = document.getElementById('gallery-lightbox');
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }

                // Close lightbox on outside click
                document.getElementById('gallery-lightbox').addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeLightbox();
                    }
                });
            </script>
        </div>
    </main>
    <footer class="w-full bg-primary text-surface-container-lowest">
        <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-space-xl pb-space-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-space-xl pb-space-xl">
                <div class="lg:col-span-4 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-sm">
                        <div
                            class="w-11 h-11 rounded-full overflow-hidden flex items-center justify-center bg-surface-container-lowest shadow-sm">
                            <img alt="Taman Seiring Logo" class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCz14iFm1uyqdkWw2Bw4YbQUcmpJvQG6-OIfTeTPvsXTj1giDAzZ8oCsg7wMDtthbpYK9HNMzpygfKr5YtvxaefOhtQZzm0GhAQx477aIi3oEBCC5VkKY12DSLocRY3TL5Nz6ojwd--PbKbbAW6199mVtlS-SsOmZI1RSv-piwFQ0BHdQ-XlTe8nllr4qDvzdBmhLdyIgGcSZDZ9bIzV9Z63-Uy0DLahA5hYnzKz_so-0GP66AGwMtzRTPmiV-683qbA">
                        </div>
                        <div class="flex flex-col"><span
                                class="font-headline-sm text-headline-sm text-surface-bright tracking-tight leading-tight">Taman
                                Seiring</span><span class="font-label-sm text-label-sm text-primary-fixed-dim">Bertumbuh
                                Bersama, Berdampak Nyata</span></div>
                    </div>
                    <p class="font-body-sm text-body-sm text-surface-dim leading-relaxed">Ruang aman dan positif bagi
                        anak muda untuk mengenal potensi, belajar berkomunikasi, membangun keberanian, dan bertumbuh
                        bersama.</p>
                    <div class="flex items-center gap-space-sm pt-space-xs"><a aria-label="Instagram"
                            class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-primary-fixed-dim hover:bg-secondary hover:text-on-secondary transition-colors"
                            href="#"><span class="material-symbols-outlined text-lg">camera_alt</span></a><a
                            aria-label="TikTok"
                            class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-primary-fixed-dim hover:bg-secondary hover:text-on-secondary transition-colors"
                            href="#"><span class="material-symbols-outlined text-lg">play_circle</span></a><a
                            aria-label="WhatsApp"
                            class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-primary-fixed-dim hover:bg-secondary hover:text-on-secondary transition-colors"
                            href="#"><span class="material-symbols-outlined text-lg">chat</span></a><a
                            aria-label="YouTube"
                            class="w-9 h-9 rounded-full bg-primary-container flex items-center justify-center text-primary-fixed-dim hover:bg-secondary hover:text-on-secondary transition-colors"
                            href="#"><span class="material-symbols-outlined text-lg">smart_display</span></a></div>
                </div>
                <div class="lg:col-span-2 flex flex-col gap-space-sm"><span
                        class="font-title-md text-title-md text-surface-bright">Navigasi</span>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-dim">
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="beranda"
                                href="#">Beranda</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="tentang-kami"
                                href="#">Tentang Kami</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="program"
                                href="#">Program</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="kegiatan"
                                href="#">Kegiatan</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="cerita-kami"
                                href="#">Cerita Kami</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="kontak"
                                href="#">Kontak</a></li>
                    </ul>
                </div>
                <div class="lg:col-span-3 flex flex-col gap-space-sm"><span
                        class="font-title-md text-title-md text-surface-bright">Program Unggulan</span>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-surface-dim">
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="program"
                                href="#">Public Speaking &amp; Komunikasi</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="program"
                                href="#">Personal Growth &amp; Mindset</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="program"
                                href="#">Leadership Camp</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="program"
                                href="#">Community Gathering</a></li>
                        <li class=""><a class="hover:text-primary-fixed-dim transition-colors" data-path="program"
                                href="#">Creative Impact Project</a></li>
                    </ul>
                </div>
                <div class="lg:col-span-3 flex flex-col gap-space-sm"><span
                        class="font-title-md text-title-md text-surface-bright">Sapa Taman Seiring</span>
                    <p class="font-body-sm text-body-sm text-surface-dim">Dapatkan kabar kegiatan komunitas, panduan
                        belajar, dan inspirasi bulanan langsung ke emailmu.</p>
                    <form class="flex flex-col gap-space-xs mt-space-xs" onsubmit="return false;">
                        <div class="flex w-full items-center rounded-xl bg-primary-container px-space-sm py-space-xs">
                            <span
                                class="material-symbols-outlined text-primary-fixed-dim mr-space-xs text-lg">mail</span><input
                                class="w-full bg-transparent font-body-sm text-body-sm text-surface-bright placeholder:text-outline-variant focus:outline-none"
                                placeholder="Tulis email aktifmu..." type="email">
                        </div><button
                            class="w-full font-label-md text-label-md bg-secondary text-on-secondary px-space-md py-space-sm rounded-xl hover:bg-secondary-container hover:text-on-secondary-container transition-all flex items-center justify-center gap-space-xs"
                            type="submit"><span class="">Berlangganan Kabar</span><span
                                class="material-symbols-outlined text-base">arrow_forward</span></button>
                    </form>
                </div>
            </div>
            <div
                class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-sm font-label-sm text-label-sm text-primary-fixed-dim">
                <p class="">© 2026 Taman Seiring. All rights reserved. Made with heart for Indonesia's youth.</p>
                <div class="flex items-center gap-space-md"><a class="hover:text-surface-bright transition-colors"
                        href="#">Kebijakan Privasi</a><a class="hover:text-surface-bright transition-colors"
                        href="#">Panduan Komunitas</a></div>
            </div>
        </div>
    </footer>

</body>

</html>