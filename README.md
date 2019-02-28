# Getting started

Content Tools analysis api documentation.

## Installation

Require the `madeinearnest/contenttools-php-sdk` package in your `composer.json` and update your dependencies:
```sh
$ composer require madeinearnest/contenttools-php-sdk
```

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | OAuth 2.0 Access Token |

You can register for your own free API key at http://contenttools.club

API client can be initialized as following.

```php
$oAuthAccessToken = 'oAuthAccessToken'; // OAuth 2.0 Access Token

$client = new ContentToolsLib\ContentToolsClient($oAuthAccessToken);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [APIController](#api_controller)

## <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```php
$client = $client->getClient();
```

### <a name="create_sentiment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createSentiment") createSentiment

> Analyse the sentiment of text


```php
function createSentiment($text)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| text |  ``` Required ```  | Text to be analysed |



#### Example Usage

```php
$text = 'text';

$result = $client->createSentiment($text);

```


[Back to List of Controllers](#list_of_controllers)



