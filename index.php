curl https://checkout-test.adyen.com/v66/payments \
-H 'x-API-key: YOUR_X-API-KEY' \
-H 'content-type: application/json' \
-d '{
"merchantAcount":"TestMerchant",
"amount":{
"currency":"EUR",
"value":"1000"
},
"reference":"xPayTestPayment",
"paymentMethod":{
"type":"xpay",
"personalDetails":{
"firstName":"Simon",
"lastName":"Hopper"
"telephoneNumber":"+31612345678"
},
"xPayToken": "78790696"
 }
 }'
