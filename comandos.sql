select u.* from usuario as u
inner join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- C create (1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES ("Fulano de Tal","fulano@ciclano.com.br",false, false)

-- C create (1 usuario)
INSERT INTO usuario (nome, email, status, cadastro_preenchido)
VALUES (
    "Fulano de Tal","fulano@ciclano.com.br",false, false,
    "Beltrano de Tal", "beltrano@ciclaco.com.br", false, false,
);

-- R read (todos usuarios)
select * from usuario;

-- R read Only (1 usuario)
select * from usuario WHERE id = 3;

-- U Update Only
Update usuario SET email="ariel@infoserv.com" WHERE id =1;

-- U Update Only ( 1 Usuario)
Update usuario SET status=true, cadastro_preenchido=true 
WHERE id IN (1,2);

-- D Delete (Excluir 1 usuario)
Delete FROM usuario WHERE id IN (3, 7);

-- D Delete (Excluir mais usuario)
Delete FROM usuario WHERE id IN (3, 7);

-- ALTER TABLE
ALTER TABLE usuario ADD column cadastro_preenchido bool default false;

ALTER TABLE usuario MODIFY column cadastro_preenchido bool default false;

-- excluir coluna
ALTER TABLE usuario DROP column cadastro_preenchido;

-- DATAS AUTOMATICAS

ALTER TABLE usuario DROP COLUMN criado_em;

ALTER TABLE usuario ADD column criado_em DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

-- Update usuario SET email="ariel@infoserv.com" WHERE id = 1;

ALTER TABLE usuario DROP COLUMN atualizado_em;

ALTER TABLE usuario ADD column atualizado_em_em DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;
