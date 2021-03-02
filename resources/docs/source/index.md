---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_aa7c403060782129486eaf1c2ac85aef -->
## Récupère l&#039;ensemble des personnages

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/personnages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/personnages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/personnages`


<!-- END_aa7c403060782129486eaf1c2ac85aef -->

<!-- START_735df3d2d78874ca4d1287d565f2d109 -->
## Récupère l&#039;ensemble des personnages avec pagination
$pagination par défault à comme valeur 15

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/personnages/paginate/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/personnages/paginate/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/personnages/paginate/{pagination}`


<!-- END_735df3d2d78874ca4d1287d565f2d109 -->

<!-- START_3d0535518f14e9504549de61301ddee8 -->
## Permet de récupérer les personnages via le nom

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/personnages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/personnages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/personnages/{name}`


<!-- END_3d0535518f14e9504549de61301ddee8 -->

<!-- START_129fa617725f71aeceb83754d1f2fb2d -->
## Retourne l&#039;ensemble des planètes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/planetes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/planetes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/planetes`


<!-- END_129fa617725f71aeceb83754d1f2fb2d -->

<!-- START_0173da3cd9876acf45da964bccd2a5e2 -->
## Permet de récupérer les planètes via le nom

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/planetes/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL(
    "http://localhost/api/planetes/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/planetes/{planetes}`


<!-- END_0173da3cd9876acf45da964bccd2a5e2 -->


