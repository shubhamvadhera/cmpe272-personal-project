# Website - Dextrous
#### This is the code for the website hosted at http://shubhamvadhera.com/

## Description

This is the website that integrates various exercises and concepts done during the semester. The website provides the following functionalities:

## List of functionalities:

  1. Basic
    * The web site contains the following sections:
      * Home (the main page)
      * About (Description about the company)
      * Products/Services (The products/services that the company sells)
      * News (Latest news about the company, products, etc.)
      * Contacts (Company contacts)
        * The contacts are stored in text file(s) and php is used to read into the web site.

  2. Security 
    * Added a secure section in the web site.
    * The secure section holds a document listing the current users of web site.
    * The secure section requires login by an administrator. You can use the id "admin".
    * Uses the userid and password authentication method for the login process.
  
  3. Web cookies
    * Modified the Products/Services section and added ten products/services in thr company web site.
    * Each product/service should have their own page with descriptions and pictures.
    * Used web cookies technologies to track the last five previously visited products.
    * Added a link in the Products/Services section to show the last five previously visited products.
    * Added a link to show five most visited products.
  
  4. Database 
    * Created a mySQL database.
    * Created a user table that contains at least first name, last name, email, home address, home phone and cell phone.
    * Created a User section/tab in the web site.
    * The User section links to two forms:
      * User creation form with all the fields above.
      * User search form allowing search by names, email or phone numbers.
    * Created 20 users.

  5. CURL
    * Used CURL to implement the following:
      * Created a php web app/link that shows a list of users from own company.
      * Created a web link that shows list_of_users from 2-3 other companies. Local list_of_user is accessed via normal php database call, remote company's users are accessed via CURL calls.
