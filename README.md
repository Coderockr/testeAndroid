# Objetivos

O objetivo deste teste é verificar os conhecimentos dos candidatos a vaga de [developer Android](http://blog.coderockr.com/2012/06/vaga-para-programador-android/) da Coderockr

## Procedimentos

1. Clonar esse projeto
2. Implementar a interface conforme exemplo do diretório Design
3. Usar o REST service descrito abaixo para requisitar os dados e apresentar na interface
4. Enviar por email o link do repositório clonado para jobs@coderockr.com

### REST Service

URL: http://soa.coderockr.com/brand

Cabeçalhos necessários: 

```
Content-type: application/x-www-form-urlencoded
Authorization: 85e4a615f62c711d3aac0e7def5b4903
```

O resultado da requisição é no formato JSON, conforme o exemplo abaixo:

```
[
    {
        "id": 1,
        "created": "2012-06-20T10:55:27-0300",
        "image": "http://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Apple-logo.svg/125px-Apple-logo.svg.png",
        "description": "Apple",
        "product_collection": [
            {
                "id": 1,
                "created": "2012-06-20T10:57:52-0300",
                "description": "iPhone 4",
                "featured": true,
                "price": 1400,
                "status": 1,
                "snapshot": "http://km.support.apple.com/library/APPLE/APPLECARE_ALLGEOS/HT3939/HT3939-iphone_4-side_front_dimensions-001-en.png"
            },
            {
                "id": 2,
                "created": "2012-06-20T10:58:50-0300",
                "description": "iPad",
                "featured": true,
                "price": 1600,
                "status": 1,
                "snapshot": "http://www.zurb.com/playground/playground/ipad-stencil/ipad-normal.jpg"
            }
        ]
    },
    {
        "id": 2,
        "created": "2012-06-20T10:56:05-0300",
        "image": "http://images.dailytech.com/nimage/samsung-logo.jpg",
        "description": "Samsung",
        "product_collection": [
            {
                "id": 3,
                "created": "2012-06-20T11:04:40-0300",
                "description": "Galaxy Tab",
                "featured": true,
                "price": 1650,
                "status": 1,
                "snapshot": "http://static.guim.co.uk/sys-images/Technology/Pix/pictures/2010/9/2/1283427691059/Galaxy-Tab-001.jpg"
            },
            {
                "id": 4,
                "created": "2012-06-20T11:05:34-0300",
                "description": "Galaxy S3",
                "featured": true,
                "price": 1150,
                "status": 1,
                "snapshot": "http://cdn9.mos.techradar.com///art/mobile_phones/Samsung/GalaxyS3/Galaxy%20Fire/Samsung_Galaxy_S3_08-380-75.JPG"
            }
        ]
    }
]
```

## Dúvidas

Quaisquer dúvidas enviar para eminetto@coderockr.com


