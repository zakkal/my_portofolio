<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border/50">
    <div class="section-container flex items-center justify-between h-16">
        <a href="#" class="font-bold text-lg text-foreground">
            <span class="gradient-text">Z</span>aki
        </a>

        <!-- Desktop -->
        <div class="hidden md:flex items-center gap-8">
            <a href="#about" class="text-sm text-muted-foreground hover:text-primary transition-colors">Tentang</a>
            <a href="#skills" class="text-sm text-muted-foreground hover:text-primary transition-colors">Keahlian</a>
            <a href="#projects" class="text-sm text-muted-foreground hover:text-primary transition-colors">Projects</a>
            <a href="#contact" class="text-sm text-muted-foreground hover:text-primary transition-colors">Kontak</a>
            
            @auth
                <div x-data="{ userOpen: false }" class="relative">
                    <button @click="userOpen = !userOpen" class="flex items-center gap-2 text-sm text-foreground hover:text-primary transition-colors">
                        @if(auth()->user()->avatar)
                            <img src="{{ auth()->user()->avatar }}" class="w-6 h-6 rounded-full border border-border" alt="Avatar">
                        @else
                            <div class="w-6 h-6 rounded-full bg-secondary flex items-center justify-center border border-border">
                                <span class="text-[10px]">{{ substr(auth()->user()->name, 0, 1) }}</span>
                            </div>
                        @endif
                        <span>{{ explode(' ', auth()->user()->name)[0] }}</span>
                    </button>
                    <div x-show="userOpen" @click.away="userOpen = false" class="absolute right-0 mt-2 w-48 bg-card border border-border rounded-lg shadow-xl py-1 z-50">
                        <a href="{{ route('logout') }}" class="block w-full text-left px-4 py-2 text-sm text-muted-foreground hover:bg-secondary hover:text-foreground">Keluar</a>
                    </div>
                </div>
            @else
                <a href="/login" class="text-sm px-4 py-1.5 rounded-md bg-secondary text-foreground hover:bg-secondary/80 border border-border transition-all">Masuk</a>
            @endauth
        </div>

        <!-- Mobile toggle -->
        <button @click="open = !open" class="md:hidden text-foreground" aria-label="Toggle menu">
            <template x-if="!open">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </template>
            <template x-if="open">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </template>
        </button>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-transition class="md:hidden bg-background border-b border-border" style="display: none;">
        <div class="section-container py-4 flex flex-col gap-3">
            <a href="#about" @click="open = false" class="text-sm text-muted-foreground hover:text-primary transition-colors py-1">Tentang</a>
            <a href="#skills" @click="open = false" class="text-sm text-muted-foreground hover:text-primary transition-colors py-1">Keahlian</a>
            <a href="#projects" @click="open = false" class="text-sm text-muted-foreground hover:text-primary transition-colors py-1">Projects</a>
            <a href="#contact" @click="open = false" class="text-sm text-muted-foreground hover:text-primary transition-colors py-1">Kontak</a>
            @auth
                <a href="{{ route('logout') }}" class="text-sm text-muted-foreground hover:text-primary transition-colors py-1 block">Keluar</a>
            @else
                <a href="/login" @click="open = false" class="text-sm text-muted-foreground hover:text-primary transition-colors py-1">Masuk</a>
            @endauth
        </div>
    </div>
</nav>
