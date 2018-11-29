SELECT ve.id_venda,
		ve.dataCompra,
		ve.id_cliente,
		pro.nome,
        pro.preco,
        pro.descricao
	from vendas  as ve 
	inner join produtos as pro
	on ve.id_produto=pro.id_produto
	and ve.id_venda=1
