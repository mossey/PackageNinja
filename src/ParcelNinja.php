<?php
namespace Mossey\ParcelNinja;

class ParcelNinja{
    public static function sayHi(){
        return "hello";
    }
    public static function retrieveInbounds(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/?orderTypeId&startDate&endDate&pageSize&page&search&startRange");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveSpecificInbound(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function deleteInbound(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);

    }
    public static function retrieveInboundWithEvents(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/id/events");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function createInboundOrder(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"id\": 0,
  \"clientId\": \"PO-456789\",
  \"typeId\": 1,
  \"deliveryInfo\": {
    \"customer\": \"My Supp\",
    \"estimatedArrivalDate\": \"20140731\"
  },
  \"items\": [
    {
      \"itemNo\": \"Prod1232\",
      \"name\": \"My Product1\",
      \"imageURL\": \"http://myimg.co.za/img1\",
      \"qty\": 2,
      \"costPrice\": 12.5,
      \"barcode\": \"1234567890\",
      \"captureSerial\": false,
      \"captureExpiry\": false
    }
  ]
}");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveOutbounds(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/?orderTypeId&startDate&endDate&pageSize&page&search&startRange");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveSpecificOutbound(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function deleteOutbound(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveOutboundWithHistory(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/id/events");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function createOutbound(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"clientId\": \"CO-00001\",
  \"typeId\": 2,
  \"deliveryInfo\": {
    \"customer\": \"John Doe\",
    \"companyName\": \"Parcelninja\",
    \"contactNo\": \"0123216540\",
    \"addressLine1\": \"Afrox building\",
    \"addressLine2\": \"56 Marlboro\",
    \"suburb\": \"Melrose Arch\",
    \"postalCode\": \"2196\",
    \"deliveryOption\": {
      \"deliveryQuoteId\": 0
    },
    \"forCollection\": true
  },
  \"items\": [
    {
      \"itemNo\": \"SKU-001\",
      \"qty\": 3
    }
  ],
  \"documents\": [
    {
      \"type\": 2,
      \"name\": \"Name.pdf\",
      \"url\": \"http://www.pdf995.com/samples/pdf.pdf\",
      \"printCount\": 1,
      \"printPlacement\": 0
    }
  ]
}");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveFullInventory(){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inventory/?pageSize&page&search");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     *
     */
    public static function retrieveSubsetInventory(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/?orderTypeId&startDate&endDate&pageSize&page&search&startRange");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveSingleSku(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inventory/sku");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function reserveInventory(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inventory/reserve");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"itemNo\": \"SS63008\",
        \"qty\": 1,
        \"action\": 1
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);

    }
    public static function getListOfDeliveryQuotes(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/delivery/quote");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"deliveryInformation\": {
        \"postalCode\": \"2196\",
        \"suburb\": \"Bryanston\"
        },
        \"items\": [
      \"quantity\": 1
      },
      {
      \"sku\": \"testSku\",
      \"dimensions\": {
        \"width\": 250,
        \"length\": 100,
        \"height\": 200,
        \"weight\": 800
      },
      \"quantity\": 1
      }
      ]
      }");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVAbjc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function getCheapestDeliveryQuote(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/delivery/quote/cheapest");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"deliveryInformation\": {
        \"postalCode\": \"2196\",
        \"suburb\": \"Bryanston\"
        },
        \"items\": [
        {
        \"sku\": \"testSku\",
        \"quantity\": 1,
        \"dimensions\": {
        \"width\": 250,
        \"length\": 100,
        \"height\": 200,
        \"weight\": 800
        },
        \"fromReserve\": false
        }
        ]
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVAbjc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function checkDeliveryQuote(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/delivery/CheckQuote");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"deliveryQuoteId\": 942529,
        \"nominatedDate\": \"2015/06/01T08:38\"
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVAbjc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function trackWayBill(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/tracking/waybillNo");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function trackWaybillWithEventHistory(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/tracking/waybillNo");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveOrderTypes(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/lookups/getOrderTypes");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveEventStatuses(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/lookups/getEventTypes/?typeId=1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveSuburbsAndPostalAddresses(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/lookups/getSuburbs/?search=Sandton");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveAWebHook(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/logs/logid");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);


    }
    public static function createCallBackWebHook(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/hooks/postCallback");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"hookUrl\": \"http://www.example.com/\"
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function retrieveCallBackUrl(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/hooks/getCallback");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function getDeliveryEstimationByDims(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/deliveryquote/dims/options");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"postalCode\": \"2196\",
        \"suburb\": \"Bryanston\",
        \"items\": [
        {
        \"lengthMM\": 100,
        \"widthMM\": 100,
        \"heightMM\": 100,
        \"weightGrams\": 500
        },
        {
        \"lengthMM\": 100,
        \"widthMM\": 300,
        \"heightMM\": 100,
        \"weightGrams\": 800
        },
        {
        \"lengthMM\": 100,
        \"widthMM\": 100,
        \"heightMM\": 100,
        \"weightGrams\": 100
        }
        ]
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
    public static function getDeliveryQuoteBySKU(){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/deliveryquote/sku/options");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"postalCode\": \"2196\",
        \"suburb\": \"Bryanston\",
        \"items\": [
        {
        \"itemNo\": \"452519SSFM-100-M\",
        \"qty\": 2
        }
        ]
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ=="
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
}