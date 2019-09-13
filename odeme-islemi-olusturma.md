---
description: >-
  API Hesabına sahip üye işyerleri api.paym.es hizmetine aşağıdaki gibi sorgu
  göndermesi gerekmektedir.
---

# 3 - Ödeme İşlemi Oluşturma

{% api-method method="post" host="https://api.paym.es/order\_create" path="" %}
{% api-method-summary %}
Order Create
{% endapi-method-summary %}

{% api-method-description %}
Ödeme işlemi oluşturma başarılı ise kullanıcı yanıttan dönen returnUrl adresine yönlendirilmelidir.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-form-data-parameters %}
{% api-method-parameter name="secret" type="string" required=true %}
teknik@paym.es adresinden öğrenebilirsiniz.
{% endapi-method-parameter %}

{% api-method-parameter name="orderId" type="string" required=true %}
Ödeme işlemini takip edebilmeniz için sisteminizdeki benzersiz değişkendir.
{% endapi-method-parameter %}

{% api-method-parameter name="price" type="number" required=true %}
Ödeme Fiyatı Tutarı  
Örnek: 10.00
{% endapi-method-parameter %}

{% api-method-parameter name="currency" type="string" required=true %}
Sabit TRY
{% endapi-method-parameter %}

{% api-method-parameter name="productName" type="string" required=true %}
Ödeme işlemi yapmak istediğiniz ürünün adı
{% endapi-method-parameter %}

{% api-method-parameter name="buyerName" type="string" required=true %}
Satın Alan Kişi Ad Soyad
{% endapi-method-parameter %}

{% api-method-parameter name="buyerPhone" type="string" required=true %}
Satın Alan Kişi Telefon
{% endapi-method-parameter %}

{% api-method-parameter name="buyerEmail" type="string" required=true %}
Satın Alan Kişi Mail Adresi
{% endapi-method-parameter %}

{% api-method-parameter name="buyerAddress" type="string" required=true %}
Satın Alan Kişi Adresi
{% endapi-method-parameter %}
{% endapi-method-form-data-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}
Ödeme işlemi oluşturuldu
{% endapi-method-response-example-description %}

```
{"status":"return_url{"status":"return_url","message":"Redirect 3D","returnUrl":"https:\/\/api.paym.es\/payment\/fd56640f-c2b4-44d5-b765-61d6288bb5f2","paymesOrderId":"fd56640f-c2b4-44d5-b765-61d6288bb5f2"},"message":"Redirect 3D","returnUrl":"https:\/\/api.paym.es\/payment\/915959e3-0764-418a-b2e5-e764c2d68a25","paymesOrderId":18}
```
{% endapi-method-response-example %}

{% api-method-response-example httpCode=302 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{"status":"error","message":"The price field is required."}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



