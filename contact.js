document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.contact-box form');
    const fullName = form.querySelector('input[type="text"]');
    const email = form.querySelector('input[type="email"]');
    const message = form.querySelector('textarea');
    const statusDiv = document.getElementById('form-status');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (fullName.value.trim() === '' || email.value.trim() === '' || message.value.trim() === '') {
            statusDiv.textContent = "Please fill all fields.";
            statusDiv.className = 'form-status error';
            return;
        }

        const formData = new FormData();
        formData.append('name', fullName.value);
        formData.append('email', email.value);
        formData.append('message', message.value);

        fetch('save_message.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.text())
        .then(data => {
            if (data === "success") {
                statusDiv.textContent = "Message sent successfully!";
                statusDiv.className = 'form-status';
                form.reset();
            } else if (data === "missing") {
                statusDiv.textContent = "All fields are required.";
                statusDiv.className = 'form-status error';
            } else {
                statusDiv.textContent = "Something went wrong.";
                statusDiv.className = 'form-status error';
            }
        })
        .catch(err => {
            statusDiv.textContent = "Network error. Please try again.";
            statusDiv.className = 'form-status error';
        });
    });
});
