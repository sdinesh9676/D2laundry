<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
        color: #333;
      }

      header {
        background: #333;
        color: #fff;
        padding: 1rem 0;
        text-align: center;
      }

      main {
        padding: 1rem 2rem;
      }

      h1,
      h2 {
        text-align: center;
        margin-bottom: 1rem;
      }

      .login-container {
        max-width: 400px;
        margin: 2rem auto;
        padding: 2rem;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
      }

      .login-container input {
        width: 90%;
        padding: 0.5rem;
        margin: 0.5rem 0;
        border: 1px solid #ddd;
        border-radius: 4px;
      }

      .login-container button {
        width: 100%;
        padding: 0.5rem;
        background-color: #333;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 4px;
      }

      .login-container button:hover {
        background-color: #555;
      }

      .hidden {
        display: none;
      }

      /* Admin dashboard styles */
      table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
      }

      table,
      th,
      td {
        border: 1px solid #ddd;
      }

      th,
      td {
        padding: 0.75rem;
        text-align: left;
      }

      th {
        background-color: #333;
        color: #fff;
      }

      button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 0.5rem 1rem;
        cursor: pointer;
      }

      button:hover {
        background-color: #555;
      }

      .delete-button {
        background-color: #e74c3c;
      }

      .delete-button:hover {
        background-color: #c0392b;
      }
    </style>
  </head>
  <body>
    <!-- Login Screen -->
    <div class="login-container" id="login-screen">
      <h2>Admin Login</h2>
      <input type="text" id="username" placeholder="Username" required />
      <input type="password" id="password" placeholder="Password" required />
      <button onclick="handleLogin()">Login</button>
    </div>

    <!-- Admin Dashboard -->
    <div class="hidden" id="admin-dashboard">
      <header>
        <h1>Admin Dashboard</h1>
      </header>

      <main>
        <section id="booking-section">
          <h2>Recent Bookings</h2>
          <table border="1">
            <thead>
              <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Service</th>
                <th>Pickup Time</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="bookings"></tbody>
          </table>
        </section>
      </main>

      <footer>
        <p>&copy; 2024 Laundry Business Admin Panel</p>
      </footer>
    </div>

    <script>
      // Dummy login credentials
      const adminCredentials = {
        username: "admin",
        password: "12345",
      };

      // Handle Login
      function handleLogin() {
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if (
          username === adminCredentials.username &&
          password === adminCredentials.password
        ) {
          document.getElementById("login-screen").classList.add("hidden");
          document.getElementById("admin-dashboard").classList.remove("hidden");
        } else {
          alert("Invalid credentials. Please try again.");
        }
      }

      // Retrieve bookings from localStorage
      const bookings = JSON.parse(localStorage.getItem("bookings")) || [];

      // Select the bookings table body
      const bookingTable = document.getElementById("bookings");

      // Function to render bookings in the table
      function renderBookings() {
        // Clear the table body
        bookingTable.innerHTML = "";

        // Loop through bookings and add rows to the table
        bookings.forEach((booking, index) => {
          const row = document.createElement("tr");
          row.innerHTML = `
            <td>${booking.name}</td>
            <td>${booking.address}</td>
            <td>${booking.contact}</td>
            <td>${booking.service}</td>
            <td>${new Date(booking.pickupTime).toLocaleString()}</td>
            <td>
              <button class="delete-button" onclick="deleteBooking(${index})">Delete</button>
            </td>
          `;
          bookingTable.appendChild(row);
        });
      }

      // Function to delete a booking
      function deleteBooking(index) {
        bookings.splice(index, 1); // Remove the booking from the array
        localStorage.setItem("bookings", JSON.stringify(bookings)); // Update localStorage
        renderBookings(); // Re-render the table
      }

      // Initial render of bookings
      renderBookings();
    </script>
  </body>
</html>
