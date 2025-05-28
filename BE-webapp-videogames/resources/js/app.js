import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

// JS PER LA CREATE
document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('togglePlatformsBtn');
    const platformsContainer = document.getElementById('platformsContainer');

    if (toggleBtn && platformsContainer) {

        platformsContainer.style.display = 'none';

        toggleBtn.addEventListener('click', () => {
            const isOpen = platformsContainer.style.display === 'grid';

            if (isOpen) {
                platformsContainer.style.display = 'none';
                toggleBtn.classList.remove('open');
            } else {
                platformsContainer.style.display = 'grid';
                toggleBtn.classList.add('open');
            }
        });
    }
});
