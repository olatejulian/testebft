# Repositório do teste de backend dev da Brasilfone Telecom - BFT

[Julian Lucas F. Olate](github.com/olatejulian/testebft)

## Comentários

### Considerações iniciais

- Decidi fazer o teste utilizando com o método POST com PHP assim como está descrito no teste, apesar de só ter visto a linguagem quando estudei um pouco sobre mySQL e phpMyAdmin, é interessante eu já dar os primeiros passos em PHP.

- Como geralmente só utilizo SQL para banco de dados para análise, geralmente utilizando Python, conectando com PSYCOPG2 e fazendo query select com PANDAS, eu não sei lidar com senhas, vi que no php é possível utilizar criptografia para senhas e que POST é um método confiável de insert de dados em DB, preciso estudar mais a documentação do php e postgresql posteriormente.

### Considerações finais

- Esse teste foi uma oportunidade interessante de aprender sobre servidores web, linguagem php e interações com bancos de dados SQL, nos meus estudos vi que é um tipo de configuração de servidor,
demoninada LAPP, Linux, Apache, Postgresql e PHP.
- O jupyter notebook python está na extensão .ipynb mas será disponibilizado em formato .html e .pdf também, eu designei um ambiente virtual onde está todos packages utilizados pela linguagem python, há um arquivo requeriments.txt que lista todos packages instalados, facilitando a reprodução.
- No futuro pretendo estudar sobre docker para facilitar a portabilidade e reprodução dos códigos.
## Sobre o servidor Postgresql e Apache

- Eu utilizo tanto python com jupyter notebook quanto o pgadmin4 para interagir com o server.
- Fiz as configurações padrões recomendadas, os arquivos httpd.conf e httpd-vhosts.conf estão disponíveis no repositório, seu path o site está com o meu diretório, mas pode ser facilmente trocado.

## System Information

### Versions

Linus Kernel 5.4 LTS
Apache v2.4.46
Postgresql v13.1
PHP v8.0.3
Python v3.8.5

### OS, Kernel and Hardware

Operating System: Manjaro Linux
KDE Plasma Version: 5.21.3
KDE Frameworks Version: 5.80.0
Qt Version: 5.15.2
Kernel Version: 5.4.108-1-MANJARO LTS
OS Type: 64-bit
Graphics Platform: X11
Processors: 2/4 × Intel® Core™ i3-7100U CPU @ 2.40GHz
Memory: 7,6 GiB of RAM
Graphics Processor: Mesa Intel® HD Graphics 620