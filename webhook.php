<?php
// Retrieve the webhook event data from the request
$event_data = json_decode(file_get_contents('php://input'), true);

// Verify the integrity of the webhook event (optional but recommended)
// You can implement the verification logic using Paystack's signature verification process

// Process the webhook event based on the event type
$event_type = $event_data['event'];
if ($event_type === 'charge.success') {
    // Payment was successful, handle accordingly
    // Retrieve necessary information from the event_data and update your system/database
    // Example: update_order_status($event_data['data']['reference'], 'success');
} elseif ($event_type === 'charge.failure') {
    // Payment failed, handle accordingly
} elseif ($event_type === 'transfer.success') {
    // Transfer was successful, handle accordingly
} elseif ($event_type === 'transfer.failure') {
    // Transfer failed, handle accordingly
}

// Return a success response
http_response_code(200);
echo json_encode(['status' => 'success']);
