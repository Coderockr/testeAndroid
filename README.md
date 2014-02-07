# Objetivos

O objetivo deste teste é verificar os conhecimentos dos candidatos a vaga de [developer Android](https://gist.github.com/eminetto/8842616) da Coderockr

## Procedimentos e requisitos

1. Clonar esse projeto
2. Enviar um e-mail para jobs@coderockr.com passando uma estimativa de tempo para término do teste
2. Implementar a interface conforme exemplo do diretório Design. O design deve ser adaptado para ser executado tanto em tablets com em smartphones
3. Usar o REST service descrito abaixo para requisitar os dados e apresentar na interface
4. O aplicativo deve armazenar os dados em um banco de dados local e usá-lo caso o dispositivo esteja fora da internet
4. Enviar por email o link do repositório clonado para jobs@coderockr.com junto com o tempo realmente usado para realizar o teste. 

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
    "name": "Apple",
    "description": "Apple Inc. é uma empresa multinacional norte-americana que tem o objetivo de projetar e comercializar produtos eletrônicos de consumo, software de computador e computadores pessoais",
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
    "name": "Samsung",
    "description": "O grupo Samsung é uma corporação multinacional que atua em diversos ramos da área de tecnologia da informação com sede em Seul, Coreia do Sul",
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

## O que será avaliado

- Atenção aos detalhes da interface
- Conversão da interface para smartphones
- Ausência de erros
- Tratamento de erros 
- Clareza dos códigos 
- Histórico de commits no Github
- Organização das classes e estruturas criadas
- Pontos extra serão ganhos caso o aplicativo tenha testes unitários

## Dúvidas

Quaisquer dúvidas enviar para eminetto@coderockr.com


