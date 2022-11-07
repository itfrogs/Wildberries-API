<?php
/**
 * _ApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;

/**
 * _ApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class _ApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for contentV1BarcodesPost
     *
     * Генерация баркодов.
     *
     */
    public function testContentV1BarcodesPost()
    {
    }

    /**
     * Test case for contentV1CardsCursorListPost
     *
     * Список НМ v2.
     *
     */
    public function testContentV1CardsCursorListPost()
    {
    }

    /**
     * Test case for contentV1CardsErrorListGet
     *
     * Список несозданных НМ с ошибками.
     *
     */
    public function testContentV1CardsErrorListGet()
    {
    }

    /**
     * Test case for contentV1CardsFilterPost
     *
     * Получение КТ по вендор кодам (артикулам).
     *
     */
    public function testContentV1CardsFilterPost()
    {
    }

    /**
     * Test case for contentV1CardsUpdatePost
     *
     * Редактирование КТ.
     *
     */
    public function testContentV1CardsUpdatePost()
    {
    }

    /**
     * Test case for contentV1CardsUploadAddPost
     *
     * Добавление НМ к КТ.
     *
     */
    public function testContentV1CardsUploadAddPost()
    {
    }

    /**
     * Test case for contentV1CardsUploadPost
     *
     * Создание  КТ.
     *
     */
    public function testContentV1CardsUploadPost()
    {
    }

    /**
     * Test case for contentV1DirectoryBrandsGet
     *
     * Бренд.
     *
     */
    public function testContentV1DirectoryBrandsGet()
    {
    }

    /**
     * Test case for contentV1DirectoryCollectionsGet
     *
     * Коллекция.
     *
     */
    public function testContentV1DirectoryCollectionsGet()
    {
    }

    /**
     * Test case for contentV1DirectoryColorsGet
     *
     * Цвет.
     *
     */
    public function testContentV1DirectoryColorsGet()
    {
    }

    /**
     * Test case for contentV1DirectoryConsistsGet
     *
     * Состав.
     *
     */
    public function testContentV1DirectoryConsistsGet()
    {
    }

    /**
     * Test case for contentV1DirectoryContentsGet
     *
     * Комплектация.
     *
     */
    public function testContentV1DirectoryContentsGet()
    {
    }

    /**
     * Test case for contentV1DirectoryCountriesGet
     *
     * Страна Производства.
     *
     */
    public function testContentV1DirectoryCountriesGet()
    {
    }

    /**
     * Test case for contentV1DirectoryKindsGet
     *
     * Пол.
     *
     */
    public function testContentV1DirectoryKindsGet()
    {
    }

    /**
     * Test case for contentV1DirectorySeasonsGet
     *
     * Сезон.
     *
     */
    public function testContentV1DirectorySeasonsGet()
    {
    }

    /**
     * Test case for contentV1DirectoryTnvedGet
     *
     * ТНВЭД код.
     *
     */
    public function testContentV1DirectoryTnvedGet()
    {
    }

    /**
     * Test case for contentV1MediaFilePost
     *
     * Добавление медиа контента в КТ.
     *
     */
    public function testContentV1MediaFilePost()
    {
    }

    /**
     * Test case for contentV1MediaSavePost
     *
     * Изменение медиа контента КТ.
     *
     */
    public function testContentV1MediaSavePost()
    {
    }

    /**
     * Test case for contentV1ObjectAllGet
     *
     * Категория товаров.
     *
     */
    public function testContentV1ObjectAllGet()
    {
    }

    /**
     * Test case for contentV1ObjectCharacteristicsListFilterGet
     *
     * Характеристики для создания КТ по всем подкатегориям.
     *
     */
    public function testContentV1ObjectCharacteristicsListFilterGet()
    {
    }

    /**
     * Test case for contentV1ObjectCharacteristicsObjectNameGet
     *
     * Характеристики для создания КТ для категории товара.
     *
     */
    public function testContentV1ObjectCharacteristicsObjectNameGet()
    {
    }

    /**
     * Test case for contentV1ObjectParentAllGet
     *
     * Родительские категории товаров.
     *
     */
    public function testContentV1ObjectParentAllGet()
    {
    }

    /**
     * Test case for publicApiV1RevokeDiscountsPost
     *
     * Сброс скидок для номенклатур.
     *
     */
    public function testPublicApiV1RevokeDiscountsPost()
    {
    }

    /**
     * Test case for publicApiV1RevokePromocodesPost
     *
     * Сброс промокодов для номенклатур.
     *
     */
    public function testPublicApiV1RevokePromocodesPost()
    {
    }

    /**
     * Test case for publicApiV1UpdateDiscountsPost
     *
     * Установка скидок.
     *
     */
    public function testPublicApiV1UpdateDiscountsPost()
    {
    }

    /**
     * Test case for publicApiV1UpdatePromocodesPost
     *
     * Установка промокодов для номенклатур.
     *
     */
    public function testPublicApiV1UpdatePromocodesPost()
    {
    }
}
