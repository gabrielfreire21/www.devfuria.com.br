---
layout:      materia
title:       "Contar string - linguagem c"
description: Exercício de lógica de programação para contar a quantidade de caracteres de uma string qualquer.
---

Faça um programa para contar a quantidade de caracteres que ela contêm.



Passo a passo
---

Primeiro o teste:

    int main() {
        char ola[] = "palavra";
        assert(7 == contaChar(ola));
        return 0;
    }

Faça o teste compilar.

    int contaChar(char str[]) {
        return 0;
    }

Agora implemente até que o teste passe.


Código completo
---

{% highlight c %}
#include <stdio.h>
#include <assert.h>

int contaChar(char str[]) {
    int i = 0;

    do {
        ++i;
    } while (str[i] != 0);

    return i;
}

int main() {
    char ola[] = "palavra";
    assert(7 == contaChar(ola));
    return 0;
}
{% endhighlight %}


Desafio
---

As funções abaixo também funcionam, porém a implementação é um pouco diferente.

    int contaChar(const char *str) {
        int i = 0;
        for (; str[i] != 0; ++i);
        return i;
    }

A solução abaixo é do professor da [USP Paulo Feofiloff](http://www.ime.usp.br/~pf/algoritmos/aulas/bubi2.html "link-externo").

    unsigned int strlen( string s) {
       int i;
       for (i = 0; s[i] != '\0'; ++i) ;
       return i;
    }