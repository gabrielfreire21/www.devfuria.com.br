---
layout:      materia
title:       "Conversor Celsius/Fahrenheit - linguagem c"
description: Exercício de lógica de programação para converter celsius em fahrenheit e vice versa.
---
        
Crie duas funções para conversão de temperaturas. 

Uma converterá celsius em fahrenheit e a outra fará o inverso.

Saiba que 100c é igual a 212f, veja fórmula:

       C          F - 32
    -------  =  ---------
       5            9 
       

 
Solução passo a passo
---

Primeiro os testes.

    int celsius    = 100;
    int fahrenheit = 212;

	assert(celsius == toCelsius(fahrenheit));
	assert(fahrenheit == toFahrenheit(celsius));

O mínimo para eles (os testes) passarem.

    int toCelsius(int fahrenheit) {
        return 100;
    }

    int toFahrenheit(int celsius) {
        return 212;
    }

Só nos resta a lógica, agora é com você


Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int toCelsius(int fahrenheit) {
    return 5 * (fahrenheit - 32) / 9;
}

int toFahrenheit(int celsius) {
    return celsius / 5 * 9 + 32;
}

int main (){

    int celsius    = 100;
    int fahrenheit = 212;

    assert(celsius == toCelsius(fahrenheit));
    assert(fahrenheit == toFahrenheit(celsius));

    return 0;
}
{% endhighlight %}        