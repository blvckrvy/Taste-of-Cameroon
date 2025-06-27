$(function () {
    // create product
    function openModal() {
        $('#create-product-modal').fadeIn();
        $('#create-product-modal').css('display', 'flex');
    };

    $('.add-btn').click(function () {
        openModal();
    });

    $('.close').click(function () {
        $('#create-product-modal').fadeOut();
    });

    $('.form-product').submit(function (e) {
        e.preventDefault(); //prevent page reloading

        let itemName = $('.name').val();
        let category = $('.category').val();
        let price = $('.price').val();
        let description = $('.description').val();
        let image = $('.image')[0].files[0]; //use files[0] to obtain the first selected file

        // console.log("Name:", itemName);
        // console.log("Category:", category);
        // console.log("Price:", price);
        // console.log("Description:", description);
        // console.log("image:", image);

        let formData = new FormData(); //create a new FormData object
        formData.append('Iname', itemName);
        formData.append('category', category);
        formData.append('price', price);
        formData.append('description', description);
        formData.append('image', image);

        $.ajax({
            url: 'create-product.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                alert("Product added successfully!");
                window.location.href = "";
            },
            error: function (xhr, status, error) {
                console.error('Error:', status, error);
            },
            complete: function () {
                $('#create-product-modal').fadeOut();
            }
        });
    });

    // edit product
    $('.edit-icon').click(function () {
        console.log("edit button clicked")

        $('#edit-product-modal').fadeIn();
        $('#edit-product-modal').css('display', 'flex');

        const newData = $(this).parents(".product-row");

        const newName = newData.find(".e-name").text();
        $(".edit-name").val(newName.trim());

        const newDesc = newData.find(".e-desc").text();
        $(".edit-description").val(newDesc.trim());

        const newCategory = newData.find(".e-category").text();
        $(".edit-category").val(newCategory.trim());

        const newPrice = newData.find(".e-price").text();
        $(".edit-price").val(newPrice.trim());

        const newImage = newData.find(".e-image").data("img");
        $(".preview-image").html('<img width="80px" src="' + newImage + '" />');

        const ID = newData.data("id");
        SubmitUpdatedProduct(ID);
    });

    $('.close').click(function () {
        $('#edit-product-modal').fadeOut();
    });

    function SubmitUpdatedProduct(ID) {
        $('.edit-form-product').submit(function (e) {
            e.preventDefault();

            let itemName = $('.edit-name').val();
            let description = $('.edit-description').val();
            let category = $('.edit-category').val();
            let price = $('.edit-price').val();
            let image = $('.edit-image')[0].files[0];

            let imageUploaded = true;

            if (!image) {
                imageUploaded = false;
                image = $(".e-image").data("img");
            }

            // console.log("Name:", itemName);
            // console.log("Category:", category);
            // console.log("Price:", price);
            // console.log("Description:", description);
            // console.log("image:", image);

            let formData = new FormData();

            formData.append('ID', ID);
            formData.append('Iname', itemName);
            formData.append('category', category);
            formData.append('price', price);
            formData.append('description', description);
            formData.append('image', image);

            formData.append('imageUploaded', imageUploaded);

            $.ajax({
                url: 'edit-product.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    // console.log(response);
                    alert("Product updated successfully!");
                    window.location.href = "";
                },
                error: function (xhr, status, error) {
                    console.error('Error:', status, error);
                },
                complete: function () {
                    $('#edit-product-modal').fadeOut();
                }
            });

            $(".edit-form-product").off();
        });
    }

    // delete product
    function openDeleteModal(id, name) {
        $('#deleteModal').fadeIn();
        $('#deleteModal').css('display', 'flex');

        $('.prodName').html(name);

        $('#confirmDelete').click(function () {
            let formData = new FormData();

            formData.append('id', id);

            $.ajax({
                url: 'delete-product.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    alert(response);
                    window.location.href = "";
                },
                error: function (xhr, status, error) {
                    console.error('Error:', status, error);
                },
                complete: function () {
                    $('#myModal').fadeOut();
                }
            });

            $("#confirmDelete").off();
        });
    };

    $('.delete-icon').click(function () {
        const newData = $(this).parents(".product-row");
        const newName = newData.find(".e-name").text();
        const ID = newData.data("id");

        openDeleteModal(ID, newName);
    });

    $('.close, #cancelDelete').click(function () {
        $('#deleteModal').fadeOut();
    });
});