# E-Health Care Management System

A comprehensive hospital management system designed to streamline various processes in hospitals. This application includes modules for patient management, diagnosis information, medical history, bill generation, and more, providing an efficient way to handle hospital operations.

## Description

A hospital management system usable for hospitals, containing modules for adding new patients, recording diagnosis information, maintaining medical history, generating printable bills, and providing a dashboard with detailed information on recovery ratios, active patients, discharged patients, and more. Doctors can securely log in to the system using unique credentials.

## Features

- **Patient Management**:
  - Add new patients with essential information
  - Assign a unique numerical ID to each patient for future reference

- **Diagnosis Information**:
  - Record and update patient diagnosis details

- **Medical History**:
  - Maintain comprehensive medical history for each patient

- **Bill Generation**:
  - Generate and print bills for patients

- **Dashboard Overview**:
  - Display key statistics such as recovery ratio, number of active patients, and number of discharged patients

- **Secure Login**:
  - Doctors can log in using unique credentials

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Installation Requirements

To set up and run this project, you need the following:

- PHP 7.2 or higher
- MySQL 5.7 or higher
- Apache or Nginx server
- Git

## Installation Steps

1. **Clone the repository**
   ```sh
   git clone https://github.com/SagarInnovate/E-Health-Care-Management-System.git
   cd E-Health-Care-Management-System
   
2. **Set up the database**
- Create a new database in MySQL.
- Import the provided SQL file (health_care_db.sql) into your database.

3. **Configure the database connection**
   - Open `conn.php` and update the database connection details with your MySQL credentials.
     ```php
     <?php
     $servername = "your_server";
     $username = "your_username";
     $password = "your_password";
     $dbname = "health_care_db";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

4. **Deploy the application**
   - Move the project files to your web server's root directory (e.g., `htdocs` for XAMPP, `www` for WAMP, or the appropriate directory for your server setup).

5. **Access the application**
   - Open your web browser and navigate to `http://localhost/e-health-care-management-system` (adjust the URL according to your setup).

## Usage Instructions

- **Doctor Login**:
  - Use unique credentials to log in to the system.

- **Adding New Patients**:
  - Navigate to the "Add Patient" section.
  - Fill in the required patient details and save the record.

- **Managing Diagnosis Information**:
  - Go to the "Diagnosis Info" section.
  - Record or update patient diagnosis details using their unique ID.

- **Maintaining Medical History**:
  - Navigate to the "History" section to view or update a patient's history.

- **Generating Bills**:
  - Use the "Bill Generation" module to create and print patient bills.

- **Viewing Dashboard**:
  - Access the dashboard to view statistics like recovery ratio, active patients, and discharged patients.

## Screenshots

_Add screenshots here showing different parts of your application._

## Demo Video

Watch a full demo of the E-Health Care Management System on [YouTube](https://www.youtube.com/watch?v=your-video-id).

## Contribution Guidelines

We welcome contributions from the community. If you'd like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.

## Conclusion

The E-Health Care Management System is a robust solution for managing hospital operations efficiently. It helps in organizing patient information, streamlining processes, and providing valuable insights through its dashboard.



## Contact

For any questions or suggestions, please feel free to reach out:

- **Email:** sagarinnovate@gmail.com
- **LinkedIn:** [LinkedIn Profile](https://www.linkedin.com/in/sagarinnovate/)
- **GitHub:** [GitHub Profile](https://github.com/sagarinnovate)
- **Website:** [Visit Now](https://sagarinnovate.growmediax.com)

---

Thank you for checking out the E-Health Care Management System! We hope it helps you streamline your hospital management processes.
