# Tire Shop Inventory Management System

This is a simple tire shop inventory management system that utilizes CRUD operations. The system includes user authentication with a MySQL database and is built using Bootstrap 4.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database](#database)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This system provides a user-friendly interface for managing tire inventory in a tire shop. It allows users to perform CRUD operations on tire records, ensuring efficient management and tracking of inventory.

## Features

- **Login System:** Utilizes PHP and MySQL for user authentication.
- **CRUD Operations:** Allows the creation, retrieval, updating, and deletion of tire records.
- **Bootstrap 4:** Uses Bootstrap 4 for a responsive and visually appealing user interface.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/tire-shop-management.git
    ```

2. Configure the database connection:

    - Navigate to the `vistas` directory.
    - Edit the `conexion.php` file to provide your MySQL database credentials.

3. Import the database:

    - Use the provided SQL script (`tire_shop_database.sql`) to create the necessary database and tables.

4. Open the system in your browser:

    - Start a local server or upload the files to your web server.
    - Access the system through your browser.

## Usage

1. **Login:**
    - Use the provided login page to enter your credentials.

2. **Dashboard:**
    - After logging in, you will be redirected to the dashboard.
    - The dashboard provides options for managing tire records.

3. **CRUD Operations:**
    - Add, edit, and delete tire records as needed.

## Database

The system uses a MySQL database to store user information and tire records. The `tire_shop_database.sql` script provides the necessary database schema and sample data.

## Contributing

Contributions are welcome! If you have improvements or feature suggestions, please submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
