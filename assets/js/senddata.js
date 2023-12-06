document.addEventListener("DOMContentLoaded", function () {
    // Function to handle form submission
    async function submitForm() {
      // Collect form data
      var message = document.getElementById("message").value;
      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var subject = document.getElementById("subject").value;
      var serviceSelect = document.getElementById("serviceSelect");
      var selectedService = serviceSelect.options[serviceSelect.selectedIndex].text;
  
      var formData = new FormData();
      formData.append("message", message);
      formData.append("name", name);
      formData.append("email", email);
      formData.append("subject", subject);
      formData.append("selectedService", selectedService);
  
      try {
        const response = await fetch(
          "./assets/PHP/sendMail.php",
          {
            method: "POST",
            body: formData,
            // headers for form data
            headers: {
              // 'Content-Type': 'application/x-www-form-urlencoded', // Use this for URL-encoded form data
              // 'Content-Type': 'multipart/form-data', // Use this for FormData
            },
          }
        );
  
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        } else {
            alert("Email sent successfully")
        }
      } catch (error) {
        console.error("Error:", error);
      }
    }
  
    var contactForm = document.getElementById("send");
    contactForm.addEventListener("click", function (event) {
      event.preventDefault(); // Prevent the default form submission
      submitForm();
    });
  });
  