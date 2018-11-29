# RaizesDePapel

# --Anotaçoes:
alterar todos os nomes de variaveis e inserts
alterar nomes das pastas


-- selec para fornecedores
SELECT ve.id_venda,
		ve.dataCompra,
		ve.id_cliente,
		pro.nome,
        pro.preco,
        pro.descricao
	from vendas  as ve 
	inner join produtos as pro
	on ve.id_produto=pro.id_produto
	and ve.id_venda='$idvenda'

	
	
	
	#f8f8d9 - bege
	#337ab7 - azul
	
	
	
	
	-------------------------------------------------------------------------------------------
	
	MENU
	-gestao de produtos -> gerenciamento de produtos
	- pessoas -> pessoas
	- vendas -> vendas
	
	Fornecedor
	-adicionar cnpj
	
	
	Venda de produtos
	
	-selecionar cliente vai mudar para selecionar funcionario
	
	
