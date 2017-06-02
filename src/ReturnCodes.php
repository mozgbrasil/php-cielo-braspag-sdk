<?php

/**
 * Copyright © 2015 Mozg. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace Mozg\Cielo;

class ReturnCodes
{
    public $returnCodes = array(
        '00' => array(
            'definicao' => 'Transação autorizada com sucesso.',
            'mensagem'  => 'Transação autorizada com sucesso.',
            'retry'     => false,
        ),
        '000' => array(
            'definicao' => 'Transação autorizada com sucesso.',
            'mensagem'  => 'Transação autorizada com sucesso.',
            'retry'     => false,
        ),
        '01' => array(
            'definicao' => 'Transação não autorizada. Referida (suspeita de fraude) pelo banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '02' => array(
            'definicao' => 'Transação não autorizada. Referida (suspeita de fraude) pelo banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '04' => array(
            'definicao' => 'Transação não autorizada. Cartão bloqueado pelo banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '05' => array(
            'definicao' => 'Transação não autorizada. Não foi possível processar a transação. Questão relacionada a segurança, inadimplencia ou limite do portador.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '06' => array(
            'definicao' => 'Transação não autorizada. Não foi possível processar a transação. Cartão cancelado permanentemente pelo banco emissor.',
            'mensagem'  => 'Não foi possível processar a transação. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '07' => array(
            'definicao' => 'Transação não autorizada por regras do banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '08' => array(
            'definicao' => 'Transação não autorizada. Código de segurança inválido. Oriente o portador a corrigir os dados e tentar novamente.',
            'mensagem'  => 'Transação não autorizada. Dados incorretos. Reveja os dados e informe novamente.',
            'retry'     => false,
        ),
        '11' => array(
            'definicao' => 'Transação autorizada com sucesso.',
            'mensagem'  => 'Transação autorizada com sucesso.',
            'retry'     => false,
        ),
        '12' => array(
            'definicao' => 'Não foi possível processar a transação. Solicite ao portador que verifique os dados do cartão e tente novamente.',
            'mensagem'  => 'Não foi possível processar a transação. Reveja os dados informados e tente novamente. Se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '14' => array(
            'definicao' => 'Transação não autorizada. Cartão inválido. Pode ser bloqueio do cartão no banco emissor, dados incorretos ou tentativas de testes de cartão. Use o Algoritmo de Lhum (Mod 10) para evitar transações não autorizadas por esse motivo. Consulte www.cielo.com.br/desenvolvedores para implantar o Algoritmo de Lhum',
            'mensagem'  => 'Não foi possível processar a transação. reveja os dados informados e tente novamente. Se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '15' => array(
            'definicao' => 'Transação não autorizada. Banco emissor indisponível',
            'mensagem'  => 'Não foi possível processar a transação. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '21' => array(
            'definicao' => 'Não foi possível processar o cancelamento. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Não foi possível processar o cancelamento. Tente novamente mais tarde. Persistindo o erro, entrar em contato com a loja virtual.',
            'retry'     => false,
        ),
        '22' => array(
            'definicao' => 'Não foi possível processar a transação. Número de parcelas inválidas. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Não foi possível processar a transação. Valor inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'retry'     => false,
        ),
        '23' => array(
            'definicao' => 'Não foi possível processar a transação. Valor da prestação inválido. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Não foi possível processar a transação. Valor da prestação inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'retry'     => false,
        ),
        '24' => array(
            'definicao' => 'Não foi possível processar a transação. Quantidade de parcelas inválido. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Não foi possível processar a transação. Quantidade de parcelas inválido. Refazer a transação confirmando os dados informados. Persistindo o erro, entrar em contato com a loja virtual.',
            'retry'     => false,
        ),
        '25' => array(
            'definicao' => 'Não foi possível processar a transação. Solicitação de autorização não enviou o número do cartão. Se o erro persistir, verifique a comunicação entre loja virtual e Cielo.',
            'mensagem'  => 'Não foi possível processar a transação. reveja os dados informados e tente novamente. Persistindo o erro, entrar em contato com a loja virtual.',
            'retry'     => false,
        ),
        '28' => array(
            'definicao' => 'Não foi possível processar a transação. Arquivo temporariamente indisponível. Reveja a comunicação entre Loja Virtual e Cielo. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Não foi possível processar a transação. Entre com contato com a Loja Virtual.',
            'retry'     => false,
        ),
        '39' => array(
            'definicao' => 'Transação não autorizada. Erro no banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '41' => array(
            'definicao' => 'Transação não autorizada. Cartão bloqueado por perda.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '43' => array(
            'definicao' => 'Transação não autorizada. Cartão bloqueado por roubo.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '51' => array(
            'definicao' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '52' => array(
            'definicao' => 'Não foi possível processar a transação. Cartão com dígito de controle inválido.',
            'mensagem'  => 'Transação não autorizada. Reveja os dados informados e tente novamente.',
            'retry'     => false,
        ),
        '53' => array(
            'definicao' => 'Transação não permitida. Cartão poupança inválido.',
            'mensagem'  => 'Não foi possível processar a transação. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '54' => array(
            'definicao' => 'Transação não autorizada. Cartão vencido.',
            'mensagem'  => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'retry'     => false,
        ),
        '55' => array(
            'definicao' => 'Transação não autorizada. Senha inválida.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '57' => array(
            'definicao' => 'Transação não autorizada. Transação não permitida para o cartão.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '58' => array(
            'definicao' => 'Transação não permitida. Opção de pagamento inválida. Reveja se a opção de pagamento escolhida está habilitada no cadastro',
            'mensagem'  => 'Transação não autorizada. Entre em contato com sua loja virtual.',
            'retry'     => false,
        ),
        '59' => array(
            'definicao' => 'Transação não autorizada. Suspeita de fraude.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '60' => array(
            'definicao' => 'Transação não autorizada. Tente novamente. Se o erro persistir o portador deve entrar em contato com o banco emissor.',
            'mensagem'  => 'Não foi possível processar a transação. Tente novamente mais tarde. Se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '61' => array(
            'definicao' => 'Transação não autorizada. Banco emissor Visa indisponível.',
            'mensagem'  => 'Transação não autorizada. Tente novamente. Se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '62' => array(
            'definicao' => 'Transação não autorizada. Cartão restrito para uso doméstico.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '63' => array(
            'definicao' => 'Transação não autorizada. Violação de segurança.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '64' => array(
            'definicao' => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'mensagem'  => 'Transação não autorizada. Valor abaixo do mínimo exigido pelo banco emissor.',
            'retry'     => false,
        ),
        '65' => array(
            'definicao' => 'Transação não autorizada. Excedida a quantidade de transações para o cartão.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '67' => array(
            'definicao' => 'Transação não autorizada. Cartão bloqueado para compras hoje. Bloqueio pode ter ocorrido por excesso de tentativas inválidas. O cartão será desbloqueado automaticamente à meia noite.',
            'mensagem'  => 'Transação não autorizada. Cartão bloqueado temporariamente. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '70' => array(
            'definicao' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '72' => array(
            'definicao' => 'Cancelamento não efetuado. Saldo disponível para cancelamento insuficiente. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Cancelamento não efetuado. Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '74' => array(
            'definicao' => 'Transação não autorizada. A senha está vencida.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '75' => array(
            'definicao' => 'Transação não autorizada.',
            'mensagem'  => 'Sua Transação não pode ser processada. Entre em contato com o Emissor do seu cartão.',
            'retry'     => false,
        ),
        '76' => array(
            'definicao' => 'Cancelamento não efetuado. Banco emissor não localizou a transação original',
            'mensagem'  => 'Cancelamento não efetuado. Entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '77' => array(
            'definicao' => 'Cancelamento não efetuado. Não foi localizado a transação original',
            'mensagem'  => 'Cancelamento não efetuado. Entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '78' => array(
            'definicao' => 'Transação não autorizada. Cartão bloqueado primeiro uso. Solicite ao portador que desbloqueie o cartão diretamente com seu banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor e solicite o desbloqueio do cartão.',
            'retry'     => false,
        ),
        '80' => array(
            'definicao' => 'Transação não autorizada. Data da transação ou data do primeiro pagamento inválida.',
            'mensagem'  => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'retry'     => false,
        ),
        '82' => array(
            'definicao' => 'Transação não autorizada. Cartão Inválido. Solicite ao portador que reveja os dados e tente novamente.',
            'mensagem'  => 'Transação não autorizada. Refazer a transação confirmando os dados. Se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '83' => array(
            'definicao' => 'Transação não autorizada. Erro no controle de senhas',
            'mensagem'  => 'Transação não autorizada. Refazer a transação confirmando os dados. Se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '85' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'mensagem'  => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '86' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'mensagem'  => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '89' => array(
            'definicao' => 'Transação não autorizada. Erro na transação. O portador deve tentar novamente e se o erro persistir, entrar em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Erro na transação. Tente novamente e se o erro persistir, entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '90' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'mensagem'  => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '91' => array(
            'definicao' => 'Transação não autorizada. Banco emissor temporariamente indisponível.',
            'mensagem'  => 'Transação não autorizada. Banco emissor temporariamente indisponível. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        '92' => array(
            'definicao' => 'Transação não autorizada. Tempo de comunicação excedido.',
            'mensagem'  => 'Transação não autorizada. Comunicação temporariamente indisponível. Entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '93' => array(
            'definicao' => 'Transação não autorizada. Violação de regra - Possível erro no cadastro.',
            'mensagem'  => 'Sua transação não pode ser processada. Entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '96' => array(
            'definicao' => 'Não foi possível processar a transação. Falha no sistema da Cielo. Se o erro persistir, entre em contato com a Cielo.',
            'mensagem'  => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '97' => array(
            'definicao' => 'Transação não autorizada. Valor não permitido para essa transação.',
            'mensagem'  => 'Transação não autorizada. Valor não permitido para essa transação.',
            'retry'     => false,
        ),
        '98' => array(
            'definicao' => 'Transação não autorizada. Sistema do emissor sem comunicação. Se for geral, verificar SITEF, GATEWAY e/ou Conectividade.',
            'mensagem'  => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '99' => array(
            'definicao' => 'Transação não autorizada. Sistema do emissor sem comunicação. Tente mais tarde. Pode ser erro no SITEF, favor verificar !',
            'mensagem'  => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        '999' => array(
            'definicao' => 'Transação não autorizada. Sistema do emissor sem comunicação. Tente mais tarde. Pode ser erro no SITEF, favor verificar !',
            'mensagem'  => 'Sua Transação não pode ser processada, Tente novamente mais tarde. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'AA' => array(
            'definicao' => 'Tempo excedido na comunicação com o banco emissor. Oriente o portador a tentar novamente, se o erro persistir será necessário que o portador contate seu banco emissor.',
            'mensagem'  => 'Tempo excedido na sua comunicação com o banco emissor, tente novamente mais tarde. Se o erro persistir, entre em contato com seu banco.',
            'retry'     => false,
        ),
        'AC' => array(
            'definicao' => 'Transação não permitida. Cartão de débito sendo usado com crédito. Solicite ao portador que selecione a opção de pagamento Cartão de Débito.',
            'mensagem'  => 'Transação não autorizada. Tente novamente selecionando a opção de pagamento cartão de débito.',
            'retry'     => false,
        ),
        'AE' => array(
            'definicao' => 'Tempo excedido na comunicação com o banco emissor. Oriente o portador a tentar novamente, se o erro persistir será necessário que o portador contate seu banco emissor.',
            'mensagem'  => 'Tempo excedido na sua comunicação com o banco emissor, tente novamente mais tarde. Se o erro persistir, entre em contato com seu banco.',
            'retry'     => false,
        ),
        'AF' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'mensagem'  => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'AG' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'mensagem'  => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'AH' => array(
            'definicao' => 'Transação não permitida. Cartão de crédito sendo usado com débito. Solicite ao portador que selecione a opção de pagamento Cartão de Crédito.',
            'mensagem'  => 'Transação não autorizada. Tente novamente selecionando a opção de pagamento cartão de crédito.',
            'retry'     => false,
        ),
        'AI' => array(
            'definicao' => 'Transação não autorizada. Autenticação não foi realizada. O portador não concluiu a autenticação. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir, entre em contato com a Cielo informando o BIN (6 primeiros dígitos do cartão)',
            'mensagem'  => 'Transação não autorizada. Autenticação não foi realizada com sucesso. Tente novamente e informe corretamente os dados solicitado. Se o erro persistir, entre em contato com o lojista.',
            'retry'     => false,
        ),
        'AJ' => array(
            'definicao' => 'Transação não permitida. Transação de crédito ou débito em uma operação que permite apenas Private Label. Solicite ao portador que tente novamente selecionando a opção Private Label. Caso não disponibilize a opção Private Label verifique na Cielo se o seu estabelecimento permite essa operação.',
            'mensagem'  => 'Transação não permitida. Transação de crédito ou débito em uma operação que permite apenas Private Label. Tente novamente e selecione a opção Private Label. Em caso de um novo erro entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'AV' => array(
            'definicao' => 'Falha na validação dos dados da transação. Oriente o portador a rever os dados e tentar novamente.',
            'mensagem'  => 'Falha na validação dos dados. Reveja os dados informados e tente novamente.',
            'retry'     => false,
        ),
        'BD' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento.Solicite ao portador que digite novamente os dados do cartão, se o erro persistir pode haver um problema no terminal do lojista, nesse caso o lojista deve entrar em contato com a Cielo.',
            'mensagem'  => 'Transação não permitida. Informe os dados do cartão novamente. Se o erro persistir, entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'BL' => array(
            'definicao' => 'Transação não autorizada. Limite diário excedido. Solicite ao portador que entre em contato com seu banco emissor.',
            'mensagem'  => 'Transação não autorizada. Limite diário excedido. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'BM' => array(
            'definicao' => 'Transação não autorizada. Cartão inválido. Pode ser bloqueio do cartão no banco emissor ou dados incorretos. Tente usar o Algoritmo de Lhum (Mod 10) para evitar transações não autorizadas por esse motivo.',
            'mensagem'  => 'Transação não autorizada. Cartão inválido. Refaça a transação confirmando os dados informados.',
            'retry'     => false,
        ),
        'BN' => array(
            'definicao' => 'Transação não autorizada. O cartão ou a conta do portador está bloqueada. Solicite ao portador que entre em contato com seu banco emissor.',
            'mensagem'  => 'Transação não autorizada. O cartão ou a conta do portador está bloqueada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'BO' => array(
            'definicao' => 'Transação não permitida. Houve um erro no processamento. Solicite ao portador que digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco emissor.',
            'mensagem'  => 'Transação não permitida. Houve um erro no processamento. Digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco emissor.',
            'retry'     => false,
        ),
        'BP' => array(
            'definicao' => 'Transação não autorizada. Não possível processar a transação por um erro relacionado ao cartão ou conta do portador. Solicite ao portador que entre em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Não possível processar a transação por um erro relacionado ao cartão ou conta do portador. Entre em contato com o banco emissor.',
            'retry'     => false,
        ),
        'BV' => array(
            'definicao' => 'Transação não autorizada. Cartão vencido.',
            'mensagem'  => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'retry'     => false,
        ),
        'CF' => array(
            'definicao' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'retry'     => false,
        ),
        'CG' => array(
            'definicao' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'retry'     => false,
        ),
        'DA' => array(
            'definicao' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'retry'     => false,
        ),
        'DF' => array(
            'definicao' => 'Transação não permitida. Falha no cartão ou cartão inválido. Solicite ao portador que digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco',
            'mensagem'  => 'Transação não permitida. Falha no cartão ou cartão inválido. Digite novamente os dados do cartão, se o erro persistir, entre em contato com o banco',
            'retry'     => false,
        ),
        'DM' => array(
            'definicao' => 'Transação não autorizada. Limite excedido/sem saldo.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'DQ' => array(
            'definicao' => 'Transação não autorizada. Falha na validação dos dados. Solicite ao portador que entre em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Falha na validação dos dados. Entre em contato com o banco emissor.',
            'retry'     => false,
        ),
        'DS' => array(
            'definicao' => 'Transação não autorizada. Transação não permitida para o cartão.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'EB' => array(
            'definicao' => 'Transação não autorizada. Limite diário excedido. Solicite ao portador que entre em contato com seu banco emissor.',
            'mensagem'  => 'Transação não autorizada. Limite diário excedido. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'EE' => array(
            'definicao' => 'Transação não permitida. Valor da parcela inferior ao mínimo permitido. Não é permitido parcelas inferiores a R$ 5,00. Necessário rever calculo para parcelas.',
            'mensagem'  => 'Transação não permitida. O valor da parcela está abaixo do mínimo permitido. Entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'EK' => array(
            'definicao' => 'Transação não autorizada. Transação não permitida para o cartão.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'FA' => array(
            'definicao' => 'Transação não autorizada AmEx.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'FC' => array(
            'definicao' => 'Transação não autorizada. Oriente o portador a entrar em contato com o banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'FD' => array(
            'definicao' => 'Transação não autorizada por regras do banco emissor.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'FE' => array(
            'definicao' => 'Transação não autorizada. Data da transação ou data do primeiro pagamento inválida.',
            'mensagem'  => 'Transação não autorizada. Refazer a transação confirmando os dados.',
            'retry'     => false,
        ),
        'FF' => array(
            'definicao' => 'Transação de cancelamento autorizada com sucesso. ATENÇÂO: Esse retorno é para casos de cancelamentos e não para casos de autorizações.',
            'mensagem'  => 'Transação de cancelamento autorizada com sucesso',
            'retry'     => false,
        ),
        'FG' => array(
            'definicao' => 'Transação não autorizada. Oriente o portador a entrar em contato com a Central de Atendimento AmEx.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com a Central de Atendimento AmEx no telefone 08007285090',
            'retry'     => false,
        ),
        'GA' => array(
            'definicao' => 'Transação não autorizada. Referida pelo Lynx Online de forma preventiva. A Cielo entrará em contato com o lojista sobre esse caso.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com o lojista.',
            'retry'     => false,
        ),
        'HJ' => array(
            'definicao' => 'Transação não permitida. Código da operação Coban inválido.',
            'mensagem'  => 'Transação não permitida. Código da operação Coban inválido. Entre em contato com o lojista.',
            'retry'     => false,
        ),
        'IA' => array(
            'definicao' => 'Transação não permitida. Indicador da operação Coban inválido.',
            'mensagem'  => 'Transação não permitida. Indicador da operação Coban inválido. Entre em contato com o lojista.',
            'retry'     => false,
        ),
        'JB' => array(
            'definicao' => 'Transação não permitida. Indicador da operação Coban inválido.',
            'mensagem'  => 'Transação não permitida. Indicador da operação Coban inválido. Entre em contato com o lojista.',
            'retry'     => false,
        ),
        'KA' => array(
            'definicao' => 'Transação não permitida. Houve uma falha na validação dos dados. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir verifique a comunicação entre loja virtual e Cielo.',
            'mensagem'  => 'Transação não permitida. Houve uma falha na validação dos dados. reveja os dados informados e tente novamente. Se o erro persistir entre em contato com a Loja Virtual.',
            'retry'     => false,
        ),
        'KB' => array(
            'definicao' => 'Transação não permitida. Selecionado a opção incorreta. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir deve ser verificado a comunicação entre loja virtual e Cielo.',
            'mensagem'  => 'Transação não permitida. Selecionado a opção incorreta. Tente novamente. Se o erro persistir entre em contato com a Loja Virtual.',
            'retry'     => false,
        ),
        'KE' => array(
            'definicao' => 'Transação não autorizada. Falha na validação dos dados. Opção selecionada não está habilitada. Verifique as opções disponíveis para o portador.',
            'mensagem'  => 'Transação não autorizada. Falha na validação dos dados. Opção selecionada não está habilitada. Entre em contato com a loja virtual.',
            'retry'     => false,
        ),
        'N7' => array(
            'definicao' => 'Transação não autorizada. Código de segurança inválido. Oriente o portador corrigir os dados e tentar novamente.',
            'mensagem'  => 'Transação não autorizada. Reveja os dados e informe novamente.',
            'retry'     => false,
        ),
        'R1' => array(
            'definicao' => 'Transação não autorizada. Não foi possível processar a transação. Questão relacionada a segurança, inadimplencia ou limite do portador.',
            'mensagem'  => 'Transação não autorizada. Entre em contato com seu banco emissor.',
            'retry'     => false,
        ),
        'U3' => array(
            'definicao' => 'Transação não permitida. Houve uma falha na validação dos dados. Solicite ao portador que reveja os dados e tente novamente. Se o erro persistir verifique a comunicação entre loja virtual e Cielo.',
            'mensagem'  => 'Transação não permitida. Houve uma falha na validação dos dados. reveja os dados informados e tente novamente. Se o erro persistir entre em contato com a Loja Virtual.',
            'retry'     => false,
        ),
    );

}