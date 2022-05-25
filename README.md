# connectDB
#### Simplifies the way you manage posts
Keep records of any post from any WordPress site.
 - All posts.
 - Automatically updated.
 - Local database.

> Using WordPress REST API, JavaScript, PHP and MySQL

##  How to use
#### v1.0.0
	Composed by database, index and insertDB

1. Change your database connection on **database.php**.

2. **Replace** some information on **index.php**:

	-  **URL site**:
	`fetch('PAGE_URL/wp-json/wp/v2/posts')`
	
	- **Array length**: first index *(0)*, lastest post:
	`datos[0]['title']['rendered'];`
	
	 	> In my case, I only take the title and content of the post.
3. Run  **index.php** on your web server, or execute `php file_name` on Linux. 
##
