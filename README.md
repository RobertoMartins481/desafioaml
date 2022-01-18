# Desafio AML Group
### ✏️ Questões e Respostas

+ **A – Com suas palavras explique o que é lavagem de dinheiro.**<br>
📝 Lavagem de dinheiro é quando ocorre transformação de dinheiro sujo (ilegal) para dinheiro limpo.

+ **B – O que é Cartão de Pagamento do Governo Federal (CPGF), e qual a sua finalidade.**<br>
📝 É um meio de pagamento utilizado pelo governo que funciona de forma similar ao cartão de crédito, porém dentro de limites e regras específicas. O governo utiliza o CPGF para pagamentos de despesas próprias, que possam ser enquadradas como suprimento de fundos.

+ **C – Quem pode utilizar o CPGF?**<br>
📝 O Suprimento de Fundos somente pode ser concedido a servidor público ou ocupante de cargo em comissão em efetivo exercício no órgão, e que preencha as seguintes condições:<br>
**a)** não ser responsável por dois suprimentos de fundos em fase de aplicação e/ou de prestação de contas;<br>
**b)** não tenha a seu cargo a guarda do material a adquirir, salvo quando não houver na repartição outro servidor que reúna condições de receber o Suprimento de Fundos;<br>
**c)** não ser responsável por Suprimento de Fundos que, esgotado o prazo, esteja pendente de prestação de contas;<br>
**d)** não ter sido declarado em alcance, assim entendido aquele que tenha cometido apropriação indevida, extravio, desvio ou falta verificada na prestação de contas, de dinheiro ou valores confiados à sua guarda;<br>
**e)** não tenha tido prestação de contas da aplicação de suprimento fundos com despesas impugnadas pelo Ordenador de Despesas ou que esteja em processo de Tomada de Contas Especial;<br>
**f)** não se confunda com a pessoa do Ordenador de Despesas; e<br>
**g)** não seja o próprio demandante da aquisição/contratação de serviço, exceto em viagem a serviço.<br>

Além dessas condições, não é recomendável a concessão de Suprimento de Fundos a autoridade, Ministro de Estado ou ocupante de cargo de Natureza Especial ou de cargo do Grupo Direção e Assessoramento Superiores - DAS 6

+ **D – Qual a URL onde é possível fazer o download dos arquivos do CPGF?**<br>
📝 https://www.portaltransparencia.gov.br/download-de-dados/cpgf

+ **E – Qual a URL da paǵina com a descrição dos campos (ou dicionário de dados) da CPGF?**<br>
📝 https://www.portaldatransparencia.gov.br/pagina-interna/603393-dicionario-de-dados-cpgf

+ **F – É possível identificar o nome e o documento do portador do CPGF, em todas as movimentações ou há movimentações onde não é possível identificar o portador?**<br>
📝 Não é possível identificar o portador nas movimentações em que o perfil consta SIGILOSO.

+ **G – É possível identificar o Órgão do portador do CPGF?**<br>
📝 Sim é possível identificar.

+ **H - Qual o nome do Órgão cujo código é 20402?**<br>
📝 20402 ‑ Agência Espacial Brasileira

+ **I - É possível identificar o Nome e Documento (CNPJ) dos favorecidos pela utilização do CPGF?**<br>
📝 Sim, essa informação consta na coluna CNPJ OU CPF FAVORECIDO

+ **J – É possível identificar a data e o valor das movimentações financeiras do CPGF, em todas as movimentações? Ou há movimentações onde não é possível identificar as datas e
ou valores?**<br>
📝 Não é possível identificar a data nas movimentações SIGILOSAS, porém o valor é registrado em todas as movimentações.

>  **As perguntas e respostas citadas abaixo, também poderão ser visualizadas no endereço de URL: http://162.214.187.112/~desafioaml/aml **

+ **K (código) – Qual a soma total das movimentações utilizando o CPGF?**<br> 
📝 R$ 5.619.007,95

+ **L (código) – Qual a soma das movimentações sigilosas?**<br>
📝 R$ 3.108.731,15

+ **M (código) – Qual o Órgão que mais realizou movimentações sigilosas no período e qual o valor (soma)**<br>
📝 Presidência da República: R$ 1.699.751,04

+ **N (código) – Qual o nome do portador que mais realizou saques no período? Qual a soma dos saques realizada por ele? Qual o nome do Órgão desse portador?**<br>
📝 Instituto Chico Mendes de Conservação da Biodiversidade - Rafael Fereira Costa: R$ 24.520,00

+ **O (código) – Qual o nome do favorecido que mais recebeu compras realizadas utilizando o CPGF?**<br>
📝 MERCADOPAGO.COM REPRESENTACOES LTDA.: R$ 60.694,21

+ **Descreva qual a abordagem utilizada para desenvolver o código para os ítens de K a O.**<br>
📝 Foram elaboradas algumas atividades para responder as perguntas de K a O.<br>
a) Analisar colunas, formatação e registro da planilha CPGF - 10/2021;<br>
b) Com base no dicionário de dados da CPGF entender o que é cada informação;<br>
c) Criar um front-end para (visualização das respostas/ upload da planilha CPGF / Gerenciamento do Upload CPGF;<br>
d) Programar em PHP 7, códigos para telas de back-end e front-end.<br>
e) Publicar o projeto em um servidor de teste apenas para visualização do resultado final<br><br> 

O resultado final é a resposta das perguntas apresentados em tela, com a possibilidade de inserir e gerenciar novas planilhas de CPGF
