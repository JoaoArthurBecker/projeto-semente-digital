SEMENTE DIGITAL


A agropecuária familiar desempenha um papel crucial na economia e na segurança alimentar de muitas regiões, sendo responsável por grande parte da produção agrícola e pecuária. No entanto, pequenos produtores enfrentam desafios significativos, como a falta de acesso a tecnologias e informações que poderiam otimizar suas atividades e melhorar a produtividade.
Nesse contexto, a aplicação que estamos desenvolvendo surge como uma ferramenta para apoiar esses produtores. Trata-se de uma página web intuitiva e acessível, que funciona como uma agenda digital. Com ela, os produtores poderão organizar suas tarefas diárias, agendar atividades essenciais, e consultar a previsão do tempo para planejar suas operações agrícolas de forma mais eficaz. Além disso, a aplicação oferece informações atualizadas sobre os preços de mercado de produtos agrícolas, permitindo que os produtores façam escolhas informadas na hora de comprar insumos e vender sua produção.
Outro diferencial da aplicação é a disponibilização de dicas de cultivo para diversas culturas, fornecendo orientação técnica que pode fazer a diferença na produtividade e na sustentabilidade das operações agropecuárias. Com essa ferramenta, pequenos produtores terão um suporte robusto para gerenciar suas atividades, melhorar a eficiência e, consequentemente, aumentar sua competitividade no mercado.


Requisitos Funcionais:
1.	Cadastro de Usuários:
a.	O sistema deve permitir o cadastro de usuários, incluindo pequenos produtores e administradores.
b.	Os usuários devem poder criar uma conta com informações como nome, e-mail, senha e informações de contato.
 

2.	Login e Autenticação:
a.	O sistema deve permitir que os usuários façam login utilizando suas credenciais (e-mail e senha).
b.	Deve haver funcionalidade para recuperação de senha em caso de esquecimento

3.	Gestão de Agenda:
a.	- O sistema deve permitir que os usuários anotem e organizem seus afazeres diários.
b.	- Os usuários devem poder agendar atividades futuras com data e hora, recebendo notificações de lembrete.

4.	Consulta de Previsão do Tempo:
a.	- O sistema deve fornecer informações meteorológicas atualizadas para que os usuários possam planejar suas atividades agrícolas.
b.	-	A previsão do tempo deve ser acessível a partir da página principal do usuário.

5.	Consulta de Preços de Produtos Agrícolas:
a.	- O sistema deve permitir a consulta de preços de mercado para diversos produtos agrícolas.
b.	- Os preços devem ser atualizados periodicamente e devem ser exibidos de maneira clara e acessível.

6.	Dicas de Cultivo:
a.	- O sistema deve fornecer dicas de cultivo para diferentes culturas.
b.	- As dicas devem ser organizadas por tipo de cultura e devem incluir informações como épocas de plantio, cuidados e colheita.

7.	Geração de Relatórios:
a.	- O sistema deve permitir que os usuários gerem relatórios baseados nas atividades registradas na agenda.
b.	- Os relatórios devem incluir informações como tarefas realizadas, previsões consultadas e preços de mercado.

8.	Interface Responsiva:
a.	- A aplicação deve ser acessível via dispositivos móveis, tablets e computadores, ajustando-se automaticamente ao tamanho da tela.
 
Requisitos Não Funcionais:
1.	Desempenho:
a.	- O sistema deve ser capaz de responder às requisições dos usuários em tempo real, com um tempo de resposta inferior a 2 segundos para a maioria das operações.

2.	Segurança:
a.	- Os dados dos usuários devem ser armazenados de forma segura, utilizando criptografia para proteger informações sensíveis como senhas.
b.	- O sistema deve garantir a proteção contra acessos não autorizados e tentativas de invasão.

3.	Usabilidade:
a.	- A interface deve ser intuitiva e fácil de usar, mesmo para usuários com pouca familiaridade com tecnologia.
b.	- O sistema deve ser testado em diferentes navegadores e dispositivos para garantir uma experiência consistente.

4.	Escalabilidade:
a.	- O sistema deve ser escalável para suportar um número crescente de usuários e dados sem degradação de desempenho.

5.	Confiabilidade:
a.	- O sistema deve ter alta disponibilidade, com um tempo de inatividade mínimo e backup regular dos dados.

6.	Manutenibilidade:
a.	- O código-fonte do sistema deve ser bem documentado e estruturado, facilitando futuras atualizações e correções de bugs.

7.	Compatibilidade:
a.	- A aplicação deve ser compatível com os principais navegadores (Chrome, Firefox, Safari, Edge) e versões atuais de sistemas operacionais.
 
Diagramas
1.	Diagrama de Classe:


2.	Diagrama de Atividade:



Implementação:
Inicialmente, a implementação do projeto se baseará em um protótipo, que contemplará as principais funcionalidades, sendo elas: 
•	Operações crud para usuários e sua habstração para o sistema sem login e validação;
•	Operações crud e habstração para registro de eventos na ajenda;
•	Integração com api climática e processamento de suas informações;
•	Dependências externas de notificação e demais interações pertinentes.
O protótipo será baseado em uma arquitetura mvc orientada a eventos, e será construido com base na linguágem php, possuindo como apoio para gerenciamento de  ORM  e dependências externas o framework Laravel. Quanto a IDEs, estas serão flexibilizadas, de acordo com a experiência de cada programador nas opções que suportam a linguágem sendo as principais php storm e Visual Studio Code, com os respectivos complementos de suporte para intelifence php.   O SGBD  designado para a construção de base de dados relacional foi o MY sql, acoplado ao elouquente ORM do laravel.  Em termos de api serão utilisadas principalmente as oferecidas pela embrapa sendo a principal Clim API e quanto a execução  como aparato provedor de sql, apache2 e compilador para php verção 8 o servidor local Xampp. Demais dependências esternas como mailers e outras eventuais, serão aproveitadas do próprio laravel.
