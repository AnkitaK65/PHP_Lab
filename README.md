# PHP Development in VS Code

## Introduction
This guide explains how to set up PHP programming in **VS Code**.

## Official Documentation
https://code.visualstudio.com/docs/languages/php



## Prerequisites
- **VS Code Installed**
- **Standalone PHP Installed**
- (Optional) **Composer Installed** for package management

## Installing PHP
1. Download PHP from: [https://windows.php.net/download](https://windows.php.net/download).
2. Extract the ZIP file to `C:\php` (or another preferred location).

## Configuring PHP in System Path
1. Open **Windows Search** → Type **Environment Variables**.
2. Click **Edit the system environment variables**.
3. In **System Properties**, go to **Environment Variables**.
4. Under **System Variables**, find `Path`, select it, and click **Edit**.
5. Click **New** → Add `C:\php` (or your extracted PHP location).
6. Click **OK** and restart your system.

## Verifying PHP Installation
1. Open **Command Prompt (cmd)** and type:
   ```sh
   php -v
   ```
2. If you see the PHP version displayed, the installation is successful.

## Writing and Running PHP Code in VS Code
1. Open **VS Code** and create a new folder (`php-projects`).
2. Create a new file **test.php** and add:
   ```php
   <?php
   echo "Hello, PHP!";
   ?>
   ```
3. Open the **VS Code terminal** (`Ctrl + ~`) and run:
   ```sh
   php test.php
   ```
4. Expected Output:
   ```
   Hello, PHP!
   ```

## Running a Local PHP Server (Optional)
If you want to test PHP in a browser without XAMPP:
```sh
php -S localhost:8000
```
Then open a browser and go to `http://localhost:8000/test.php`.

