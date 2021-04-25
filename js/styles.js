// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
}
$('#menu-about').on('click', function(event) {
    event.preventDefault()
    $("html, body").animate({
        scrollTop: $('#about').offset().top
    }, 1500);
});
$('#menu-contact').on('click', function(event) {
    event.preventDefault()
    $("html, body").animate({
        scrollTop: $('#contact').offset().top
    }, 1500);
});