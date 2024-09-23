FOR TEEN WHO ARE FACING CHALLENGE AND NEED HOPE
# TeenZee
### NOTE 23-09-2024

I developed Teenzee for our final project at ALX - Africa Foundational phase. This master branch features and I deployed for presentation at ALX-Africa. I worked on independently afterwards, in an effort to practice HTML5, CSS3, JAVASCRIPT, MySQL and Php. You can view this work at [this branch](https://victorpropython.github.io).

-- Victor

---

<h1 align="center">TeenZee</h1>
<p align="center">
  A platform Built To Help Teenagers Navigate Through Life Huddles, Believing in whom they want to become and achieving it. Having This in mind "And Vision Maketh Alive"
</p>

<p align="center">
  <img src="https://github.com/victorpropython/Teenzee/blob/master/pictures/teenzee-logo.WEBP"
       alt="TeenZee logo"
  />
</p>

## Story of how your project was Inspired:bulb:
	My story was inspired as a result of the challenges i faced while growing up. Then i never had a senior brother or a some one abit older than me for guidance and as a friend. This made almost every decision i made was either i had to do trial and error or have to read or ask questions alot in order not to make mistake and this wasnt easy at all.
	My dad was always busy at work, then he lost his job this wasn't fair, oh my God it wasnt   easy, i had to go and serve (informal training) for seven years on the course of that, i vow that i would not allow person near me or related to me or even the next generation after me to pass through the same process like me.
	Thus, i now saw that this same issue is also being faced by many youth and teens , like some would like to commit sucide at some point in life not only due to depression but also peer pressure and some other issues. 
	Hence, this made me to come up with the idea of this Teenzee , were teenzees can find leverage at any point in their life.Even if they feel like giving up, they can have a mentor who will guide them and help them achieve their life goal and also feel among.

### Technology & Architecture?

Our kind of question.

Language used: HTML, CSS, PHP, Javascript and MySQL.

Tools:  Github, Github.io, Visual Studio code, PhpMyAdmin and Chrome browser

---

* The architecture of the TeenZee project is designed to provide a seamless and intuitive experience for both students and mentors. It follows a 3-tier architecture consisting of the front-end, back-end, and database layer. Here’s a brief description:


1. Front-End (Client-Side)

The front-end of TeenZee is responsible for interacting with users, including students and mentors. It is built using standard web technologies such as HTML, CSS, and JavaScript. Here's how the front-end interacts with users:

User Interface: The UI includes the home page, resources page, login forms, and role-based dashboards (for students and mentors). The UI is responsive, adapting to different devices using media queries in CSS.
Form Handling: Front-end handles user inputs via forms (e.g., registration, login) and sends data to the back-end through HTTP requests.
Dynamic Behavior: JavaScript enhances the user experience, adding interactive elements, such as form validation and transitions



2. Back-End (Server-Side)
The back-end is where all the business logic and server-side processing take place. It is powered by PHP and handles interactions between the front-end and the database:



User Authentication: The back-end processes user registration and login requests. It checks for valid credentials and matches users to their assigned roles (student or mentor).
Role-Based Redirection: Once authenticated, users are redirected to their respective dashboards depending on their role, providing personalized content and resources.
API Integrations: The back-end communicates with external APIs to fetch and display motivational videos or articles in the resources section.


Security: Passwords are securely hashed using PHP's password hashing functions, and sensitive data is sanitized to prevent SQL injection and other security risk

3. Database (Data Layer)
The database is the core of the application, where all user data, resources, and interactions are stored. It is managed using MySQL:

User Data: User information such as usernames, emails, hashed passwords, and roles (student or mentor) is stored in the users table.
Resource Data: Motivational videos, educational content, and articles are stored either as static content in the database or fetched dynamically via APIs and stored in relevant tables.
Relationships: The database is designed with tables for users, roles, and resources. Queries are optimized for fast retrieval of content based on user roles.


Security: Passwords are securely hashed using PHP's password hashing functions, and sensitive data is sanitized to prevent SQL injection and other security risk



4. Data Flow
User Request: A user submits a form (e.g., login or registration) on the front-end. The data is sent via an HTTP POST request to the back-end PHP script.
Server Processing: PHP processes the request, validates input, and interacts with the MySQL database. It retrieves or inserts data based on the user's actions.
API Calls: If the user accesses the resources section, PHP makes an API call to external providers (e.g., YouTube API) to fetch motivational videos or other educational resources.
Response: The processed data is then sent back to the front-end, where it's rendered to the user (e.g., showing the dashboard or an error message if login fails).



5. Security
Password Hashing: User passwords are hashed before being stored in the database to ensure security.
Input Validation: The system performs input sanitization and validation on both the client and server sides to prevent SQL injection and cross-site scripting (XSS).
Session Management: PHP sessions are used to manage user login states and role-based access throughout the application.

Client (Browser): Front-end
Server (PHP): Back-end logic and API handling
Database (MySQL): Data storage.


This architecture ensures that TeenZee is scalable, secure, and maintains a clear separation of concerns between the user interface, logic, and data layers.

<h1 align="center"> Diagram of the architecture  </h1>
	<img src="https://victorpropython.github.com/Teenzee/blub/master/pictures/diagram.jpg" 
	alt="architetural diagram"
	width="600"
/>

## Medium Blog Posts :newspaper:

For a more in-depth description of TeenZee as well as an overview of its tech stack and development process, we have written a series of articles on Medium. You can read them at the links below:

- [The Making of TeenZee Website](https://medium.com/@victorchibuzor3109/the-making-of-teenzee-website-062fa6cea144)

### Dependencies :couple:

**Front-End**:

| Tool/Library                                                                       | Version |
| ---------------------------------------------------------------------------------- | ------- |
| [HTML5](https://www.w3schools.com/)                                      | ^5.2  |
| [Javascript](https://www.w3schools.com/)                                                      | ^ES6 |
| [CSS3](https://www.w3schoolscom/)                                            | ^2.2.4  |
| [MySQL](https:/www.apachefriends.org/)                                              | ^5.7 |

User Interface: The UI includes the home page, resources page, login forms, and role-based dashboards (for students and mentors). The UI is responsive, adapting to different devices using media queries in CSS.
Form Handling: Front-end handles user inputs via forms (e.g., registration, login) and sends data to the back-end through HTTP requests.
Dynamic Behavior: JavaScript enhances the user experience, adding interactive elements, such as form validation and transitions



2. Back-End (Server-Side)
The back-end is where all the business logic and server-side processing take place. It is powered by PHP and handles interactions between the front-end and the database:



User Authentication: The back-end processes user registration and login requests. It checks for valid credentials and matches users to their assigned roles (student or mentor).
Role-Based Redirection: Once authenticated, users are redirected to their respective dashboards depending on their role, providing personalized content and resources.
API Integrations: The back-end communicates with external APIs to fetch and display motivational videos or articles in the resources section.




. Database (Data Layer)
| [Xampp(MySQL)](https://www.npmjs.com/package/clipboard-copy)                     | ^8.2.12 |

 process works as follows:

1. User enters email (for login) or both email + username (for signup). Front-end initially sends email/username to back-end.

   1. If logging in, and an account does not exist with the given email, back-end returns a redirect code, and user is directed to sign-up.
   

## Authors :black_nib:

- **Victor Chibuike** <[Victor Chibuike](https://github.com/victorpropython)>

## License :lock:

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.
