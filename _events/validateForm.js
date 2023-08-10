function validateForm(form) {
    var lineBreaker = "</br>";
    var errorMsg = "</br></br>";

    if (form.getValue('nome') == null || form.getValue('nome').trim() == ''){
        errorMsg += "O campo 'Nome Completo *' é obrigatório!" + lineBreaker;
    }
    if (form.getValue('email') == null || form.getValue('email').trim() == ''){
        errorMsg += "O campo 'E-mail *' é obrigatório!" + lineBreaker;
    }
    if (form.getValue('assunto') == null || form.getValue('assunto').trim() == ''){
        errorMsg += "O campo 'Assunto *' é obrigatório!" + lineBreaker;
    }
    if (form.getValue('mensagem') == null || form.getValue('mensagem').trim() == ''){
        errorMsg += "O campo 'Mensagem *' é obrigatório!" + lineBreaker;
    }
    if (errorMsg != "</br></br>") {
        throw errorMsg;
    }
}