# Building GraphQL Applications in Laravel

## 🚀 Overview

GraphQL is a query language for APIs that enables application-to-application communication and provides a complete and understandable description of the data in your API, making it easier to evolve APIs over time. GraphQL lets you ask for what you want in a single query by enabling clients to request their own unique data specifications, saves bandwidth, and reduces waterfall requests. In this course, Rasheeda Yehuza shows you how to set up a GraphQL in Laravel (PHP) using Lighthouse to query data.

## Learning objectives

- Discover the benefits of GraphQL and learn why you might use it over REST.
- Review GraphQL use cases so you can better determine when to use GraphQL as your application interface.
- Learn about the most basic components of a GraphQL schema, including object types and fields, which provide a good grounding for all the other types in GraphQL.
- Review the most common object types of a GraphQL schema, including query and mutation types.
- Learn how to set up and bootstrap a new Laravel application.
- Discover how to connect to a database server, seed the built-in user tables, and connect the new Laravel application to access the database and tables.
- Learn how to set up and configure Lighthouse in a new Laravel application.
- Define queries in a GraphQL service and query a GraphQL application using an existing user database.
- Discover how to query a GraphQL API with arguments on an existing user's table and define the exact shape of data needed for specific arguments.
- Review how to use GraphQL mutations to create, update, and delete models using Lighthouse.

## 📸 Introduction to Graphal

-

## 🛠 Installation

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/yourusername/your-repository.git
   ```

2. **Navigate to the Project Directory:**

   ```bash
   cd your-repository
   ```

3. **Install Dependencies:**

   ```bash
   composer install
   npm install
   ```

4. **Set Up Environment File:**

   Copy `.env.example` to `.env` and configure your database and other environment variables.

   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key:**

   ```bash
   php artisan key:generate
   ```

6. **Run Migrations:**

   ```bash
   php artisan migrate
   ```

7. **Start the Development Server:**

   ```bash
   php artisan serve
   ```
