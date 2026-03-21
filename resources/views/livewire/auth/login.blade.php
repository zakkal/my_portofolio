<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-background">
    <!-- Background Glow (Linear Style) -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="w-full max-w-md px-6 relative z-10">
        <div class="text-center mb-10">
            <a href="/" class="inline-block mb-6">
                <span class="text-3xl font-bold gradient-text">Zaki</span>
            </a>
            <h1 class="text-2xl font-semibold text-foreground tracking-tight">Selamat Datang Kembali</h1>
            <p class="text-muted-foreground mt-2 text-sm">Masuk ke akun Anda untuk melanjutkan</p>
        </div>

        <div class="bg-card/50 backdrop-blur-xl border border-border rounded-2xl p-8 shadow-2xl card-glow">
            @if (session('error'))
                <div class="mb-4 p-3 rounded-lg bg-destructive/10 border border-destructive/20 text-destructive text-sm">
                    {{ session('error') }}
                </div>
            @endif
            <!-- Google Login -->
            <a href="/auth/google" class="w-full flex items-center justify-center gap-3 py-2.5 px-4 rounded-lg bg-secondary hover:bg-secondary/80 border border-border text-foreground text-sm font-medium transition-all group">
                <svg class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                <span>Lanjutkan dengan Google</span>
            </a>

            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-border"></span>
                </div>
                <div class="relative flex justify-center text-xs uppercase">
                    <span class="bg-card px-2 text-muted-foreground">Atau dengan email</span>
                </div>
            </div>

            <form wire:submit.prevent="login" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-muted-foreground uppercase tracking-wider mb-1.5 ml-1">Email</label>
                    <input wire:model="email" type="email" required 
                           class="w-full px-4 py-2.5 rounded-lg bg-secondary/50 border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                           placeholder="nama@contoh.com">
                    @error('email') <span class="text-destructive text-xs mt-1 ml-1">{{ $message }}</span> @enderror
                </div>

                <div>
                    <div class="flex justify-between items-center mb-1.5 ml-1">
                        <label class="block text-xs font-medium text-muted-foreground uppercase tracking-wider">Kata Sandi</label>
                        <a href="#" class="text-xs text-primary hover:underline">Lupa?</a>
                    </div>
                    <input wire:model="password" type="password" required 
                           class="w-full px-4 py-2.5 rounded-lg bg-secondary/50 border border-border text-foreground text-sm focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all"
                           placeholder="••••••••">
                    @error('password') <span class="text-destructive text-xs mt-1 ml-1">{{ $message }}</span> @enderror
                </div>

                <div class="flex items-center ml-1">
                    <input wire:model="remember" id="remember" type="checkbox" class="w-4 h-4 rounded border-border bg-secondary text-primary focus:ring-primary/50">
                    <label for="remember" class="ml-2 text-sm text-muted-foreground">Ingat saya</label>
                </div>

                <button type="submit" class="w-full py-3 mt-2 rounded-lg bg-primary text-primary-foreground font-semibold hover:brightness-110 transition-all">
                    Masuk
                </button>
            </form>
        </div>

        <p class="text-center mt-8 text-sm text-muted-foreground">
            Belum punya akun? 
            <a href="/register" class="text-primary font-medium hover:underline">Daftar sekarang</a>
        </p>
    </div>
</div>
