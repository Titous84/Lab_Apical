document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('.scrollformationshaut').addEventListener('click', function() {
        window.scrollBy(0, -100);
    });

    document.querySelector('.scrollformationsbas').addEventListener('click', function() {
        window.scrollBy(0, 100);
    });
});
