function validateForm() {
  var fullName = document.getElementById("fullName").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;
  var phoneNumber = document.getElementById("phoneNumber").value;
  var eventSelection = document.getElementById("eventSelection").value;

  if (fullName == "" || email == "" || address == "" || phoneNumber == "" || eventSelection == "") {
      alert("All fields must be filled out");
      return false;
  }
  return true;
}

function validateForm() {
              const phoneNumber = document.getElementById('phoneNumber').value;
              const phonePattern = /^[0-9]{10}$/;
  
              if (!phonePattern.test(phoneNumber)) {
                  alert("Please enter a valid 10-digit phone number.");
                  return false;
              }
              return true;
          }
