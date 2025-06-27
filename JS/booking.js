$(function () {
    function openSuccessModal() {
        $('#successModal').fadeIn();
        $('#successModal').css('display', 'block');
    }

    function closeSuccessModal() {
        $('#successModal').fadeOut();
    }

    function SuccessModal() {
        openSuccessModal();
        window.addEventListener('click', (event) => {
            if (event.target === document.getElementById('successModal')) {
                closeSuccessModal();
            }
        });
    }

    // flatpickr on the date input
    flatpickr(".date", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        minDate: "today",
        defaultDate: "today"
    });

    $('.booking-product').submit(function (e) {
        e.preventDefault();

        let firstName = $('.firstName').val();
        let lastName = $('.lastName').val();

        let FullName = firstName + " " + lastName;
        let email = $('.email').val();
        let tel = $('.tel').val();
        let date = $('.date').val();
        let time = $('.time').val();
        let partySize = $('.partySize').val();

        let formData = new FormData();
        formData.append('FName', FullName)
        formData.append('email', email)
        formData.append('tel', tel)
        formData.append('date', date)
        formData.append('time', time)
        formData.append('partySize', partySize)

        $.ajax({
            url: 'create-reservation.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function () {
                SuccessModal();
            },
            error: function (xhr, status, error) {
                console.error('Error:', status, error);
            }
        })
    });
});