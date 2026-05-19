@php
$skills = [
  ['name' => 'PHP', 'icon' => '🐘'],
  ['name' => 'Laravel', 'icon' => '🔺'],
  ['name' => 'Livewire', 'icon' => '⚡'],
  ['name' => 'MySQL', 'icon' => '🗄️'],
  ['name' => 'Micro:bit',  'icon' => '🔌'],
  ['name' => 'MakeCode', 'icon' => '🧩'],
  ['name' => 'IoT Development', 'icon' => '📡'],
  ['name' => 'API Integration', 'icon' => '🔗'],
  ['name' => 'Embedded System', 'icon' => '🛠️'],
  ['name' => 'ESP32', 'icon' => '⚙️'],
];
@endphp

<section id="skills" class="py-24 relative">
    <div class="section-container">
        <div x-data="{ shown: false }" x-intersect.once="shown = true"
             :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
             class="transition-all duration-700 ease-out mb-12">
            <p class="font-mono text-primary text-sm mb-2 tracking-wider">02. Keahlian</p>
            <h2 class="text-3xl sm:text-4xl font-bold">
                Tech <span class="gradient-text">Stack</span>
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach($skills as $index => $skill)
                <div x-data="{ shown: false }" x-intersect.once="shown = true"
                     :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                     style="transition-delay: {{ $index * 50 }}ms"
                     class="transition-all duration-500 ease-out bg-card border border-border rounded-xl p-5 card-glow flex items-center gap-4">
                    <span class="text-2xl">{{ $skill['icon'] }}</span>
                    <span class="font-medium text-foreground">{{ $skill['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
