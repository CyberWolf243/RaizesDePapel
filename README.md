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
	
	Paginas
	
	-Retirar o Cliente
	-Apagar Todos os rastros que estao como cliente e mudar para fornecedor
