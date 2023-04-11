<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar contato</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="app/View/styles/style.css" />
  </head>

  <body>
    <header>
        <div>
            <img
              src="app/View/assets/logo_alphacode.png"
              alt="Logo Alphacode"
              class="logo"
            />
            <h2>Editar contato</h2>
        </div>
      <a href="/" class="voltar">Voltar</a>
    </header>
    <main>
      <form method="post" action="/salvar">
        <input type="hidden" value="<?= $model->id ?>" name="id">
        <div class="row">
          <div class="mb-3 fieldset col">
            <input
              type="text"
              class="form-control"
              id="inputNome"
              name="inputNome"
              value="<?= $model->nome?>"
              required
            />
            <label for="inputNome" class="form-label">Nome completo</label>
          </div>
          <div class="mb-3 fieldset col">
            <input
              type="text"
              class="form-control"
              id="inputDate"
              name="inputDate"
              value="<?= $model->nascimento?>"
              onfocus="(this.type = 'date')"
              required
            />
            <label for="inputDate" class="form-label">Data de nascimento</label>
          </div>
        </div>
        <div class="row">
          <div class="mb-3 fieldset col">
            <input
              type="email"
              class="form-control"
              id="inputEmail"
              name="inputEmail"
              value="<?= $model->email?>"
              required
            />
            <label for="inputEmail" class="form-label">E-mail</label>
          </div>
          <div class="mb-3 fieldset col">
            <input
              type="text"
              class="form-control"
              id="inputProfissao"
              name="inputProfissao"
              value="<?= $model->profissao?>"
              required
            />
            <label for="inputProfissao" class="form-label">Profissão</label>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 fieldset col">
            <input
              type="tel"
              class="form-control"
              id="inputTelefone"
              name="inputTelefone"
              value="<?= $model->telefone?>"
              maxlength="15" 
              onkeyup="handlePhone(event)"
            />
            <label for="inputTelefone" class="form-label"
              >Telefone para contato</label
            >
          </div>
          <div class="mb-3 fieldset col">
            <input
              type="tel"
              class="form-control"
              id="inputCelular"
              name="inputCelular"
              value="<?= $model->celular?>"
              maxlength="15" 
              onkeyup="handlePhone(event)"
              required
            />
            <label for="inputCelular" class="form-label"
              >Celular para contato</label
            >
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="checkWhatsapp"
                name="checkWhatsapp"
                value="<?= $model->whatsapp?>"
              />
              <label class="form-check-label" for="checkWhatsapp"
                >Número de celular possui Whatsapp</label
              >
            </div>
          </div>
          <div class="col">
            <div class="mb-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="checkEmail"
                name="checkEmail"
                value="<?= $model->notificacoes_email?>"
              />
              <label class="form-check-label" for="checkEmail"
                >Enviar notificações por E-mail</label
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="mb-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="checkSms"
                name="checkSms"
                value="<?= $model->notificacoes_sms?>"
              />
              <label class="form-check-label" for="checkSms"
                >Enviar notificações por SMS
              </label>
            </div>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary btn-lg">
              Salvar Alterações
            </button>
            
          </div>
        </div>
      </form>

      </section>
    </main>
    <footer>
      <p>Termos | Políticas</p>
      <div class="copyright">
        <p>
          © Copyright 2022 | Desenvolvido por
          <img
            src="app/View/assets/logo_rodape_alphacode.png"
            alt="Logo Alphacode"
            class="logo-rodape"
          />
        </p>
      </div>
      <p>© Alphacode IT Solutions 2022</p>
    </footer>
    <script src="app/View/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
