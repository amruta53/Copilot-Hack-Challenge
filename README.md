# Copilot-Hack-Challenges

<a href="#">
    <img src="Images/copilot-adventures.jpg" style="width: 830px;" />
</a>

The Copilot Hack Challenges are designed to push the boundaries of what can be achieved with GitHub Copilot. Enhance your problem-solving skills, learn new technologies, and collaborate with others to create innovative solutions.

## Challenges Overview

### Enter the Adventure Arena
Clone the repo and run locally:

```bash
git clone https://github.com/amruta53/Copilot-Hack-Challenge
```


## Challenge 1: The Clockwork Town of Tempora

### Background

In the mechanical town of Tempora, everything operates on clockwork and precise timing. At the heart of the town is the Grand Clock Tower, responsible for keeping time for all the town's activities. However, over the years, some smaller clocks in the town have started to drift away from the accurate time.

### Objective

Create a system that checks all the clocks in the town and synchronizes them with the Grand Clock Tower. You'll be given a list of times from various clocks around the town, and you must determine how many minutes each clock is ahead or behind the Grand Clock Tower's time.

### Specifications

1. **Clock Data:**
    - The clock times are provided in a 24-hour format.
    - The Grand Clock Tower is at 15:00.
    - Clock times around town:
        - Clock 1: 14:45
        - Clock 2: 15:05
        - Clock 3: 15:00
        - Clock 4: 14:40

2. **Time Analysis and Output:**
    - Determine how many minutes each clock is ahead or behind the Grand Clock Tower.
    - The result should be an array of integers representing the time difference in minutes. Positive values indicate the clock is ahead, and negative values indicate it's behind.

### Constraints

- Use GitHub Copilot and write the simulation in any language you'd like.
- Focus on clear and concise code.
- Creating a visual representation for the clocks is optional but encouraged if you have time.

# Challenge 2 – API Development and CRUD Operations

## 1. Setup Your Development Environment

### Install JDK:
- Ensure you have the Java Development Kit (JDK) installed. You'll need JDK 8 or higher.
- Verify installation by running `java -version` and `javac -version` in your terminal. This should return the installed versions.

### Choose an Integrated Development Environment (IDE):
- Use IntelliJ IDEA, or Visual Studio Code (with Java support and Copilot enabled).

### Set Up Maven or Gradle:
- Maven and Gradle are build automation tools that help manage project dependencies.
- Install Maven or Gradle if they aren't already installed.
- Set up your project as a Maven or Gradle project in your IDE. This will create the necessary project structure.

## 2. Create a New Java Project

## 3. Add Required Dependencies

Dependencies are external libraries that your project needs to function. They are managed through `pom.xml` for Maven or `build.gradle` for Gradle.

### Spring Boot:
- Add Spring Boot, a framework for building RESTful APIs in Java.
- For Maven, add the `spring-boot-starter-web` dependency to your `pom.xml`.
- Spring Boot simplifies application development by providing pre-configured templates.

## 4. Create the Model Class for the Following JSON

```json
[
    {
        "id": "1",
        "name": "Laptop",
        "description": "A high-performance laptop suitable for gaming and work.",
        "price": 1200.00
    },
    {
        "id": "2",
        "name": "Smartphone",
        "description": "A latest-generation smartphone with a large display and powerful camera.",
        "price": 800.00
    },
    {
        "id": "3",
        "name": "Wireless Headphones",
        "description": "Noise-cancelling wireless headphones with long battery life.",
        "price": 200.00
    },
    {
        "id": "4",
        "name": "Smartwatch",
        "description": "A smartwatch with fitness tracking and customizable watch faces.",
        "price": 150.00
    },
    {
        "id": "5",
        "name": "Tablet",
        "description": "A lightweight tablet with a sharp display, ideal for reading and browsing.",
        "price": 300.00
    }
]
```
### 5. Read and Write to the JSON file 
### 6. Perform CRUD operations using REST Controller 
GET, PUT, POST, DELETE using the annotations 
1. GET /api/items: Retrieve all items. 
2. GET /api/items/{id}: Retrieve an item by its ID. 
3. POST /api/items: Create a new item. 
4. PUT /api/items/{id}: Update an existing item. 
5. DELETE /api/items/{id}: Delete an item. 
### 7. Add Exception handling
### 8. You are free to use a database instead of a json file for crud operations.
 
### 9. Improve UI
1.	Display the data In the table format on UI 
2.	Perform CRUD operations 

### 10. Add Test Cases
1.	Write the test cases for the GET, POST, PUT and DELETE operations 
2.	Include edge cases and null conditions 
3.	Run the test cases 