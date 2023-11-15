<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Annonce</title>
    
    <style>
        body {
          background-color: #f8f9fa;
        }

        .container {
          max-width: 900px;
          margin: 50px auto;
          background-color: #ffffff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
          text-align: center;
          padding: 1em;
        }

        label {
          font-weight: bold;
        }

        .btn-primary {
          background-color: black;
          width: 100%;
        }

        .btn-primary:hover {
          background-color: orangered;
        }
  </style>

</head>
<body>
    
<div class="container mt-5">
    <h2>Create an Announcement</h2>

    <form action="add.php"> 
      <div class="mb-3">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" class="form-control" id="Firstname" required>
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Lastname</label>
        <input type="text" class="form-control" id="Lastname" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" id="email" type="email" required></input>
      </div>
      <div class="mb-3">
        <label for="pwd" class="form-label">Password</label>
        <input class="form-control" id="pwd" type="password" required></input>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" id="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="announcement">Electronique</option>
          <option value="event">Logement</option>
          <option value="sale">Voiture</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>

<!-- CREATE TABLE IF NOT EXISTS Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    Password VARCHAR(255) NOT NULL,
    CategoryOfAnnouncement VARCHAR(50) NOT NULL
); -->