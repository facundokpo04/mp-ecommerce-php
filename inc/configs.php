<?php
   

    #CONJFIGURAÇÕES DO MERCADOPAGO
        #-> TROCAR NOTIFICAÇÃO -> https://www.mercadopago.com.br/ipn-notifications
        #-> CREDÊNCIAIS -> https://www.mercadopago.com/mlb/account/credentials?type=basic
        #-> Detalhes: https://www.mercadopago.com.br/developers/pt/guides/payments/web-payment-checkout/configurations/
        define("client_id", "469485398");
        define("client_secret", "APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626");
        define("access_token", "APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");

        define("notification_url", "https://facundokpo04-mp-commerce-php.herokuapp.com/notification.php");
?>