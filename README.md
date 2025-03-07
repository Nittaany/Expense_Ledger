# ExpenseLedger - Budget Tracking System

## 📌 Project Overview

ExpenseLedger is a **budget tracking system** built using **PHP** and **MySQL**, designed to help users efficiently manage their expenses. This project is a small college-level mini-project that allows users to **set a budget, track expenses, and generate reports** based on different time periods.

---

## 🚀 Features

### 🏠 Dashboard

- Provides an overview of expenses and budget.
- Displays a summary of financial activities.

### 💰 Set Budget

- Users can define their monthly budget.
- Helps in tracking expenses against the set budget.

### 📑 Expenses

- Allows users to **add, view, and manage** expenses.
- Categorizes expenses for better analysis.

### ➕ Add Expenses

- Users can log new expenses with details like **amount, category, and date**.

### 🛠 Manage Expenses

- Edit or delete expenses as needed.
- Maintain a clean and organized record.

### 📊 Expense Reports

- Generates expense reports based on different time frames:
  - **Date-wise Report**: View expenses for a selected date range.
  - **Monthly Report**: Tracks expenses for a particular month.
  - **Yearly Report**: Provides an overview of yearly spending trends.

---

## 🛠 How to Run This Project

### 1️⃣ **Clone the Repository**

```sh
git clone https://github.com/Nittaany/Expense_Ledger.git
cd Expense_Ledger
```

### 2️⃣ **Start a Local Server**

Use the built-in PHP server:

```sh
php -S localhost:8000
```

Your project should now be accessible at **http://localhost:8000**.

### 3️⃣ **Set Up the Database**

#### ✅ **Create Database**

Check If MySQL Is Installed

```sh
mysql --version
```

it will show some version number. Then,

```sh
mysql -u root -p
```

Enter your MySQL password (leave blank if none is set), then:

```sql
CREATE DATABASE expenseman;
```

Exit MySQL (`exit;`).

#### ✅ **Import Database**

```sh
mysql -u root -p expenseman < /Users/nitant/Documents/Expense-Ledger/DATABASE_FILE/expenseman.sql
```

### 4️⃣ **Verify Database Connection**

Check the **connection.php** file:

```php
$dsn = 'mysql:host=localhost; dbname=expenseman';
$user = 'root';
$pass = 'your_sql_password';
//replace your MySQL password with your_sql_password

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Connection Error! " . $e->getMessage();
}
```

If you face issues, update **$user** and **$pass** based on your MySQL credentials.

### 5️⃣ **Run the Project**

Restart the PHP server:

```sh
php -S localhost:8000
```

Access **http://localhost:8000** in your browser.

---

## 🛠 Common Issues and Solutions

### ❌ Error: "Connection Error! SQLSTATE[HY000] [2002] No such file or directory"

**Solution:**

1. Ensure MySQL is running:
   ```sh
   brew services start mysql
   ```
2. Try connecting using:
   ```sh
   mysql -u root -p
   ```
3. If access is denied, reset MySQL root password:
   ```sh
   ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'newpassword';
   FLUSH PRIVILEGES;
   ```
   Then update `connection.php` with `newpassword`.

### ❌ Error: "phpMyAdmin Not Found"

**Solution:**

1. Install phpMyAdmin:
   ```sh
   brew install phpmyadmin
   ```
2. Start the server and try accessing **http://localhost/phpmyadmin**.

### ❌ Error: "Access denied for user 'root'@'localhost' (using password: NO)"

**Solution:**

1. Restart MySQL:
   ```sh
   brew services restart mysql
   ```
2. If the issue persists, reset the password (as shown above).

---

## 🎯 Future Enhancements

- Implement user authentication for better security.
- Add graphical insights for expense trends.
- Enable multi-user access with separate budgets.

---

## 📞 Support

If you face any issues, feel free to raise an issue in the GitHub repository or contact me.
