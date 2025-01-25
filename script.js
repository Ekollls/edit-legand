document.addEventListener('DOMContentLoaded', function() {
    var openPopupBtn = document.getElementById('openPopupBtn');
    var closePopupBtn = document.getElementById('closePopupBtn');
    var popup = document.getElementById('customPopup');
    var popupContent = document.getElementById('popupHeader');

    openPopupBtn.addEventListener('click', function() {
        popup.style.display = 'block';
        popup.style.left = '50%';
        popup.style.top = '50%';
        popup.style.transform = 'translate(-50%, -50%)';
    });

    closePopupBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    });

    // قابلیت کشیدن و رها کردن
    var isDragging = false;
    var offsetX, offsetY;

    popupContent.addEventListener('mousedown', function(e) {
        isDragging = true;
        offsetX = e.clientX - popup.getBoundingClientRect().left;
        offsetY = e.clientY - popup.getBoundingClientRect().top;
    });

    document.addEventListener('mousemove', function(e) {
        if (isDragging) {
            var left = e.clientX - offsetX;
            var top = e.clientY - offsetY;
            popup.style.left = left + 'px';
            popup.style.top = top + 'px';
            popup.style.transform = 'none';
        }
    });

    document.addEventListener('mouseup', function() {
        isDragging = false;
    });
 // برای ریسایز شدن پاپ‌آپ در موبایل
    window.addEventListener('resize', function() {
        if (window.innerWidth < 600) {
            popupContent.style.width = '95%';
            popupContent.style.maxWidth = 'none';
        } else {
            popupContent.style.width = '90%';
            popupContent.style.maxWidth = '600px';
        }
    });
});