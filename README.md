#Blog Project

This is a simple blog project built using Laravel. It allows users to create, edit, and delete blog posts and categories. It also includes authentication and authorization for users with different roles.

I##nstallation
Clone the repository: git clone https://github.com/yourusername/blog.git
Install dependencies: composer install
Create a new .env file by copying the .env.example file and filling in your database details: cp .env.example .env
Generate a new application key: php artisan key:generate
Run database migrations: php artisan migrate
Optionally, seed the database with sample data: php artisan db:seed
Start the development server: php artisan serve

##Usage
You can access the blog project by visiting http://localhost:8000 in your web browser.

##Authentication
The blog project includes authentication and authorization for users with different roles. The available roles are:

admin: Has full access to all features.
user: Can create, edit, and delete their own blog posts, but cannot access other users' posts or categories.
You can log in using the following default credentials:

Email: admin@example.com
Password: password
You can also register a new user account by clicking the "Register" link on the login page.

##Creating a Blog Post
To create a new blog post, click the "New blog" button on the home page or in the navigation bar. Fill in the title, content, and category fields, and click "Create" to save the post.

Editing a Blog Post
To edit an existing blog post, click the "Edit" button next to the post on the home page or in the navigation bar. Make your changes to the title, content, and/or category fields, and click "Update" to save the changes.

Deleting a Blog Post
To delete an existing blog post, click the "Delete" button next to the post on the home page or in the navigation bar. Confirm that you want to delete the post, and it will be permanently removed from the database.

Creating a Category
To create a new category, click the "New category" button on the home page or in the navigation bar. Fill in the name field, and click "Create" to save the category.

Editing a Category
To edit an existing category, click the "Edit" button next to the category on the home page or in the navigation bar. Make your changes to the name field, and click "Update" to save the changes.

Deleting a Category
To delete an existing category, click the "Delete" button next to the category on the home page or in the navigation bar. Confirm that you want to delete the category, and all associated blog posts will be permanently removed from the database.
