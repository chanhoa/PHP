<?php
$country_mdlist = array(
    "USA" => array(
        "Capital" => "Washington D.C.",
        "Currency" => "US Dollar"
    ),
    "England" => array(
        "Capital" => "London",
        "Currency" => "Pound Sterling"
    ),
    "Australia" => array(
        "Capital" => "Canberra",
        "Currency" => "Australian Dollar"
    ),
    "New Zealand" => array(
        "Capital" => "Wellington",
        "Currency" => "NZ Dollar"
    )
);
echo $country_mdlist["Australia"]["Capital"]."<br>";
echo $country_mdlist["Australia"]["Currency"];
?>