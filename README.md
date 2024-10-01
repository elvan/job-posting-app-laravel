# Job Posting App (Laravel)

## Description

The Job Posting App is a full-featured web application built using Laravel for managing job listings, applications, and user profiles. It provides functionalities for job search, bookmarking, applicant management, and user authentication. This platform aims to connect job seekers and employers by offering a simple and effective way to create, manage, and apply to job listings.

## Features

-   **Job Listings Management**
    Manage job postings with CRUD (Create, Read, Update, Delete) functionality. Users can create new job listings, upload company logos, and edit or delete their own postings. Each job listing includes detailed information, such as company details, job requirements, and salary ranges.

-   **Job Search Functionality**
    Implement search capabilities with keyword and location filters. Users can search for jobs based on specific criteria, such as job title, description, or location, and view relevant search results with a back button to navigate easily.

-   **Job Application System**
    Allow job seekers to apply for job listings through a modal-based application form. Applicants can submit resumes and provide additional information such as contact details and location. The system also supports managing applicants from the employer's dashboard.

-   **Bookmarking Jobs**
    Users can bookmark job listings for future reference. Bookmarked jobs are saved to a separate section for easy access, and users can add or remove bookmarks directly from the job details page.

-   **User Dashboard and Profile Management**
    Provide users with a personal dashboard where they can manage their job listings and view applicants. Users can update their profiles, including uploading a profile picture (avatar), and manage job listings directly from the dashboard.

-   **Geolocation Integration**
    Integrate Mapbox to display job locations on an interactive map based on the job's city and state. The system uses Mapbox's geocoding API to fetch location data and plot it on a map for each job listing.

-   **Job Application Notifications**
    Notify job owners via email when a new job application is submitted. The system sends the job application details, including the applicant's contact information and resume, to the job owner's email address.

-   **Authentication and Authorization**
    Implement user authentication for registration, login, and logout functionality. Users are authorized to manage only their own job listings, and certain actions, like job creation, edit, and deletion, are protected with authorization policies.

-   **Responsive Design and UI Enhancements**
    Implement a responsive and user-friendly interface using Tailwind CSS. Components like alerts, modals, and navigation elements have been enhanced to provide a smooth user experience across all devices.

#### Technology Stack

-   **Framework**: Laravel
-   **Frontend**: Tailwind CSS, Alpine.js
-   **Database**: MySQL (via Laravel Eloquent ORM)
-   **Geolocation**: Mapbox API for map and geocoding integration
-   **Mail**: Laravel Mailables for email notifications
-   **Storage**: Laravel's file storage for managing resumes and company logos

## Installation

### Prerequisites

-   **PHP 8.x**
-   **Composer** - PHP dependency manager
-   **MySQL** - or any supported database
-   **Node.js & NPM** - For managing frontend assets
-   **Mapbox API Key** - Required for geocoding and map display

### Environment Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/elvan/job-posting-app-laravel.git
    cd job-posting-app-laravel
    ```

2. Copy the `.env.example` file and create your `.env` file:

    ```bash
    cp .env.example .env
    ```

3. Set your environment variables in the `.env` file:

    - Database configuration (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`)
    - Mapbox API key (`MAPBOX_API_KEY`)
    - Mail configuration (`MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, etc.)

4. Install PHP dependencies via Composer:

    ```bash
    composer install
    ```

5. Install Node dependencies:

    ```bash
    npm install
    ```

6. Generate the application key:

    ```bash
    php artisan key:generate
    ```

7. Run the migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

8. Compile the assets:

    ```bash
    npm run dev
    ```

## Usage

Once the installation is complete, start the local development server:

```bash
php artisan serve
```

Open your browser and navigate to `http://localhost:8000`.

### Features after setup:

-   **Job Listings**: Browse, create, edit, and delete job postings.
-   **Job Search**: Use the search bar to filter jobs by keywords and location.
-   **Job Applications**: Apply to jobs, submit resumes, and manage job applications as an employer.
-   **Bookmark Jobs**: Save jobs to a personal bookmark list.
-   **Geolocation**: View job locations on an interactive map powered by Mapbox.
-   **Profile Management**: Update your user profile and avatar.
-   **Admin Dashboard**: Manage job listings, view applicants, and manage profile settings.
