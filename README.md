## Scientific-Calculator
## project overview

The scientific Calculator is a web-based application developed using PHP, HTML, and CSS. It allows users to perform basic arithmetic, scientific, and trigonometric calculations through a user-friendly calculator interface inspired by modern smartphone calculators.

The System processes user input, performs calculations using PHP's built-in mathematical functions, and stores the most recent calculations using PHP sessions.

Objectives
- Perform basic mathematical operations.
- Perform scientific calculations.
- Perform trigonometric calculations.
- Validate user input and handle errors.

Technologies Used
Frontend
- HTML
- CSS
Backend
- PHP
Data Storage
- PHP Sessions

Features 
Basic Operations
- Addition
- Subtraction
- Multiplication
- Division
 Scientific Operations
- Square root
- Power
- Percentage
 Trigonometric Functions
- Sine
- Cosine
- Tangent

System Requirements
Software Requirements
- Xampp
- Web Server
- PHP
- Modern Web Browser
  * Google chrome
  * Microsoft Edge
  * Mozilla Firefox

Project Structure
scientific-calculator/

├── index.php

├── style.css

└── README.md

Installation Guide
Step 1: Install XAMPP
Download and install XAMPP from:

https://www.apachefriends.org

Step 2: Create Project Folder
Navigate to the htdocs directory:

C:\xampp\htdocs\

Create a new folder:

scical

Step 3: Add Project Files
Place the following files inside the folder:

index.php
style.css
README.md
Step 4: Start Apache
Open XAMPP Control Panel and start:

Apache

Step 5: Open the Application
Launch your browser and visit:

http://localhost/scientific-calculator

How to Use
Basic Calculation
1. Enter a value in Number 1.
2. Enter a value in Number 2.
3. Select an operation.
4. Click the Calculate button.
5. View the result.

Scientific Calculation
1. Enter a value in Number 1.
2. Select a scientific function.
3. Click Calculate.
4. View the result.

Input Validation
The system checks for:
- Empty input fields
- Invalid numeric values
- Division by zero
- Invalid logarithm inputs
- Negative values for square roots

Error Messages

Scenario            	Error Message
Empty Input         	Please enter Number 1
Invalid Number      	Number must be numeric
Divide by Zero      	Cannot divide by zero
Negative Square Root	Cannot calculate square root of a negative number

PHP Functions Used
Mathematical Functions
sqrt()
pow()
sin()
cos()
tan()
log10()
log()
deg2rad()

Programming Concepts Applied

Variables
Used to store:
- User inputs
- Results
- Operations

Conditional Statements
1. if
2. else
3. switch

Used for:
- Input validation
- Error handling
- Operation selection

Functions
Built-in PHP mathematical functions are used to perform scientific calculations.
   
Arrays
The calculation history is stored inside a session array.

Sessions
PHP Sessions maintain the history of the last ten calculations while the application is running.

Future Enhancements
Scientific Calculator Layout with Number Buttons
Memory Functions (M+, M-, MR, MC)
Dark/Light Theme Toggle
Database Storage for History
Calculation Export Feature
Keyboard Input Support

Author

Name: Jennica M. Ebuenga & Cherry B. Dayto

Course: BSIT/ IT 214

Section: 2-2

Date: 

Conclusion

The Scientific Calculator demonstrates the practical application of PHP, HTML, and CSS in developing a responsive and functional web application. The project showcases fundamental programming concepts such as variables, conditionals, functions, arrays, sessions, input validation, and error handling while providing users with an intuitive calculator experience.









