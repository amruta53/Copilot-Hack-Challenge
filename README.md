
# Copilot-Hack-Challenge

This repository contains multiple challenges designed to demonstrate the capabilities of GitHub Copilot in various programming tasks. The challenges cover different aspects of software development, including API development, CRUD operations, UI development, and testing.

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

## Challenge 2: API, UI Development and CRUD Operations

### Objective

Convert a PHP application to Golang, document the code, and perform CRUD operations using a REST Controller. Use a JSON file or a database to store data. Create a ReactJS UI to interact with the backend and perform CRUD operations.

### Specifications

1. **Model Class:**
    - Use the provided JSON data to create a model class.
    - Example JSON data includes items like laptops, smartphones, and tablets.

2. **CRUD Operations:**
    - Implement GET, PUT, POST, and DELETE operations using REST Controller annotations.
    - Example endpoints:
        - GET /api/items: Retrieve all items.
        - GET /api/items/{id}: Retrieve an item by its ID.
        - POST /api/items: Create a new item.
        - PUT /api/items/{id}: Update an existing item.
        - DELETE /api/items/{id}: Delete an item.

3. **Exception Handling:**
    - Add appropriate exception handling for the CRUD operations.

4. **UI Development:**
    - Create a ReactJS UI to display data in a table format and perform CRUD operations.

5. **Testing:**
    - Write unit and integration tests for the Golang code.
    - Include edge cases and null conditions.

### High-Level Tasks

1. Convert PHP code to Golang.
2. Write documentation for the Golang code.
3. Implement CRUD operations and exception handling.
4. Develop a ReactJS UI for the backend.
5. Write and run test cases for the CRUD operations.

