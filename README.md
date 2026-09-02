# News Portal (MVC PHP Project)

A simple news portal written in plain PHP (without third-party frameworks) using the MVC (Model-View-Controller) architectural pattern and a MySQL database.

## Core Features

- **Home Page**: Displays the latest news articles.
- **Categories**: Filter news by category.
- **Detailed View**: Read the full text of a news article.
- **Comments**: Ability to leave comments under news articles (including comment count).
- **User Authentication**: Registration and login system (for regular users and administrators).

## Admin Panel
The project includes a secure admin panel with full CRUD (Create, Read, Update, Delete) functionality for news:
- View a list of all news articles.
- Add new records with image uploading.
- Edit existing news (text, title, category, and replace image).
- Delete news.

## Technology Stack
- **Backend**: PHP (OOP, PDO, MVC pattern).
- **Frontend**: HTML5, CSS3 (Bootstrap 3/4).
- **Database**: MySQL.

## Project Structure
- `/admin` — Administration panel with its own MVC (models, views, controllers, and routing).
- `/controller` — Main controllers for the public part of the site.
- `/model` — Database interaction classes (News, Category, Comments, Register).
- `/view` — HTML templates and views for the public part.
- `/inc` — Configuration files (including DB connection).
- `/images` — Directory for storing uploaded images.

## Installation and Setup

1. Clone the repository into your local web server directory (e.g., `htdocs` for XAMPP):
   ```bash
   git clone https://github.com/DimaAllikvee/news_portal.git
   ```
2. Import the database dump `news_database.sql` via phpMyAdmin.
3. Ensure the DB connection settings in `inc/Database.php` are correct (default is login `root`, empty password, database `news_portal`).
4. Open your browser and go to `http://localhost/news_portal/`.
5. To access the admin panel, navigate to `http://localhost/news_portal/admin/` (Credentials: `admin@newsportal.ee` / `123456`).
