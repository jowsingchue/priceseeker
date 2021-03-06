<?php

use XmlIterator\XmlIterator;

class Product extends Eloquent {

    /**
    * Search for products that contain specific word in their name
    *
    * @param $search searched word
    * @return matched result
    */
    public static function getProduct($search)
    {
        // list of partners
        $uri = [
            'KU-Relate' => [
                'api' => "http://128.199.145.53:22222/api/v2/products/",
                'url' => "http://128.199.145.53/tsp/?page=detail&id="
                ],
            'J-Force' => [
                'api' => "http://128.199.212.108:8080/api/v1/products/",
                'url' => "http://128.199.212.108/jf-shop/products/show/"
                ],
            'Sabaii' => [
                'api' => "http://xn--v3cacg3nc8cd.xn--o3cw4h:8080/api/v1/products/",
                'url' => null
                ]
            ];

        foreach ($uri as $shop)
        {
            $products = self::iterate($shop);
            if ($search == "show me all")
            {
                $result[] = $products;
            }
            else
            {
                $result[] = self::contain($products, $search);
            }
        }


        return $result;
    }


    /******************************
    HELPER FUNCTION
    ******************************/

    /**
    * Turn XML to array
    *
    * @param $uri uri location
    * @return array
    */
    private static function iterate($uri)
    {
        $it = new XmlIterator($uri['api'], "product");

        // store values
        $products = array();
        foreach ($it as $k => $v) {
            $products[$k] = $v;
            $products[$k]['link_to_page'] = $uri['url'].$v['@attributes']['id'];
        }

        return $products;
    }

    /**
    * Find the occurrence of string in product name
    *
    * @param $products list of products
    * @param $str string to find
    * @return result in array
    */
    private static function contain($products, $str)
    {
        $result = array();
        foreach ($products as $id => $prod) {
            // find the occurrence of $str in product name (case-insensitive)
            if (stristr($prod['name'], $str) !== FALSE)
            {
                $result[$id] = $prod;
            }
        }
        return $result;
    }
}
