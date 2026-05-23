<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['imageData']) || !isset($input['challenge'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing required parameters']);
    exit;
}

$imageData = $input['imageData'];
$challenge = $input['challenge'];

// Define expected areas for different challenges
$expectedAreas = [
    'car_wheel' => ['x' => 80, 'y' => 160, 'width' => 60, 'height' => 60],
    'house_door' => ['x' => 160, 'y' => 200, 'width' => 60, 'height' => 70],
    'face_smile' => ['x' => 140, 'y' => 230, 'width' => 120, 'height' => 40]
];

if (!isset($expectedAreas[$challenge])) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid challenge']);
    exit;
}

// Remove data URL prefix
$imageData = str_replace('data:image/png;base64,', '', $imageData);
$imageData = str_replace(' ', '+', $imageData);
$decodedImage = base64_decode($imageData);

if ($decodedImage === false) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid image data']);
    exit;
}

// Save temporary image
$tempFile = tempnam(sys_get_temp_dir(), 'captcha_');
file_put_contents($tempFile, $decodedImage);

// Verify the drawing using basic image analysis
$isValid = verifyDrawing($tempFile, $expectedAreas[$challenge]);

// Clean up
unlink($tempFile);

echo json_encode([
    'valid' => $isValid,
    'message' => $isValid ? 'Drawing verified successfully!' : 'Drawing does not meet requirements.'
]);

function verifyDrawing($imagePath, $expectedArea) {
    // This is a simplified verification
    // In a real implementation, you might use more sophisticated image analysis
    
    if (!extension_loaded('gd')) {
        // Fallback verification without GD extension
        return rand(0, 1) === 1; // Random for demo purposes
    }
    
    $image = imagecreatefrompng($imagePath);
    if (!$image) {
        return false;
    }
    
    $drawnPixels = 0;
    $totalPixels = $expectedArea['width'] * $expectedArea['height'];
    
    // Check pixels in the expected area
    for ($x = $expectedArea['x']; $x < $expectedArea['x'] + $expectedArea['width']; $x++) {
        for ($y = $expectedArea['y']; $y < $expectedArea['y'] + $expectedArea['height']; $y++) {
            if ($x < imagesx($image) && $y < imagesy($image)) {
                $rgb = imagecolorat($image, $x, $y);
                $alpha = ($rgb >> 24) & 0xFF;
                
                // If pixel is not fully transparent, count it as drawn
                if ($alpha < 127) {
                    $drawnPixels++;
                }
            }
        }
    }
    
    imagedestroy($image);
    
    // Require at least 5% of the expected area to be drawn
    $threshold = $totalPixels * 0.05;
    return $drawnPixels >= $threshold;
}
?>

