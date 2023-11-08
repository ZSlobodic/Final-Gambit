import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.documentElement.classList.add('dark')
localStorage.theme = 'dark'