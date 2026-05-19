<section id="about" class="py-24 relative">
    <div class="section-container">
        <div x-data="{ shown: false }" x-intersect.once="shown = true" 
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
             class="transition-all duration-700 ease-out">
            <p class="font-mono text-primary text-sm mb-2 tracking-wider">01. Tentang Saya</p>
            <h2 class="text-3xl sm:text-4xl font-bold mb-8">
                Kenali Saya <span class="gradient-text">Lebih Dekat</span>
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8 items-start">
                <div class="space-y-4 text-muted-foreground leading-relaxed">
                    <p>
                        Saya adalah mahasiswa aktif yang berfokus pada pengembangan web dan teknologi IoT.
                    </p>
                    <p>
                        Saya mengembangkan aplikasi web menggunakan <span class="text-primary font-medium">Laravel</span> dan <span class="text-primary font-medium">Livewire</span>, serta membuat berbagai sistem IoT menggunakan <span class="text-primary font-medium">Micro:bit</span> dan <span class="text-primary font-medium">MakeCode</span> yang dapat terhubung dengan dashboard web untuk monitoring data secara real-time.
                    </p>
                </div>
                
                <div class="bg-card border border-border rounded-xl p-6 card-glow">
                    <div class="font-mono text-sm">
                        <p class="text-muted-foreground">
                            <span class="text-primary">const</span> <span class="text-foreground">zaki</span> = {
                        </p>
                        <p class="ml-4"><span class="text-primary">nama</span>: <span class="text-emerald-300">"Muhammad Zaki Alghifari"</span>,</p>
                        <p class="ml-4"><span class="text-primary">status</span>: <span class="text-emerald-300">"Mahasiswa Aktif"</span>,</p>
                        <p class="ml-4"><span class="text-primary">fokus</span>: [<span class="text-emerald-300">"Web Dev"</span>, <span class="text-emerald-300">"IoT Dev"</span>],</p>
                        <p class="ml-4"><span class="text-primary">stack</span>: [<span class="text-emerald-300">"Laravel"</span>, <span class="text-emerald-300">"Livewire"</span>],</p>
                        <p class="text-muted-foreground">}</p>
                    </div>
                </div>
            </div>
            
            <!-- Pendidikan & Pengalaman -->
            <div x-data="{ shown: false }" x-intersect.once="shown = true" 
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                 class="mt-24 transition-all duration-700 ease-out delay-200">
                <h3 class="text-2xl font-bold mb-10 text-center sm:text-left">
                    Pendidikan & <span class="gradient-text">Pengalaman</span>
                </h3>
                
                <div class="space-y-8 relative before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-border before:to-transparent">
                    
                    <!-- Politeknik IDN -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-background bg-primary shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                            <svg class="w-4 h-4 text-primary-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                        </div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-card border border-border p-5 rounded-xl shadow-sm hover:border-primary/50 transition-colors">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-foreground">Politeknik IDN</h4>
                                <span class="text-xs font-mono text-primary bg-primary/10 px-2.5 py-1 rounded-md">Sekarang</span>
                            </div>
                            <div class="text-sm text-primary font-medium mb-3">Mahasiswa Aktif</div>
                            <p class="text-sm text-muted-foreground leading-relaxed">
                                Sedang menempuh pendidikan perguruan tinggi dengan fokus keahlian pada pengembangan Web (Web Development) dan sistem tersemat (Internet of Things).
                            </p>
                        </div>
                    </div>

                    <!-- Bootcamp IDN -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-background bg-primary shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                            <svg class="w-4 h-4 text-primary-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-card border border-border p-5 rounded-xl shadow-sm hover:border-primary/50 transition-colors">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-foreground">Bootcamp IDN Network</h4>
                            </div>
                            <div class="text-sm text-primary font-medium mb-3">Pelatihan Khusus IoT</div>
                            <p class="text-sm text-muted-foreground leading-relaxed">
                                Mengikuti pelatihan intensif (Bootcamp) dari IDN Network yang berfokus penuh pada pemahaman konsep dan praktik Internet of Things (IoT), integrasi sensor, serta mikrokontroler.
                            </p>
                        </div>
                    </div>

                    <!-- ITSEC Cyber Security Event -->
                    <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group is-active">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full border-4 border-background bg-primary shadow shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2 z-10">
                            <svg class="w-4 h-4 text-primary-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <div class="w-[calc(100%-4rem)] md:w-[calc(50%-2.5rem)] bg-card border border-border p-5 rounded-xl shadow-sm hover:border-primary/50 transition-colors">
                            <div class="flex items-center justify-between mb-1">
                                <h4 class="font-bold text-foreground">ITSEC Asia</h4>
                            </div>
                            <div class="text-sm text-primary font-medium mb-3">Peserta Event Cyber Security</div>
                            <p class="text-sm text-muted-foreground leading-relaxed">
                                Mengikuti berbagai event dan seminar di bidang keamanan siber (Cyber Security) yang diselenggarakan oleh ITSEC, memperluas wawasan dan kesadaran terhadap keamanan infrastruktur teknologi.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
