<?php
/**
 * InlineResponse20022Orders
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API продавца
 *
 * # Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid ;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center } </style> Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)  <ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>  ## Поддержка <br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс.   ## Авторизация Вызов любого метода API должен быть авторизован.  Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api) для статистики   и [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api) для остальных методов.   Ключ должен передаваться в каждом HTTP-запросе.   ### Авторизация для методов Статистики При работе с методами Статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к API\". <br>Созданный ключ отображается в личном кабинете как \"Ключ для работы с API статистики x64\". <br>Его следует скопировать и добавлять в каждый запрос, прибавляя к запросу параметр `key`. <br>Выглядеть запрос будет примерно так: `https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2022-03-25&key=xxxxxxxxxx`    ### Авторизация для нестатистических методов При работе со всеми методами кроме статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к новому API\". <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: xxxxxxxxxx`.  ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>   ## Release Notes  #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *
 *
 * OpenAPI spec version: 1.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse20022Orders Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20022Orders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_22_orders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'string',
'date_created' => 'string',
'store_id' => 'int',
'wb_wh_id' => 'int',
'pid' => 'int',
'office_address' => 'string',
'chrt_id' => 'int',
'barcodes' => 'string[]',
'status' => 'int',
'user_status' => 'int',
'rid' => 'string',
'total_price' => 'int',
'currency_code' => 'int',
'order_uid' => 'string',
'delivery_type' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
'date_created' => null,
'store_id' => null,
'wb_wh_id' => null,
'pid' => null,
'office_address' => null,
'chrt_id' => null,
'barcodes' => null,
'status' => null,
'user_status' => null,
'rid' => null,
'total_price' => null,
'currency_code' => null,
'order_uid' => null,
'delivery_type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'orderId',
'date_created' => 'dateCreated',
'store_id' => 'storeId',
'wb_wh_id' => 'wbWhId',
'pid' => 'pid',
'office_address' => 'officeAddress',
'chrt_id' => 'chrtId',
'barcodes' => 'barcodes',
'status' => 'status',
'user_status' => 'userStatus',
'rid' => 'rid',
'total_price' => 'totalPrice',
'currency_code' => 'currencyCode',
'order_uid' => 'orderUID',
'delivery_type' => 'deliveryType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
'date_created' => 'setDateCreated',
'store_id' => 'setStoreId',
'wb_wh_id' => 'setWbWhId',
'pid' => 'setPid',
'office_address' => 'setOfficeAddress',
'chrt_id' => 'setChrtId',
'barcodes' => 'setBarcodes',
'status' => 'setStatus',
'user_status' => 'setUserStatus',
'rid' => 'setRid',
'total_price' => 'setTotalPrice',
'currency_code' => 'setCurrencyCode',
'order_uid' => 'setOrderUid',
'delivery_type' => 'setDeliveryType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
'date_created' => 'getDateCreated',
'store_id' => 'getStoreId',
'wb_wh_id' => 'getWbWhId',
'pid' => 'getPid',
'office_address' => 'getOfficeAddress',
'chrt_id' => 'getChrtId',
'barcodes' => 'getBarcodes',
'status' => 'getStatus',
'user_status' => 'getUserStatus',
'rid' => 'getRid',
'total_price' => 'getTotalPrice',
'currency_code' => 'getCurrencyCode',
'order_uid' => 'getOrderUid',
'delivery_type' => 'getDeliveryType'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_0 = 0;
const STATUS_1 = 1;
const STATUS_2 = 2;
const STATUS_3 = 3;
const STATUS_5 = 5;
const STATUS_6 = 6;
const STATUS_7 = 7;
const USER_STATUS_0 = 0;
const USER_STATUS_1 = 1;
const USER_STATUS_2 = 2;
const USER_STATUS_3 = 3;
const USER_STATUS_4 = 4;
const USER_STATUS_5 = 5;
const DELIVERY_TYPE_1 = 1;
const DELIVERY_TYPE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
self::STATUS_1,
self::STATUS_2,
self::STATUS_3,
self::STATUS_5,
self::STATUS_6,
self::STATUS_7,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserStatusAllowableValues()
    {
        return [
            self::USER_STATUS_0,
self::USER_STATUS_1,
self::USER_STATUS_2,
self::USER_STATUS_3,
self::USER_STATUS_4,
self::USER_STATUS_5,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryTypeAllowableValues()
    {
        return [
            self::DELIVERY_TYPE_1,
self::DELIVERY_TYPE_2,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['wb_wh_id'] = isset($data['wb_wh_id']) ? $data['wb_wh_id'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['office_address'] = isset($data['office_address']) ? $data['office_address'] : null;
        $this->container['chrt_id'] = isset($data['chrt_id']) ? $data['chrt_id'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
        $this->container['rid'] = isset($data['rid']) ? $data['rid'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['order_uid'] = isset($data['order_uid']) ? $data['order_uid'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUserStatusAllowableValues();
        if (!is_null($this->container['user_status']) && !in_array($this->container['user_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($this->container['delivery_type']) && !in_array($this->container['delivery_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Идентификатор заказа.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created Дата создания заказа `(RFC3339)`.
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param int $store_id Идентификатор склада поставщика, на который пришел заказ.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets wb_wh_id
     *
     * @return int
     */
    public function getWbWhId()
    {
        return $this->container['wb_wh_id'];
    }

    /**
     * Sets wb_wh_id
     *
     * @param int $wb_wh_id Идентификатор склада WB, на которой заказ должен быть доставлен.
     *
     * @return $this
     */
    public function setWbWhId($wb_wh_id)
    {
        $this->container['wb_wh_id'] = $wb_wh_id;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return int
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param int $pid Идентификатор ПВЗ/магазина, куда необходимо доставить заказ (если применимо).
     *
     * @return $this
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets office_address
     *
     * @return string
     */
    public function getOfficeAddress()
    {
        return $this->container['office_address'];
    }

    /**
     * Sets office_address
     *
     * @param string $office_address Адрес ПВЗ/магазина, куда необходимо доставить заказ (если применимо).
     *
     * @return $this
     */
    public function setOfficeAddress($office_address)
    {
        $this->container['office_address'] = $office_address;

        return $this;
    }

    /**
     * Gets chrt_id
     *
     * @return int
     */
    public function getChrtId()
    {
        return $this->container['chrt_id'];
    }

    /**
     * Sets chrt_id
     *
     * @param int $chrt_id Идентификатор артикула.
     *
     * @return $this
     */
    public function setChrtId($chrt_id)
    {
        $this->container['chrt_id'] = $chrt_id;

        return $this;
    }

    /**
     * Gets barcodes
     *
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     *
     * @param string[] $barcodes Массив штрихкодов товара.
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Статус выставляемый продавцами. <br>`0` - Новый заказ. <br>`1` - В работе. <br>`2` - Сборочное задание завершено. <br>`3` - Сборочное задание отклонено. <br>`5` - На доставке курьером. <br>`6` - Курьер довез и клиент принял товар. <br>`7` - Клиент не принял товар.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return int
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param int $user_status Статус выставляемый Wildberries. <br>`0` - Новый заказ. <br>`1` - Отмена клиента. <br>`2` - Доставлен. <br>`3` - Возврат. <br>`4` - Ожидает. <br>`5` - Брак.
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $allowedValues = $this->getUserStatusAllowableValues();
        if (!is_null($user_status) && !in_array($user_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets rid
     *
     * @return string
     */
    public function getRid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     *
     * @param string $rid Уникальный идентификатор вещи, `разный у одинаковых chrt_id`.
     *
     * @return $this
     */
    public function setRid($rid)
    {
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param int $total_price Цена в валюте продажи с учетом скидок в копейках. `Код валюты продажи в поле currencyCode`.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param int $currency_code Код валюты по ISO 4217. <br>Пример: <ul>   <li>`51` - Армянский драм.   <li>`398` - Казахский тенге.   <li>`417` - Киргизский сом.   <li>`643` - Российский рубль.   <li>`840` - Доллар США.   <li>`933` - Белорусский рубль.   <li>`974` - Белорусский рубль. </ul>
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets order_uid
     *
     * @return string
     */
    public function getOrderUid()
    {
        return $this->container['order_uid'];
    }

    /**
     * Sets order_uid
     *
     * @param string $order_uid Идентификатор транзакции (для группировки заказов).
     *
     * @return $this
     */
    public function setOrderUid($order_uid)
    {
        $this->container['order_uid'] = $order_uid;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return int
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param int $delivery_type Тип доставки:   <ul>     <li>`1` - Обычная доставка.     <li>`2` - Доставка силами поставщика.   </ul>
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($delivery_type) && !in_array($delivery_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
