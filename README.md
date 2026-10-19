# PHP Experience · DIO

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-API%20REST-FF2D20?logo=laravel&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?logo=composer&logoColor=white)
![Status](https://img.shields.io/badge/status-em%20andamento-yellow)

Exercícios e projetos da **Formação PHP Experience**, da [DIO](https://www.dio.me/curso-php-completo): dos fundamentos da linguagem até uma API REST com Laravel.

Venho do Java/Spring Boot e estou aprendendo PHP para atuar em projetos de back-end, incluindo customizações no Moodle. Este repositório registra essa transição: cada exercício foi escrito por mim, e as anotações comparam o jeito PHP de fazer as coisas com o que eu já conhecia do Java.

## Estrutura

```
php-experience-dio/
├── modulo-01-fundamentos/            # sintaxe, tipos, strings, arrays, funções, formulários
├── modulo-02-poo-e-excecoes/         # classes, herança, interfaces, namespaces, exceções
├── modulo-03-boas-praticas-laravel/  # PSR, Composer e o projeto final
│   └── api-laravel/                  # API REST construída do zero com Laravel
└── README.md
```

Cada pasta de projeto tem um README próprio explicando o que foi feito e como rodar.

## Progresso

| Módulo | Conteúdo | Status |
| --- | --- | --- |
| 1 | Fundamentos de desenvolvimento de software com PHP | Em andamento |
| 2 | Tratamento de exceções e programação orientada a objetos | A fazer |
| 3 | Boas práticas PHP e desenvolvimento de APIs com Laravel | A fazer |

## Tecnologias

- PHP 8.x
- Composer
- Laravel
- Git e GitHub

## Como executar

**Pré-requisito:** PHP 8 instalado (`php -v` para conferir).

Scripts dos módulos 1 e 2, pelo terminal:

```bash
php modulo-01-fundamentos/nome-do-arquivo.php
```

Exercícios com formulário ou página web, pelo servidor embutido do PHP:

```bash
cd modulo-01-fundamentos
php -S localhost:8000
```

API Laravel do módulo 3:

```bash
cd modulo-03-boas-praticas-laravel/api-laravel
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Notas de quem vem do Java

Diferenças que mais me pegaram e que registro conforme avanço:

| Java | PHP | Observação |
| --- | --- | --- |
| `"a" + b` | `'a' . $b` | concatenação é com ponto |
| `obj.metodo()` | `$obj->metodo()` | seta no lugar do ponto |
| `Classe.metodo()` | `Classe::metodo()` | chamada estática |
| `Map` e `List` | `['chave' => $valor]` e `[1, 2]` | o mesmo array serve de lista e de mapa |
| `a.equals(b)` | `$a === $b` | `==` converte tipos antes de comparar |
| `x != null ? x : y` | `$x ?? $y` | operador de coalescência nula |

## Autor

**Luiz Felipe de Sá Naves Peixoto**
Estudante de Engenharia de Software na UnB e estagiário de desenvolvimento de software.

[LinkedIn](https://www.linkedin.com/in/luiz-felipe-3aa401360/) · [GitHub](https://github.com/luizfelipiie)

## Licença

Distribuído sob a licença MIT. Veja o arquivo [LICENSE](LICENSE).
