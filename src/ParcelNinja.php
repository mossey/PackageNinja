<?php
namespace Mossey\ParcelNinja;

class ParcelNinja{
    public static function sayHi(){
        return "hello";
    }

    /**
     * @param $token
     * @param $orderTypeId
     * @param $orderTypeId
     * @param $startDate
     * @param $endDate
     * @param $pageSize
     * @param $page
     * @param $search
     * @param $startRange
     */
    public static function retrieveInbounds($token, $orderTypeId, $orderTypeId, $startDate, $endDate, $pageSize, $page, $search, $startRange){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/?$orderTypeId,$startDate,$endDate,$pageSize,$page,$search,$startRange");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $id
     */
    public static function retrieveSpecificInbound($token, $id){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $id
     * @param $token
     */
    public static function deleteInbound($id, $token){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);

    }

    /**
     * @param $token
     * @param $id
     * @param $events
     */
    public static function retrieveInboundWithEvents($token, $id, $events){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/$id/$events");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     */
    public static function createInboundOrder($token){
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
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $orderTypeId
     * @param $startDate
     * @param $endDate
     * @param $pageSize
     * @param $page
     * @param $search
     * @param $startRange
     */
    public static function retrieveOutbounds($token, $orderTypeId, $startDate, $endDate, $pageSize, $page, $search, $startRange){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/?$orderTypeId&$startDate&$endDate&$pageSize&$page&$search&$startRange");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $id
     */
    public static function retrieveSpecificOutbound($token, $id){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $id
     */
    public static function deleteOutbound($token, $id){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $events
     */
    public static function retrieveOutboundWithHistory($token, $events){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds/id/$events");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $clientID
     * @param $typeID
     * @param $customer
     * @param $companyName
     * @param $contactNO
     * @param $addressLine1
     * @param $addressLine2
     * @param $suburb
     * @param $postalCode
     * @param $deliveryQuoteID
     * @param $forCollection //either true or false
     * @param $items  //in the format [{"itemNo": "SKU-001","qty": 3},{"itemNo": "SKU-002","qty": 4}]
     * @param $documents // in the format [{"type": 2,"name": "Name.pdf", "url": "http://www.pdf995.com/samples/pdf.pdf","printCount": 1,"printPlacement": 0},{"type": 2,"name": "Name.pdf", "url": "http://www.pdf995.com/samples/pdf.pdf","printCount": 1,"printPlacement": 0}]
     */
    public static function createOutbound($token, $clientID, $typeID, $customer, $companyName, $contactNO, $addressLine1, $addressLine2, $suburb, $postalCode, $deliveryQuoteID, $forCollection, $items, $documents){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/outbounds");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"clientId\": \"$clientID\",
  \"typeId\": $typeID,
  \"deliveryInfo\": {
    \"customer\": \"$customer\",
    \"companyName\": \"$companyName\",
    \"contactNo\": \"$contactNO\",
    \"addressLine1\": \"$addressLine1\",
    \"addressLine2\": \"$addressLine2\",
    \"suburb\": \"$suburb\",
    \"postalCode\": \"$postalCode\",
    \"deliveryOption\": {
      \"deliveryQuoteId\": $deliveryQuoteID
    },
    \"forCollection\": $forCollection
  },
  \"items\":  $items,
  \"documents\": $documents
  }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $pageSize
     * @param $page
     * @param $search
     */
    public static function retrieveFullInventory($token, $pageSize, $page, $search){

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inventory/?$pageSize,$page,$search");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }


    /**
     * @param $token
     * @param $orderTypeId
     * @param $startDate
     * @param $endDate
     * @param $pageSize
     * @param $page
     * @param $search
     * @param $startRange
     */
    public static function retrieveSubsetInventory($token, $orderTypeId, $startDate, $endDate, $pageSize, $page, $search, $startRange){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inbounds/?$orderTypeId&$startDate&$endDate&$pageSize&$page&$search&$startRange");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $sku
     */
    public static function retrieveSingleSku($token, $sku){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/inventory/$sku");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     */
    public static function reserveInventory($token){
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
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);

    }

    /**
     * @param $token
     * @param $postalCode
     * @param $suburb
     * @param $quantity
     * @param $sku
     * @param $width
     * @param $length
     * @param $height
     * @param $weight
     * @param $quantity2
     */
    public static function getListOfDeliveryQuotes($token, $postalCode, $suburb, $quantity, $sku, $width, $length, $height, $weight, $quantity2){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/delivery/quote");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"deliveryInformation\": {
        \"postalCode\": \"$postalCode\",
        \"suburb\": \"$suburb\"
        },
        \"items\": [
      \"quantity\": $quantity
      },
      {
      \"sku\": \"$sku\",
      \"dimensions\": {
        \"width\": $width,
        \"length\": $length,
        \"height\": $height,
        \"weight\": $weight
      },
      \"quantity\": $quantity2
      }
      ]
      }");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $postalCode
     * @param $suburb
     * @param $sku
     * @param $quantity
     * @param $length
     * @param $width
     * @param $height
     * @param $weight
     * @param $fromReserve
     */
    public static function getCheapestDeliveryQuote($token, $postalCode, $suburb, $sku, $quantity, $length, $width, $height, $weight, $fromReserve){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/delivery/quote/cheapest");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"deliveryInformation\": {
        \"postalCode\": \"$postalCode\",
        \"suburb\": \"$suburb\"
        },
        \"items\": [
        {
        \"sku\": \"$sku\",
        \"quantity\": $quantity,
        \"dimensions\": {
        \"width\": $width,
        \"length\": $length,
        \"height\": $height,
        \"weight\": $weight
        },
        \"fromReserve\": $fromReserve
        }
        ]
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $deliveryQuoteID
     * @param $nominateDate
     */
    public static function checkDeliveryQuote($token, $deliveryQuoteID, $nominateDate){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/delivery/CheckQuote");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"deliveryQuoteId\": $deliveryQuoteID,
        \"nominatedDate\": \"$nominateDate/*2015/06/01T08:38*/\"
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

    /**
     * @param $token
     * @param $waybillNO
     */
    public static function trackWayBill($token, $waybillNO){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/tracking/$waybillNO");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $waybillNO
     */
    public static function trackWaybillWithEventHistory($token, $waybillNO){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/tracking/$waybillNO");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     */
    public static function retrieveOrderTypes($token){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/lookups/getOrderTypes");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $typeID
     */
    public static function retrieveEventStatuses($token, $typeID){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/lookups/getEventTypes/?typeId=$typeID");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $search
     */
    public static function retrieveSuburbsAndPostalAddresses($token, $search){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/lookups/getSuburbs/?search=$search");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $logID
     */
    public static function retrieveAWebHook($token, $logID){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/logs/$logID");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);


    }

    /**
     * @param $token
     * @param $hookURL
     */
    public static function createCallBackWebHook($token, $hookURL){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/hooks/postCallback");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"hookUrl\": \"$hookURL\"
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     */
    public static function retrieveCallBackUrl($token){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/hooks/getCallback");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $postalCode
     * @param $suburb
     * @param $items // in the format  [{"lengthMM": 100,"widthMM": 100,"heightMM": 100,"weightGrams": 500},{"lengthMM": 100,"widthMM": 100,"heightMM": 100,"weightGrams": 500},{"lengthMM": 100,"widthMM": 100,"heightMM": 100,"weightGrams": 500}]
     */
    public static function getDeliveryEstimationByDims($token, $postalCode, $suburb, $items){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/deliveryquote/dims/options");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"postalCode\": \"$postalCode\",
        \"suburb\": \"$suburb\",
        \"items\": $items
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }

    /**
     * @param $token
     * @param $postalCode
     * @param $suburb
     * @param $items //in the format [{"itemNo": "452519SSFM-100-M","qty": 2}]
     */
    public static function getDeliveryQuoteBySKU($token, $postalCode, $suburb, $items){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://private-anon-253ada42ff-parcelninja.apiary-mock.com/api/v1/deliveryquote/sku/options");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_POST, TRUE);

        curl_setopt($ch, CURLOPT_POSTFIELDS, "{
        \"postalCode\": \"$postalCode\",
        \"suburb\": \"$suburb\",
        \"items\": $items
        }");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Accept: application/json",
            "Authorization: Basic $token"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        var_dump($response);
    }
}