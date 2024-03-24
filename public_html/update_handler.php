<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';
require_once 'config.php';
require_once 'access.php';

use AmoCRM\Collections\ContactsCollection;
use AmoCRM\Collections\CustomFieldsValuesCollection;
use AmoCRM\Collections\Leads\LeadsCollection;
use AmoCRM\Collections\LinksCollection;
use AmoCRM\Collections\NullTagsCollection;
use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Client\AmoCRMApiClient;
use AmoCRM\Filters\LeadsFilter;
use AmoCRM\Models\CompanyModel;
use AmoCRM\Models\ContactModel;
use AmoCRM\Models\CustomFieldsValues\BirthdayCustomFieldValuesModel;
use AmoCRM\Models\CustomFieldsValues\DateTimeCustomFieldValuesModel;
use AmoCRM\Models\CustomFieldsValues\NumericCustomFieldValuesModel;
use AmoCRM\Models\CustomFieldsValues\ValueCollections\NullCustomFieldValueCollection;
use AmoCRM\Models\CustomFieldsValues\ValueCollections\NumericCustomFieldValueCollection;
use AmoCRM\Models\CustomFieldsValues\ValueModels\NumericCustomFieldValueModel;
use AmoCRM\Models\LeadModel;
use AmoCRM\OAuth2\Client\Provider\AmoCRM;
use Carbon\Carbon;
use League\OAuth2\Client\Token\AccessTokenInterface;

$apiClient = new AmoCRMApiClient();

$accessToken = new \League\OAuth2\Client\Token\AccessToken([
    'access_token' => $access_token,
    'expires' => $dataToken['endTokenTime'],
    'refresh_token' => $dataToken['refresh_token'],
    'values' => [
        'baseDomain' => $subdomain,
    ],
]);

$apiClient->setAccessToken($accessToken);
$apiClient->setAccountBaseDomain($subdomain . '.amocrm.ru');

$apiClient->onAccessTokenRefresh(function (AccessTokenInterface $accessToken, string $baseDomain) use ($token_file) {
    $arrParamsAmo = [
        'access_token' => $accessToken->getToken(),
        'refresh_token' => $accessToken->getRefreshToken(),
        'expires_in' => $accessToken->getExpires(),
        'endTokenTime' => $accessToken->getExpires() + time(),
    ];
    $arrParamsAmo = json_encode($arrParamsAmo);
    $f = fopen($token_file, 'w');
    fwrite($f, $arrParamsAmo);
    fclose($f);
});



$leadsService = $apiClient->leads();


$lead_id = intval($_POST['lead_id']); 
$price = intval($_POST['price']); 
$cost =  intval($_POST['cost']);
$profit = $price - $cost;
try {
    $lead = $apiClient->leads()->getOne($lead_id);
    
    $customFields = $lead->getCustomFieldsValues();
    $costField = $customFields->getBy('fieldId', 1511409);
    if (!$costField) {
        echo "У этой сделки отсутствует поле 'Себестоимость'.";
        exit;
    }

    
    
    $lead->setPrice($price);
    $lead->setCustomFieldsValues(
        (new CustomFieldsValuesCollection())
            ->add(
                (new NumericCustomFieldValuesModel())
                    ->setFieldId(1511409) 
                    ->setValues(
                        (new NumericCustomFieldValueCollection())
                            ->add((new NumericCustomFieldValueModel())->setValue($cost))
                    )
            )
            ->add((new NumericCustomFieldValuesModel())
                    ->setFieldId(1511347) 
                    ->setValues(
                        (new NumericCustomFieldValueCollection())
                            ->add((new NumericCustomFieldValueModel())->setValue($profit))
                    ))
    );

    $leadsCollection = new LeadsCollection();
    $leadsCollection->add($lead);
    $apiClient->leads()->update($leadsCollection);

    echo "Сделка обновлена успешно.";

} catch (AmoCRMApiException $e) {
    echo "Произошла ошибка при обновлении сделки: " . $e->getMessage();
}
?>