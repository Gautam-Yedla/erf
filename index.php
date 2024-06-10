<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="header">
        <h2 class="text-center">Event Registration Form</h2>
    </div>
        <form id="registrationForm" action="register.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number:</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="form-group">
                <label for="eventSelection">Event Selection:</label>
                <select class="form-control" id="eventSelection" name="eventSelection" required>
                    <option value="">Select an Cultural Event</option>
                    <option value="Dance">Dance</option>
                    <option value="Cultural Festivals">Cultural Festivals</option>
                    <option value="Concert">Concert</option>
                    <option value="Pottery Making">Pottery Making</option>
                    <option value="Handicraft">Handicraft</option>
                    <option value="Photography">Photography</option>
                    <option value="Papermaking
                    ">Papermaking</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="comments">Additional Comments:</label>
                  <textarea class="form-control" id="comments" name="comments" rows="1"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
          </form>
      </div>
  
      <script src="script.js"></script>
  </body>
  </html>
  