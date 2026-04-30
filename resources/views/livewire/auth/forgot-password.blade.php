<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-background">
    <!-- Background Glow (Linear Style) -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="w-full max-w-md px-6 relative z-10">
        <div class="text-center mb-10">
            <a href="/" class="inline-block mb-6">
                <span class="text-3xl font-bold gradient-text">Zaki</span>
            </a>
            <h1 class="text-2xl font-semibold text-foreground tracking-tight">Lupa Kata Sandi?</h1>
            <p class="text-muted-foreground mt-2 text-sm">Tidak masalah. Masukkan email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi.</p>
        </div>

        <div class="bg-card/50 backdrop-blur-xl border border-border rounded-2xl p-8 shadow-2xl card-glow">
            @if ($status)
                <div class="mb-4 p-3 rounded-lg bg-green-500/10 border border-green-500/20 text-green-500 text-sm text-center">
                    {{ $status }}
                </div>
            @endif

            <form wire:submit.prevent="sendPasswordResetLink" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1.5 ml-1">Email</label>
                    <input wire:model="email" type="email" required 
                           class="w-full px-4 py-2.5 rounded-lg bg-secondary/50 border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                           placeholder="nama@contoh.com">
                    @error('email') <span class="text-destructive text-xs mt-1 ml-1">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="w-full py-3 mt-4 rounded-lg bg-primary text-primary-foreground font-semibold hover:brightness-110 transition-all flex justify-center items-center gap-2">
                    <span wire:loading.remove wire:target="sendPasswordResetLink">Kirim Tautan Reset</span>
                    <span wire:loading wire:target="sendPasswordResetLink">Mengirim...</span>
                </button>
            </form>
        </div>

        <p class="text-center mt-8 text-sm text-muted-foreground">
            Kembali ke 
            <a href="/login" class="text-primary font-medium hover:underline">Halaman Login</a>
        </p>
    </div>
</div>
