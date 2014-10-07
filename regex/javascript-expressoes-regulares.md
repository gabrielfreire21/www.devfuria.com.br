---
layout:      grid12-index
title:       Expressões Regulares em JavaScript
description: Expressões Regulares em JavaScript
---


Em JavaScript temos 3 funções para tratarmos as expressão regular's: `test()`, `exec()` e `match()`.

As expressão regulares devem ser embebidas por barras, sem aspas, exemplo:

    /sua expressão regular/

Veja os exemplos:



### patern.test()

{% highlight javascript %}
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

resultado = pattern.test(string);
console.log(resultado); // true
{% endhighlight %}

Leia mais sobre a função [test()](/javascript/refs/pattern-test/)



### patern.exec()

{% highlight javascript %}
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

resultado = pattern.exec(string);
console.log(resultado); // ["exemplo", 19, "Casa com a palavra exemplo"]
{% endhighlight %}

Leia mais sobre a função [exec()](/javascript/refs/pattern-exec/)



### string.match()

{% highlight javascript %}
var string = "Casa com a palavra exemplo",
    pattern = /exemplo/,
    resultado;

resultado = string.match(pattern);
console.log(resultado); // ["exemplo", 19, "Casa com a palavra exemplo"]
{% endhighlight %}

Leia mais sobre a função [match()](/javascript/refs/string-match/)

E também temos o construtor `RegExp()`.



### RegExp()

Utilizando-se do construtor `RegExp()` podemos compilar a expressão regular antes de usá-la.

Uma vez com a expressão regular compilada podemos executá-la em qualquer uma das três formas já discutidas

{% highlight javascript %}
var string = "Casa com a palavra exemplo",
    regexp = /exemplo/;

pattern = new RegExp(regexp);
console.log(pattern.test(string));// true

pattern = new RegExp(regexp);
console.log(pattern.exec(string));// ["exemplo", 19, "Casa com a palavra exemplo"]

pattern = new RegExp(regexp);
console.log(string.match(pattern));// ["exemplo", 19, "Casa com a palavra exemplo"]
{% endhighlight %}

Leia mais sobre o construtor [RegExp()](/javascript/refs/regexp/).


Referência
---

- [MDN (site oficial](https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions "link-externo")