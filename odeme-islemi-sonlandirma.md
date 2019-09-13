# 4 - Ödeme İşlemi Sonlandırma

{% api-method method="post" host="" path="" %}
{% api-method-summary %}
3D Return Page
{% endapi-method-summary %}

{% api-method-description %}
Kullanıcı 3D işlemini tamamladıktan sonra, teknik@paym.es adresine bildirmiş olduğunuz geri dönüş sayfasına yönlendirilir
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-form-data-parameters %}
{% api-method-parameter name="paymesOrderId" type="string" required=false %}

{% endapi-method-parameter %}

{% api-method-parameter name="orderId" type="string" required=false %}

{% endapi-method-parameter %}

{% api-method-parameter name="type" type="string" required=false %}

{% endapi-method-parameter %}

{% api-method-parameter name="message" type="string" required=false %}

{% endapi-method-parameter %}

{% api-method-parameter name="price" type="string" required=false %}

{% endapi-method-parameter %}

{% api-method-parameter name="currency" type="string" required=false %}

{% endapi-method-parameter %}
{% endapi-method-form-data-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```

```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



