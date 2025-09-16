# Laravel Session, Flash Session & File Upload

This repository demonstrates the implementation of **Session**, **Flash Session**, and **File Upload** in Laravel.  
It is a practice project to understand how Laravel handles user session data, temporary flash messages, and file handling.

---

## 🚀 Features

- **Session Handling**
  - Store, retrieve, and delete session data.
  - Manage user-specific data across multiple requests.
 
- **Flash Session**
  - Store temporary messages that last for only one request/redirect.
  - Useful for success/error messages after form submissions.

- **File Upload**
  - Upload files through forms.
  - Validate uploaded files.
  - Store files in the `storage` and `public` directories.

---

## 🛠️ Tech Stack

- [Laravel](https://laravel.com/) 8/9/10 (compatible)
- PHP 7.4+ / 8+
- Composer
- MySQL (optional for session driver)

---

## 📂 Project Structure

```bash
├── app/Http/Controllers/
│   ├── SessionController.php    # Handles session operations
│   ├── FlashController.php      # Handles flash messages
│   └── UploadController.php     # Handles file upload
├── resources/views/
│   ├── session.blade.php        # Session demo page
│   ├── flash.blade.php          # Flash message demo page
│   └── upload.blade.php         # File upload form
├── routes/web.php               # Application routes
