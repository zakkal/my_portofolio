<section class="relative min-h-screen flex items-center justify-center overflow-hidden grid-bg">
    <!-- Glow orb -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[400px] rounded-full bg-primary/5 blur-[120px] pointer-events-none"></div>
    
    <div x-data="{ shown: false }" x-intersect.once="shown = true" class="section-container relative z-10 text-center py-20">
        <div 
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
             class="transition-all duration-700 ease-out">
            
            <p class="font-mono text-primary text-sm mb-4 tracking-widest uppercase">
                &lt;hello world /&gt;
            </p>
            <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold mb-6 leading-tight">
                <span class="text-foreground">Muhammad Zaki</span>
                <br />
                <span class="gradient-text">Alghifari</span>
            </h1>
            <p class="max-w-2xl mx-auto text-muted-foreground text-base sm:text-lg leading-relaxed mb-10">
                Web Developer dan IoT Developer yang berfokus pada Laravel, Livewire,
                serta pengembangan sistem IoT menggunakan Micro:bit dan MakeCode.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#projects" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-lg bg-primary text-primary-foreground font-semibold hover:brightness-110 transition-all">
                    Lihat Project Saya
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" class="mt-0.5">
                        <path d="M8 3v10M8 13l4-4M8 13L4 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <a href="#contact" class="inline-flex items-center justify-center px-8 py-3.5 rounded-lg border border-border text-foreground font-semibold hover:bg-secondary transition-all">
                    Hubungi Saya
                </a>
            </div>
        </div>
        
        <div x-data="{ bounce: false }" 
             x-init="setTimeout(() => bounce = true, 1000)" 
             :class="bounce ? 'opacity-100' : 'opacity-0'"
             class="absolute bottom-8 left-1/2 -translate-x-1/2 transition-opacity duration-1000">
            <div class="w-5 h-8 border-2 border-muted-foreground/30 rounded-full flex justify-center pt-1.5">
                <div class="w-1 h-1 rounded-full bg-primary animate-bounce"></div>
            </div>
        </div>
    </div>
</section>
