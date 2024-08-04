# Dynamic Job Recruitment Website

This is a dynamic job recruitment website built using HTML, CSS, JavaScript, PHP, and MySQL. The website allows users to register, login, and apply for jobs. Administrators can post new job listings and manage applications.

## Features

- User Registration and Login
- Job Listings
- Job Application Submission
- Admin Dashboard for Managing Job Listings and Applications
- Database Integration with MySQL

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Getting Started

### Prerequisites

- XAMPP or any other PHP and MySQL development environment
- Git

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/YashR34/dynamic_job_recruitment_website.git
    cd dynamic_job_recruitment_website
    ```

2. Move the project files to your XAMPP htdocs directory:
    ```sh
    mv dynamic_job_recruitment_website /path/to/xampp/htdocs/job_recruitment
    ```

3. Create a database in MySQL:
    - Open phpMyAdmin (http://localhost/phpmyadmin)
    - Create a new database named `job`

4. Import the `job.sql` file into the `job` database:
    - In phpMyAdmin, select the `job` database
    - Go to the Import tab
    - Choose the `job.sql` file from the project directory
    - Click Go

5. Update the database configuration in `config.php` file:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

6. Make sure to create an `uploads` folder inside the `user/elements` directory for storing uploaded files:
    ```sh
    mkdir -p user/elements/uploads
    ```

7. Start XAMPP and ensure Apache and MySQL are running.

8. Access the website by navigating to:
    ```
    http://localhost/job_recruitment
    ```

## Usage

- Register as a new user or login with existing credentials.
- Browse and apply for job listings.
- Administrators can login to the admin panel to add new job listings and manage applications.

## Contributing

1. Fork the repository.
2. Create your feature branch:
    ```sh
    git checkout -b feature/your-feature
    ```
3. Commit your changes:
    ```sh
    git commit -m 'Add some feature'
    ```
4. Push to the branch:
    ```sh
    git push origin feature/your-feature
    ```
5. Open a pull request.



For any questions or feedback, please contact [YashR34](https://github.com/YashR34).
Public section

![Screenshot (6)](https://github.com/user-attachments/assets/1b958ac1-213b-4c93-ba45-54ebadcdc4fe)

user section

![Screenshot (7)](https://github.com/user-attachments/assets/91f64681-e302-42f1-abc7-c5ea052a2c18)

admin section 

![Screenshot (8)](https://github.com/user-attachments/assets/2c5c3a22-c0ef-4306-bd35-6f16758d53fb)
