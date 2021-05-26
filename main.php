$client = new \Adyen\Client();
$client->setXApiKey("YOUR_X-API-KEY");
$service = new \Adyen\Service\Checkout($client);
$params = [
"merchantAcount" => "TestMerchant",
"amount" => [
"currency"=>"EUR",
"value"=>"1000"
],
"reference" => "xPayTestPayment",
"paymentMethod"=> [
"type":"xpay",
"xPayToken": "78790696"
],
"shopperName" => [
"firstName" => "Simon",
"lastName" => "Hopper"
],
"telephoneNumber" => "+31612345678"
];
