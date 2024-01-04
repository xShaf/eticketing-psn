// public/js/custom.js


// public/js/custom.js

$(document).ready(function () {
    $('ul#navigasi li a, #tukarpage').click(function (e) {
        e.preventDefault();
        var page = $(this).attr('href');

        // Load content using Laravel route
        $.ajax({
            url: loadContentUrl, // Use the variable here
            type: 'GET',
            data: { page: page },
            success: function (response) {
                $('#content').html(response.content);
            },
            error: function (xhr, status, error) {
                console.error('Error loading content:', error);
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var fadeItems = document.querySelectorAll('.fade-up');

    function checkFade() {
        fadeItems.forEach(function (item) {
            var position = item.getBoundingClientRect();

            if (position.top < window.innerHeight && position.bottom >= 0 && !item.classList.contains('fade-in')) {
                item.classList.add('fade-in');
            }
        });
    }

    checkFade();

    window.addEventListener("scroll", checkFade);
});
