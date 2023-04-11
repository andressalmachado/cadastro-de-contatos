<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de contatos</title>
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
        <h2>Cadastro de contatos</h2>
      </div>
    </header>
    <main>
      <form method="post" action="/salvar">
        <div class="row">
          <div class="mb-3 fieldset col">
            <input
              type="text"
              class="form-control"
              id="inputNome"
              name="inputNome"
              placeholder="Ex.: Letícia Pacheco dos Santos"
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
              placeholder="Ex.: 03/10/2003"
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
              placeholder="Ex.: leticia@gmail.com"
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
              placeholder="Ex.: Desenvolvedora Web"
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
              placeholder="Ex.: (11) 4033-2019"
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
              placeholder="Ex.: (11) 98493-2039"
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
              />
              <label class="form-check-label" for="checkSms"
                >Enviar notificações por SMS
              </label>
            </div>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-primary btn-lg">
              Cadastrar Contato
            </button>
          </div>
        </div>
      </form>

      <hr>

      <section>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Data de nascimento</th>
              <th scope="col">E-mail</th>
              <th scope="col">Celular para contato</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($model->linhas as $item): ?>
            <tr>
              <td><?= $item->nome ?></td>
              <td><?= $item->nascimento ?></td>
              <td><?= $item->email ?></td>
              <td><?= $item->celular ?></td>
              <td>
                <a href="/editar?id=<?= $item->id?>">
                  <img src="app/View/assets/editar.png" alt="Ícone editar" />
                </a>
                <a href="/delete?id=<?= $item->id?>">
                  <img src="app/View/assets/excluir.png" alt="Ícone excluir" />
                </a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
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
