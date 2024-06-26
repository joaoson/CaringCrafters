<!DOCTYPE html>
<html lang="pt-BR">
<?php session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./style/signIn.css">
    <link rel="stylesheet" href="./style/setup.css">
    <!--<script src="./assets/scripts/signincep.js"></script>-->
</head>
<body id="body">
      <div class="signin pt-5">
        <h1>Cadastre-se</h1>
      </div>

      <div class="radioButtons" id="radioButtons">
        <input type="radio" id="volunteer_radio" name="user_type" value="volunteer" onclick="toggleForm('volunteer')">
        <label for="volunteer_radio">
          <div class="card container justify-content-between align-items-center">
            <span class="material-symbols-outlined py-3">
            person_raised_hand
            </span>
            <h2 class="card-title">Voluntário</h2>
        </div>
        </label>
        <input type="radio" id="institution_radio" name="user_type" value="institution" onclick="toggleForm('institution')">
        <label for="institution_radio">
          <div class="card container d-flex flex-column justify-content-between align-items-center">
            <span class="material-symbols-outlined py-3">
            family_home
            </span>
            <h2 class="card-title">Instituição</h2>
          </div></label>
      </div>

      <div id="volunteer" class="d-none content container container-fluid">
        <form method="POST" id="volunteerForm" class="d-flex flex-column" action="./banco_de_dados/signinuser_php.php" enctype="multipart/form-data">
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="name"><strong>Informe seu nome:<span class="requir">*</span></strong></label>
              <input required value=" <?php echo isset($_SESSION['nomeU']) ? $_SESSION['nomeU'] : ""; ?>" data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="name" name="nameU">
              <div class="name"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="username"><strong>Informe seu sobrenome:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['sobrenomeU']) ? $_SESSION['sobrenomeU'] : ""; ?>" data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="surname" name="surnameU">
              <div class="surname"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="nationality"><strong>Informe sua nacionalidade:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['nacionalidadeU']) ? $_SESSION['nacionalidadeU'] : ""; ?>" data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="nationality" name="nationalityU">
              <div class="nationality"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="cpf"><strong>Informe seu CPF:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['cpfU']) ? $_SESSION['cpfU'] : ""; ?>" data-type="cpf" placeholder="000.000.000-00 ou 00000000000" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="cpf" name="cpfU">
              <div class="cpf"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="email"><strong>Informe seu e-mail:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['emailU']) ? $_SESSION['emailU'] : ""; ?>" data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="email" name="emailU">
              <div class="email"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="phonenumber"><strong>Informe seu número de telefone:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['numeroU']) ?$_SESSION['numeroU'] : ""; ?>" data-type="number" placeholder="Somente números..." class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="phonenumber" name="phonenumberU">
              <div class="phonenumber"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="cep"><strong>Informe seu CEP:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['cepU']) ?$_SESSION['cepU'] : ""; ?>" data-type="cep" placeholder="00000-000 ou 00000000" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="cep" name="cepU">
              <div class="cep"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="city"><strong>Informe sua cidade:<span class="requir">*</span></strong></label>
              <input value="<?php echo isset($_SESSION['cidadeU']) ? $_SESSION['cidadeU'] : ""; ?>" data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="city" name="cityU">
              <div class="city"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="birthdate"><strong>Informe sua data de nascimento:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['dataNascimentoU'])?$_SESSION['dataNascimentoU']:""; ?>" data-type="dateOfBirth" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="birthdate" name="birthdateU">
                <div class="birthdate"></div>
              </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="gender"><strong>Informe seu gênero:</strong></label>
                <select class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" id="gender" name="genderU">
                  <option <?php echo (isset($_SESSION['generoU'])&&$_SESSION['generoU']=="Masculino") ?"selected": ""; ?> value="Masculino">Masculino</option>
                  <option <?php echo (isset($_SESSION['generoU'])&&$_SESSION['generoU']=="Feminino") ?"selected": ""; ?>      value="Feminino">Feminino</option>
                  <option <?php echo (isset($_SESSION['generoU'])&&$_SESSION['generoU']=="Outro") ?"selected": ""; ?> value="Outro">Outro</option>
                </select>
              </div>
            </div>

            <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="maritalstatus"><strong>Informe seu estado civil:</strong></label>
                <select class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" id="maritalstatus" name="martialstatusU">
                  <option <?php echo (isset($_SESSION['estadoCivilU'])&&$_SESSION['estadoCivilU']=="Solteiro(a)") ?"selected": ""; ?> value="Solteiro(a)">Solteiro(a)</option>
                  <option <?php echo (isset($_SESSION['estadoCivilU'])&&$_SESSION['estadoCivilU']=="Casado(a)") ?"selected": ""; ?>  value="Casado(a)">Casado(a)</option>
                  <option <?php echo (isset($_SESSION['estadoCivilU'])&&$_SESSION['estadoCivilU']=="Divorciado(a)") ?"selected": ""; ?>  value="Divorciado(a)">Divorciado(a)</option>
                  <option <?php echo (isset($_SESSION['estadoCivilU'])&&$_SESSION['estadoCivilU']=="Viúvo(a)") ?"selected": ""; ?>  value="Viúvo(a)">Viúvo(a)</option>
                </select>
              </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="education"><strong>Informe seu nível de educação:</strong></label>
                <select class="col-12" id="education" name="educationU">
                  <option <?php echo (isset($_SESSION['educacaoU'])&&$_SESSION['educacaoU']=="Ensino médio") ?"selected": ""; ?> value="Ensino médio">Ensino médio</option>
                  <option <?php echo (isset($_SESSION['educacaoU'])&&$_SESSION['educacaoU']=="Faculdade") ?"selected": ""; ?> value="Faculdade">Faculdade</option>
                  <option <?php echo (isset($_SESSION['educacaoU'])&&$_SESSION['educacaoU']=="Especialização") ?"selected": ""; ?> value="Especialização">Especialização</option>
                  <option <?php echo (isset($_SESSION['educacaoU'])&&$_SESSION['educacaoU']=="Mestrado") ?"selected": ""; ?> value="Mestrado">Mestrado</option>
                  <option <?php echo (isset($_SESSION['educacaoU'])&&$_SESSION['educacaoU']=="Doutorado") ?"selected": ""; ?> value="Doutorado">Doutorado</option>
                </select>
              </div>
            </div>

            <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12 mt-2">
                <label for="occupation"><strong>Informe sua ocupação:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['ocupacaoU']) ? $_SESSION['ocupacaoU'] : ""; ?>" data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="occupation" name="occupationU">
                <div class="occupation"></div>
              </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12 mt-2">
                  <label for="Imagem"><strong>Insira uma foto de perfil:</strong></label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="16777215" />
                  <input type="file" id="Imagem" name="Imagem" accept="imagem/*" onchange="validaImagem(this);"></label>
                </div>
            </div>
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-12">
                <label for="volunteering_experience"><strong>Gostaria de contar um pouco sobre você?</strong></label>
                <textarea class="form-control" id="volunteering_experience" rows="4" name="volunteering_experienceU"><?php echo isset($_SESSION['experienciaU']) ? $_SESSION['experienciaU'] : ""; ?></textarea>
              </div>
            </div>
            <div class="d-flex flex-row col-12">
            <div class="d-flex flex-column col-6">
              <label for="areas_of_interest"><strong>Áreas de interesse:</strong></label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest1" value="Educação" name="educationarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest1" style="margin-top: 4px;">Educação</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest2" value="Meio Ambiente" name="environmentarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest2" style="margin-top: 4px;">Meio Ambiente</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest3" value="Saúde" name="healtharea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest3" style="margin-top: 4px;">Saúde</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest4" value="Animais" name="animalarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest4" style="margin-top: 4px;">Animais</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest5" value="Idosos" name="elderarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest5" style="margin-top: 4px;">Idosos</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest6" value="Crianças" name="childrenarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest6" style="margin-top: 4px;">Crianças</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest7" value="Alimentação" name="foodarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest7" style="margin-top: 4px;">Alimentação</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest8" value="Esporte e Recreação" name="sportsarea" style="margin-right: 10px;">
                <label class="form-check-label" for="interest8" style="margin-top: 4px;">Esporte e Recreação</label>
              </div>
              <!-- Adicionar mais depois -->
            </div>
          </div>



            <label for="pass1"><strong>Crie uma senha:<span class="requir">*</span></strong></label>
            <input data-type="password" type="password" id="pass1" name="pass1U">
            <div class="pass1"></div>
            <label for="pass2"><strong>Confirme sua senha:<span class="requir">*</span></strong></label>
            <input data-type="repeatPassword" type="password" id="pass2" name="pass2U">
            <div class="pass2"></div>
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-6">
                <label for="accept_terms"><strong>Você aceita os nossos <a href="terms.php" target="__blank" style="color: #07857A">Termos e Condições</a> de uso?</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms" style="margin-right: 10px;">
                  <label class="form-check-label" for="accept_terms" style="margin-top: 4px;">Sim, aceito.</label>
                </div>
              </div>
            </div>
            <input class="submit btn btn-success" type="submit" value="Cadastre-se" name="submitU">

        </form>
      </div>

      <div id="institution" class="d-none content container container-fluid">
    <form method="POST" id="institutionForm" class="d-flex flex-column" action="./banco_de_dados/signininstitution_php.php" enctype="multipart/form-data">
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_email"><strong>Informe seu e-mail:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['emailI']) ? $_SESSION['emailI'] : ""; ?>" data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="institution_email" name="emailI">
                <div class="institution_email"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_phonenumber"><strong>Informe seu telefone:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['numeroI']) ? $_SESSION['numeroI'] : ""; ?>" data-type="number" placeholder="Somente números..." class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_phonenumber" name="phonenumberI">
                <div class="institution_phonenumber"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_cep"><strong>Informe seu CEP:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['cepI']) ? $_SESSION['cepI'] : ""; ?>" data-type="cep" placeholder="00000-000 ou 00000000" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_cep" name="cepI">
                <div class="institution_cep"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_city"><strong>Informe sua cidade:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['cidadeI']) ? $_SESSION['cidadeI'] : ""; ?>" data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_city" name="cityI">
                <div class="institution_city"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_social_reasoning"><strong>Razão Social:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['razaoI']) ? $_SESSION['razaoI'] : ""; ?>" data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_social_reasoning" name="reasonI">
                <div class="institution_social_reasoning"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_fantasy_name"><strong>Nome Fantasia:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['nameI']) ? $_SESSION['nameI'] : ""; ?>" data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_fantasy_name" name="nameI">
                <div class="institution_fantasy_name"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_cnpj"><strong>CNPJ:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['cnpjI']) ? $_SESSION['cnpjI'] : ""; ?>" data-type="cnpj" placeholder="00.000.000/0000-00" class="col-xl-11 co2-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_cnpj" name="cnpjI">
                <div class="institution_cnpj"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                 <label for="Imagem"><strong>Insira uma foto de perfil:</strong></label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="16777215" />
                  <input type="file" id="Imagem" name="Imagem" accept="imagem/*" onchange="validaImagem(this);"></label>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="founding_date"><strong>Data de fundação:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['dataI']) ? $_SESSION['dataI'] : ""; ?>" data-type="date" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="founding_date" name="dateI">
                <div class="founding_date"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="social_capital"><strong>Capital Social:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['socialI']) ? $_SESSION['socialI'] : ""; ?>" data-type="number" placeholder="Somente números..." class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="number" id="social_capital" name="socialI">
                <div class="social_capital"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="administrator_name"><strong>Nome do administrador:<span class="requir">*</span></strong></label>
                <input value="<?php echo isset($_SESSION['nomeAdmin']) ? $_SESSION['nomeAdmin'] : ""; ?>" data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="administrator_name" name="adminNameI">
                <div class="administrator_name"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="working_hours"><strong>Horário de funcionamento:</strong><span class="requir">*</span></label>
                <div class="d-flex gap-3">
                  <div class="align-item-center">
                    <label for="open_time"><strong>Abertura: </strong></label>
                    <input required value="<?php echo isset($_SESSION['horaAbertura']) ? $_SESSION['horaAbertura'] : ""; ?>" type="time" id="appt" name="open_time" />
                  </div>
                  <div class="align-item-center">
                    <label for="close_time"><strong>Fechamento: </strong></label>
                    <input required value="<?php echo isset($_SESSION['horaFechamento']) ? $_SESSION['horaFechamento'] : ""; ?>" type="time" id="appt2" name="close_time" />
                  </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row col-12">
          <div class="d-flex flex-column col-12">
            <label for="aboutI"><strong>Gostaria de contar um pouco sobre a instituição?</strong></label>
            <textarea class="form-control" id="aboutI" rows="4" name="aboutI"><?php echo isset($_SESSION['aboutI']) ? $_SESSION['aboutI'] : ""; ?></textarea>
          </div>
        </div>
        <div class="d-flex flex-row col-12">
            <div class="d-flex flex-column col-12">
                <label for="volunteering_areas"><strong>Áreas de atuação:</strong></label>

                <!-- deixar as mesmas que no dos voluntários -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="teaching" id="volunteering_area_teaching" name="educationI" style="margin-right: 10px;">
                    <label class="form-check-label" for="volunteering_area_teaching" style="margin-top: 4px;">Educação</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="mentoring" id="volunteering_area_mentoring" name="mentoringI" style="margin-right: 10px;">
                    <label class="form-check-label" for="volunteering_area_mentoring" style="margin-top: 4px;">Mentoria</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="counseling" id="volunteering_area_counseling" name="counselingI" style="margin-right: 10px;">
                    <label class="form-check-label" for="volunteering_area_counseling" style="margin-top: 4px;">Aconselhamento</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="administration" id="volunteering_area_administration" name="administrationI" style="margin-right: 10px;">
                    <label class="form-check-label" for="volunteering_area_administration" style="margin-top: 4px;">Administração</label>
                </div>
                <!-- Add more checkboxes as needed -->
            </div>
        </div>
            <label for="pass3"><strong>Crie uma senha:<span class="requir">*</span></strong></label>
            <input data-type="password" type="password" id="pass3" name="pass1I">
            <div class="pass3"></div>
            <label for="pass4"><strong>Confirme sua senha:<span class="requir">*</span></strong></label>
            <input data-type="repeatPassword" type="password" id="pass4" name="pass2I">
            <div class="pass4"></div>

            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-6">
                <label for="accept_terms"><strong>Você aceita os nossos <a href="terms.php" target="__blank" style="color: #07857A">Termos e Condições</a> de uso?</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms_institution" style="margin-right: 10px;">
                  <label class="form-check-label" for="accept_terms_institution" style="margin-top: 4px;">Sim, aceito.</label>
                </div>
              </div>
            </div>
            <input class="submit btn btn-success" type="submit" value="Cadastre-se" name="submitI">
        </div>
      <?php include("./components/footer.php")?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://unpkg.com/imask"></script>
      <script src="./assets/scripts/signinViaCep.js"></script>
      <script src="./assets/scripts/signin.js"></script>
      <?php
  if (isset($_SESSION['typeForm'])) {
    if ($_SESSION['typeForm']=="user") {
      echo "<script>toggleFormPHP('volunteer')</script>";
      if($_SESSION['errorType'] =="cpf"){
        echo "<script>cpfAlreadyUsed()</script>";
      }else{
        echo "<script>emailAlreadyUsed()</script>";
      }
      unset($_SESSION['typeForm']);
      unset($_SESSION['errorType']);
      unset($_SESSION['nomeU']);
      unset($_SESSION['sobrenomeU']);
      unset($_SESSION['cpfU']);
      unset($_SESSION['emailU']);
      unset($_SESSION['numeroU']);
      unset($_SESSION['cepU']);
      unset($_SESSION['cidadeU']);
      unset($_SESSION['dataNascimentoU']);
      unset($_SESSION['generoU']);
      unset($_SESSION['estadoCivilU']);
      unset($_SESSION['educacaoU']);
      unset($_SESSION['nacionalidadeU']);
      unset($_SESSION['ocupacaoU']);
      unset($_SESSION['experienciaU']);
      unset($_SESSION['pass1U']);
    }
    else{
      echo "<script>toggleFormPHP('institution')</script>";
      if($_SESSION['errorType'] =="cnpj"){
        echo "<script>cnpjAlreadyUsed()</script>";
      }else{
        echo "<script>emailAlreadyUsed()</script>";
      }
      unset($_SESSION['errorType']);
      unset($_SESSION['typeForm']);
      unset($_SESSION['emailI']);
      unset($_SESSION['numeroI']);
      unset($_SESSION['cepI']);
      unset($_SESSION['cidadeI']);
      unset($_SESSION['razaoI']);
      unset($_SESSION['nameI']);
      unset($_SESSION['cnpjI']);
      unset($_SESSION['dataI']);
      unset($_SESSION['socialI']);
      unset($_SESSION['nomeAdmin']);
      unset($_SESSION['horaAbertura']);
      unset($_SESSION['horaFechamento']);
      unset($_SESSION['administracaoI']);
      unset($_SESSION['pass1I']);
      unset($_SESSION['aboutI']);

    }

  }

?>
</body>
</html>