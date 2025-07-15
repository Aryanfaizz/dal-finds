# DalFinds

DalFinds is a web application developed by Team 8 for CSCI 2690 at Dalhousie University. The platform is designed to connect students with university societies, resources, and opportunities, fostering engagement within the Dalhousie community. With an intuitive interface, DalFinds provides access to society listings, detailed society information, and more.

## Table of Contents
- [Features](#features)
- [Demo](#demo)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [Team](#team)
- [License](#license)

## Features
- **Homepage**: Welcomes users with an overview of DalFinds and its purpose.
- **Societies Page**: Lists all available societies, filterable by type (e.g., academic, cultural, recreational).
- **Single Society Page**: Displays detailed information about a specific society, including events and contact details.
- **About Us Page**: Provides background on the project and the development team.
- Responsive design for seamless use on desktop and mobile devices.

## Demo
Visit the live demo of DalFinds at [https://web.cs.dal.ca/~mahasan/Dalfinds/index.php](https://web.cs.dal.ca/~mahasan/Dalfinds/index.php).

## Installation
To run DalFinds locally, follow these steps:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Aryanfaizz/dal-tutor.git
   cd dal-tutor
   ```

2. **Set Up a Web Server**:
   - DalFinds is a PHP-based application. Ensure you have a web server (e.g., Apache) and PHP installed.
   - For local development, use XAMPP, WAMP, or a similar tool.
   - Copy the project files to your web server’s root directory (e.g., `htdocs` for XAMPP).

3. **Configure the Environment**:
   - Ensure PHP (version 7.4 or higher) is installed.
   - If the application uses a database, configure the database connection in the appropriate configuration file (e.g., `config.php`).
   - Update `.htaccess` if necessary for URL rewriting.

4. **Run the Application**:
   - Start your web server.
   - Access the application at `http://localhost/Dalfinds/index.php`.

## Usage
- Navigate to the homepage to explore the platform.
- Use the **Societies Page** to browse or filter societies by type.
- Click on a society to view its details on the **Single Society Page**.
- Visit the **About Us Page** to learn more about the project and team.
- Ensure your browser is up-to-date for the best experience.

## Project Structure
```
dal-tutor/
├── index.php           # Homepage
├── societies.php       # Societies listing page
├── society.php         # Single society details page
├── about.php           # About Us page
├── assets/             # CSS, JavaScript, and images
├── config/             # Configuration files (e.g., database settings)
└── .htaccess           # URL rewriting rules
```

## Contributing
We welcome contributions to improve DalFinds! To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes and commit them (`git commit -m "Add your feature"`).
4. Push to your branch (`git push origin feature/your-feature`).
5. Create a pull request on GitHub.

**Note**: Pushes to the repository are subject to rules (e.g., secret scanning, branch protection). Ensure your commits do not include sensitive data (e.g., API keys, passwords). If you encounter a `push declined due to repository rule violations` error, check for sensitive data or restricted files and refer to GitHub’s [secret scanning documentation](https://docs.github.com/en/code-security/secret-scanning/pushing-a-branch-blocked-by-push-protection).

## Team
Developed by **Team 8** for CSCI 2690 at Dalhousie University. Contributions include project development, policy review for feature alignment, and advocacy for user-focused enhancements.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
