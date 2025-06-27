$(function () {
    function openSuccessModal() {
        $('#querysuccessModal').fadeIn();
        $('#querysuccessModal').css('display', 'block');
    }

    function closeSuccessModal() {
        $('#querysuccessModal').fadeOut();
    }

    function SuccessModal() {
        openSuccessModal();
        window.addEventListener('click', (event) => {
            if (event.target === document.getElementById('querysuccessModal')) {
                closeSuccessModal();
            }
        });
    }

    $('.contact-form').submit(function (e) {
        e.preventDefault();

        let firstName = $('.firstName').val();
        let lastName = $('.lastName').val();

        let FullName = firstName + " " + lastName;
        let email = $('.email').val();
        let phone = $('.phone').val();
        let description = $('.description').val();
        let joinTeam = $('.checkbox').is(':checked') ? 'on' : 'off';
        let recaptchaResponse = grecaptcha.getResponse();

        if (!recaptchaResponse) {
            alert("Please complete the reCAPTCHA verification.");
            return;
        }

        let formData = new FormData();
        formData.append('FName', FullName)
        formData.append('email', email)
        formData.append('phone', phone)
        formData.append('description', description)
        formData.append('checkbox', joinTeam)
        formData.append('g-recaptcha-response', recaptchaResponse);

        $.ajax({
            url: 'create-query.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.includes("reCAPTCHA verification failed")) {
                    alert("Please complete the reCAPTCHA verification.");
                } else {
                    SuccessModal();
                    setTimeout(function () {
                        location.reload();
                    }, 3000);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error:', status, error);
            }
        })
    });
});