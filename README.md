[checkmark]: https://raw.githubusercontent.com/mozgbrasil/mozgbrasil.github.io/master/assets/images/logos/Red_star_32_32.png "MOZG"
![valid XHTML][checkmark]

[psr4]: http://www.php-fig.org/psr/psr-4/
[requirements]: http://mozgbrasil.github.io/requirements/
[getcomposer]: https://getcomposer.org/
[uninstall-mods]: https://getcomposer.org/doc/03-cli.md#remove

# Mozg\CieloBraspagSdkPhp

## Sinopse

SDK de integração a Cielo e Braspag

## Instalação - Atualização - Desinstalação

Esta biblioteca destina-se a ser instalado usando o [Composer][getcomposer].

Autoloading compatível é [PSR-4][psr4]

--

### Para instalar o módulo execute o comando a seguir no terminal do seu servidor

    composer require mozgbrasil/cielo-braspag-sdk-php

-- 

### Para atualizar o módulo execute o comando a seguir no terminal do seu servidor

    composer clear-cache && composer update

--

### Para [desinstalar][uninstall-mods] o módulo execute o comando a seguir no terminal do seu servidor

    composer remove mozgbrasil/cielo-braspag-sdk-php && composer clear-cache && composer update

## Perguntas mais frequentes "FAQ"

### Obtendo o MerchantId e MerchantKey

Efetue o cadastro no seguinte ambiente para obter os dados de integração

https://cadastrosandbox.cieloecommerce.cielo.com.br/

https://cadastrosandbox.braspag.com.br/

### Simulação de transação

Podemos executar o comando curl via terminal ou pelo seguinte serviço http://onlinecurl.com/

### Braspag API (V2) - http://apidocs.braspag.com.br/

    curl --request POST https://apisandbox.braspag.com.br/v2/sales/ --header 'Content-Type: application/json' --header 'MerchantId: 1985000c-22f7-4429-9a92-fa5cb27de0e0' --header 'MerchantKey: VJGOUODUJMCLCDAVPIBSSAPMWCTQVQBTHOXRUZFS' --header 'RequestId: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx' --data '{  
        "MerchantOrderId":"2014111703",
        "Customer":{  
            "Name":"Comprador Teste"     
        },
        "Payment":{  
            "Type":"CreditCard",
            "Amount":15700,
            "Provider":"Simulado",
            "Installments":1,
            "CreditCard":{  
                "CardNumber":"1234123412341231",
                "Holder":"Teste Holder",
                "ExpirationDate":"12/2021",
                "SecurityCode":"123",
                "Brand":"Visa"
            }
        }
    }' --verbose

### Cielo API 3.0 - https://developercielo.github.io/Webservice-3.0/

    curl \
    --request POST https://apisandbox.cieloecommerce.cielo.com.br/1/sales/ \
    --header 'Content-Type: application/json' \
    --header 'MerchantId: a2133427-a0f8-4fe8-b605-6469161e7711' \
    --header 'MerchantKey: XUMUBMGQBPNUAYIESMSHTCNLVTNEXIDPHXQRZYOC' \
    --header 'RequestId: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx' \
    --data '{  
       "MerchantOrderId":"2014111703",
       "Customer":{  
          "Name":"Comprador crédito simples"
       },
       "Payment":{  
         "Type":"CreditCard",
         "Amount":15700,
         "Installments":1,
         "SoftDescriptor":"123456789ABCD",
         "CreditCard":{  
             "CardNumber":"4551870000000183",
             "Holder":"Teste Holder",
             "ExpirationDate":"12/2030",
             "SecurityCode":"123",
             "Brand":"Visa"
         }
       }
    }' --verbose

### Sobre o retorno "129 - Affiliation not found" ou "314 - Invalid Integration"

Se trata de erro relacionado ao MerchantId e MerchantKey inválido

Certifique se de analisar os dados de filiação e a URL

Como as simulações acima estão funcionais você pode alterar somente o MerchantId e MerchantKey para testar se seus dados de filiação está retornando o processo de transação

## Badges

[![Join the chat at https://gitter.im/mozgbrasil](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/mozgbrasil/)
[![Latest Stable Version](https://poser.pugx.org/mozgbrasil/cielo-braspag-sdk-php/v/stable)](https://packagist.org/packages/mozgbrasil/cielo-braspag-sdk-php)
[![Total Downloads](https://poser.pugx.org/mozgbrasil/cielo-braspag-sdk-php/downloads)](https://packagist.org/packages/mozgbrasil/cielo-braspag-sdk-php)
[![Latest Unstable Version](https://poser.pugx.org/mozgbrasil/cielo-braspag-sdk-php/v/unstable)](https://packagist.org/packages/mozgbrasil/cielo-braspag-sdk-php)
[![License](https://poser.pugx.org/mozgbrasil/cielo-braspag-sdk-php/license)](https://packagist.org/packages/mozgbrasil/cielo-braspag-sdk-php)
[![Monthly Downloads](https://poser.pugx.org/mozgbrasil/cielo-braspag-sdk-php/d/monthly)](https://packagist.org/packages/mozgbrasil/cielo-braspag-sdk-php)
[![Daily Downloads](https://poser.pugx.org/mozgbrasil/cielo-braspag-sdk-php/d/daily)](https://packagist.org/packages/mozgbrasil/cielo-braspag-sdk-php)
[![Reference Status](https://www.versioneye.com/php/mozgbrasil:cielo-braspag-sdk-php/reference_badge.svg?style=flat-square)](https://www.versioneye.com/php/mozgbrasil:cielo-braspag-sdk-php/references)
[![Dependency Status](https://www.versioneye.com/php/mozgbrasil:cielo-braspag-sdk-php/1.0.0/badge?style=flat-square)](https://www.versioneye.com/php/mozgbrasil:cielo-braspag-sdk-php/1.0.0)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mozgbrasil/cielo-braspag-sdk-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mozgbrasil/cielo-braspag-sdk-php/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/mozgbrasil/cielo-braspag-sdk-php/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mozgbrasil/cielo-braspag-sdk-php/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/mozgbrasil/cielo-braspag-sdk-php/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mozgbrasil/cielo-braspag-sdk-php/build-status/master)
[![Code Climate](https://codeclimate.com/github/mozgbrasil/cielo-braspag-sdk-php/badges/gpa.svg)](https://codeclimate.com/github/mozgbrasil/cielo-braspag-sdk-php)
[![Test Coverage](https://codeclimate.com/github/mozgbrasil/cielo-braspag-sdk-php/badges/coverage.svg)](https://codeclimate.com/github/mozgbrasil/cielo-braspag-sdk-php/coverage)
[![Issue Count](https://codeclimate.com/github/mozgbrasil/cielo-braspag-sdk-php/badges/issue_count.svg)](https://codeclimate.com/github/mozgbrasil/cielo-braspag-sdk-php)

:cat2: