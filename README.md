# RamenGo

Bem-vindo a minha aplicação Laravel! Este guia irá ajudá-lo a configurar e rodar a aplicação em seu ambiente local.

## Pré-requisitos

Certifique-se de ter os seguintes softwares instalados no seu pc:

- [PHP](https://www.php.net/downloads) >= 7.3
- [Composer](https://getcomposer.org/download/)

## Passos para Configuração

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/VilmarHenrique/RamenGo.git
   **cd RamenGo

   //Instale as dependências do Composer:
   **composer install

   //Copie o arquivo de exemplo .env e configure suas variáveis de ambiente.   

   //Execute as migrações e seeders para preparar o banco de dados:
   **php artisan migrate:fresh --seed

   //Para iniciar o servidor de desenvolvimento, execute o comando:
   **php artisan serve

   O servidor de desenvolvimento será iniciado e a aplicação estará disponível em http://localhost:8000