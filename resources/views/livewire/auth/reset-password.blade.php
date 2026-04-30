<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-background">
    <!-- Background Glow (Linear Style) -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="w-full max-w-md px-6 relative z-10">
        <div class="text-center mb-10">
            <a href="/" class="inline-block mb-6">
                <span class="text-3xl font-bold gradient-text">Zaki</span>
            </a>
            <h1 class="text-2xl font-semibold text-foreground tracking-tight">Atur Ulang Kata Sandi</h1>
            <p class="text-muted-foreground mt-2 text-sm">Masukkan kata sandi baru Anda di bawah ini.</p>
        </div>

        <div class="bg-card/50 backdrop-blur-xl border border-border rounded-2xl p-8 shadow-2xl card-glow">
            <form wire:submit.prevent="resetPassword" class="space-y-4">
                <input type="hidden" wire:model="token">

                <div>
                    <label class="block text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1.5 ml-1">Email</label>
                    <input wire:model="email" type="email" required readonly
                           class="w-full px-4 py-2.5 rounded-lg bg-secondary/80 border border-border text-foreground text-sm focus:outline-none cursor-not-allowed">
                    @error('email') <span class="text-destructive text-xs mt-1 ml-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1.5 ml-1">Kata Sandi Baru</label>
                    <input wire:model="password" type="password" required 
                           class="w-full px-4 py-2.5 rounded-lg bg-secondary/50 border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                           placeholder="••••••••">
                    @error('password') <span class="text-destructive text-xs mt-1 ml-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1.5 ml-1">Konfirmasi Kata Sandi Baru</label>
                    <input wire:model="password_confirmation" type="password" required 
                           class="w-full px-4 py-2.5 rounded-lg bg-secondary/50 border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                           placeholder="••••••••">
                </div>

                <button type="submit" class="w-full py-3 mt-4 rounded-lg bg-primary text-primary-foreground font-semibold hover:brightness-110 transition-all flex justify-center items-center gap-2">
                    <span wire:loading.remove wire:target="resetPassword">Simpan Kata Sandi</span>
                    <span wire:loading wire:target="resetPassword">Menyimpan...</span>
                </button>
            </form>
        </div>
    </div>
</div>
