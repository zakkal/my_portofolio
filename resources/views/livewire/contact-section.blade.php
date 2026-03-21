<section id="contact" class="py-24 relative">
    <div class="section-container">
        <div x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
             class="transition-all duration-700 ease-out">
            <p class="font-mono text-primary text-sm mb-2 tracking-wider">04. Kontak</p>
            <h2 class="text-3xl sm:text-4xl font-bold mb-12">
                Hubungi <span class="gradient-text">Saya</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <!-- Contact Info -->
            <div x-data="{ shown: false }" x-intersect.once="shown = true"
                 :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-8'"
                 class="transition-all duration-500 ease-out space-y-6">
                <p class="text-muted-foreground leading-relaxed">
                    Tertarik untuk berkolaborasi atau punya pertanyaan? Jangan ragu untuk menghubungi saya.
                </p>

                <div class="space-y-4">
                    <a href="mailto:zaki.alghifari0306@gmail.com" class="flex items-center gap-3 text-foreground hover:text-primary transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        </div>
                        <span class="text-sm">zaki.alghifari0306@gmail.com</span>
                    </a>
                    <a href="https://github.com/zakkal" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-foreground hover:text-primary transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                        </div>
                        <span class="text-sm">github.com/zakkal</span>
                    </a>
                    <a href="https://wa.me/6285810544838" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-foreground hover:text-primary transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <span class="text-sm">085810544838</span>
                    </a>
                    <a href="https://linkedin.com/in/zaki-al-ghifari" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-foreground hover:text-primary transition-colors group">
                        <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="w-[18px] h-[18px]">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </div>
                        <span class="text-sm">Zaki Al Ghifari</span>
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <form wire:submit.prevent="submitMessage"
                      x-data="{ shown: false }" x-intersect.once="shown = true"
                      :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 translate-x-8'"
                      class="transition-all duration-500 ease-out bg-card border border-border rounded-xl p-6 space-y-4 relative">
                    
                    <div>
                        <label for="contact-name" class="block text-sm font-medium text-foreground mb-1.5">Nama</label>
                        <input id="contact-name" type="text" required wire:model="name"
                               class="w-full px-4 py-2.5 rounded-lg bg-secondary border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                               placeholder="Nama lengkap" />
                        @error('name') <span class="text-destructive text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="contact-email" class="block text-sm font-medium text-foreground mb-1.5">Email</label>
                        <input id="contact-email" type="email" required wire:model="email"
                               class="w-full px-4 py-2.5 rounded-lg bg-secondary border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                               placeholder="email@contoh.com" />
                        @error('email') <span class="text-destructive text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label for="contact-message" class="block text-sm font-medium text-foreground mb-1.5">Pesan</label>
                        <textarea id="contact-message" required rows="4" wire:model="pesan_user"
                                  class="w-full px-4 py-2.5 rounded-lg bg-secondary border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all resize-none"
                                  placeholder="Tulis pesan Anda..."></textarea>
                        @error('pesan_user') <span class="text-destructive text-xs">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit"
                            class="w-full py-3 rounded-lg bg-primary text-primary-foreground font-semibold hover:brightness-110 transition-all flex items-center justify-center gap-2">
                        <span wire:loading.remove wire:target="submitMessage">
                            Kirim Pesan
                        </span>
                        <span wire:loading wire:target="submitMessage" class="flex items-center gap-2">
                            <svg class="animate-spin h-5 w-5 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Mengirim...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Aesthetic Success Modal (Mobile Size) -->
    <div x-data="{ submitted: false }" 
         @message-sent.window="submitted = true"
         class="relative">
        <template x-if="submitted">
            <div class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-background/60 backdrop-blur-md">
                <div @click.away="submitted = false" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="bg-card/80 border border-primary/30 rounded-2xl p-8 max-w-[320px] w-full text-center shadow-2xl backdrop-blur-xl">
                    
                    <!-- Aesthetic Checkmark Icon -->
                    <div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-foreground mb-3">Terkirim! ✨</h3>
                    <p class="text-muted-foreground text-sm leading-relaxed mb-8">
                        Terima kasih, <span class="text-primary font-medium">nama dan pesanmu</span> sudah meluncur ke email Zaki. <br>Tunggu kabar baik ya! 📩
                    </p>

                    <button @click="submitted = false" 
                            class="w-full py-3 rounded-lg bg-primary text-primary-foreground font-bold text-sm hover:brightness-110 active:scale-95 transition-all outline-none">
                        Tutup
                    </button>
                </div>
            </div>
        </template>
    </div>

    <style>
        @keyframes bounceGentle {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .animate-bounce-gentle {
            animation: bounceGentle 2s ease-in-out infinite;
        }
    </style>
</section>
