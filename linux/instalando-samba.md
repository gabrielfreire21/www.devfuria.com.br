---
layout:      materia
title:       Instalando o samba no Fedora
description: Como instalar o samba no Fedora
---


Execute o seguinte comando:

	# yum install samba samba-client samba-doc samba-swat

Inicialize o serviço (atalho)

	# service smb start

Para iniciar o serviço:

	# /etc/init.d/samba start

Para parar o serviço:

	# /etc/init.d/samba stop


<hr>
Fonte

- [http://www.hardware.com.br/tutoriais/samba-swat/pagina3.html](http://www.hardware.com.br/tutoriais/samba-swat/pagina3.html "link-externo")
