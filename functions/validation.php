<?php
function  streetIsValid(string $street): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];
    echo '<br><br>';
    echo strlen($street);

    if (strlen($street) > 50) {
        $result = [
            'isValid' => false,
            'msg' => "<h2><center>ERROR!</center></H2> Le numéro de rue utilisé est trop long."
        ];
    }
    return $result;
}
function  typeIsValid(string $type): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];
    echo '<br><br>';
    echo strlen($type);

    if (strlen($type) > 20) {
        $result = [
            'isValid' => false,
            'msg' => "<h2><center>ERROR!</center></H2> Le type utilisé est trop long."
        ];
    }
    return $result;
}
function zipCodeIsValid(string $zipcode): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];
    echo '<br><br>';
    echo strlen($zipcode);

    if (strlen($zipcode) !=6 ) {
        $result = [
            'isValid' => false,
            'msg' => "<h2><center>ERROR!</center></H2> le code postale utilisé n'est pas valide."
        ];
    }
    return $result;
}

?>