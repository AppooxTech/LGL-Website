$(document).ready(function () {
  $("#contact-us-form").on("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission

    // Serialize the form data
    var formData = $(this).serialize();

    // Send an AJAX request to process-contact-form.php
    $.ajax({
      type: "POST",
      url: "process-contact-form.php", // Update with the correct path
      data: formData,
      success: function (response) {
        // Handle the response here (e.g., display success or error messages)
        console.log(response); // For debugging, you can log the response to the console
      },
    });
  });
});
