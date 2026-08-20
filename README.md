![Inkode Banner](./public/assets/images/Banner.png)
# Inkode - Modern Blogging & Publishing Platform

Inkode is a high-performance, modern publishing and blogging platform built with **Laravel 12**, **PHP 8.4**, **Tailwind CSS v4**, and **Pest 3**. It offers advanced user interaction features, AI-powered assistance, robust notification delivery, and sleek, contemporary aesthetics using glassmorphism.

---

## 🚀 Key Features

- **Authentication & Security (Fortify-backed)**: Supports standard login, registration, email verification, two-factor authentication (2FA), and secure passkeys.
- **Content Creation & Management**:
  - Full CRUD operations on articles/posts with states (Draft, Published, Archived).
  - AI writing assistant integrations.
  - Image uploads and excerpt customization.
  - Category-based filtering and tag management.
- **Interactivity & Social Engagement**:
  - **Likes & Bookmarks**: Users can bookmark posts for reading later or like articles to show appreciation.
  - **Follow System**: Users can follow/unfollow authors. The home page features a custom **Trending Now** section showing top-viewed articles from followed users.
  - **Nested Comments**: Users can comment on published posts.
- **Real-Time Notification System**: Receive in-app notifications when new users follow you or interact with your posts, with options to mark read, unread, or delete.
- **Role-Based Access Control (RBAC)**: Manage users, roles, and fine-grained capabilities in a dedicated admin dashboard.
- **Aesthetic Design**: Modern layout utilizing Glassmorphism, tailored Tailwind CSS v4 palettes, dark mode support, and smooth micro-animations.

---

## 🛠️ Technology Stack

- **Framework**: Laravel 12
- **Language**: PHP 8.4
- **Styling**: Tailwind CSS v4
- **Testing**: Pest 3 / PHPUnit 11
- **Asset Bundling**: Vite

---

## 💻 Getting Started

### Prerequisites

- PHP 8.4 or higher
- Composer

- A database engine (MySQL / SQLite / PostgreSQL)

### Installation

1. **Clone the repository**:
   ```bash
   git clone [https://github.com/nadamoq/Inkode.git]
   cd Inkode
   ```

2. **Install PHP dependencies**:
   ```bash
   composer install
   ```

3. **Install frontend dependencies**:
   ```bash
   npm install
   ```

4. **Environment Setup**:
   Copy `.env.example` to `.env` and configure your database settings:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run Migrations & Seeders**:
   ```bash
   php artisan migrate --seed
   ```

6. **Start Dev Servers**:
   Run Laravel's local server:
   ```bash
   php artisan serve
   ```
   And run Vite's development server in a separate terminal:
   ```bash
   npm run dev
   ```

---

## 🧪 Testing

The project uses **Pest 3** for feature and unit tests. Run the test suite using:

```bash
php artisan test --compact
```
