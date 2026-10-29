# Retail Management System

## Purpose

Replace manual retail records with a system for managing products, stock, customers, sales, documents, and reports.

## Core modules

- Identity
- Product Catalog
- Inventory
- Customers
- Sales
- Documents
- Reporting

## Technology

- Backend: Laravel REST API
- Database: PostgreSQL
- Frontend: React

## Architecture

Modular monolith with clear domain boundaries.

## Core workflow

Product intake -> stock availability -> sale -> stock deduction -> document generation -> reporting

## Request-response flow

1. A user interacts with React.
2. React sends an HTTP request to Laravel.
3. Laravel validates the request.
4. Laravel applies business rules.
5. Laravel reads or writes PostgreSQL data.
6. Laravel returns a JSON response.
7. React displays the result.

## Example retail event

When a sales officer sells an A4 exercise book:

1. The sale is submitted through the application.
2. Laravel validates the product and quantity.
3. The sale and sale item are recorded.
4. Inventory is reduced.
5. The system generates the required document.
6. The transaction becomes available for reporting.

## Request-response flow

1. A user interacts with React.
2. React sends an HTTP request to Laravel.
3. Laravel validates the request.
4. Laravel applies business rules.
5. Laravel reads or writes PostgreSQL data.
6. Laravel returns a JSON response.
7. React displays the result.

## Example retail event

When a sales officer sells an A4 exercise book:

1. The sale is submitted through the application.
2. Laravel validates the product and quantity.
3. The sale and sale item are recorded.
4. Inventory is reduced.
5. The system generates the required document.
6. The transaction becomes available for reporting.