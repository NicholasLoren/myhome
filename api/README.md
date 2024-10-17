# API Documentation for Property Management System

## Overview
This API provides endpoints to manage and retrieve property listings including apartments, houses, condos, lands, offices, and shops. It supports operations for sales and rentals, allowing clients to get details of properties based on unique identifiers.

## Base URL
http://yourdomain.com/api/public

## Endpoints

### Apartments Endpoints

#### 1. Get Apartments for Sale
- **Endpoint**: `/apartments/sale`
- **Method**: `GET`
- **Description**: Retrieve a list of apartments available for sale.
- **Response**: 
  - Status 200: JSON array of apartments for sale.

#### 2. Get Single Apartment for Sale
- **Endpoint**: `/apartments/sale/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific apartment for sale using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the apartment.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

#### 3. Get Apartments for Rentals
- **Endpoint**: `/apartments/rentals`
- **Method**: `GET`
- **Description**: Retrieve a list of apartments available for rent.
- **Response**:
  - Status 200: JSON array of apartments for rent.

#### 4. Get Single Apartment for Rentals
- **Endpoint**: `/apartments/rentals/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific apartment for rent using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the apartment.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

### Houses Endpoints

#### 1. Get Houses for Sale
- **Endpoint**: `/houses/sale`
- **Method**: `GET`
- **Description**: Retrieve a list of houses available for sale.
- **Response**: 
  - Status 200: JSON array of houses for sale.

#### 2. Get Single House for Sale
- **Endpoint**: `/houses/sale/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific house for sale using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the house.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

#### 3. Get Houses for Rentals
- **Endpoint**: `/houses/rentals`
- **Method**: `GET`
- **Description**: Retrieve a list of houses available for rent.
- **Response**: 
  - Status 200: JSON array of houses for rent.

#### 4. Get Single House for Rentals
- **Endpoint**: `/houses/rentals/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific house for rent using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the house.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

### Condos Endpoints

#### 1. Get Condos
- **Endpoint**: `/condos`
- **Method**: `GET`
- **Description**: Retrieve a list of available condos.
- **Response**: 
  - Status 200: JSON array of condos.

#### 2. Get Single Condo
- **Endpoint**: `/condos/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific condo using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the condo.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

### Lands Endpoints

#### 1. Get Lands for Sale
- **Endpoint**: `/lands/sale`
- **Method**: `GET`
- **Description**: Retrieve a list of lands available for sale.
- **Response**: 
  - Status 200: JSON array of lands for sale.

#### 2. Get Single Land for Sale
- **Endpoint**: `/lands/sale/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific land for sale using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the land.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

### Offices Endpoints

#### 1. Get Offices for Sale
- **Endpoint**: `/offices/sale`
- **Method**: `GET`
- **Description**: Retrieve a list of offices available for sale.
- **Response**: 
  - Status 200: JSON array of offices for sale.

#### 2. Get Single Office for Sale
- **Endpoint**: `/offices/sale/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific office for sale using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the office.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

### Shops Endpoints

#### 1. Get Shops for Sale
- **Endpoint**: `/shops/sale`
- **Method**: `GET`
- **Description**: Retrieve a list of shops available for sale.
- **Response**: 
  - Status 200: JSON array of shops for sale.

#### 2. Get Single Shop for Sale
- **Endpoint**: `/shops/sale/single`
- **Method**: `POST`
- **Request Body**:
    ```json
    {
        "code": "unique_property_code"
    }
    ```
- **Description**: Retrieve details of a specific shop for sale using the unique property code.
- **Response**:
  - Status 200: JSON object with details of the shop.
  - Status 404: `{"message": "Please provide code"}` if the code is not provided.

### Error Handling
- **Method Not Allowed**: If a request is made with an unsupported method, the API will respond with a status code of 405 and a message indicating that the method is not allowed.
- **Route Not Found**: If a requested route does not exist, the API will respond with a status code of 404 and a message indicating that the route is not found.

## Conclusion
This API provides a flexible way to manage and retrieve property listings. Ensure to provide the necessary unique identifiers (codes) when making requests for individual property details.
