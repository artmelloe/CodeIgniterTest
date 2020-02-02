### Montando o projeto ###

1) Copie o projeto para seu servidor local;

2) Acesse o arquivo "config.php" no diretório "application/config";

3) Na configuração "$config['base_url']" digite a url base do projeto
   - Ex: $config['base_url'] = 'http://localhost/crud_ci/';

4) Importe o arquivo ".sql" que está na pasta "database" para seu servidor local;

5) Pefeito! Agora você consegue rodar o projeto.

### Observações ###

- Não esqueça de verificar se o módulo "rewrite_module" do apache está habilitado;

- Todas as validações de campo foram feitas usando os recursos do CodeIgniter, porém
  também é possível combinar com validações jquery para aumentar a segurança dos dados.