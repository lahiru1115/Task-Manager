# Task Manager

A simple PHP and JavaScript-based Task Manager that allows users to create, update, delete, and view tasks. It follows an MVC (Model-View-Controller) architecture and uses AJAX for dynamic task management.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Screenshots](#screenshots)
- [Contributing](#contributing)
- [Contact](#contact)

## Features

✅ **Add Tasks** – Users can create new tasks with a title, description, and due date.</br>
✅ **View Tasks** – Displays all tasks, including a separate section for today's tasks.</br>
✅ **Update Tasks** – Modify task details via a modal form.</br>
✅ **Delete Tasks** – Remove tasks with confirmation.</br>
✅ **Dynamic UI** – Uses jQuery and Bootstrap for a smooth, modern interface.</br>
✅ **AJAX-Based Operations** – All CRUD operations are handled asynchronously.</br>
✅ **Organized File Structure** – MVC architecture for better code management.</br>

## Technologies Used

### 🔹 Frontend
- **HTML, CSS, Bootstrap** – User interface
- **jQuery, AJAX** – Dynamic interactions

### 🔹 Backend
- **PHP** – Core server-side logic
- **MySQL** – Database to store tasks

## Installation

To set up a local copy of Task Manager and start exploring its functionalities, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/lahiru1115/Task-Manager.git
   ```

2. Configure the web server environment (e.g., WampServer, XAMPP) to point to the cloned project directory.

3. Import the provided SQL dump file (`task-manager.sql`) located in the [task_manager_backend/sql](task_manager_backend/sql) directory into your MySQL database.

4. Update the database connection parameters in the `dbConfig.php` file located in the [task_manager_backend/config](task_manager_backend/config) directory.

5. Access the application through your web browser using the configured server URL.

## File Structure

📂 **Task-Manager**</br>
&emsp;📁 `task_manager_frontend/` – Frontend files</br>
&emsp;&emsp;📁 `task_manager_frontend/components/` -  Modal components</br>
&emsp;&emsp;📁 `task_manager_frontend/css/` -  Stylesheets</br>
&emsp;&emsp;📁 `task_manager_frontend/js/` -  JavaScript files</br>
&emsp;&emsp;📄 `index.php` – Main frontend page</br>
&emsp;📁 `task_manager_backend/` – Backend files</br>
&emsp;&emsp;📁 `task_manager_backend/config/` – Configuration files</br>
&emsp;&emsp;📁 `task_manager_backend/controllers/` – Handles CRUD operations</br>
&emsp;&emsp;📁 `task_manager_backend/models/` – Database interactions</br>
&emsp;&emsp;📁 `task_manager_backend/sql/` – Database schema and sample data</br>
&emsp;&emsp;📁 `task_manager_backend/views/` – UI templates for tasks</br>
&emsp; 📄 `README.md` – Project documentation

## Screenshots

![Task Manager Screenshot](https://via.placeholder.com/800x400?text=Task+Manager+App)

## Contributing

Contributions are welcome! Follow these steps to contribute:

1. **Fork the repository**
2. **Create a new branch**: `git checkout -b feature-branch`
3. **Commit changes**: `git commit -m "Added new feature"`
4. **Push to the branch**: `git push origin feature-branch`
5. **Create a pull request** 

## Contact

💡 Developed by **Lahiru Dissanayake**</br>
🔗 GitHub: [lahiru1115](https://github.com/lahiru1115)</br>
📧 Email: [lahirudissanayake15@gmail.com](mailto:lahirudissanayake15@gmail.com)
