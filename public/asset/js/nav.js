document.getElementById("Submenu").addEventListener('click', function(event) {
    document.getElementById("Waktu").classList.toggle("show");
    event.stopPropagation();
});