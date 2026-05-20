@php
$webProjects = [
  [
    "title" => "Rembulan4",
    "description" => "Website sistem akademik untuk menginput nilai murid, mencatat nilai ibadah, dan mengelola data siswa.",
    "link" => "https://rembulan4.zakkal.my.id",
    "image" => "images/projects/rembulan.png",
    "tags" => ["Laravel", "Livewire", "MySQL"],
  ],
  [
    "title" => "Absensi Student (Face Recognition)",
    "description" => "Aplikasi absensi siswa dengan fitur pengenalan wajah (Face Recognition) untuk pencatatan kehadiran yang lebih akurat.",
    "link" => "https://absensi.student.zakkal.my.id/",
    "image" => "images/projects/absensi.png",
    "tags" => ["Laravel", "Face Recognition", "MySQL"],
  ],
  [
    "title" => "Sistem Laporan Santri",
    "description" => "Website khusus untuk mencatat dan mengelola laporan progres tahfidz serta kegiatan harian santri.",
    "link" => "https://laporan.santri.mtz.zakkal.my.id/",
    "image" => "images/projects/laporan-santri.png",
    "tags" => ["Laravel", "Livewire", "MySQL"],
  ],
  [
    "title" => "Sistem Absen Halaqah",
    "description" => "Website untuk mencatat dan mengelola kehadiran halaqah secara digital.",
    "link" => "https://halaqah.zakkal.my.id",
    "image" => "images/projects/halaqah.png",
    "tags" => ["Laravel", "Livewire"],
  ],
  [
    "title" => "Sistem Pengaduan Masyarakat",
    "description" => "Platform website untuk masyarakat mengirimkan laporan dan pengaduan secara online.",
    "tags" => ["Laravel", "PHP", "MySQL"],
  ],
  [
    "title" => "Sistem Peminjaman Buku Perpustakaan",
    "description" => "Website untuk mengelola peminjaman dan pengembalian buku perpustakaan.",
    "image" => "project/image copy.png",
    "tags" => ["Laravel", "MySQL"],
  ],
  [
    "title" => "Dashboard Monitoring Air dari Drone",
    "description" => "Dashboard web untuk memonitor kualitas air secara real-time menggunakan drone dengan sensor pH, Turbidity, dan TDS.",
    "image" => "project/image.png",
    "tags" => ["Laravel", "IoT", "Real-time"],
  ],
];

$iotProjects = [
  [
    "title" => "Drone Monitoring Air",
    "description" => "Drone monitoring air berbasis chip ESP32 menggunakan sensor pH, Turbidity, dan TDS, diprogram menggunakan bahasa C++ (Arduino IDE).",
    "image" => "project/image.png",
    "tags" => ["ESP32", "Arduino IDE", "Sensor", "Drone"],
  ],
  [
    "title" => "Automatic Gate",
    "description" => "Sistem gerbang otomatis yang dapat membuka dan menutup secara otomatis menggunakan sensor dan mikrokontroler.",
    "tags" => ["Micro:bit", "MakeCode", "Servo"],
  ],
  [
    "title" => "Smart Trash",
    "description" => "Tempat sampah pintar yang dapat terbuka otomatis ketika ada orang mendekat.",
    "tags" => ["Micro:bit", "Ultrasonic", "IoT"],
  ],
  [
    "title" => "Jemuran Otomatis",
    "description" => "Sistem jemuran otomatis yang dapat mendeteksi hujan dan secara otomatis melindungi pakaian.",
    "tags" => ["Micro:bit", "Rain Sensor", "IoT"],
  ],
];
@endphp

<section id="projects" class="py-24 relative">
    <div class="section-container">
        <!-- Web Projects -->
        <div x-data="{ shown: false }" x-intersect.once="shown = true" 
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
             class="transition-all duration-700 ease-out">
            <p class="font-mono text-primary text-sm mb-2 tracking-wider">03. Projects</p>
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                Web <span class="gradient-text">Development</span>
            </h2>
            <p class="text-muted-foreground mb-10 max-w-xl">
                Aplikasi web yang telah saya kembangkan menggunakan Laravel dan Livewire.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-20">
            @foreach($webProjects as $index => $project)
                <div x-data="{ shown: false }" x-intersect.once="shown = true"
                     :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                     style="transition-delay: {{ $index * 80 }}ms"
                     class="group transition-all duration-500 ease-out bg-card border border-border rounded-xl p-5 card-glow flex flex-col h-full overflow-hidden">
                    
                    @if(isset($project['image']))
                    <div class="w-full h-40 mb-5 rounded-lg overflow-hidden bg-secondary relative">
                        <!-- Menggunakan gambar lokal -->
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                             onerror="this.src='https://placehold.co/600x400/1e293b/a5b4fc?text=Gambar+Project'">
                    </div>
                    @endif

                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-lg font-bold text-foreground">{{ $project['title'] }}</h3>
                        @if(isset($project['link']))
                            <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer" 
                               class="text-primary hover:brightness-125 transition-all shrink-0 ml-2" 
                               aria-label="Visit {{ $project['title'] }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                            </a>
                        @endif
                    </div>
                    <p class="text-muted-foreground text-sm leading-relaxed flex-1 mb-4">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                            <span class="text-xs font-mono px-2.5 py-1 rounded-md bg-secondary text-secondary-foreground">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- IoT Projects -->
        <div x-data="{ shown: false }" x-intersect.once="shown = true" 
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
             class="transition-all duration-700 ease-out">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4">
                IoT <span class="gradient-text">Projects</span>
            </h2>
            <p class="text-muted-foreground mb-10 max-w-xl">
                Proyek IoT menggunakan Micro:bit, ESP32, dan Arduino IDE.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-5">
            @foreach($iotProjects as $index => $project)
                <div x-data="{ shown: false }" x-intersect.once="shown = true"
                     :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                     style="transition-delay: {{ $index * 80 }}ms"
                     class="transition-all duration-500 ease-out bg-card border border-border rounded-xl p-6 card-glow flex flex-col h-full">
                    
                    @if(isset($project['image']))
                    <div class="w-full h-40 mb-5 rounded-lg overflow-hidden bg-secondary relative">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                             onerror="this.src='https://placehold.co/600x400/1e293b/a5b4fc?text=Gambar+Project'">
                    </div>
                    @endif

                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-lg font-bold text-foreground">{{ $project['title'] }}</h3>
                        @if(isset($project['link']))
                            <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer" 
                               class="text-primary hover:brightness-125 transition-all shrink-0 ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                            </a>
                        @endif
                    </div>
                    <p class="text-muted-foreground text-sm leading-relaxed flex-1 mb-4">{{ $project['description'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                            <span class="text-xs font-mono px-2.5 py-1 rounded-md bg-secondary text-secondary-foreground">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
