-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.3.0.5037
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Copiando dados para a tabela stylesheets_intranet.administrador: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` (`administrador_id`, `administrador_email`, `administrador_senha`, `administrador_ativo`, `administrador_nome`) VALUES
	(1, 'nandorodpires@gmail.com', 'c42e3273c1a653caac79188efa0349a9', 1, 'Fernando Rodrigues');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;

-- Copiando dados para a tabela stylesheets_intranet.cliente: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cliente_id`, `cliente_tipo`, `cliente_nome`, `cliente_empresa`, `cliente_email`, `cliente_telefone`, `cliente_celular`, `cliente_endereco`, `cliente_numero`, `cliente_complemento`, `cliente_bairro`, `cliente_cidade`, `cliente_estado`, `cliente_ativo`, `cliente_pre`) VALUES
	(1, 'PF', 'Edno', 'Autônomo', 'edno.mari@gmail.com', NULL, '(31)98615-8716', NULL, NULL, NULL, NULL, 'Santa Luzia', 'MG', 1, 0),
	(3, 'PJ', 'Carlos Matos', 'Layout', 'contato@lyt.com.br', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
	(4, 'PJ', 'José Luiz', 'Olyva Digital', 'contato@olyva.com.br', '(31) 3261-6792', '(31) 99612-1118', NULL, NULL, NULL, NULL, 'Belo Horizonte', 'MG', 1, 0);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando dados para a tabela stylesheets_intranet.estado: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` (`estado_id`, `estado_nome`, `estado_sigla`, `estado_ativo`) VALUES
	(1, 'Acre', 'AC', 1),
	(2, 'Alagoas', 'AL', 1),
	(3, 'Amapá ', 'AP', 1),
	(4, 'Amazonas ', 'AM', 1),
	(5, 'Bahia', 'BA', 1),
	(6, 'Ceará', 'CE', 1),
	(7, 'Distrito Federal', 'DF', 1),
	(8, 'Espírito Santo', 'ES', 1),
	(9, 'Goiás', 'GO', 1),
	(10, 'Maranhão', 'MA', 1),
	(11, 'Mato Grosso', 'MT', 1),
	(12, 'Mato Grosso do Sul', 'MS', 1),
	(13, 'Minas Gerais', 'MG', 1),
	(14, 'Pará', 'PA', 1),
	(15, 'Paraíba', 'PB', 1),
	(16, 'Paraná', 'PR', 1),
	(17, 'Pernambuco', 'PE', 1),
	(18, 'Piauí', 'PI', 1),
	(19, 'Rio de Janeiro', 'RJ', 1),
	(20, 'Rio Grande do Norte', 'RN', 1),
	(21, 'Rio Grande do Sul', 'RS', 1),
	(22, 'Rondônia', 'RO', 1),
	(23, 'Roraima', 'RR', 1),
	(24, 'Santa Catarina', 'SC', 1),
	(25, 'São Paulo', 'SP', 1),
	(26, 'Sergipe', 'SE', 1),
	(27, 'Tocantins', 'TO', 1);
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;

-- Copiando dados para a tabela stylesheets_intranet.projeto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `projeto` DISABLE KEYS */;
/*!40000 ALTER TABLE `projeto` ENABLE KEYS */;

-- Copiando dados para a tabela stylesheets_intranet.proposta: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proposta` DISABLE KEYS */;
INSERT INTO `proposta` (`proposta_id`, `tipo_servico_id`, `proposta_numero`, `proposta_horas`, `proposta_valor`, `proposta_status`, `cliente_id`, `proposta_data`, `proposta_vencimento`) VALUES
	(53, 2, '053/16', 60, 700, 'Aguardando resposta', 1, '2016-01-29', '2016-02-13'),
	(54, 1, '054/16', 230, 7544, 'Aguardando resposta', 3, '2016-02-12', '2016-02-27');
/*!40000 ALTER TABLE `proposta` ENABLE KEYS */;

-- Copiando dados para a tabela stylesheets_intranet.site_menu: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `site_menu` DISABLE KEYS */;
INSERT INTO `site_menu` (`site_menu_id`, `site_menu_module`, `site_menu_controller`, `site_menu_action`, `site_menu_label`, `site_menu_ordem`, `site_menu_ativo`) VALUES
	(1, 'site', 'dashboard', 'index', 'Dashboard', 1, 1),
	(2, 'site', 'cliente', 'index', 'Clientes', 2, 1),
	(3, 'site', 'proposta', 'index', 'Propostas', 3, 1),
	(4, 'site', 'auth', 'logout', 'SAIR', 5, 1),
	(5, 'site', 'configuracoes', 'index', 'Configs', 4, 1);
/*!40000 ALTER TABLE `site_menu` ENABLE KEYS */;

-- Copiando dados para a tabela stylesheets_intranet.tipo_servico: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_servico` DISABLE KEYS */;
INSERT INTO `tipo_servico` (`tipo_servico_id`, `tipo_servico_nome`, `tipo_servico_ativo`) VALUES
	(1, 'Sistema', 1),
	(2, 'Site', 1),
	(3, 'Hospedagem', 1),
	(4, 'Loja Virtual', 1);
/*!40000 ALTER TABLE `tipo_servico` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
