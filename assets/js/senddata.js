
    document.addEventListener("DOMContentLoaded", function() {
        // Function to handle form submission
        function submitForm() {
            // Collect form data
            var message = document.getElementById("message").value;
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var serviceSelect = document.getElementById("serviceSelect");
            var selectedService = serviceSelect.options[serviceSelect.selectedIndex].text;

            
            var formData = {
                message: message,
                name: name,
                email: email,
                subject: subject,
                selectedService: selectedService,
               
            };
            console.log(formData)
        }
        
        var contactForm = document.getElementById("send");
        contactForm.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default form submission
            submitForm();
        });
    });