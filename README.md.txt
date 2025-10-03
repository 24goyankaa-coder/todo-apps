# Todo App - CA2

## Requirements
- PHP 7.4+
- MySQL
- Web server (Apache / built-in PHP server)

## Setup
1. Create a MySQL database (e.g. `todo_db`).
2. Run the SQL in `schema.sql` to create the `todos` table.
3. Update `database/db.php` with your DB credentials.
4. Start the server:
   - With PHP built-in server: `php -S localhost:8000`
5. Visit `http://localhost:8000/index.php`

## Features implemented
- Create Todo
- List Todos
- Mark a Todo as Completed
- Edit Todo (click "Edit" link next to the todo)
- Delete Todo (click "Delete" link)
- Due Today section on the list page (shows todos due today)
