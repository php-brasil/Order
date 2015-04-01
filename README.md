# Domain driven purchase service design

## Nosso vocabulário (WIP - traduzir para inglês)
- **Produto**: É sempre um ebook. Um produto possui várias edições, todo cliente tem acesso a última independente da edição que comprou.
- **Entrega**: O produto é entregue para o cliente via e-mail. Com um link único pra ele, com o conteúdo sem DRM.
- **Cliente**: Um brasileiro que quer comprar um ou mais produtos.
- **Compra**: Um cliente escolheu um ou mais produtos e decidiu uma forma de pagamento. :eyes:
- **Venda**: A empresa aceitou a compra de um cliente e entregou o produto. :eyes:
- **Pagamento**: Como o cliente escolheu pagar por uma compra.
  - **Parcelamento**: Uma compra pode ser dividida em até 3x sem juros quando o total da compra é maior que R$100.
  - **Adiquirente**: Empresa que faz a transação da forma de pagamento entre o cliente e a instituição bancária.
  - **Cartão de Crédito**: A adiquirente informará o sucesso do pagamento nessa forma. Após a venda pagar a taxa de operação pra adiquirente.
  - **Boleto**: Gerado por nós, com registro em carteira no banco. Vencimento é hoje + 5 dias úteis. Após o vencimento a compra é cancelada.
- **Pré-provação de compra**: Uma compra é pré-aprovada se o cliente tem como receber o produto (e-mail válido).
- **Análise da compra**: Checagem da forma de pagamento e definição da Análise de Risco. Gera uma taxa de operação.
- **Análise de Risco**: 0 (zero) quando o cliente provavelmente irá provocar uma fraude. 1 (um) quando o cliente provavelmente fez uma compra legítima.
- **Fraude**: O cliente não vai pagar pelo produto. :eyes:
- **Compra legítima**: A probabilidade do cliente não pagar é extremamente baixa. Uma compra legítima se tornará uma venda. :eyes:
- **Compra cancelada**: Uma compra que não se tornou venda por algum motivo.
- **Taxa de operação**: Uma valor monetário pago a fornecedores por uma venda ou compra.
