const updateBtns = document.querySelectorAll('.update-button');
updateBtns.forEach(btn => {
    const id = btn.getAttribute('data-row-id');
    btn.addEventListener('click', () => {
        const submitBtn = document.querySelector("button[type='submit'");
        submitBtn.value = id;
        });
});

