function toggleForm(formId) {
    var volunteerForm = document.getElementById("volunteer");
    var institutionForm = document.getElementById("institution");
    document.getElementById("radioButtons").classList.add("hidden");
    document.getElementById("foot").classList.add("footerActive");
    if (
        document.getElementById("volunteer_radio").checked &&
        formId === "volunteer"
    ) {
        volunteerForm.classList.remove("d-none");
        institutionForm.classList.add("d-none");
    } else if (
        document.getElementById("institution_radio").checked &&
        formId === "institution"
    ) {
        institutionForm.classList.remove("d-none");
        volunteerForm.classList.add("d-none");
    }
}

function validateFormVol(id) {
    let camposVol = document.getElementById(id).querySelectorAll("input");
    camposVol.forEach((element) => {
        let errorPhrase = "";
        switch (element.dataset.type) {
            case "plainText":
                isValidText(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Inserir somente letras, pelo menos três.";

                break;
            case "cpf":
                isValidCPF(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "CPF inválido. Inserir segundo um dos modelos: 000.000.000-00 ou 00000000000.";

                break;
            case "number":
                isValidNumber(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Inserir somente números.";

                break;
            case "cep":
                isValidCEP(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "CEP inválido. Inserir segundo um dos modelos: 00000-000 ou 00000000.";

                break;
            case "email":
                isValidEmail(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "E-mail inválido.";

                break;
            case "dateOfBirth":
                isValidDateOfBirth(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Você precisa ter mais de 18 anos.";

                break;
            case "password":
                isValidPassword(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "Sua senha precisa conter oito ou mais caracteres, com pelo menos uma letra maiúscula e um número.";

                break;
            case "date":
                isDateNotInFuture(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                break;
            case "repeatPassword":
                let password = document.getElementById("pass1").value;
                let result = passwordsMatch(element.value, password);
                errorPhrase = "As senhas não são iguais.";
                result
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                break;
        }

        let identifier = element.getAttribute("id");
        let divError = document.getElementsByClassName(identifier);
        if (element.classList.contains("wrong")) {
            divError[0].innerHTML = errorPhrase;
            divError[0].classList.add("WrongText");
        } else {
            divError[0].innerHTML = "";
            divError[0].classList.remove("WrongText");
        }
    });

    // Check if any required field is empty
    if (containsWrongClass("input", id)) {
        // Prevent form submission
        //alert("Please fill out all required fields.");
        return false;
    }
    // All fields are filled, allow form submission
    return true;
}

document
    .getElementById("formUpdateUser")
    .addEventListener("submit", function (event) {
        console.log("foi");
        if (!validateFormVol("formUpdateUser")) {
            // Prevent default form submission if validation fails
            event.preventDefault();
            console.log("Nao Rodei");
        } else {
            event.submit();
        }
    });

function isValidEmail(email) {
    const regex =
        /^[\w-]+(\.[\w-]+)*@[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)*(\.[a-zA-Z]{2,})$/;
    return regex.test(email);
}

function isValidNumber(input) {
    const regex = /^\d+$/;
    return regex.test(input);
}

function isValidText(input) {
    const regex = /^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ\s]{3,}$/;
    return regex.test(input);
}

function isValidCEP(cep) {
    const regex = /^(\d{5}-\d{3}|\d{2}\.\d{3}-\d{3}|\d{8})$/;
    return regex.test(cep);
}

function isValidDateOfBirth(dateOfBirth) {
    const regex = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
    console.log(dateOfBirth);
    console.log(regex.test(dateOfBirth));
    if (!regex.test(dateOfBirth)) {
        return false; // Invalid date format
    }

    const today = new Date();
    console.log(today);
    const birthDate = new Date(dateOfBirth);
    console.log(birthDate);
    let age = today.getFullYear() - birthDate.getFullYear();
    let monthDiff = today.getMonth() - birthDate.getMonth();

    if (
        monthDiff < 0 ||
        (monthDiff === 0 && today.getDate() < birthDate.getDate())
    ) {
        age--;
    }

    return age >= 18;
}

function isValidCPF(cpf) {
    const regex = /^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$/;
    return regex.test(cpf);
}

function isValidCNPJ(cnpj) {
    const regex = /^\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2}$/;
    return regex.test(cnpj);
}

function containsWrongClass(selector, id) {
    const elements = document.getElementById(id).querySelectorAll(selector);
    console.log(elements);
    for (const element of elements) {
        if (element.classList.contains("wrong")) {
            return true;
        }
    }
    return false;
}

function isValidPassword(password) {
    const regex = /^(?=.*[!@#$%^&*()-_+=|{}[\]:;<>,.?])(?=.*[A-Z]).{8,}$/;
    const regex2 = "";
    return regex.test(password) || password == regex2;
}

function passwordsMatch(password, confirmPassword) {
    return password === confirmPassword;
}

function isDateNotInFuture(dateString) {
    // Convert the input string to a Date object
    const inputDate = new Date(dateString);

    // Get the current date
    const currentDate = new Date();

    // Compare the input date with the current date
    return inputDate <= currentDate;
}

document.querySelectorAll("input").forEach((element) => {
    element.addEventListener("focusout", () => {
        let errorPhrase = "";
        console.log("oi");
        switch (element.dataset.type) {
            case "plainText":
                isValidText(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Inserir somente letras, pelo menos três.";
                break;
            case "cpf":
                isValidCPF(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "CPF inválido. Inserir segundo um dos modelos: 000.000.000-00 ou 00000000000.";
                break;
            case "number":
                isValidNumber(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Inserir somente números.";
                break;
            case "cep":
                isValidCEP(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "CEP inválido. Inserir segundo um dos modelos: 00000-000 ou 00000000.";
                break;
            case "email":
                isValidEmail(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "E-mail inválido.";
                break;
            case "dateOfBirth":
                isValidDateOfBirth(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Você precisa ter mais de 18 anos.";
                break;
            case "password":
                isValidPassword(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "Sua senha precisa conter oito ou mais caracteres, com pelo menos uma letra maiúscula e um número.";
                break;
            case "cnpj":
                isValidCNPJ(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase =
                    "CNPJ inválido. Seguir o modelo: 00.000.000/0000-00.";
                break;
            case "date":
                isDateNotInFuture(element.value)
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
                errorPhrase = "Data inválida. Insira uma data possível.";
                break;
            case "repeatPassword":
                let password = document.getElementById("pass1").value;
                let result = passwordsMatch(element.value, password);
                errorPhrase = "As senhas não são iguais.";
                result
                    ? element.classList.remove("wrong")
                    : element.classList.add("wrong");
        }
        let identifier = element.getAttribute("id");
        let divError = document.getElementsByClassName(identifier);
        if (element.classList.contains("wrong")) {
            divError[0].innerHTML = errorPhrase;
            divError[0].classList.add("WrongText");
        } else {
            divError[0].innerHTML = "";
            divError[0].classList.remove("WrongText");
        }
    });
});

function validaImagem(input) {
    var caminho = input.value;

    if (caminho) {
        var comecoCaminho =
            caminho.indexOf("\\") >= 0
                ? caminho.lastIndexOf("\\")
                : caminho.lastIndexOf("/");
        var nomeArquivo = caminho.substring(comecoCaminho);

        if (nomeArquivo.indexOf("\\") === 0 || nomeArquivo.indexOf("/") === 0) {
            nomeArquivo = nomeArquivo.substring(1);
        }

        var extensaoArquivo =
            nomeArquivo.indexOf(".") < 1 ? "" : nomeArquivo.split(".").pop();

        if (
            extensaoArquivo != "gif" &&
            extensaoArquivo != "png" &&
            extensaoArquivo != "jpg" &&
            extensaoArquivo != "jpeg"
        ) {
            input.value = "";
            alert(
                "É preciso selecionar um arquivo de imagem (gif, png, jpg ou jpeg)"
            );
        }
    } else {
        input.value = "";
        alert("Selecione um caminho de arquivo válido");
    }
    if (input.files && input.files[0]) {
        var arquivoTam = input.files[0].size / 1024 / 1024;
        if (arquivoTam < 16) {
            var reader = new FileReader();
            reader.onload = function (e) {
                console.log(e.target.result);
                console.log("achou img");
                // document
                //     .getElementById("imagemSelecionada")
                //     .setAttribute("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        } else {
            input.value = "";
            alert("O arquivo precisa ser uma imagem com menos de 16 MB");
        }
    }
}
