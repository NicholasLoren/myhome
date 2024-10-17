<?php
header("Content-Type: application/json");

require_once '../config/Database.php';
require_once '../src/Lands.php';
require_once '../src/Apartments.php';
require_once '../src/Condos.php';
require_once '../src/Houses.php';
require_once '../src/Offices.php';
require_once '../src/Shop.php';
// Instantiate the Database and get the connection
$database = new Database();
$pdo = $database->getConnection();

// Instantiate the necessary classes, passing the $pdo object
$lands = new Lands($pdo);
$apartments = new Apartments($pdo);
$condos = new Condos($pdo);
$houses = new Houses($pdo);
$offices = new Offices($pdo);
$shops = new Shops($pdo);

// Parse the request URL and method
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_method = $_SERVER['REQUEST_METHOD'];

// Strip the "/api/public" part and get the endpoint
$endpoint = str_replace("/api/public", "", $request_uri);

function notAllowed()
{
    http_response_code(405);
    echo json_encode(['message' => 'Method Not Allowed']);
    return;
}

function getRequestBody(){
    return json_decode(file_get_contents('php://input'), true);
}
// Use switch to route based on the endpoint
switch ($endpoint) { 
    //APARTMENTS ENDPOINTS
    case '/apartments/sale':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $apartments->getForSales();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/apartments/sale/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $apartments->getForSalesById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/apartments/rentals':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $apartments->getForRentals();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

    case '/apartments/rentals/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $apartments->getForRentalsById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
        //HOUSES ENDPOINTS
    case '/houses/sale':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $houses->getForSales();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/houses/sale/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $houses->getForSalesById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/houses/rentals':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $houses->getForRentals();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

    case '/houses/rentals/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $houses->getForRentalsById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

    //CONDOS ENDPOINTS
    case '/condos':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all
                $result = $condos->get();
                echo json_encode($result);
                break; 

            default:
                notAllowed();
                break;
        }
        break;

    case '/condos/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $condos->getById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/condos/orders':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if(!isset($data['code']))
                {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide order condo code']);
                }
                // Handle GET request to fetch all
                $result = $condos->getOrders($data['code']);
                
                echo json_encode($result);
                break; 

            default:
                notAllowed();
                break;
        }
        break;

        //LANDS ENDPOINTS
    case '/lands/sale':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $lands->getForSales();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/lands/sale/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $lands->getForSalesById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

        //OFFICES ENDPOINTS
    case '/offices/sale':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $offices->getForSales();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/offices/sale/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $offices->getForSalesById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/offices/rentals':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $offices->getForRentals();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

    case '/offices/rentals/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $offices->getForRentalsById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

        //SHOP ENDPOINTS
    case '/shops/sale':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $shops->getForSales();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/shops/sale/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $shops->getForSalesById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    case '/shops/rentals':
        switch ($request_method) {
            case 'GET':
                // Handle GET request to fetch all users
                $result = $shops->getForRentals();
                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;

    case '/shops/rentals/single':
        switch ($request_method) {
            case 'POST':
                // Get data from the request body
                $data = getRequestBody();

                if (!isset($data['code'])) {
                    http_response_code(404);
                    return print json_encode(['message' => 'Please provide code']);
                }
                // Handle GET request to fetch all
                $result = $shops->getForRentalsById($data['code']);

                echo json_encode($result);
                break;

            default:
                notAllowed();
                break;
        }
        break;
    default:
        // Handle 404 if route is not found
        http_response_code(404);
        echo json_encode(['message' => 'Route Not Found']);
        break;
}
