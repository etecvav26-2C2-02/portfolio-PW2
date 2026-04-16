## 1. pergunta:

A diferença entre cookies e sessions é principalmente sobre a sua usabilidade, por mais que ambos sirvam pra guardar dados, um guarda dados fornecidos diretamente pelo usuário (cookies), e o outro busca guardas dados imutáveis e já existentes e ficam no servidor (sessions) sendo mais seguro por que seus dados não são visíveis nem podem ser acessados pelo usuário, até por que os cookies tem uma “expectativa de vida”, já por outro lado, os sessions normalmente duram até o logout, cookies sendo normalmente sendo usados para melhorar a experiência do usuário (salvar login/carrinho) e rastrear comportamentos para publicidade personalizada. utilizado para manter informações sobre um usuário específico durante a sua navegação em um site ou aplicativo.

## 2. pergunta:

O sessions seriam usados para guardas informações de itens e dados do site e do usuários como email de login e senha, por ser mais seguro e não dar acesso ao clientes alterar e também o que ele colocar no carrinho porque eu não posso deixar esse dados ser apagado com o passar do tempo, e qualquer dado que não seja tão importante a ponto de ser necessária a todo o tempo eu guardaria em cookies, por exemplo classes de itens preferencia da pessoas, como se ela tem comprado muitas roupas, acessórios, utensílios entre outros para poder dar sugestões de itens por exemplo.

## 3. pergunta:

1. passo: tinha uma mensagem escrito: “Cookie ainda não disponível.”;
2. passo: tinha uma mensagem escrita: ”Valor do cookie: 1”;
3. passo: tinha várias colunas uma com o nome contador, uma com nome valor e logo a baixo 1;
4. passo: limpei e atualizei e estava escrito: “Cookie ainda não disponível.” novamente.
acho que como não tem a entrada de nenhum valor inicial pros cookies ele diz que não existe um cookie porque ele precisa de um dado pra funcionar.

## 4. pergunta:

Sessions são geralmente preferidas para autenticação porque oferecem mais segurança e controle sobre os dados do usuário.
Em termos de segurança, sessions armazenam as informações no servidor, enquanto o cliente mantém apenas um identificador de sessão. Isso reduz muito o risco de exposição de dados sensíveis, como IDs de usuário ou permissões. Já cookies armazenam dados no navegador, podendo ser acessados, modificados ou roubados se não forem bem protegidos.
Ao utilizar apenas cookies, surgem vários riscos:
O usuário pode modificar valores (ex: se estivesse guardado um ID ou nível de acesso).
Cookies podem ser roubados em ataques como XSS.
Dados sensíveis podem ser expostos se não forem criptografados.
Maior dificuldade de garantir integridade e autenticidade dos dados.
