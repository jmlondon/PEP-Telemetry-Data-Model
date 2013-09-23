<?php
    // Request parameters
    $param = array(
        'username'=>'username',
        'password'=>'password',
        'platformId'=>'522',
        'nbDaysFromNow'=>'10'
        );
    try {
        // WebService Client options and configuration
        $options = array(
            'useSOAP'=>1.2,
            'useMTOM'=>TRUE,
            'responseXOP'=>FALSE,
            'wsdl'=>'http://ws-argos.cls.fr/argosDws/services/DixService?WSDL'
        );
        $client = new WSClient($options);
        $proxy = $client->getProxy();

        // Call the service
        $results = $proxy->getXml($param);
        // Get and display the response
        $xml = $results["return"];
        echo htmlentities($xml);
        echo '<br>';
        // Call the service
        $results = $proxy->getCsv($param);
        // Get and display the response
        $csv = $results["return"];
        echo $csv;
        echo '<br>';
        // end
    } catch (Exception $e) {
        echo "<h2>Exception Caught</h2>";
        echo $e->getMessage();
    }
?>
