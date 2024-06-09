document.addEventListener('DOMContentLoaded', function () {
    const openModalButton1 = document.getElementById('openModalButton1');
    const closeModalButton1 = document.getElementById('closeModalButton1');
    const modalContainer = document.getElementById('modalContainer');
    let modalOpen = false;

    openModalButton1.addEventListener('click', function () {
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
    openModalButton1.addEventListener('click', function () {
        modalContainer.style.display = 'block';
        modalOpen = true;
    });

    closeModalButton1.addEventListener('click', function () {
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
