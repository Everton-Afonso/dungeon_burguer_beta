select sum(preco), nome from montar_lanche
inner join ingredientes on idingredientes = ingredientes_idingredientes
inner join cadastro on idcadastro = cadastro_idcadastro;