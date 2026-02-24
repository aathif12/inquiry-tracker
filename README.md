# Service Inquiry Tracker

A professional and responsive web application built with Laravel and Tailwind CSS to manage and track client service inquiries efficiently. 

##  Features

- **Create Inquiries**: Clients or staff can easily log new service inquiries via a simple, intuitive form.
- **Track Inquiries**: A clean and organized dashboard displays all submitted inquiries in a tabular format.
- **Service Categories**: Pre-defined services like Web Development, VPS Hosting, Network Solutions, and IT Support.
- **Status Management**: Instantly see the status of new inquiries.
- **Secure**: Built-in CSRF protection and form validation.
- **Responsive Design**: Mobile-friendly layout using Tailwind CSS.

##  Technology Stack

- **Backend**: Laravel 11 (PHP)
- **Frontend**: Blade Templating Engine, Tailwind CSS
- **Database**: SQLite / MySQL (Configurable via `.env`)

##  Screenshots

Here are some previews of the application in action:

### 1. Dashboard / Inquiry List
![Inquiry Dashboard](ScreenShots/Screenshot%20(148).png)

### 2. Create Inquiry Form
![Create Inquiry](ScreenShots/Screenshot%20(149).png)

### 3. Application View
![Application Interface](ScreenShots/Screenshot%20(150).png)

##  Installation & Setup

Follow these steps to get the project running on your local machine:

1. **Clone the repository:**
   ```bash
   git clone <repository-url>
   cd ezone-inquiry-tracker
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Frontend dependencies:**
   ```bash
   npm install
   ```

4. **Environment Setup:**
   Copy the example environment file and configure your database settings.
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Compile Frontend Assets:**
   ```bash
   npm run build
   ```
   *(Or run `npm run dev` for hot-reloading during development)*

8. **Start the Development Server:**
   ```bash
   php artisan serve
   ```
   The application will be available at `http://localhost:8000`.

##  Contributing

Contributions, issues, and feature requests are welcome!

##  License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
