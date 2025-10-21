# Training
Here are the core learning points from the "PHP For Beginners" series, covering the Fundamentals, Dynamic Web Applications, and the start of the Notes Mini-Project

## Foundational PHP Skills

 Setting up a local development environment (editor, terminal)
 Understanding the basic PHP tag (`<?php ?>`) and code execution
 Defining and using variables and basic data types
 Implementing program flow using conditionals (`if/else`) and Boolean logic
 Working with arrays (indexed and associative key-value pairs)
 Creating reusable functions and utilizing built-in filters
 Understanding code separation (keeping PHP logic separate from HTML display)

---

## Dynamic Web Applications

 Implementing a basic router to map requested URL paths to specific PHP files (controllers)
 Using PHP Partials (`require`/`include`) for reusable HTML components (headers, navigation)
 Accessing Superglobals (`$_SERVER`, `$_GET`) to retrieve request information and URL data
 Creating and structuring a MySQL database table (defining primary keys and columns)
 Connecting PHP to the database securely using PDO (PHP Data Objects)
 Executing simple `SELECT` SQL queries and fetching results as associative arrays
 Implementing the Model layer by extracting database logic into a reusable `Database` class
 Centralizing configuration (eg, database credentials) in an external file for flexibility
 Preventing SQL Injection attacks using prepared statements and parameter binding

---

## Notes Mini-Project Start

 Creating the database table structure required for a list of notes (ID, body, user ID)
 Building the initial view page to render and display the fetched list of notes dynamically
 Creating individual note detail pages by fetching a single record based on a URL ID
 Implementing CRUD Read operations (fetching all notes and fetching one specific note)