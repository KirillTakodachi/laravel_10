document.addEventListener('DOMContentLoaded', function () {
    const openModalButton2 = document.getElementById('openModalButton2');
    const closeModalButton2 = document.getElementById('closeModalButton2');
    const modalContainer = document.getElementById('modalContainer');
    let modalOpen = false;

    openModalButton2.addEventListener('click', function () {
        fetch('/api/inc/test-tailwind')
            .then(response => response.json())
            .then(data => {const modalContainer = document.getElementById('modalContainer');
                modalContainer.innerHTML = data.html;
                const closeModalButton = document.getElementById('closeModalButton');
                const modal = document.getElementById('modalContainer');
                closeModalButton.addEventListener('click', function () {
                    modal.innerHTML = '';
                    modal.style.display = 'none';
                });
            });
    });
    openModalButton2.addEventListener('click', function () {
        modalContainer.style.display = 'block';
        modalOpen = true;
    });

    closeModalButton2.addEventListener('click', function () {
        modalContainer.style.display = 'none';
        modalOpen = false;
    });
    fetch('/api/inc/test-tailwind')
        .then(response => response.json())
        .then(data => {
            const modalHtml = data.html;
            if (modalOpen) {
                modalContainer.innerHTML = modalHtml;
                modalContainer.style.display = 'block';
            } else {
                modalContainer.innerHTML = modalHtml;
                modalContainer.style.display = 'none';
            }
        });
});
