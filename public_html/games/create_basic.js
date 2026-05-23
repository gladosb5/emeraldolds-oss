const basicNewsForm = document.getElementById('basic-news-form');
const formMessage = document.getElementById('form-message');

if (basicNewsForm) {
    basicNewsForm.addEventListener('submit', function (event) {
        const titleInput = document.getElementById('name');

        if (!titleInput.value.trim()) {
            event.preventDefault();
            formMessage.textContent = 'Please enter a news title.';
            return;
        }

        formMessage.textContent = 'Submitting...';
    });
}
