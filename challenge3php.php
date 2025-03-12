<?php

class Item {
    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct($id, $name, $description, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

class ItemController {
    private $file = 'items.json';

    private function readItems() {
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }
        return json_decode(file_get_contents($this->file), true);
    }

    private function writeItems($items) {
        file_put_contents($this->file, json_encode($items, JSON_PRETTY_PRINT));
    }

    public function getAllItems() {
        echo json_encode($this->readItems());
    }

    public function getItemById($id) {
        $items = $this->readItems();
        foreach ($items as $item) {
            if ($item['id'] == $id) {
                echo json_encode($item);
                return;
            }
        }
        http_response_code(404);
        echo json_encode(["message" => "Item not found"]);
    }

    public function createItem() {
        $items = $this->readItems();
        $data = json_decode(file_get_contents("php://input"), true);
        $items[] = $data;
        $this->writeItems($items);
        echo json_encode(["message" => "Item added successfully"]);
    }

    public function updateItem($id) {
        $items = $this->readItems();
        $data = json_decode(file_get_contents("php://input"), true);
        foreach ($items as &$item) {
            if ($item['id'] == $id) {
                $item = $data;
                $this->writeItems($items);
                echo json_encode(["message" => "Item updated successfully"]);
                return;
            }
        }
        http_response_code(404);
        echo json_encode(["message" => "Item not found"]);
    }

    public function deleteItem($id) {
        $items = $this->readItems();
        $filteredItems = array_filter($items, function($item) use ($id) {
            return $item['id'] != $id;
        });
        $this->writeItems(array_values($filteredItems));
        echo json_encode(["message" => "Item deleted successfully"]);
    }
}

header('Content-Type: application/json');
$controller = new ItemController();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

if ($requestUri[0] === 'api' && $requestUri[1] === 'items') {
    if ($requestMethod === 'GET' && !isset($requestUri[2])) {
        $controller->getAllItems();
    } elseif ($requestMethod === 'GET' && isset($requestUri[2])) {
        $controller->getItemById($requestUri[2]);
    } elseif ($requestMethod === 'POST') {
        $controller->createItem();
    } elseif ($requestMethod === 'PUT' && isset($requestUri[2])) {
        $controller->updateItem($requestUri[2]);
    } elseif ($requestMethod === 'DELETE' && isset($requestUri[2])) {
        $controller->deleteItem($requestUri[2]);
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Invalid request"]);
    }
}