import './bootstrap';

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

Alpine.plugin(intersect);
// If Livewire is present, it will initialize Alpine automatically, but we might need to start it if Livewire relies on it.
// Livewire 3 automatically uses the global Alpine object if it detects it before it initializes.
window.Alpine = Alpine;
Alpine.start();
