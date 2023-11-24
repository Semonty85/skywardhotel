# Skyward Hotel

## Description
Skyward Hotel is a web-based application designed for managing hotel bookings and providing essential information about the hotel services. This platform offers a user-friendly interface for hotel guests to explore room options, make reservations, and contact hotel management.

## Installation Instructions
1. Clone the repository to your local machine or server.
2. Import the `skywardhotel.sql` file into your database management system to set up the necessary database and tables.
3. Modify `config.php` with your database credentials and any other environment-specific settings.
4. Access the project through your web server. For local development, this might be `http://localhost/skywardhotel`.

## Features For Customer/Visitor
- **Home Page**: Navigate through the site to learn about the hotel.
- **Room Booking**: Select a room type, check availability, and book your stay.
- **Contact Us**: Use the contact form for any inquiries or special requests.
- **Admin/**: Admin can controll all

## Features For Admin
- **Dashboard (`dashboard.php`)**: Provides an overview of hotel activities.
- **Room Management (`room.php`, `newroombook.php`)**: Manage room bookings, including creating, editing, and deleting bookings.
- **Staff Management (`staff.php`)**: Manage hotel staff details.
- **User Authentication (`signin.php`, `logout.php`)**: Handles admin login and logout functionalities.
- **Room Booking Handling (`roombook.php`, `roombookdelete.php`, `roombookedit.php`, `roomconfirm.php`)**: Manage room booking requests and their statuses.

## Usage Instruction As Customer/Viewer
- Access the admin panel through `http://localhost/skywardhotel/index.php`.
- Navigate through different sections using the menu/navbar to manage the hotel's online services.

## Usage Instruction As Admin
- Access the admin panel through `http://localhost/skywardhotel/admin/index.php`.
- Use your admin credentials to log in.Initial email and password : "admin@gmail.com" "123456"
- Navigate through different sections using the menu to manage the hotel's online services.

## Note
This panel is restricted for administrative use only. Ensure secure handling of login credentials.

## Contributing
We welcome contributions to the Skyward Hotel project. If you have suggestions or improvements, please fork the repository and submit a pull request with your changes. For major changes, please open an issue first to discuss what you would like to change.

## License
This project is licensed under the [MIT License](LICENSE).
