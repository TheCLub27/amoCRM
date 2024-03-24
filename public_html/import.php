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

$apiClient -> setAccountBaseDomain($subdomain. '.amocrm.ru');

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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $filename = $file['tmp_name'];
    $handle = fopen($filename, 'r');
    

    $row = 0;
    while (($data = fgetcsv($handle, 1000, ';')) !== false) {
        $row++;
        if ($row === 1) {
            continue;
        }

        $name = $data[0];
        $name = mb_convert_encoding($name, 'UTF-8', mb_detect_encoding($name, 'UTF-8, CP1251', true));

        $price = intval($data[1]);
        $cost = intval($data[2]);

        $lead = new LeadModel();
        $lead->setName($name)
            ->setPrice($price);

        if (!empty($cost)) {
            $leadCustomFieldsValues = new CustomFieldsValuesCollection();
            $NumericCustomFieldValueModel = new NumericCustomFieldValuesModel();
            $NumericCustomFieldValueModel->setFieldId(1511409);
            $NumericCustomFieldValueModel->setValues(
                (new NumericCustomFieldValueCollection())
                    ->add((new NumericCustomFieldValueModel())->setValue($cost))
            );
            $leadCustomFieldsValues->add($NumericCustomFieldValueModel);
            $lead->setCustomFieldsValues($leadCustomFieldsValues);
        }

        $profit = $price - $cost;
            $numericCustomFieldValue = new NumericCustomFieldValuesModel();
            $numericCustomFieldValue->setFieldId(1511347);
            $numericCustomFieldValue->setValues(
                (new NumericCustomFieldValueCollection())
                    ->add((new NumericCustomFieldValueModel())->setValue($profit))
                );
        if (!empty($leadCustomFieldsValues)) {
            $leadCustomFieldsValues->add($numericCustomFieldValue);
            $lead->setCustomFieldsValues($leadCustomFieldsValues);
        } else {
            $leadCustomFieldsValues = new CustomFieldsValuesCollection();
            $leadCustomFieldsValues->add($numericCustomFieldValue);
            $lead->setCustomFieldsValues($leadCustomFieldsValues);
                }
                
        if ($leadsService->addOne($lead)) {
            echo "Сделка '$name' добавлена успешно  ";
        } else {
            echo "Ошибка при добавлении сделки '$name'";
            }        
    }

    fclose($handle);
}

?>