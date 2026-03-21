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
        </div>
    </div>
</section>
