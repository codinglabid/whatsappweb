# whatsappweb

whatsappweb

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist whatsappweb/yii2-whatsapp-web "*"
```

or add

```
"whatsappweb/yii2-whatsapp-web": "*"
```

to the require section of your `composer.json` file.

## Example

```
$url = 'http://env-3280255.user.cloudjkt01.com/send-message';
$phoneNumber = '081277758656';
$message = 'halo mas mas';
$WhatsApp = new WhatsAppWeb($url, $phoneNumber, $message, 1234);
$WhatsApp->sendMessage();
```
