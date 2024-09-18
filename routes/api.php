<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/movie', [ContactController::class, 'movi']);
Route::post('/upload',function(){
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $folder = isset($_POST['category']) ? $_POST['category'] : 'uploads';
    $directory = __DIR__ . '/' . $folder;

    if (!file_exists($directory)) {
        mkdir($directory, 0755, true);
    }

    $filePath = $directory . '/' . basename($_FILES['file']['name']);

    if (move_uploaded_file($_FILES['file']['tmp_name'], $filePath)) {
        echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload file']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
});


Route::get('/test-cors', function () {
    return response()->json(['message' => 'CORS headers are set correctly!'])
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
});

