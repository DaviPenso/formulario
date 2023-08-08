function validateForm(form){
    var lineBreaker = "</br>";
    var errorMsg = "</br></br>";

    if (form.getValue('nome_cliente') == null || form.getValue('nome_cliente').trim() == ''){
        errorMsg += "O campo 'Nome Completo *' é obrigatório!" + lineBreaker;
    }
    if (form.getValue('email_cliente') == null || form.getValue('email_cliente').trim() == ''){
        errorMsg += "O campo 'E-mail *' é obrigatório!" + lineBreaker;
    }
    if (form.getValue('assunto_cliente') == null || form.getValue('assunto_cliente').trim() == ''){
        errorMsg += "O campo 'Assunto *' é obrigatório!" + lineBreaker;
    }
    if (form.getValue('mensagem_cliente') == null || form.getValue('mensagem_cliente').trim() == ''){
        errorMsg += "O campo 'Mensagem *' é obrigatório!" + lineBreaker;
    }
    if (errorMsg != "</br></br>") {
        throw errorMsg;
    }
}