# Dolphin Channel

A movie and celebrity database application built with Laravel. This application allows users to browse movies, explore celebrity profiles, and manage movie content through an admin dashboard.

## Features

### Frontend (Public)
- **Home Page**: Featured and latest movies.
- **Movie Details**: Detailed information about movies including cast and crew.
- **Celebrity Profiles**: Information about actors and directors.
- **Search**: Search functionality to find movies.
- **Categorization**: Browse movies by genre or type.
- **Coming Soon**: Preview upcoming releases.
- **User Authentication**: Login and registration functionality.

### Backend (Admin)
- **Dashboard**: Overview of the system.
- **Content Management**:
  - **Movies**: Create, read, update, and delete movie entries.
  - **Actors**: Manage actor profiles.
  - **Directors**: Manage director profiles.
  - **Genres**: Manage movie genres.
- **Role-Based Access**: Admin routes are protected and require the 'Admin' role.

## Technologies Used

- **Framework**: Laravel 7.x
- **Language**: PHP >= 7.2.5
- **Database**: MySQL
- **Frontend**: Bootstrap 4, jQuery, Laravel Mix

## Prerequisites

- PHP >= 7.2.5
- Composer
- Node.js & NPM
- MySQL

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd dolphin_channel
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Frontend dependencies**
   ```bash
   npm install
   npm run dev
   ```

4. **Environment Setup**
   Copy the example environment file and configure your database settings.
   ```bash
   cp .env.example .env
   ```
   Open `.env` and update `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` with your database credentials.

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations and Seed Database**
   ```bash
   php artisan migrate --seed
   ```
   *Note: This includes `RoleTableSeeder` and `DatabaseSeeder` which are essential for setting up initial roles and data.*

7. **Run the Application**
   ```bash
   php artisan serve
   ```
   Access the application at `http://localhost:8000`.

## Directory Structure

- `app/Http/Controllers`: Contains the application logic (BackendController, MovieController, PageController, etc.).
- `routes/web.php`: Defines the web routes for frontend and backend.
- `resources/views`: Contains the Blade templates for the UI.
- `database/migrations`: Database structure definitions.
- `public`: Publicly accessible assets (images, css, js).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
