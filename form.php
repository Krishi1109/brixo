<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Spinner</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert for alerts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font Awesome -->
    <style>
        button:disabled {
            cursor: not-allowed;
            opacity: 0.6;
        }

        .spinner {
            display: none;
            margin-left: 10px;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <form id="contactForm">
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <button type="submit" id="submitBtn">
            Submit
            <i class="fas fa-spinner spinner"></i> <!-- Spinner Icon -->
        </button>
    </form>

    <script>
        document.getElementById("contactForm").addEventListener("submit", function (e) {
            e.preventDefault(); // Prevent default form submission

            const submitBtn = document.getElementById("submitBtn");
            const spinner = document.querySelector(".spinner");
            const nameField = document.getElementById("name");

            if (!nameField.value.trim()) {
                Swal.fire("Oops!", "Name is required!", "error");
                return;
            }

            // Disable button and show spinner
            submitBtn.disabled = true;
            spinner.style.display = "inline-block";

            // Prepare form data
            const formData = new FormData(this);

            // Send data using AJAX
            fetch("send_mail.php", {
                method: "POST",
                body: formData,
            })
                .then(response => response.text())
                .then(response => {
                    // Show success alert
                    Swal.fire("Success!", response, "success");
                })
                .catch(error => {
                    // Show error alert
                    Swal.fire("Error!", "There was a problem submitting the form.", "error");
                })
                .finally(() => {
                    // Reset button state and hide spinner
                    submitBtn.disabled = false;
                    spinner.style.display = "none";
                    nameField.value = ""; // Clear the input field
                });
        });
    </script>
</body>

</html>