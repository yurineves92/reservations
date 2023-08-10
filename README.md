# Sistema de Reservas em Laravel com Testes

Este projeto tem como objetivo desenvolver um sistema abrangente de reservas utilizando o framework Laravel, incluindo testes automatizados. O objetivo é criar um sistema escalável e rico em recursos que facilite a gestão de clientes, atividades e detalhes de viagens. O sistema será projetado para gerar documentos em PDF para cada viagem e oferecer uma experiência de usuário perfeita tanto para os clientes quanto para os guias.

## Sumário

- [Introdução](#introdução)
- [Recursos](#recursos)
- [Instalação](#instalação)
- [Utilização](#utilização)
- [Testes](#testes)
- [Contribuições](#contribuições)
- [Licença](#licença)

## Introdução

Este sistema de reservas está sendo desenvolvido para substituir um sistema existente baseado em node/express/mongo, com o objetivo de aumentar a escalabilidade e incorporar novas funcionalidades. O foco principal é construir uma interface amigável que permita aos clientes fazer reservas para várias atividades e permita aos guias gerenciar detalhes das viagens de forma eficiente.

## Recursos

1. **Gestão de Clientes**: O sistema permitirá que administradores adicionem e gerenciem informações de clientes, incluindo detalhes de contato, preferências e reservas anteriores.

2. **Gestão de Atividades**: Os administradores podem definir diferentes tipos de atividades, suas descrições e detalhes associados. As atividades podem ser facilmente atualizadas ou adicionadas.

3. **Link de Reserva**: Os clientes receberão um link exclusivo para fornecer seus tamanhos e preferências antes da viagem. Isso garante que os guias tenham informações precisas para cada reserva.

4. **Geração de PDF**: O sistema gerará documentos em PDF sob demanda, fornecendo aos guias informações específicas da viagem, incluindo detalhes do cliente, horários das atividades e quaisquer requisitos especiais.

## Instalação

Para configurar o sistema de reservas localmente, siga estas etapas:

1. Clone esse repositório: `git clone https://github.com/yurineves92/reservations`
2. Navegue até o diretório do projeto: `cd reservations`
3. Instale as dependências: `composer install`
4. Configure o arquivo `.env` com suas configurações de banco de dados e outras.
5. Execute as migrações: `php artisan migrate`
6. Inicie o servidor de desenvolvimento: `php artisan serve`

## Utilização

1. Administradores podem fazer login no sistema e gerenciar clientes, atividades e viagens.
2. Os clientes recebem links de reserva e fornecem seus tamanhos e preferências.
3. Guias podem acessar detalhes das viagens e gerar documentos PDF conforme necessário.

## Testes

O projeto incluirá testes automatizados para garantir a qualidade do código e a funcionalidade do sistema. Para executar os testes, utilize o comando:

`php artisan test`

## Contribuições

Contribuições são bem-vindas! Se você deseja contribuir com o projeto, siga as diretrizes no arquivo CONTRIBUTING.md.

## Licença

Este projeto está licenciado sob a Licença MIT.